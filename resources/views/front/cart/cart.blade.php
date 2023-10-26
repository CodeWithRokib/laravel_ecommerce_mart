@extends('front.master')

@section('title')
    Cart
@endsection

@section('style')

@endsection

@section('body')
     <!-- Page Header Start -->
 <div class="container-fluid bg-secondary mb-2">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 150px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="{{ route('home.index') }}">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Shopping Cart</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Cart Start -->
<div class="container-fluid pt-5">
    <div id="appendCartItems">
        @include('front.cart.item')
    </div>
</div>
<!-- Cart End -->
@endsection

@section('script')

<script>
    $(document).ready(function() {
        $(document).on('click', '.updateCartItem', function() {
            // alert('ok');
            if ($(this).hasClass('plus-a')) {
                //get quantity
                var quantity = $(this).data('qty');
                // alert(quantity);
                //increase the quantity by 1
                new_qty = parseInt(quantity) + 1;
                // alert(new_qty);
            }
            if ($(this).hasClass('minus-a')) {
                //get quantity
                var quantity = $(this).data('qty');
                // alert(quantity);
                //check if quantity is greater than 1
                if (quantity > 1) {
                    //decrease the quantity by 1
                    new_qty = parseInt(quantity) - 1;
                }
                else {
                    alert('Quantity cannot be less than 1');
                    return false;
                    new_qty = 1;
                }
            }
            //get cart id
            var cartid = $(this).data('cartid');
            // alert(cartid);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    cartid: cartid,
                    qty: new_qty
                },
                url: '/cart/update',
                type: "POST",
                success:function(resp){
                    // alert(resp);
                    // console.log(resp);
                    $("#appendCartItems").html(resp.view);
                },
                error:function(error){
                    alert(error);
                }
            })
        });
    });
</script>
    
@endsection