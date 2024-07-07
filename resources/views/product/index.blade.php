<x-layout>
    <x-slot:title>Product</x-slot:title>

    <div class="container">
        <div class="d-flex mb-2 justify-content-end">
            <a href="/products/create" class="btn btn-dark">Tambah</a>
        </div>

        <div class="card overflow-hidden">
            <table class="table m-0">
                <thead>
                    <tr>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aktif</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>Kentang Goreng</td>
                        <td>10.000</td>
                        <td>Aktif</td>
                        <td align="right">
                            <a href="/products/edit" class="btn btn-sm btn-primary">Edit</a>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Es Teh</td>
                        <td>5.000</td>
                        <td>Aktif</td>
                        <td align="right">
                            <a href="/products/edit" class="btn btn-sm btn-primary">Edit</a>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Teh Hangat</td>
                        <td>5.000</td>
                        <td>Aktif</td>
                        <td align="right">
                            <a href="/products/edit" class="btn btn-sm btn-primary">Edit</a>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
