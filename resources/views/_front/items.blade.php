@extends('layouts.master')

@section('title','Vista Items')

@section('content')



<br>
<br>


<table class="table table-bordered">

  <thead>
    <tr>
      <th>SL</th>
      <th>Product Name</th>
      <th>Brand</th>
      <th>Cantidad</th>
      <th>Precio</th>
      <th>Total</th>
    </tr>
  </thead>

  <tbody>

    @foreach ($items as $key=>$item)


    <tr>
      <td>{{++$key}}</td>

      <td>{{$item->product_name}}</td>

      <td>{{$item->brand}}</td>

      <td>{{$item->quantity}}</td>

      <td>{{$item->budget}}</td>

      <td>{{$item->amount}}</td>

    </tr>

      @endforeach

  </tbody>

</table>





@endsection
