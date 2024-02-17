<x-app-layout>

    <div class="card">
        <div class="table-responsive datatable-custom position-relative">
            <table id="datatable"
                class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                <thead class="thead-light">
                    <tr>
                        <th class="table-column-ps-2">Order</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Total</th>
                        <th>Origin</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($orders as $order)
                        <tr>
                            <td class="table-column-ps-2">
                                <a class="d-flex align-items-center" href="{{ route('dashboard.orders.show', $order->id) }}">
                                    #{{ $order->id }} {{ $order->order_key }}
                                </a>
                            </td>
                            <td>
                                {{ date('M d, Y', strtotime($order->date_created)) }}
                            </td>
                            <td>
                                {{ $order->status }}
                            </td>
                            <td>
                                {{ $order->currency }} {{ $order->total }}
                            </td>
                            <td>
                                App
                            </td>
                            <td>
                                <a href="{{ route('dashboard.orders.show', $order->id) }}" class="btn btn-white btn-sm">
                                    <i class="bi-pencil-fill me-1"></i> Edit
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">No orders found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
