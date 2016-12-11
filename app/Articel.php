<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Articel extends Model
{
    protected $fillable= ['title', 'body' , 'published_at'] ;


    public function scopePublished($query)
    {
    	$query->where('published_at','<=',Carbon::now());
    }


    
}
