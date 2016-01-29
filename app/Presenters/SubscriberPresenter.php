<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Presenters;

use CachetHQ\Cachet\Presenters\Traits\TimestampsTrait;
<<<<<<< HEAD
=======
use Jenssegers\Date\Date;
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52

class SubscriberPresenter extends AbstractPresenter
{
    use TimestampsTrait;

    /**
<<<<<<< HEAD
=======
     * Present formatted date time.
     *
     * @return string
     */
    public function verified_at()
    {
        return (new Date($this->wrappedObject->verified_at))
            ->setTimezone($this->setting->get('app_timezone'))->toDateTimeString();
    }

    /**
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
     * Convert the presenter instance to an array.
     *
     * @return string[]
     */
    public function toArray()
    {
        return array_merge($this->wrappedObject->toArray(), [
            'created_at'  => $this->created_at(),
            'updated_at'  => $this->updated_at(),
            'verified_at' => $this->verified_at(),
        ]);
    }
}
