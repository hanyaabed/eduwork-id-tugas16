<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Produk') }}
        </h2>
    </x-slot>
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <button class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Tambah Produk
            </button>
        </div>

        <table class="table table-striped table-bordered align-middle bg-white">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Produk A</td>
                    <td>Deskripsi Produk A</td>
                    <td>15</td>
                    <td>15.000</td>
                    <td><img src="https://via.placeholder.com/150" alt="product A"></td>
                    <td>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Produk B</td>
                    <td>Deskripsi Produk B</td>
                    <td>30</td>
                    <td>30.000</td>
                    <td><img src="https://via.placeholder.com/150" alt="product B"></td>
                    <td>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Produk C</td>
                    <td>Deskripsi Produk C</td>
                    <td>20</td>
                    <td>20.000</td>
                    <td><img src="https://via.placeholder.com/150" alt="product C"></td>
                    <td>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-app-layout>