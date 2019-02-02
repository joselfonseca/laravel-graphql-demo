<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 *
 * @package App
 */
class Post extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'title', 'body'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
