<x-app-layout title="Profil Saya">
    <x-slot name="heading">
        {{ __('data produk') }}
        <x-slot name="heading_text">
            {{ __('data produk') }}
        </x-slot>
    </x-slot>

    <section class="row">
        <div class="col-12">
            <a href="#" class="btn btn-md btn-primary mb-3">Tambah Produk</a>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>data produk </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-lg">
                            <thead>
                                <tr>
                                    <th>Produk</th>
                                    <th>Kategori </th>
                                    <th>Harga </th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produks as $produk)
                                    <tr>
                                        <td class="col-3">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-md">
                                                    <img src="{{ $produk->foto }}">
                                                </div>
                                                <p class="font-bold ms-3 mb-0">{{ $produk->namaproduk }}
                                                </p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class="mb-0">
                                                {{ $produk->kategori->namakategori }} </p>
                                        </td>
                                        <td class="col-auto">
                                            <p class="mb-0">
                                                Rp. {{ number_format($produk->harga, 2) }} </p>
                                        </td>
                                        <td class="col-auto">
                                            <a href="{{ route('produk.show', $produk->id) }}"
                                                class="btn btn-sm btn-success">Detail</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>




    </section>
</x-app-layout>
