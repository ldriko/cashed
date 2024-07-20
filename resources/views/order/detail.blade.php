<x-layout title="Orders">
    <div class="container">
        <div class="row">
            <div class="col col-lg-4">
                <div class="card">
                    <div class="card-body border-bottom fw-bold">
                        <a href="{{ route('orders.index') }}" class="text-decoration-none text-black me-2">
                            <i class="bi bi-arrow-left"></i>
                        </a>

                        Product
                    </div>
                    <div class="card-body">
                        <form method="post">
                            @csrf

                            <x-text-input name="name" label="Nama" value="Product 1"></x-text-input>
                            <x-text-input name="qty" label="Qty" type="number" value="1"></x-text-input>
                            <x-text-input name="price" label="Price" type="number" value="10000"></x-text-input>

                            <div class="d-flex flex-row-reverse flex-reverse justify-content-between">
                                <button type="submit" class="btn btn-dark">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
