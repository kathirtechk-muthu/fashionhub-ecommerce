
@extends('layouts.app')

@section('content')



<section class="checkout-page">
    <div class="container">

        <h2 class="checkout-title mb-4">Checkout</h2>

        <div class="row g-4">

            {{-- Customer Details --}}
            <div class="col-lg-7">
                <div class="checkout-card">

                    <h4 class="fw-bold mb-4">Billing Details</h4>

                    <form action="{{ route('checkout.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" name="customer_name"
               class="form-control checkout-input"
               placeholder="Enter your full name" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Email Address</label>
        <input type="email" name="email"
               class="form-control checkout-input"
               placeholder="Enter your email" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Phone Number</label>
        <input type="tel" name="phone"
               class="form-control checkout-input"
               placeholder="Enter your phone number" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Delivery Address</label>
        <textarea name="address" class="form-control checkout-input"
                  rows="3" placeholder="Enter your delivery address"
                  required></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">City</label>
        <input type="text" name="city"
               class="form-control checkout-input"
               placeholder="Enter your city" required>
    </div>

    <button type="submit" class="place-order-btn mt-3">
        Place Order
        <i class="bi bi-arrow-right"></i>
    </button>
</form>
                </div>
            </div>

          {{-- Order Summary --}}
<div class="col-lg-5">
    <div class="checkout-card">

        <h4 class="fw-bold mb-4">Order Summary</h4>

        @foreach($cartItems as $item)
            <div class="d-flex align-items-center gap-3 mb-3">
                <img src="{{ asset($item->image) }}"
                     width="65" height="65"
                     class="rounded object-fit-cover"
                     alt="{{ $item->product_name }}">

                <div class="flex-grow-1">
                    <h6 class="mb-1">{{ $item->product_name }}</h6>
                    <small class="text-muted">
                        Qty: {{ $item->quantity }}
                    </small>
                </div>

                <span class="fw-semibold">
                    ₹{{ number_format($item->price * $item->quantity, 2) }}
                </span>
            </div>
        @endforeach

        <hr>

        <div class="d-flex justify-content-between mb-3">
            <span>Subtotal</span>
            <span>₹{{ number_format($total, 2) }}</span>
        </div>

        <div class="d-flex justify-content-between mb-3">
            <span>Shipping</span>
            <span class="text-success">Free</span>
        </div>

        <hr>

        <div class="d-flex justify-content-between">
            <h5 class="fw-bold">Total</h5>
            <h5 class="fw-bold">₹{{ number_format($total, 2) }}</h5>
        </div>

        <p class="text-muted text-center small mt-3 mb-0">
            <i class="bi bi-shield-check"></i>
            Secure shopping experience
        </p>

    </div>
</div>
        </div>
    </div>
</section>

@endsection
