<?php

class City extends BaseModel {
   protected $guarded = array();

   public static $rules = array(
      'name' => 'required|alpha_num|min:2|max:200|unique:cities,name'
   );

   public function offers()
   {
      return $this->hasMany('Offer');
   }
}