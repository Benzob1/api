<?php namespace Entities;

class Employment extends Base {

  protected
    $hidden = ['batch_id', 'created_at', 'city_id'],
    $table = 'employment';

  function area() {
    return $this->belongsTo('Entities\\Area', 'city_id');
  }

}
