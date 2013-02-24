<?php namespace V1;

use Entities\County;
use Response;

class CountyController extends \BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index() {
    return County::all();
  }

  /**
   * Display the specified resource.
   *
   * @return Response
   */
  public function show($id) {
    return County::find($id);
  }

}