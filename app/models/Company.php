<?php

class Company extends BaseModel {
	protected $guarded = array();

   public static $rules = array(
      'title' => 'required|alpha|min:2|max:200|unique:companies,title'
   );

   public function offers()
   {
      return $this->hasMany('Offer');
   }
}
