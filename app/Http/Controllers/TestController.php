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
      ['one' => 'required | max:3',
       'two' => 'required'],
      ['one.required' => 'A custom message',
        'one.max' => 'Not more than 3 please',
       'two.required' => 'Another One']
      );
    }
}
