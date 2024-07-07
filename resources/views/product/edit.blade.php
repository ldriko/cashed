<x-layout>
    <x-slot:title>Edit Product</x-slot:title>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" placeholder="Masukkan nama">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Harga</label>
                            <input type="text" class="form-control" id="price" placeholder="Masukkan harga">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar</label>
                            <input class="form-control" type="file" id="image">
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="active" checked>
                            <label class="form-check-label" for="active">Aktif</label>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-dark">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
