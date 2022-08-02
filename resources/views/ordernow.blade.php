@extends('master')
@section("content")

<div class="custopn-product">
    <div class="col-sm-10">
        <div class="container">
        <h2>Basic Table</h2>
        <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
        <table class="table">
            <tbody>
            <tr>
                <td>Amount</td>
                <td>{{$total}}$</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>0$</td>
            </tr>
            <tr>
                <td>Delivery</td>
                <td>20$</td>
            </tr>
            <tr>
                <td>Total Amount</td>
                <td>{{$total+20}}$</td>
            </tr>
            </tbody>
        </table>
        <div>
            <form action="/action_page.php">
                <div class="form-group">
                    <textarea type="email" placeholder="Enter your Email" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                    <h6><label for="pwd">Payment Method:</label></h6>
                    <p><input type="radio" name="payment" ><span>Online Payment </span></p>
                    <p><input type="radio" name="payment" ><span>EMI Payment </span></p>
                    <p><input type="radio" name="payment" ><span>payment On Delivery</span></p>


                </div>
                
                <button type="submit" class="btn btn-success">Order Now</button>
            </form>
        </div>
        </div>
    </div>
</div>

@endsection