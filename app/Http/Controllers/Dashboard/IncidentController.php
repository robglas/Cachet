<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers\Dashboard;

use AltThree\Validator\ValidationException;
<<<<<<< HEAD
use CachetHQ\Cachet\Commands\Incident\RemoveIncidentCommand;
use CachetHQ\Cachet\Commands\Incident\ReportIncidentCommand;
use CachetHQ\Cachet\Commands\Incident\UpdateIncidentCommand;
=======
use CachetHQ\Cachet\Bus\Commands\Incident\RemoveIncidentCommand;
use CachetHQ\Cachet\Bus\Commands\Incident\ReportIncidentCommand;
use CachetHQ\Cachet\Bus\Commands\Incident\UpdateIncidentCommand;
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\ComponentGroup;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\IncidentTemplate;
use GrahamCampbell\Binput\Facades\Binput;
<<<<<<< HEAD
use Illuminate\Foundation\Bus\DispatchesJobs;
=======
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class IncidentController extends Controller
{
<<<<<<< HEAD
    use DispatchesJobs;

=======
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
    /**
     * Stores the sub-sidebar tree list.
     *
     * @var array
     */
    protected $subMenu = [];

    /**
     * Creates a new incident controller instance.
     *
<<<<<<< HEAD
     * @return \CachetHQ\Cachet\Http\Controllers\DashScheduleController
=======
     * @return void
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
     */
    public function __construct()
    {
        $this->subMenu = [
            'incidents' => [
                'title'  => trans('dashboard.incidents.incidents'),
                'url'    => route('dashboard.incidents.index'),
                'icon'   => 'ion-android-checkmark-circle',
                'active' => true,
            ],
            'schedule' => [
                'title'  => trans('dashboard.schedule.schedule'),
                'url'    => route('dashboard.schedule.index'),
                'icon'   => 'ion-android-calendar',
                'active' => false,
            ],
        ];

        View::share('sub_menu', $this->subMenu);
        View::share('sub_title', trans('dashboard.incidents.title'));
    }

    /**
     * Shows the incidents view.
     *
     * @return \Illuminate\View\View
     */
    public function showIncidents()
    {
        $incidents = Incident::notScheduled()->orderBy('created_at', 'desc')->get();

        return View::make('dashboard.incidents.index')
            ->withPageTitle(trans('dashboard.incidents.incidents').' - '.trans('dashboard.dashboard'))
            ->withIncidents($incidents);
    }

    /**
     * Shows the add incident view.
     *
     * @return \Illuminate\View\View
     */
    public function showAddIncident()
    {
        return View::make('dashboard.incidents.add')
            ->withPageTitle(trans('dashboard.incidents.add.title').' - '.trans('dashboard.dashboard'))
            ->withComponentsInGroups(ComponentGroup::with('components')->get())
            ->withComponentsOutGroups(Component::where('group_id', 0)->get())
            ->withIncidentTemplates(IncidentTemplate::all());
    }

    /**
     * Shows the incident templates.
     *
     * @return \Illuminate\View\View
     */
    public function showTemplates()
    {
        return View::make('dashboard.templates.index')
            ->withPageTitle(trans('dashboard.incidents.templates.title').' - '.trans('dashboard.dashboard'))
            ->withIncidentTemplates(IncidentTemplate::all());
    }

    /**
     * Creates a new incident.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createIncidentAction()
    {
        try {
<<<<<<< HEAD
            $incident = $this->dispatch(new ReportIncidentCommand(
=======
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
                null,
                null
            ));
        } catch (ValidationException $e) {
            return Redirect::route('dashboard.incidents.add')
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.incidents.add.failure')))
                ->withErrors($e->getMessageBag());
        }

        return Redirect::route('dashboard.incidents.index')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.incidents.add.success')));
    }

    /**
     * Shows the add incident template view.
     *
     * @return \Illuminate\View\View
     */
    public function showAddIncidentTemplate()
    {
        return View::make('dashboard.templates.add')
            ->withPageTitle(trans('dashboard.incidents.templates.add.title').' - '.trans('dashboard.dashboard'));
    }

    /**
     * Shows the edit incident template view.
     *
     * @param \CachetHQ\Cachet\Models\IncidentTemplate $template
     *
     * @return \Illuminate\View\View
     */
    public function showEditTemplateAction(IncidentTemplate $template)
    {
        return View::make('dashboard.templates.edit')
            ->withPageTitle(trans('dashboard.incidents.templates.edit.title').' - '.trans('dashboard.dashboard'))
            ->withTemplate($template);
    }

    /**
     * Deletes an incident template.
     *
     * @param \CachetHQ\Cachet\Models\IncidentTemplate $template
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteTemplateAction(IncidentTemplate $template)
    {
        $template->delete();

        return Redirect::route('dashboard.templates.index')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.incidents.templates.delete.success')));
    }

    /**
     * Creates a new incident template.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createIncidentTemplateAction()
    {
        try {
            IncidentTemplate::create(Binput::get('template'));
        } catch (ValidationException $e) {
            return Redirect::route('dashboard.templates.add')
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.incidents.templates.add.failure')))
                ->withErrors($e->getMessageBag());
        }

        return Redirect::route('dashboard.templates.index')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.incidents.templates.add.success')));
    }

    /**
     * Deletes a given incident.
     *
     * @param \CachetHQ\Cachet\Models\Incident $incident
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteIncidentAction(Incident $incident)
    {
<<<<<<< HEAD
        $this->dispatch(new RemoveIncidentCommand($incident));
=======
        dispatch(new RemoveIncidentCommand($incident));
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52

        return Redirect::route('dashboard.incidents.index')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.incidents.delete.success')));
    }

    /**
     * Shows the edit incident view.
     *
     * @param \CachetHQ\Cachet\Models\Incident $incident
     *
     * @return \Illuminate\View\View
     */
    public function showEditIncidentAction(Incident $incident)
    {
        return View::make('dashboard.incidents.edit')
            ->withPageTitle(trans('dashboard.incidents.edit.title').' - '.trans('dashboard.dashboard'))
            ->withIncident($incident)
            ->withComponentsInGroups(ComponentGroup::with('components')->get())
            ->withComponentsOutGroups(Component::where('group_id', 0)->get());
    }

    /**
     * Edit an incident.
     *
     * @param \CachetHQ\Cachet\Models\Incident $incident
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editIncidentAction(Incident $incident)
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
                null,
                null
            ));
        } catch (ValidationException $e) {
            return Redirect::route('dashboard.incidents.edit', ['id' => $incident->id])
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.incidents.templates.edit.failure')))
                ->withErrors($e->getMessageBag());
        }

        if ($incident->component) {
            $incident->component->update(['status' => Binput::get('component_status')]);
        }

        return Redirect::route('dashboard.incidents.edit', ['id' => $incident->id])
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.incidents.edit.success')));
    }

    /**
     * Edit an incident template.
     *
     * @param \CachetHQ\Cachet\Models\IncidentTemplate $template
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editTemplateAction(IncidentTemplate $template)
    {
        try {
            $template->update(Binput::get('template'));
        } catch (ValidationException $e) {
            return Redirect::route('dashboard.templates.edit', ['id' => $template->id])
                ->withUpdatedTemplate($template)
                ->withTemplateErrors($e->getMessageBag()->getErrors());
        }

        return Redirect::route('dashboard.templates.edit', ['id' => $template->id])
            ->withUpdatedTemplate($template);
    }
}
