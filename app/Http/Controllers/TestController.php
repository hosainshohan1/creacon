<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('test');
    }
    public function subt(Request $request)
    {
      // $rules = [
      //   'one' => 'required',
      //   'two' => 'required',
      // ];

      // $rules = [
      //   'one' => 'required',
      //   'two' => 'required',
      // ];

      //$this->validate($request, $rules);
      $this->validate($request,
      ['one' => 'required',
       'two' => 'required'],
      ['one.required' => 'this is my custom error message for required',
       'two.required' => 'my boy']
      );
    }
}
