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
use CachetHQ\Cachet\Commands\Component\AddComponentCommand;
use CachetHQ\Cachet\Commands\Component\RemoveComponentCommand;
use CachetHQ\Cachet\Commands\Component\UpdateComponentCommand;
=======
use CachetHQ\Cachet\Bus\Commands\Component\AddComponentCommand;
use CachetHQ\Cachet\Bus\Commands\Component\RemoveComponentCommand;
use CachetHQ\Cachet\Bus\Commands\Component\UpdateComponentCommand;
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Tag;
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

class ComponentController extends AbstractApiController
{
<<<<<<< HEAD
    use DispatchesJobs;

    /**
     * Get all components.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \Illuminate\Contracts\Auth\Guard          $auth
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getComponents(Request $request, Guard $auth)
    {
        if ($auth->check()) {
=======
    /**
     * Get all components.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getComponents()
    {
        if (app(Guard::class)->check()) {
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
            $components = Component::whereRaw('1 = 1');
        } else {
            $components = Component::enabled();
        }

<<<<<<< HEAD
        return $this->paginator($components->paginate(Binput::get('per_page', 20)), $request);
=======
        return $this->paginator($components->paginate(Binput::get('per_page', 20)), Request::instance());
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
    }

    /**
     * Get a single component.
     *
     * @param \CachetHQ\Cachet\Models\Component $component
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getComponent(Component $component)
    {
        return $this->item($component);
    }

    /**
     * Create a new component.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function postComponents()
    {
        try {
<<<<<<< HEAD
            $component = $this->dispatch(new AddComponentCommand(
=======
            $component = dispatch(new AddComponentCommand(
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
                Binput::get('name'),
                Binput::get('description'),
                Binput::get('status'),
                Binput::get('link'),
                Binput::get('order'),
                Binput::get('group_id'),
                (bool) Binput::get('enabled', true)
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        if (Binput::has('tags')) {
            // The component was added successfully, so now let's deal with the tags.
            $tags = preg_split('/ ?, ?/', Binput::get('tags'));

            // For every tag, do we need to create it?
            $componentTags = array_map(function ($taggable) use ($component) {
                return Tag::firstOrCreate([
                    'name' => $taggable,
                ])->id;
            }, $tags);

            $component->tags()->sync($componentTags);
        }

        return $this->item($component);
    }

    /**
     * Update an existing component.
     *
     * @param \CachetHQ\Cachet\Models\Component $component
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function putComponent(Component $component)
    {
        try {
<<<<<<< HEAD
            $this->dispatch(new UpdateComponentCommand(
=======
            dispatch(new UpdateComponentCommand(
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
                $component,
                Binput::get('name'),
                Binput::get('description'),
                Binput::get('status'),
                Binput::get('link'),
                Binput::get('order'),
                Binput::get('group_id'),
                (bool) Binput::get('enabled', true)
            ));
        } catch (QueryException $e) {
            throw new BadRequestHttpException();
        }

        if (Binput::has('tags')) {
            $tags = preg_split('/ ?, ?/', Binput::get('tags'));

            // For every tag, do we need to create it?
            $componentTags = array_map(function ($taggable) use ($component) {
                return Tag::firstOrCreate(['name' => $taggable])->id;
            }, $tags);

            $component->tags()->sync($componentTags);
        }

        return $this->item($component);
    }

    /**
     * Delete an existing component.
     *
     * @param \CachetHQ\Cachet\Models\Component $component
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteComponent(Component $component)
    {
<<<<<<< HEAD
        $this->dispatch(new RemoveComponentCommand($component));
=======
        dispatch(new RemoveComponentCommand($component));
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52

        return $this->noContent();
    }
}
