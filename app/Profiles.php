<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Profiles extends Model
{
   protected $guarded = [];

   public function profileImage()
   {
       $imagePath = ($this->image) ?  $this->image : 'profile/VuSJAuNN1URLn26AQAN4w9YZaVXtQzCIEKXfIpzj.png';
      return '/storage/' . $imagePath;
   }

    public function followers(){

       return $this->belongsToMany(User::class);
    }

   public function user()

   {
       return $this->belongsTo(User::class);
   }
}
