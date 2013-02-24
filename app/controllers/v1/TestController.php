<?php namespace V1;

use Entities\Test;
use Response;

class TestController extends \BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index() {
    return Test::all();
  }

  /**
   * Display the specified resource.
   *
   * @return Response
   */
  public function show($id) {
    return Test::find($id);
  }

}