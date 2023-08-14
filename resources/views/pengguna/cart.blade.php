<x-pengguna-layout>

    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong
                        class="text-black">Cart</strong></div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <form class="col-md-12" method="post">
                    <div class="site-blocks-table">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Foto</th>
                                    <th class="product-name">Produk</th>
                                    <th class="product-price">Harga</th>
                                    <th class="product-quantity">Jumlah</th>
                                    <th class="product-total">Total</th>
                                    <th class="product-remove">Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-thumbnail">
                                        <img src="{{ Storage::url('produk/p1.jpeg') }}" alt="Image"
                                            class="img-fluid">
                                    </td>
                                    <td class="product-name">
                                        <h2 class="h5 text-black">Top Up T-Shirt</h2>
                                    </td>
                                    <td>RP 149.00</td>
                                    <td>
                                        <div class="input-group mb-3" style="max-width: 120px;">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-primary js-btn-minus"
                                                    type="button">&minus;</button>
                                            </div>
                                            <input type="text" class="form-control text-center" value="1"
                                                placeholder="" aria-label="Example text with button addon"
                                                aria-describedby="button-addon1">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-primary js-btn-plus"
                                                    type="button">&plus;</button>
                                            </div>
                                        </div>

                                    </td>
                                    <td>Rp 149.00</td>
                                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="row mb-5">

                        <div class="col-md-6">
                            <button class="btn btn-outline-primary btn-sm btn-block">Cari Produk Lain </button>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 pl-5">
                    <div class="row justify-content-end">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-12 text-right border-bottom mb-5">
                                    <h3 class="text-black h4 text-uppercase">Total</h3>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <span class="text-black">total belanja</span>
                                </div>
                                <div class="col-md-6 text-right">
                                    <strong class="text-black">Rp 149.00</strong>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-primary btn-lg py-3 btn-block"
                                        onclick="window.location='{{ route('checkout') }}'">Pesan Sekarang</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-pengguna-layout>
