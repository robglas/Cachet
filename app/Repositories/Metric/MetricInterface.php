<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Repositories\Metric;

use CachetHQ\Cachet\Models\Metric;

interface MetricInterface
{
    /**
<<<<<<< HEAD
=======
     * Returns metrics for the last hour.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     * @param int                            $hour
     * @param int                            $minute
     *
     * @return int
     */
    public function getPointsLastHour(Metric $metric, $hour, $minute);

    /**
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
     * Returns metrics for a given hour.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     * @param int                            $hour
     *
     * @return int
     */
    public function getPointsByHour(Metric $metric, $hour);

    /**
     * Returns metrics for the week.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
<<<<<<< HEAD
=======
     * @param int                            $day
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
     *
     * @return int
     */
    public function getPointsForDayInWeek(Metric $metric, $day);
}
