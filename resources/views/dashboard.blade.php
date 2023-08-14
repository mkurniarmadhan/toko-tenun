<x-app-layout>

    <x-slot name="heading">
        {{ __('Katalog Produk') }}
        <x-slot name="heading_text">
            {{ __('katalog produk') }}
        </x-slot>
    </x-slot>

    {{-- {{ __(  Auth::check()) }} --}}


    <div class="row">
        @foreach ($produks as $produk)
            <div class="col-xl-4 col-md-6 col-6">
                <div class="card">
                    <div class="card-content">
                        <img src="{{ asset("assets/images/produk/$produk->foto") }}" class="card-img-top img-fluid"
                            alt="singleminded" />
                        <div class="card-body">
                            <h5 class="card-title">{{ $produk->namaproduk }}
                            </h5>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> {{ $produk->harga }}
                        </li>
                        <li class="list-group-item"> {{ $produk->kategori_id }} </li>
                        <li class="list-group-item"><a href="{{ route('produk.show', $produk->id) }}"
                                class="btn btn-outline-primary w-100">Lihat</a></li>
                    </ul>
                </div>
            </div>
        @endforeach

    </div>
    </section>


</x-app-layout>
