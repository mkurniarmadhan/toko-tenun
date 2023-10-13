<x-pengguna-layout>

    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="{{ route('dashboard') }}">Home</a> <span class="mx-2 mb-0">/</span>
                    <strong class="text-black">Katalog Produk</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">

            <div class="row mb-5">
                <div class="col-md-12 order-2">

                    <div class="row">
                        <div class="col-md-12 mb-5">
                            <div class="float-md-left mb-4">
                                <h2 class="text-black h5">Semua Katalog</h2>
                            </div>
                            <div class="d-flex">
                                <div class="btn-group  mr-1 ml-md-auto">
                                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle"
                                        id="dropdownMenuReference" data-toggle="dropdown">Urutkan</button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                        <a class="dropdown-item" href="#">Relevance</a>
                                        <a class="dropdown-item" href="#">Name, A to Z</a>
                                        <a class="dropdown-item" href="#">Name, Z to A</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Harga, low to high</a>
                                        <a class="dropdown-item" href="#">Harga, high to low</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">

                        @foreach ($produks as $produk)
                        <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                            <div class="block-4 text-center border">
                                <figure class="block-4-image">
                                    <a href="{{ route('katalog.show', 2) }}"><img src="{{ $produk->foto }}"
                                            alt="Image placeholder" class="img-fluid"></a>
                                </figure>
                                <div class="block-4-text p-4">
                                    <h3><a href="{{ route('katalog.show', $produk) }}">{{ $produk->namaproduk }} </a>
                                    </h3>
                                    <p class="text-primary font-weight-bold">{{ $produk->harga }}</p>
                                    <p class="mb-0">Tersedia {{ $produk->stok }}</p>
                                </div>
                            </div>
                        </div>

                        @endforeach



                    </div>

                    {{ $produks->links() }}

                </div>

                {{-- <div class="col-md-3 order-1 mb-5 mb-md-0">
                    <div class="border p-4 rounded mb-4">
                        <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-1"><a href="#" class="d-flex"><span>Pakaian</span> <span
                                        class="text-black ml-auto">(10)</span></a></li>
                            <li class="mb-1"><a href="#" class="d-flex"><span>Ikat Kepala</span> <span
                                        class="text-black ml-auto">(27)</span></a></li>
                            <li class="mb-1"><a href="#" class="d-flex"><span>tas</span> <span
                                        class="text-black ml-auto">(224)</span></a></li>
                        </ul>
                    </div>

                </div> --}}
            </div>


        </div>
    </div>
</x-pengguna-layout>