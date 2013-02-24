<?php namespace V1;

use Response;

class TestController extends \BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index() {
    return Response::json(['test' => true]);
  }

  /**
   * Display the specified resource.
   *
   * @return Response
   */
  public function show($id) {
    return Response::json([
      'id' => $id,
      'test' => true
    ]);
  }

}