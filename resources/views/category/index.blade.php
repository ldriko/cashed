<x-layout>
    <x-slot:title>Categories</x-slot:title>

    <div class="container">
        <div class="d-flex mb-2 justify-content-end">
            <a href="/categories/create" class="btn btn-dark">Tambah</a>
        </div>

        <div class="card overflow-hidden">
            <table class="table m-0">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Aktif</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>Aktif</td>
                            <td align="right">
                                <a href="{{ route('categories.edit', ['category' => $category->id]) }}"
                                    class="btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
