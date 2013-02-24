<?php

class BaseController extends Controller {

  protected
    $entity = '';

  protected function getEntity() {
    return 'Entities\\'.$this->entity;
  }

  protected function getWithParam() {
    return explode(',', Input::get('with'));
  }

  function index() {
    $ent = $this->getEntity();
    if (Input::has('with')) {
      return $ent::with($this->getWithParam())->get();
    } else {
      return $ent::get();
    }
  }

  /**
   * Display the specified resource.
   *
   * @return Response
   */
  public function show($id) {
    $ent = $this->getEntity();
    if (Input::has('with')) {
      return $ent::with($this->getWithParam())->find($id);
    } else {
      return $ent::find($id);
    }
  }

}