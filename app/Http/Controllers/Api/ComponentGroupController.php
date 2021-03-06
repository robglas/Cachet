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
use CachetHQ\Cachet\Commands\ComponentGroup\AddComponentGroupCommand;
use CachetHQ\Cachet\Commands\ComponentGroup\RemoveComponentGroupCommand;
use CachetHQ\Cachet\Commands\ComponentGroup\UpdateComponentGroupCommand;
use CachetHQ\Cachet\Models\ComponentGroup;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
=======
use CachetHQ\Cachet\Bus\Commands\ComponentGroup\AddComponentGroupCommand;
use CachetHQ\Cachet\Bus\Commands\ComponentGroup\RemoveComponentGroupCommand;
use CachetHQ\Cachet\Bus\Commands\ComponentGroup\UpdateComponentGroupCommand;
use CachetHQ\Cachet\Models\ComponentGroup;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Request;
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class ComponentGroupController extends AbstractApiController
{
<<<<<<< HEAD
    use DispatchesJobs;

    /**
     * Get all groups.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getGroups(Request $request)
    {
        $groups = ComponentGroup::paginate(Binput::get('per_page', 20));

        return $this->paginator($groups, $request);
=======
    /**
     * Get all groups.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getGroups()
    {
        $groups = ComponentGroup::paginate(Binput::get('per_page', 20));

        return $this->paginator($groups, Request::instance());
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
    }

    /**
     * Get a single group.
     *
     * @param \CachetHQ\Cachet\Models\ComponentGroup $group
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getGroup(ComponentGroup $group)
    {
        return $this->item($group);
    }

    /**
     * Create a new component group.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function postGroups()
    {
        try {
<<<<<<< HEAD
            $group = $this->dispatch(new AddComponentGroupCommand(
=======
            $group = dispatch(new AddComponentGroupCommand(
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
                Binput::get('name'),
                Binput::get('order', 0)
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($group);
    }

    /**
     * Update an existing group.
     *
     * @param \CachetHQ\Cachet\Models\ComponentGroup $group
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function putGroup(ComponentGroup $group)
    {
        try {
<<<<<<< HEAD
            $group = $this->dispatch(new UpdateComponentGroupCommand(
=======
            $group = dispatch(new UpdateComponentGroupCommand(
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
                $group,
                Binput::get('name'),
                Binput::get('order', 0)
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        return $this->item($group);
    }

    /**
     * Delete an existing group.
     *
     * @param \CachetHQ\Cachet\Models\ComponentGroup $group
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteGroup(ComponentGroup $group)
    {
<<<<<<< HEAD
        $this->dispatch(new RemoveComponentGroupCommand($group));
=======
        dispatch(new RemoveComponentGroupCommand($group));
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52

        return $this->noContent();
    }
}
