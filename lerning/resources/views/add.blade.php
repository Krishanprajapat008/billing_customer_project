@extends('navbar')

@section('content')
<h1>Records</h1>

<div class="container">
<table class="table table-striped">
    <tr>
            <td>ID</td>
            <td>Product_Name</td>
            <td>Quantity</td>
            <td>Price</td>
            <td>Total</td>

    </tr>
@foreach($products as $value)

    <tr>
        <td>{{$value['id']}}</td>
        <td>{{$value['product_name']}}</td>
        <td>{{$value['quantity']}}</td>
        <td>{{$value['price']}}</td>
        <td>{{$value['total_amount']}}</td>
    </tr>


@endforeach

</table>
</div>
@endsection