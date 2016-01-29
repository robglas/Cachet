<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers\Api;

<<<<<<< HEAD
use CachetHQ\Cachet\Commands\Subscriber\SubscribeSubscriberCommand;
use CachetHQ\Cachet\Commands\Subscriber\UnsubscribeSubscriberCommand;
use CachetHQ\Cachet\Models\Subscriber;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
=======
use CachetHQ\Cachet\Bus\Commands\Subscriber\SubscribeSubscriberCommand;
use CachetHQ\Cachet\Bus\Commands\Subscriber\UnsubscribeSubscriberCommand;
use CachetHQ\Cachet\Models\Subscriber;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Request;
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class SubscriberController extends AbstractApiController
{
<<<<<<< HEAD
    use DispatchesJobs;

    /**
     * Get all subscribers.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getSubscribers(Request $request)
    {
        $subscribers = Subscriber::paginate(Binput::get('per_page', 20));

        return $this->paginator($subscribers, $request);
=======
    /**
     * Get all subscribers.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getSubscribers()
    {
        $subscribers = Subscriber::paginate(Binput::get('per_page', 20));

        return $this->paginator($subscribers, Request::instance());
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
    }

    /**
     * Create a new subscriber.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function postSubscribers()
    {
        try {
<<<<<<< HEAD
            $subscriber = $this->dispatch(new SubscribeSubscriberCommand(Binput::get('email'), Binput::get('verify', false)));
=======
            $subscriber = dispatch(new SubscribeSubscriberCommand(Binput::get('email'), Binput::get('verify', false)));
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($subscriber);
    }

    /**
     * Delete a subscriber.
     *
     * @param \CachetHQ\Cachet\Models\Subscriber $subscriber
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteSubscriber(Subscriber $subscriber)
    {
<<<<<<< HEAD
        $this->dispatch(new UnsubscribeSubscriberCommand($subscriber));
=======
        dispatch(new UnsubscribeSubscriberCommand($subscriber));
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52

        return $this->noContent();
    }
}
