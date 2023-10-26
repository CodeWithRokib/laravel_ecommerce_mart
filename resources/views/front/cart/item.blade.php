<div class="row px-xl-5">
    <div class="col-lg-8 table-responsive mb-5">
        <table class="table table-bordered text-center mb-0">
            <thead class="bg-secondary text-dark">
                <tr>
                    <th>Products</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Sub Total</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                @foreach ($carts as $cart)
                <tr>
                    <td class="align-middle"><img src="{{ asset($cart->product->image) }}" alt="" style="width: 50px;"></td>
                    <td class="align-middle"><span id="price">{{ $cart->price }}</span> <img src="{{ asset ('assets/images/bdcurrency.png')}}" alt="" style="width: 12px;
    margin-top: -4px;"></td>
                    <td class="align-middle">
                        <div class="input-group quantity mx-auto" style="width: 100px;">
                            <a class="plus-a updateCartItem btn btn-sm btn-primary" data-cartid="{{ $cart->id }}" data-qty="{{ $cart->quantity }}" data-max="1000">&#43;</a>
                            <input type="text" class="form-control form-control-sm quantity-text-field bg-secondary text-center" id="number-field" value="{{ $cart->quantity ?? 1 }}">
                            <a class="minus-a updateCartItem btn btn-sm btn-primary" data-cartid="{{ $cart->id }}" data-qty="{{ $cart->quantity }}" data-max="1">&#45;</a>

                        </div>
                    </td>

                    <td class="align-middle"><span id="subtotal">{{ $cart->price * $cart->quantity }} <img src="{{ asset ('assets/images/bdcurrency.png')}}" alt="" style="width: 12px;
    margin-top: -4px;"></span></td>
                    <td class="align-middle">
                        <form action="{{ route('cart.destroy', $cart->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-lg-4">
        <div class="card border-secondary mb-5">
            <div class="card-header bg-secondary border-0">
                <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
            </div>
            @php
            $subtotal = DB::table('carts')->where('user_id', Auth::id())->sum('subtotal');
            @endphp
            <div class="card-body">
                <div class="d-flex justify-content-between mb-3 pt-1">
                    <h6 class="font-weight-medium">Subtotal</h6>
                    <h6 class="font-weight-medium">BDT : {{ $subtotal }} <img src="{{ asset ('assets/images/bdcurrency.png')}}" alt="" style="width: 10px;
    margin-top: -4px;"></h6>
                </div>
                <div class="d-flex justify-content-between">
                    <h6 class="font-weight-medium">Shipping</h6>
                    <h6 class="font-weight-medium">BDT : 10 <img src="{{ asset ('assets/images/bdcurrency.png')}}" alt="" style="width: 10px;
    margin-top: -4px;"></h6>
                </div>
            </div>
            <div class="card-footer border-secondary bg-transparent">
                <div class="d-flex justify-content-between mt-2">
                    <h5 class="font-weight-bold">Total</h5>
                    <h5 class="font-weight-bold">BDT : {{ $subtotal + 10 }} <img src="{{ asset ('assets/images/bdcurrency.png')}}" alt="" style="width: 15px;
    margin-top: -4px;"></h5>
                </div>
                
                <form action="{{ route('order.details') }}" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    @foreach ($carts as $cart)
                    <input type="hidden" name="cart_id[]" multiple value="{{ $cart->id }}">
                    @endforeach
                    <input type="hidden" name="total" value="{{ $subtotal + 10 }}">
                    <input type="hidden" name="status" value="pending">
                    <input type="submit" class="btn btn-block btn-primary my-3 py-3" value="Proceed To Checkout">
                </form>
                
            </div>
        </div>
    </div>
</div>