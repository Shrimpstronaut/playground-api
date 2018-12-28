<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Account
 *
 * @package App
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Account query()
 * @mixin \Eloquent
 */
class Account extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'surname', 'givenname', 'email', 'bio', 'username', 'disabled'
    ];

}
