<x-app-layout title="Profil Saya">
    <x-slot name="heading">
        {{ __('Produk') }}
        <x-slot name="heading_text">
            {{ __($produk->nama) }}
        </x-slot>
    </x-slot>

    <section class="section">

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ $produk->nama }}</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <div></div>
                    <div class="col-12 col-sm-6 col-lg-4 mt-2 mt-md-0 mb-md-0 mb-2">
                        <div class="row">

                            <a href="#" class="mb-4">
                                <img src="{{ $produk->foto }}" class="card-img-top img-fluid" alt="singleminded" />
                            </a>
                            <div class="col-12">
                                <h4>HARGA MULAI DARI : Rp. {{ number_format($produk->harga) }}</h1>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="form-group">
                                    <label for="helperText">Nama Produk</label>
                                    <input type="text" id="helperText" class="form-control" placeholder="Name"
                                        readonly value="{{ $produk->nama }}" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="form-group">
                                    <label for="helperText">Bahan Kaos</label>
                                    <input type="text" id="helperText" class="form-control" placeholder="Name"
                                        readonly value="{{ $produk->bahan }}" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="form-group">
                                    <label for="helperText">Jenis Sablon</label>
                                    <input type="text" id="helperText" class="form-control" placeholder="Name"
                                        readonly value="{{ $produk->jenis }}" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6 mb-4">
                                <a href="#">
                                    <img class="w-100 active" src="{{ asset('assets/images/produk/panduan.png') }}"
                                        data-bs-toggle="modal" data-bs-target="#small" />
                                </a>
                                {{-- modal --}}
                                <div class="modal fade text-left" id="small" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel19" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel19">panduan ukuran Kaos</h4>
                                                <button type="button" class="close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img class="w-100 active"
                                                    src="{{ asset('assets/images/produk/panduan.png') }}"
                                                    data-bs-toggle="modal" data-bs-target="#small" />
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                {{-- modal --}}
                            </div>
                            <div class="col-12">
                                <div class="form-group with-title mb-3">
                                    <textarea readonly class="form-control" id="exampleFormControlTextarea1" rows="6">1. Untuk desain pada produk bisa di custom. &#13;2. Untuk saat ini pemesanan hanya bisa dilakukan di area jogjakarta&#13;3. Desain Kaos bisa di custom , silahkan tinggalkan catatan pada laman pemesanan</textarea>
                                    <label>Catatan</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-12">
                            <button id="pilih_produk" data-harga={{ $produk->harga }} data-id="{{ $produk->id }}"
                                type="button" class="btn btn-primary">
                                Pesan
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </section>

    @section('script')
        <script></script>
    @endsection
    </x-main-layout>
