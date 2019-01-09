<?php

namespace Waygou\BrunoFalcao\Abstracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

abstract class EloquentAbstract extends Model
{
    use SoftDeletes;

    protected $guarded = [];
}
