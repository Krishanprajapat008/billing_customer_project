<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\woo_comerce;
use App\Models\customer;

class userController extends Controller
{
    
    function adddata(Request $req){

        $data = new customer();

        $data->bill_number = $req->bill_number;
        $data->custname = $req->custname;
        $data->address = $req->address;
        $data->gender = $req->gender;
        $data->proname = $req->product;
        $data->quantity = $req->quantity;
        $data->price = $req->price;
        $data->total = $req->total;

        $data->save();

        return redirect('store');

    }

    function show(){

        $data = customer::all();

       return view('store',['data'=>$data]);
        
    }


    function mydata(){

        $products = woo_comerce::all();

        return view('add',['products'=>$products]);
    }

    
}
 