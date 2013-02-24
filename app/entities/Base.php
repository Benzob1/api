<?php namespace Entities;

use Eloquent;

class Base extends Eloquent {

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = ['created_at', 'updated_at'];

}
