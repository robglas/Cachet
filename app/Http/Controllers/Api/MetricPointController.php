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
use CachetHQ\Cachet\Commands\Metric\AddMetricPointCommand;
use CachetHQ\Cachet\Commands\Metric\RemoveMetricPointCommand;
use CachetHQ\Cachet\Commands\Metric\UpdateMetricPointCommand;
=======
use CachetHQ\Cachet\Bus\Commands\Metric\AddMetricPointCommand;
use CachetHQ\Cachet\Bus\Commands\Metric\RemoveMetricPointCommand;
use CachetHQ\Cachet\Bus\Commands\Metric\UpdateMetricPointCommand;
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
use CachetHQ\Cachet\Models\Metric;
use CachetHQ\Cachet\Models\MetricPoint;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Database\QueryException;
<<<<<<< HEAD
use Illuminate\Foundation\Bus\DispatchesJobs;
=======
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class MetricPointController extends AbstractApiController
{
<<<<<<< HEAD
    use DispatchesJobs;

=======
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
    /**
     * Get a single metric point.
     *
     * @param \CachetHQ\Cachet\Models\Metric      $metric
     * @param \CachetHQ\Cachet\Models\MetricPoint $metricPoint
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getMetricPoints(Metric $metric, MetricPoint $metricPoint)
    {
        return $this->item($metricPoint);
    }

    /**
     * Create a new metric point.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function postMetricPoints(Metric $metric)
    {
        try {
<<<<<<< HEAD
            $metricPoint = $this->dispatch(new AddMetricPointCommand(
=======
            $metricPoint = dispatch(new AddMetricPointCommand(
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
                $metric,
                Binput::get('value'),
                Binput::get('timestamp'))
            );
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($metricPoint);
    }

    /**
     * Updates a metric point.
     *
     * @param \CachetHQ\Cachet\Models\Metric      $metric
     * @param \CachetHQ\Cachet\Models\MetircPoint $metricPoint
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function putMetricPoint(Metric $metric, MetricPoint $metricPoint)
    {
<<<<<<< HEAD
        $metricPoint = $this->dispatch(new UpdateMetricPointCommand(
=======
        $metricPoint = dispatch(new UpdateMetricPointCommand(
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
            $metricPoint,
            $metric,
            Binput::get('value'),
            Binput::get('timestamp')
        ));

        return $this->item($metricPoint);
    }

    /**
     * Destroys a metric point.
     *
     * @param \CachetHQ\Cachet\Models\Metric      $metric
     * @param \CachetHQ\Cachet\Models\MetricPoint $metricPoint
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteMetricPoint(Metric $metric, MetricPoint $metricPoint)
    {
<<<<<<< HEAD
        $this->dispatch(new RemoveMetricPointCommand($metricPoint));
=======
        dispatch(new RemoveMetricPointCommand($metricPoint));
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52

        return $this->noContent();
    }
}
