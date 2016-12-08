<?php
/**
 * Created by PhpStorm.
 * User: salal
 * Date: 11/30/2016
 * Time: 7:06 PM
 */

namespace SocialAppp\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'statuses';

    protected $fillable = [
        'body',
        'image_url',
        'post_type'
    ];

    public function user()
    {
        return $this->belongsTo('SocialAppp\Models\User', 'user_id');
    }

    public function scopeNotReply($query)
    {
        return $query->whereNull('parent_id');
    }

    public function replies(){
        return $this->hasMany('SocialAppp\Models\Status','parent_id');
    }

    public function likes(){
        return $this->morphMany('SocialAppp\Models\Like','likeable');
    }
}