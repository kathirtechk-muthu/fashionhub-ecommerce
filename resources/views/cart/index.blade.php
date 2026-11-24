
@extends('layouts.app')

@section('content')


<section class="cart-page">
    <div class="container">

        <div class="mb-4">
            <h2 class="cart-title">My Shopping Cart</h2>
            <p class="cart-subtitle">Review your items before checkout.</p>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($cartItems->count() > 0)

            <div class="row g-4">

                {{-- Cart Products --}}
                <div class="col-lg-8">

                    @foreach($cartItems as $item)

                        <div class="cart-item">
                            <div class="row align-items-center g-3">

                                <div class="col-4 col-md-3">
                                    <img src="{{ asset($item->image) }}"
                                         class="cart-product-image img-fluid"
                                         alt="{{ $item->product_name }}">
                                </div>

                                <div class="col-8 col-md-9">

                                    <h5 class="cart-product-name">
                                        {{ $item->product_name }}
                                    </h5>

                                    <p class="cart-price mb-2">
                                        ₹{{ number_format($item->price, 2) }}
                                    </p>

                                    {{-- Update Quantity --}}
                                    <form action="{{ route('cart.update', $item->id) }}"
                                          method="POST"
                                          class="d-flex align-items-center gap-2 flex-wrap mb-3">
                                        @csrf
                                        @method('PATCH')

                                        <label class="small fw-semibold">Qty:</label>

                                        <input type="number"
                                               name="quantity"
                                               value="{{ $item->quantity }}"
                                               min="1"
                                               class="form-control cart-qty-input">

                                        <button type="submit"
                                                class="btn btn-dark btn-sm">
                                            Update
                                        </button>
                                    </form>

                                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">

                                        <span class="fw-bold">
                                            Subtotal:
                                            ₹{{ number_format($item->price * $item->quantity, 2) }}
                                        </span>

                                        {{-- Remove Product --}}
                                        <form action="{{ route('cart.remove', $item->id) }}"
                                              method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-outline-danger btn-sm">
                                                <i class="bi bi-trash"></i>
                                                Remove
                                            </button>
                                        </form>

                                    </div>

                                </div>

                            </div>
                        </div>

                    @endforeach

                    <a href="{{ url('/home') }}"
                       class="btn btn-outline-dark continue-btn">
                        <i class="bi bi-arrow-left"></i>
                        Continue Shopping
                    </a>

                </div>

                {{-- Cart Summary --}}
                <div class="col-lg-4">

                    <div class="cart-summary">

                        <h4 class="mb-4">Order Summary</h4>

                        <div class="d-flex justify-content-between mb-3">
                            <span>Items</span>
                            <span>{{ $cartItems->sum('quantity') }}</span>
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <span>Subtotal</span>
                            <span>
                                ₹{{ number_format($cartItems->sum(function ($item) {
                                    return $item->price * $item->quantity;
                                }), 2) }}
                            </span>
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <span>Shipping</span>
                            <span class="text-success">Free</span>
                        </div>

                        <hr>

                        <div class="d-flex justify-content-between mb-4">
                            <h5 class="fw-bold">Total</h5>
                            <h5 class="fw-bold">
                                ₹{{ number_format($cartItems->sum(function ($item) {
                                    return $item->price * $item->quantity;
                                }), 2) }}
                            </h5>
                        </div>

                        <a href="{{ route('checkout') }}" class="checkout-btn text-decoration-none d-block text-center">
    Proceed to Checkout
    <i class="bi bi-arrow-right"></i>
</a>

                        <p class="text-muted text-center small mt-3 mb-0">
                            <i class="bi bi-shield-check"></i>
                            Secure shopping experience
                        </p>

                    </div>

                </div>

            </div>

        @else

            <div class="text-center bg-white rounded-4 p-5">

                <i class="bi bi-cart3 display-1 text-secondary"></i>

                <h3 class="mt-3 fw-bold">Your Cart is Empty</h3>

                <p class="text-muted">
                    You haven't added any products to your cart yet.
                </p>

                <a href="{{ url('/home') }}" class="btn btn-dark px-4 mt-2">
                    Start Shopping
                </a>

            </div>

        @endif

    </div>
</section>

@endsection
