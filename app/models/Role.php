<?php

class Role extends BaseModel {
	protected $guarded = array();

   public static $rules = array(
      'role' => 'required|alpha|min:2|max:200|unique:roles,role'
   );
}
