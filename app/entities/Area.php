<?php namespace Entities;

class Area extends Base {

  protected
    $hidden = ['batch_id', 'created_at', 'county_id'],
    $table = 'cities';

  function county() {
    return $this->belongsTo('Entities\\County');
  }

}
