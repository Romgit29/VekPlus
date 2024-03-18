<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = null;
    protected $fillable = ['link', 'shortened_link'];
}
