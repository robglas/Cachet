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
use CachetHQ\Cachet\Commands\Incident\ReportMaintenanceCommand;
=======
use CachetHQ\Cachet\Bus\Commands\Incident\ReportMaintenanceCommand;
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
use CachetHQ\Cachet\Dates\DateFactory;
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
use Illuminate\Support\MessageBag;
use Jenssegers\Date\Date;

class ScheduleController extends Controller
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
     * Creates a new schedule controller instance.
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
                'active' => false,
            ],
            'schedule' => [
                'title'  => trans('dashboard.schedule.schedule'),
                'url'    => route('dashboard.schedule.index'),
                'icon'   => 'ion-android-calendar',
                'active' => true,
            ],
        ];

        View::share('sub_menu', $this->subMenu);
        View::share('sub_title', trans('dashboard.incidents.title'));
    }

    /**
     * Lists all scheduled maintenance.
     *
     * @return \Illuminate\View\View
     */
    public function showIndex()
    {
        $schedule = Incident::scheduled()->orderBy('created_at')->get();

        return View::make('dashboard.schedule.index')
            ->withPageTitle(trans('dashboard.schedule.schedule').' - '.trans('dashboard.dashboard'))
            ->withSchedule($schedule);
    }

    /**
     * Shows the add schedule maintenance form.
     *
     * @return \Illuminate\View\View
     */
    public function showAddSchedule()
    {
        $incidentTemplates = IncidentTemplate::all();

        return View::make('dashboard.schedule.add')
            ->withPageTitle(trans('dashboard.schedule.add.title').' - '.trans('dashboard.dashboard'))
            ->withIncidentTemplates($incidentTemplates);
    }

    /**
     * Creates a new scheduled maintenance "incident".
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addScheduleAction()
    {
        try {
<<<<<<< HEAD
            $incident = $this->dispatch(new ReportMaintenanceCommand(
=======
            $incident = dispatch(new ReportMaintenanceCommand(
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
                Binput::get('incident.name'),
                Binput::get('incident.message'),
                Binput::get('incident.notify'),
                Binput::get('incident.scheduled_at')
            ));
        } catch (ValidationException $e) {
            return Redirect::route('dashboard.schedule.add')
                ->withInput(Binput::all())
                ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.schedule.add.failure')))
                ->withErrors($e->getMessageBag());
        }

        return Redirect::route('dashboard.schedule.index')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.schedule.add.success')));
    }

    /**
     * Shows the edit schedule maintenance form.
     *
     * @param \CachetHQ\Cachet\Models\Incident $schedule
     *
     * @return \Illuminate\View\View
     */
    public function showEditSchedule(Incident $schedule)
    {
        $incidentTemplates = IncidentTemplate::all();

        return View::make('dashboard.schedule.edit')
            ->withPageTitle(trans('dashboard.schedule.edit.title').' - '.trans('dashboard.dashboard'))
            ->withIncidentTemplates($incidentTemplates)
            ->withSchedule($schedule);
    }

    /**
     * Updates the given incident.
     *
<<<<<<< HEAD
     * @param \CachetHQ\Cachet\Models\Incident   $schedule
     * @param \CachetHQ\Cachet\Dates\DateFactory $dates
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editScheduleAction(Incident $schedule, DateFactory $dates)
=======
     * @param \CachetHQ\Cachet\Models\Incident $schedule
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editScheduleAction(Incident $schedule)
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
    {
        $scheduleData = Binput::get('incident');

        // Parse the schedule date.
<<<<<<< HEAD
        $scheduledAt = $dates->createNormalized('d/m/Y H:i', $scheduleData['scheduled_at']);
=======
        $scheduledAt = app(DateFactory::class)->createNormalized('d/m/Y H:i', $scheduleData['scheduled_at']);
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52

        if ($scheduledAt->isPast()) {
            $messageBag = new MessageBag();
            $messageBag->add('scheduled_at', trans('validation.date', ['attribute' => 'scheduled time you supplied']));

            return Redirect::route('dashboard.schedule.edit', ['id' => $schedule->id])->withErrors($messageBag);
        }

        $scheduleData['scheduled_at'] = $scheduledAt;
        // Bypass the incident.status field.
        $scheduleData['status'] = 0;

        try {
            $schedule->update($scheduleData);
        } catch (ValidationException $e) {
            return Redirect::route('dashboard.schedule.edit', ['id' => $schedule->id])
                ->withInput(Binput::all())
                ->withTitle(sprintf('%s %s', trans('dashboard.notifications.whoops'), trans('dashboard.schedule.edit.failure')))
                ->withErrors($e->getMessageBag());
        }

        return Redirect::route('dashboard.schedule.edit', ['id' => $schedule->id])
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.schedule.edit.success')));
    }

    /**
     * Deletes a given schedule.
     *
     * @param \CachetHQ\Cachet\Models\Incident $schedule
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteScheduleAction(Incident $schedule)
    {
        $schedule->delete();

        return Redirect::route('dashboard.schedule.index')
            ->withSuccess(sprintf('%s %s', trans('dashboard.notifications.awesome'), trans('dashboard.schedule.delete.success')));
    }
}
