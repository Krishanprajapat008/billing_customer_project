@extends('navbar')

@section('content')

<div class="container">
    <form action="billing" id="frmdata" method="post">

        @csrf
        <label>Bill Number</label><br>
        <input type="text" name="bill_number"><br><br>
        <label>Customer Name</label><br>
        <input type="text" name="custname"><br><br>
        <label>Address</label><br>
        <input type="text" name="address"><br><br>

        <label>Gender</label>
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="female">Female <br><br>

       
        <input id="button1" type="button" value="Add" onclick='count()'><br><br>
        
        
        <label for="product">Products Name:</label>
        <select id="product" name="product" onclick='count()'>
            <option value="Medicine_01">Medicine01</option>
            <option value="Medicine_02">Medicine02</option>
            <option value="Medicine_03">Medicine03</option>
        </select>

        <label for="quantity">Quantity:</label>
        <select id="quantity" name="quantity" selected>
            <option value="10">10</option>
            <option value="50">50</option>
            <option value="25">25</option>
        </select>

        <label for="price">Price:</label>
        <select id="price" name="price" selected>
            <option value="5">5</option>
            <option value="2">2</option>
            <option value="4">4</option>
        </select>

        <label>Total : </label>
        <input type="text" id="total" name="total"><br><br>

        <input type="submit" value="Save">
        <input type="reset"><br><br>

    </form>

<button onclick="document.getElementById('frmdata').reset();">Clear form data</button>

</div>
<script>
        function count() {
            var num1 = document.getElementById("quantity").value;
            var num2 = document.getElementById("price").value;
            document.getElementById('total').value = eval(num1 * num2);
        }

    

        
</script>
    
@endsection