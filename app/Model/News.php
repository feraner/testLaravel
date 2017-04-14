<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class News extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'news';

    protected $fillable = ['id', 'title', 'keyword', 'content', 'status'];

}
