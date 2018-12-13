<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drink;

class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $drink=Drink::all();
        return view("drink.index")->with("drink",$drink);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("drink.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
        'name' => 'required|string',
        'price' => 'required|integer',
        ]);
        Drink::create(array(
            "name"=>$request["name"],
            "is_ready"=>$request["is_ready"],
            "price"=>$request["price"]
        ));
        return redirect("drink");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $drink=Drink::find($id);
        return view("drink.edit")->with("drink",$drink);
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
         $request->validate([
        'name' => 'required|string',
        'price' => 'required|integer',
        ]);
        Drink::find($id)->update(array(
            "name"=>$request["name"],
            "is_ready"=>$request["is_ready"],
            "price"=>$request["price"]
        ));
        return redirect("drink");
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
        Drink::find($id)->delete();
        return back();
    }
}
