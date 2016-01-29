<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers;

use AltThree\Validator\ValidationException;
<<<<<<< HEAD
use CachetHQ\Cachet\Commands\Subscriber\SubscribeSubscriberCommand;
use CachetHQ\Cachet\Commands\Subscriber\UnsubscribeSubscriberCommand;
use CachetHQ\Cachet\Commands\Subscriber\VerifySubscriberCommand;
=======
use CachetHQ\Cachet\Bus\Commands\Subscriber\SubscribeSubscriberCommand;
use CachetHQ\Cachet\Bus\Commands\Subscriber\UnsubscribeSubscriberCommand;
use CachetHQ\Cachet\Bus\Commands\Subscriber\VerifySubscriberCommand;
use CachetHQ\Cachet\Bus\Exceptions\Subscriber\AlreadySubscribedException;
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
use CachetHQ\Cachet\Facades\Setting;
use CachetHQ\Cachet\Models\Subscriber;
use GrahamCampbell\Binput\Facades\Binput;
use GrahamCampbell\Markdown\Facades\Markdown;
<<<<<<< HEAD
use Illuminate\Foundation\Bus\DispatchesJobs;
=======
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SubscribeController extends Controller
{
<<<<<<< HEAD
    use DispatchesJobs;

=======
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
    /**
     * Show the subscribe by email page.
     *
     * @return \Illuminate\View\View
     */
    public function showSubscribe()
    {
        return View::make('subscribe')
            ->withAboutApp(Markdown::convertToHtml(Setting::get('app_about')));
    }

    /**
     * Handle the subscribe user.
     *
     * @return \Illuminate\View\View
     */
    public function postSubscribe()
    {
<<<<<<< HEAD
        try {
            $this->dispatch(new SubscribeSubscriberCommand(Binput::get('email')));
=======
        $email = Binput::get('email');

        try {
            dispatch(new SubscribeSubscriberCommand($email));
        } catch (AlreadySubscribedException $e) {
            return Redirect::route('subscribe.subscribe')
                ->withTitle(sprintf('<strong>%s</strong> %s', trans('dashboard.notifications.whoops'), trans('cachet.subscriber.email.failure')))
                ->withErrors(trans('cachet.subscriber.email.already-subscribed', ['email' => $email]));
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
        } catch (ValidationException $e) {
            return Redirect::route('subscribe.subscribe')
                ->withInput(Binput::all())
                ->withTitle(sprintf('<strong>%s</strong> %s', trans('dashboard.notifications.whoops'), trans('cachet.subscriber.email.failure')))
                ->withErrors($e->getMessageBag());
        }

        return Redirect::route('status-page')
            ->withSuccess(sprintf('<strong>%s</strong> %s', trans('dashboard.notifications.awesome'), trans('cachet.subscriber.email.subscribed')));
    }

    /**
     * Handle the verify subscriber email.
     *
     * @param string|null $code
     *
     * @return \Illuminate\View\View
     */
    public function getVerify($code = null)
    {
        if ($code === null) {
            throw new NotFoundHttpException();
        }

        $subscriber = Subscriber::where('verify_code', '=', $code)->first();

<<<<<<< HEAD
        if (!$subscriber || $subscriber->verified()) {
            throw new BadRequestHttpException();
        }

        $this->dispatch(new VerifySubscriberCommand($subscriber));
=======
        if (!$subscriber || $subscriber->is_verified) {
            throw new BadRequestHttpException();
        }

        dispatch(new VerifySubscriberCommand($subscriber));
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52

        return Redirect::route('status-page')
            ->withSuccess(sprintf('<strong>%s</strong> %s', trans('dashboard.notifications.awesome'), trans('cachet.subscriber.email.verified')));
    }

    /**
     * Handle the unsubscribe.
     *
     * @param string|null $code
     *
     * @return \Illuminate\View\View
     */
    public function getUnsubscribe($code = null)
    {
        if ($code === null) {
            throw new NotFoundHttpException();
        }

        $subscriber = Subscriber::where('verify_code', '=', $code)->first();

<<<<<<< HEAD
        if (!$subscriber || !$subscriber->verified()) {
            throw new BadRequestHttpException();
        }

        $this->dispatch(new UnsubscribeSubscriberCommand($subscriber));
=======
        if (!$subscriber || !$subscriber->is_verified) {
            throw new BadRequestHttpException();
        }

        dispatch(new UnsubscribeSubscriberCommand($subscriber));
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52

        return Redirect::route('status-page')
            ->withSuccess(sprintf('<strong>%s</strong> %s', trans('dashboard.notifications.awesome'), trans('cachet.subscriber.email.unsubscribed')));
    }
}
