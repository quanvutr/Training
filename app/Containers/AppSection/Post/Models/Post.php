<?php

namespace App\Containers\AppSection\Post\Models;

use App\Containers\AppSection\User\Models\User;
use App\Ship\Parents\Models\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [
        'title',
        'content',
        'created_by_id',
        'topic_id'
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Post';
    public function createdBy()
    {
        return $this->belongsTo(User::class,'created_by_id','id');
    }
    public function topicId()
    {
        return $this->hasOne(Topic::class,'id','topic_id');
    }
}
