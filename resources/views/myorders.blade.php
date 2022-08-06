@extends('master')
@section("content")

<div class="custopn-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>My Orders</h4>
            @foreach($orders as $item)
            <div class="row searched-item cart-list-devider">
                <div class="col-sm-4">
                    <a href="detail/{{$item->id}}">
                        <img src="{{$item->galery}}" class="cart-image">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="detail/{{$item->id}}">
                        <div>
                            <h2>Name: {{$item->name}}</h2>
                            <h5>Delivery status: {{$item->status}}</h5>
                            <h5>Address: {{$item->address}}</h5>
                            <h5>Payment status: {{$item->payment_status}}</h5>
                            <h5>Payment method: {{$item->payment_method}}</h5>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection