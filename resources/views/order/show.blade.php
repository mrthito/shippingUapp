<x-app-layout>
    <div class="page-header d-print-none">
        <div class="row align-items-center">
            <div class="col-sm mb-2 mb-sm-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-no-gutter">
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="">Orders</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Order details</li>
                    </ol>
                </nav>

                <div class="d-sm-flex align-items-sm-center">
                    <h1 class="page-header-title">Order #{{ $order->id }}</h1>
                    <span class="badge bg-soft-success text-success ms-sm-3">
                        <span class="legend-indicator bg-success"></span>{{ $order->status }}
                    </span>
                    <span class="badge bg-soft-info text-info ms-2 ms-sm-3">
                        <span
                            class="legend-indicator bg-info"></span>{{ count($order->shipping_lines) ? $order->shipping_lines[0]->method_title : 'N/A' }}
                    </span>
                    <span class="ms-2 ms-sm-3">
                        <i class="bi-calendar-week"></i> Aug 17, 2020, 5:48 (ET)
                    </span>
                </div>

                <div class="mt-2">
                    <div class="d-flex gap-2">
                        <a class="text-body me-3" href="javascript:;" onclick="window.print(); return false;">
                            <i class="bi-printer me-1"></i> Print order
                        </a>

                        <!-- Dropdown -->
                        <div class="dropdown">
                            <a class="text-body" href="javascript:;" id="moreOptionsDropdown" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                More options <i class="bi-chevron-down"></i>
                            </a>

                            <div class="dropdown-menu mt-1" aria-labelledby="moreOptionsDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="bi-clipboard dropdown-item-icon"></i> Duplicate
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="bi-x dropdown-item-icon"></i> Cancel order
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="bi-archive dropdown-item-icon"></i> Archive
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="bi-eye dropdown-item-icon"></i> View order status page
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="bi-pencil dropdown-item-icon"></i> Edit order
                                </a>
                            </div>
                        </div>
                        <!-- End Dropdown -->
                    </div>
                </div>
            </div>
            <!-- End Col -->

            <div class="col-sm-auto">
                <div class="d-flex gap-2">
                    <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle"
                        data-bs-toggle="tooltip" data-bs-placement="right" title="Previous order">
                        <i class="bi-arrow-left"></i>
                    </button>
                    <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle"
                        data-bs-toggle="tooltip" data-bs-placement="right" title="Next order">
                        <i class="bi-arrow-right"></i>
                    </button>
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>

    <div class="row">
        <div class="col-lg-12 mb-3 mb-lg-0">

            <div class="card">
                <!-- Header -->
                <div class="card-header">
                    <h4 class="card-header-title">
                        Shipping activity
                        <span class="badge bg-soft-dark text-dark ms-1">
                            <span class="legend-indicator bg-dark"></span>Marked as fulfilled
                        </span>
                    </h4>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="card-body">
                    <!-- Step -->
                    <ul class="step step-icon-xs">
                        <!-- Step Item -->
                        <li class="step-item">
                            <div class="step-content-wrapper">
                                <span class="step-divider">Wednesday, 19 August</span>
                            </div>
                        </li>
                        <!-- End Step Item -->

                        <!-- Step Item -->
                        <li class="step-item">
                            <div class="step-content-wrapper">
                                <span class="step-icon step-icon-soft-dark step-icon-pseudo"></span>

                                <div class="step-content">
                                    <h5 class="mb-1">
                                        <a class="text-dark" href="#">Delivered</a>
                                    </h5>

                                    <p class="fs-6 mb-0">4:17 AM</p>
                                </div>
                            </div>
                        </li>
                        <!-- End Step Item -->

                        <!-- Step Item -->
                        <li class="step-item">
                            <div class="step-content-wrapper">
                                <span class="step-icon step-icon-soft-dark step-icon-pseudo"></span>

                                <div class="step-content">
                                    <h5 class="mb-1">
                                        <a class="text-dark" href="#">Out for delivery</a>
                                    </h5>

                                    <p class="fs-6 mb-0">2:38 AM</p>
                                </div>
                            </div>
                        </li>
                        <!-- End Step Item -->

                        <!-- Step Item -->
                        <li class="step-item">
                            <div class="step-content-wrapper">
                                <span class="step-icon step-icon-soft-dark step-icon-pseudo"></span>

                                <div class="step-content">
                                    <h5 class="mb-1">
                                        <a class="text-dark" href="#">Package arrived at the final delivery
                                            station</a>
                                    </h5>

                                    <p class="fs-6 mb-0">2:00 AM</p>
                                </div>
                            </div>
                        </li>
                        <!-- End Step Item -->

                        <!-- Step Item -->
                        <li class="step-item">
                            <div class="step-content-wrapper">
                                <span class="step-divider">Tuesday, 18 August</span>
                            </div>
                        </li>
                        <!-- End Step Item -->

                        <!-- Step Item -->
                        <li class="step-item">
                            <div class="step-content-wrapper">
                                <span class="step-icon step-icon-soft-dark step-icon-pseudo"></span>

                                <div class="step-content">
                                    <h5 class="mb-1">
                                        <a class="text-dark" href="#">Tracking number</a>
                                    </h5>

                                    <a href="#">3981241023109293</a>
                                    <p class="fs-6 mb-0">6:29 AM</p>
                                </div>
                            </div>
                        </li>
                        <!-- End Step Item -->

                        <!-- Step Item -->
                        <li class="step-item">
                            <div class="step-content-wrapper">
                                <span class="step-icon step-icon-soft-dark step-icon-pseudo"></span>

                                <div class="step-content">
                                    <h5 class="mb-1">
                                        <a class="text-dark" href="#">Package has dispatched</a>
                                    </h5>

                                    <p class="fs-6 mb-0">6:29 AM</p>
                                </div>
                            </div>
                        </li>
                        <!-- End Step Item -->

                        <!-- Step Item -->
                        <li class="step-item">
                            <div class="step-content-wrapper">
                                <span class="step-icon step-icon-soft-dark step-icon-pseudo"></span>

                                <div class="step-content">
                                    <h5 class="mb-1">
                                        <a class="text-dark" href="#">Order was placed</a>
                                    </h5>

                                    <p class="fs-6 mb-0">Order #32543</p>
                                </div>
                            </div>
                        </li>
                        <!-- End Step Item -->
                    </ul>
                    <!-- End Step -->

                    <span class="small">Times are shown in the local time zone.</span>
                </div>
                <!-- End Body -->
            </div>

            <div class="card mb-3 mb-lg-5">
                <div class="card-header card-header-content-between">
                    <h4 class="card-header-title">
                        Order details
                        <span class="badge bg-soft-dark text-dark rounded-circle ms-1">4</span>
                    </h4>
                </div>

                <div class="card-body">
                    @forelse($order->line_items as $item)
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="avatar avatar-xl">
                                    <img class="img-fluid" src="{{ $item->image->src }}" alt="Image Description">
                                </div>
                            </div>

                            <div class="flex-grow-1 ms-3">
                                <div class="row">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <a class="h5 d-block" href="./ecommerce-product-details.html">
                                            {{ $item->name }}
                                        </a>
                                    </div>

                                    <div class="col col-md-2 align-self-center">
                                        <h5>${{ $item->subtotal }}</h5>
                                    </div>

                                    <div class="col col-md-2 align-self-center">
                                        <h5>{{ $item->quantity }}</h5>
                                    </div>

                                    <div class="col col-md-2 align-self-center text-end">
                                        <h5>${{ $item->total }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
