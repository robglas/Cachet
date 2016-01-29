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
use CachetHQ\Cachet\Commands\Metric\AddMetricCommand;
use CachetHQ\Cachet\Commands\Metric\RemoveMetricCommand;
use CachetHQ\Cachet\Commands\Metric\UpdateMetricCommand;
use CachetHQ\Cachet\Models\Metric;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
=======
use CachetHQ\Cachet\Bus\Commands\Metric\AddMetricCommand;
use CachetHQ\Cachet\Bus\Commands\Metric\RemoveMetricCommand;
use CachetHQ\Cachet\Bus\Commands\Metric\UpdateMetricCommand;
use CachetHQ\Cachet\Models\Metric;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Request;
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class MetricController extends AbstractApiController
{
<<<<<<< HEAD
    use DispatchesJobs;

    /**
     * Get all metrics.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getMetrics(Request $request)
    {
        $metrics = Metric::paginate(Binput::get('per_page', 20));

        return $this->paginator($metrics, $request);
=======
    /**
     * Get all metrics.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getMetrics()
    {
        $metrics = Metric::paginate(Binput::get('per_page', 20));

        return $this->paginator($metrics, Request::instance());
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
    }

    /**
     * Get a single metric.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getMetric(Metric $metric)
    {
        return $this->item($metric);
    }

    /**
     * Get all metric points.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getMetricPoints(Metric $metric)
    {
        return $this->collection($metric->points);
    }

    /**
     * Create a new metric.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function postMetrics()
    {
        try {
<<<<<<< HEAD
            $metric = $this->dispatch(new AddMetricCommand(
=======
            $metric = dispatch(new AddMetricCommand(
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
                Binput::get('name'),
                Binput::get('suffix'),
                Binput::get('description'),
                Binput::get('default_value'),
                Binput::get('calc_type', 0),
                Binput::get('display_chart'),
<<<<<<< HEAD
                Binput::get('places', 2)
=======
                Binput::get('places', 2),
                Binput::get('view', 1)
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($metric);
    }

    /**
     * Update an existing metric.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function putMetric(Metric $metric)
    {
        try {
<<<<<<< HEAD
            $metric = $this->dispatch(new UpdateMetricCommand(
=======
            $metric = dispatch(new UpdateMetricCommand(
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
                $metric,
                Binput::get('name'),
                Binput::get('suffix'),
                Binput::get('description'),
                Binput::get('default_value'),
                Binput::get('calc_type', 0),
                Binput::get('display_chart'),
<<<<<<< HEAD
                Binput::get('places', 2)
=======
                Binput::get('places', 2),
                Binput::get('view', 1)
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($metric);
    }

    /**
     * Delete an existing metric.
     *
     * @param \CachetHQ\Cachet\Models\Metric $metric
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteMetric(Metric $metric)
    {
<<<<<<< HEAD
        $this->dispatch(new RemoveMetricCommand($metric));
=======
        dispatch(new RemoveMetricCommand($metric));
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52

        return $this->noContent();
    }
}
