<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Articel extends Model
{
    protected $fillabele=['title','body','published_at'];


    public function scopePublished($query)
    {
    	$query->where('published_at','<=',Carbon::now());
    }
    

    public function setPublishedAtAttribute($date)
    {	
    		$this->attribute['published_at']=Carbon::parse($date);
    	
    }
}
