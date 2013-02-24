<?php namespace V1;

use Entities\Area;
use Response;

class AreaController extends \BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index() {
    return Area::all();
  }

  /**
   * Display the specified resource.
   *
   * @return Response
   */
  public function show($id) {
    return Area::find($id);
  }

}