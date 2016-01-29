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

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
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
        'value' => 'string',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = ['name', 'value'];

    /**
     * List of attributes that have default values.
     *
     * @var string[]
     */
    protected $attributes = ['value' => ''];
}
