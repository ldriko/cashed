<x-layout>
    <x-slot:title>Orders</x-slot:title>

    <div class="container">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="d-flex mb-2 justify-content-between">
            <form class="d-flex align-items-center gap-2" method="get">
                <input type="date" class="form-control w-auto" placeholder="Pilih periode awal" name="start_date"
                    value="{{ request()->start_date ?? date('Y-m-01') }}">
                -
                <input type="date" class="form-control w-auto" placeholder="Pilih periode akhir" name="end_date"
                    value="{{ request()->end_date ?? date('Y-m-d') }}">
                <input type="text" class="form-control w-auto" placeholder="Cari order" name="search"
                    value="{{ request()->search }}">
                <button type="submit" class="btn btn-dark">Cari</button>
            </form>

            <a href="{{ route('orders.create') }}" class="btn btn-dark">Buat Order Baru</a>
        </div>

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
                    @forelse ($orders as $order)
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

        {{ $orders->links() }}
    </div>
</x-layout>
