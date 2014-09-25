<?php

class Tag extends BaseModel {
	protected $guarded = array();

   public static $rules = array(
      'title' => 'required|min:2|max:200|unique:tags,title'
   );

   public function offers()
   {
      return $this->belongsToMany('Offer');
   }
}
