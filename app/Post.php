<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // SoftDeletes is temporary tag as delete temporary

class Post extends Model
{
    //

    use SoftDeletes; // SoftDeletes is temporary tag as delete temporary

    protected $dates = ['deleted_at']; // Put date stamp on the deleted_at column

    protected $fillable = [
        'title',
        'content'
    ];

}
