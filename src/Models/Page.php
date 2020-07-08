<?php

namespace Tarnama\Pages\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model{

    protected $fillable = ['title','content'];

    public function url()
    {
        return url('page/show/'.$this->id.'/'.str_replace(' ','-',$this->title));
    }

    public function createdAt($format='d %b %Y ساعت  H:i')
    {
        return $this->created_at;
    }
}
