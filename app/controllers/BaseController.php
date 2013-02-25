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
      return $this->render(
        $ent::with($this->getWithParam())->get()
      );
    } else {
      return $this->render(
        $ent::get()
      );
    }
  }

  protected function jsonify($data) {
    if (is_array($data)) {
      return array_map(function ($model) {
        return json_encode($model->toArray());
      }, $data);
    } else {
      return json_encode($data->toArray());
    }
  }

  protected function render($data) {
    $type = Input::get('type');
    switch ($type) {
      case 'jsonp':
        $resp = Response::make(View::make('jsonp')
          ->with('callback', Input::get('callback', 'callback'))
          ->with('json', $this->jsonify($data)));
        $resp->headers->set('Content-Type', 'text/javascript; charset=utf8');
        return $resp;
      default:
        return $data;
    }
  }

  /**
   * Display the specified resource.
   *
   * @return Response
   */
  function show($id) {
    $ent = $this->getEntity();
    if (Input::has('with')) {
      return $this->render(
        $ent::with($this->getWithParam())->find($id)
      );
    } else {
      return $this->render(
        $ent::find($id)
      );
    }
  }

}