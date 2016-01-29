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
use CachetHQ\Cachet\Commands\Incident\RemoveIncidentCommand;
use CachetHQ\Cachet\Commands\Incident\ReportIncidentCommand;
use CachetHQ\Cachet\Commands\Incident\UpdateIncidentCommand;
=======
use CachetHQ\Cachet\Bus\Commands\Incident\RemoveIncidentCommand;
use CachetHQ\Cachet\Bus\Commands\Incident\ReportIncidentCommand;
use CachetHQ\Cachet\Bus\Commands\Incident\UpdateIncidentCommand;
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
use CachetHQ\Cachet\Models\Incident;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\QueryException;
<<<<<<< HEAD
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
=======
use Illuminate\Support\Facades\Request;
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class IncidentController extends AbstractApiController
{
<<<<<<< HEAD
    use DispatchesJobs;

    /**
     * Get all incidents.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \Illuminate\Contracts\Auth\Guard          $auth
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getIncidents(Request $request, Guard $auth)
    {
        $incidentVisiblity = $auth->check() ? 0 : 1;

        $incidents = Incident::where('visible', '>=', $incidentVisiblity)->paginate(Binput::get('per_page', 20));

        return $this->paginator($incidents, $request);
=======
    /**
     * Get all incidents.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getIncidents()
    {
        $incidentVisibility = app(Guard::class)->check() ? 0 : 1;

        $incidents = Incident::where('visible', '>=', $incidentVisibility)->paginate(Binput::get('per_page', 20));

        return $this->paginator($incidents, Request::instance());
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
    }

    /**
     * Get a single incident.
     *
     * @param \CachetHQ\Cachet\Models\Incident $incident
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getIncident(Incident $incident)
    {
        return $this->item($incident);
    }

    /**
     * Create a new incident.
     *
<<<<<<< HEAD
     * @param \Illuminate\Contracts\Auth\Guard $auth
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function postIncidents(Guard $auth)
    {
        try {
            $incident = $this->dispatch(new ReportIncidentCommand(
=======
     * @return \Illuminate\Http\JsonResponse
     */
    public function postIncidents()
    {
        try {
            $incident = dispatch(new ReportIncidentCommand(
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
                Binput::get('name'),
                Binput::get('status'),
                Binput::get('message'),
                Binput::get('visible', true),
                Binput::get('component_id'),
                Binput::get('component_status'),
                Binput::get('notify', true),
                Binput::get('created_at'),
                Binput::get('template'),
                Binput::get('vars')
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($incident);
    }

    /**
     * Update an existing incident.
     *
<<<<<<< HEAD
     * @param \CachetHQ\Cachet\Models\Inicdent $incident
=======
     * @param \CachetHQ\Cachet\Models\Incident $incident
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function putIncident(Incident $incident)
    {
        try {
<<<<<<< HEAD
            $incident = $this->dispatch(new UpdateIncidentCommand(
=======
            $incident = dispatch(new UpdateIncidentCommand(
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
                $incident,
                Binput::get('name'),
                Binput::get('status'),
                Binput::get('message'),
                Binput::get('visible', true),
                Binput::get('component_id'),
                Binput::get('component_status'),
                Binput::get('notify', true),
                Binput::get('created_at'),
                Binput::get('template'),
                Binput::get('vars')
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($incident);
    }

    /**
     * Delete an existing incident.
     *
<<<<<<< HEAD
     * @param \CachetHQ\Cachet\Models\Inicdent $incident
=======
     * @param \CachetHQ\Cachet\Models\Incident $incident
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteIncident(Incident $incident)
    {
<<<<<<< HEAD
        $this->dispatch(new RemoveIncidentCommand($incident));
=======
        dispatch(new RemoveIncidentCommand($incident));
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52

        return $this->noContent();
    }
}
