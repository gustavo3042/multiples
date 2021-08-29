<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Items;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $orders = Orders::all();


        return view('_front.view',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

$data = $request->all();

$lastid = Orders::create($data)->id;

if (count($request->product_name) > 0) {


  foreach ($request->product_name as $item=>$v){

    $data2= array(

      'orders_id' => $lastid,
      'product_name' => $request->product_name[$item],
      'Brand'=> $request->brand[$item],
      'quantity' => $request->quantity[$item],
      'budget' => $request->budget[$item],
      'amount' => $request->amount[$item],


    );


    Items::insert($data2);
  }

}

      return redirect()->back()->with('Mensaje','Datos guardados con éxito');
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


    public function items($id){

      $items = Items::where('orders_id','=',$id)->get();

      return view('_front.items',compact('items'));

    }
}
