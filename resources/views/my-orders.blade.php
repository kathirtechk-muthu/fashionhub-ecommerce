
@extends('layouts.app')

@section('content')

<div class="container py-5">

    <h2 class="fw-bold mb-4">My Orders</h2>

    @if($orders->isEmpty())

        <div class="text-center py-5">
            <i class="bi bi-box-seam text-muted"
               style="font-size: 60px;"></i>

            <h4 class="mt-3">No Orders Found</h4>

            <p class="text-muted">
                You haven't placed any orders yet.
            </p>

            <a href="{{ url('/home') }}" class="btn btn-dark">
                Continue Shopping
            </a>
        </div>

    @else

        @foreach($orders as $order)

            <div class="card border-0 shadow-sm rounded-3 mb-4">

                <div class="card-body p-4">

                    <div class="d-flex justify-content-between flex-wrap gap-3">

                        <div>
                            <h5 class="fw-bold">
                                Order #{{ $order->id }}
                            </h5>

                            <p class="text-muted mb-0">
                                {{ \Carbon\Carbon::parse($order->created_at)->format('d M Y, h:i A') }}
                            </p>
                        </div>

                        <span class="badge bg-warning text-dark align-self-start">
                            {{ $order->status }}
                        </span>

                    </div>

                    <hr>

                    <div class="row g-3">

                        <div class="col-md-6">
                            <small class="text-muted">Customer Name</small>
                            <p class="fw-semibold mb-0">
                                {{ $order->customer_name }}
                            </p>
                        </div>

                        <div class="col-md-6">
                            <small class="text-muted">Total Amount</small>
                            <p class="fw-bold mb-0">
                                ₹{{ number_format($order->total_amount, 2) }}
                            </p>
                        </div>

                        <div class="col-md-6">
                            <small class="text-muted">Payment Method</small>
                            <p class="fw-semibold mb-0">
                                {{ $order->payment_method }}
                            </p>
                        </div>

                        <div class="col-md-6">
                            <small class="text-muted">Delivery City</small>
                            <p class="fw-semibold mb-0">
                                {{ $order->city }}
                            </p>
                        </div>

                    </div>

                </div>
            </div>

        @endforeach

    @endif

</div>

@endsection
