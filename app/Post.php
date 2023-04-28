<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Post extends Model
{
    use LogsActivity;
    protected $fillable = [
        'post_title',
        'post_body',
        'featured_image',
        'status',
        'category_id',
        'user_id',
    ];
    protected static $logFillable = true;
    protected static $logName = 'post';
    protected static $logOnlyDirty = true;
    public function setStatusAttribute($status)
    {
        $this->attributes['status'] = ($status)? 1 : 0;
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
