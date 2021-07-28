@extends('navbar')

@section('content')
<h1>Records</h1>

<div class="container">

<table class="table table-striped">
    <tr>
        <td>ID</td>
        <td>Bill Number</td>
        <td>Customer Name</td>
        <td>Address</td>
        <td>Gender</td>
        <td>Product Name</td>
        <td>Quentity</td>
        <td>Price</td>
        <td>Total</td>
    </tr>

@foreach($data as $value)
    <tr>
        <td>{{$value['id']}}</td>
        <td>{{$value['bill_number']}}</td>
        <td>{{$value['custname']}}</td>
        <td>{{$value['address']}}</td>
        <td>{{$value['gender']}}</td>
        <td>{{$value['proname']}}</td>
        <td>{{$value['quantity']}}</td>
        <td>{{$value['price']}}</td>
        <td>{{$value['total']}}</td>

    </tr>

@endforeach
</table>
</div>
@endsection