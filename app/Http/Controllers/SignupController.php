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
use CachetHQ\Cachet\Commands\Invite\ClaimInviteCommand;
use CachetHQ\Cachet\Commands\User\SignupUserCommand;
use CachetHQ\Cachet\Models\Invite;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Foundation\Bus\DispatchesJobs;
=======
use CachetHQ\Cachet\Bus\Commands\Invite\ClaimInviteCommand;
use CachetHQ\Cachet\Bus\Commands\User\SignupUserCommand;
use CachetHQ\Cachet\Models\Invite;
use CachetHQ\Cachet\Models\User;
use GrahamCampbell\Binput\Facades\Binput;
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SignupController extends Controller
{
<<<<<<< HEAD
    use DispatchesJobs;

=======
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
    /**
     * Handle the signup with invite.
     *
     * @param string|null $code
     *
     * @return \Illuminate\View\View
     */
    public function getSignup($code = null)
    {
        if ($code === null) {
            throw new NotFoundHttpException();
        }

        $invite = Invite::where('code', '=', $code)->first();

<<<<<<< HEAD
        if (!$invite || $invite->claimed()) {
=======
        if (!$invite || $invite->is_claimed) {
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
            throw new BadRequestHttpException();
        }

        return View::make('signup')
            ->withCode($invite->code)
            ->withUsername(Binput::old('username'))
            ->withEmail(Binput::old('emai', $invite->email));
    }

    /**
<<<<<<< HEAD
     * Handle the unsubscribe.
=======
     * Handle a signup request.
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
     *
     * @param string|null $code
     *
     * @return \Illuminate\View\View
     */
    public function postSignup($code = null)
    {
        if ($code === null) {
            throw new NotFoundHttpException();
        }

        $invite = Invite::where('code', '=', $code)->first();

<<<<<<< HEAD
        if (!$invite || $invite->claimed()) {
=======
        if (!$invite || $invite->is_claimed) {
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
            throw new BadRequestHttpException();
        }

        try {
<<<<<<< HEAD
            $this->dispatch(new SignupUserCommand(
                Binput::get('username'),
                Binput::get('password'),
                Binput::get('email'),
                2
=======
            dispatch(new SignupUserCommand(
                Binput::get('username'),
                Binput::get('password'),
                Binput::get('email'),
                User::LEVEL_USER
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
            ));
        } catch (ValidationException $e) {
            return Redirect::route('signup.invite', ['code' => $invite->code])
                ->withInput(Binput::except('password'))
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('cachet.signup.failure')))
                ->withErrors($e->getMessageBag());
        }

<<<<<<< HEAD
        $this->dispatch(new ClaimInviteCommand($invite));
=======
        dispatch(new ClaimInviteCommand($invite));
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52

        return Redirect::route('status-page')
            ->withSuccess(sprintf('<strong>%s</strong> %s', trans('dashboard.notifications.awesome'), trans('cachet.signup.success')));
    }
}
