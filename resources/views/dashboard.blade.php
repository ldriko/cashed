<x-layout>
    <x-slot:title>Dashboard</x-slot:title>

    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div>Products Terjual</div>
                        <h1 class="fw-bold">{{ number_format($productsSold) }}</h1>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div>Pendapatan</div>
                        <h1 class="fw-bold">{{ number_format($revenue) }}</h1>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div>Orders</div>
                        <h1 class="fw-bold">{{ number_format($ordersCount) }}</h1>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div>Products</div>
                        <h1 class="fw-bold">{{ number_format($productsCount) }}</h1>
                    </div>
                </div>
            </div>
        </div>

        <h6>{{ count($recentOrders) }} Orders Terkini</h6>

        <div class="card mb-2 overflow-hidden">
            <table class="table m-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Customer</th>
                        <th>Payment</th>
                        <th>Total</th>
                        <th>User</th>
                        <th>Tanggal</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($recentOrders as $order)
                        <tr>
                            <td>Order #{{ $order->id }}</td>
                            <td>{{ $order->customer }}</td>
                            <td>{{ number_format($order->payment) }}</td>
                            <td>{{ number_format($order->total) }}</td>
                            <td>{{ $order->user->name }}</td>
                            <td>{{ $order->formatted_created_at }}</td>
                            <td class="text-end">
                                <a href="{{ route('orders.show', ['order' => $order->id]) }}"
                                    class="btn btn-sm btn-primary">
                                    Lihat
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Belum ada order</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
