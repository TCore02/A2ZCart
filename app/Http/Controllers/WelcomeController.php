<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\welcome;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      try
      {
          $items = welcome::where("role",1)->get();
          return view('home.welcome',compact('items'));
      }
      catch (\Exception $exception)
      {
          return $exception;
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      try
      {
          return view('home.add');
      }
      catch (\Exception $exception)
      {
          return $exception;
      }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $items = new welcome;
      $this->validate ($request,[
          'category'             => 'required|unique:welcomes,id,?????',
      ]);
      try
      {
          $items->category       = $request->category;
          $items->role 	= '1';
          $items->save();
          return redirect('welcome');
      }
      catch (\Exception $exception)
      {
          return $exception;
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      try
      {
          $item = welcome::find($id);
          return view('home.show', compact('item'));
      }
      catch (\Exception $exception)
      {
          return $exception;
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
