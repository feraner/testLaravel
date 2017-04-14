<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Model{
/**
 * App\Model\News
 *
 * @property int $id
 * @property string $title
 * @property string $keyword
 * @property string $content
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property bool $status 文章状态
 * @method static \Illuminate\Database\Query\Builder|\App\Model\News whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\News whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\News whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\News whereKeyword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\News whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\News whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\News whereUpdatedAt($value)
 */
	class News extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

