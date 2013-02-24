<?php namespace Entities;

class Area extends Base {

  protected
    $hidden = ['batch_id', 'created_at', 'county_id'],
    $table = 'cities';

  function county() {
    return $this->belongsTo('Entities\\County');
  }

  function employment() {
    return $this->hasMany('Entities\\Employment', 'city_id');
  }

}
