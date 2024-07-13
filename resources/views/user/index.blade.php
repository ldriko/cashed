<x-layout>
    <x-slot:title>Users</x-slot:title>

    <div class="container">
        <div class="d-flex mb-2 justify-content-between">
            <input type="text" placeholder="Cari user" class="w-auto form-control">
            <a href="/users/create" class="btn btn-dark">Tambah</a>
        </div>

        <div class="card overflow-hidden">
            <table class="table m-0">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aktif</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ryan</td>
                        <td>ryan@example.com</td>
                        <td>Aktif</td>
                        <td align="right">
                            <a href="/users/edit" class="btn btn-sm btn-primary">Edit</a>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Sam</td>
                        <td>sam@example.com</td>
                        <td>Aktif</td>
                        <td align="right">
                            <a href="/users/edit" class="btn btn-sm btn-primary">Edit</a>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Karen</td>
                        <td>karen@example.com</td>
                        <td>Aktif</td>
                        <td align="right">
                            <a href="/users/edit" class="btn btn-sm btn-primary">Edit</a>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
