<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Models;

use AltThree\Validator\ValidatingTrait;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;

class ComponentGroup extends Model
=======
use CachetHQ\Cachet\Presenters\ComponentGroupPresenter;
use Illuminate\Database\Eloquent\Model;
use McCool\LaravelAutoPresenter\HasPresenter;

class ComponentGroup extends Model implements HasPresenter
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
{
    use ValidatingTrait;

    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
<<<<<<< HEAD
        'id'    => 'int',
=======
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
        'name'  => 'string',
        'order' => 'int',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = ['name', 'order'];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name'  => 'required|string',
        'order' => 'int',
    ];

    /**
<<<<<<< HEAD
=======
     * The relations to eager load on every query.
     *
     * @var string[]
     */
    protected $with = ['enabled_components', 'enabled_components_lowest'];

    /**
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
     * A group can have many components.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function components()
    {
        return $this->hasMany(Component::class, 'group_id', 'id');
    }
<<<<<<< HEAD
=======

    /**
     * Return all of the enabled components.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function enabled_components()
    {
        return $this->components()->enabled();
    }

    /**
     * Return all of the enabled components ordered by status.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function enabled_components_lowest()
    {
        return $this->components()->enabled()->orderBy('status', 'desc');
    }

    /**
     * Get the presenter class.
     *
     * @return string
     */
    public function getPresenterClass()
    {
        return ComponentGroupPresenter::class;
    }
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
}
