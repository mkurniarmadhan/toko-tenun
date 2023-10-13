<x-pengguna-layout>

    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <a
                        href="cart.html">keranjang</a> <span class="mx-2 mb-0">/</span> <strong
                        class="text-black">transaksi pemesanan</strong></div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">


            <form action="{{ route('order.store') }}" class="row" method="post">
                @csrf
                <div class="col-md-6 mb-5 mb-md-0">
                    <h2 class="h3 mb-3 text-black">Detail Pemesan </h2>
                    <div class="p-3 p-lg-5 border">

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="namalengkap" class="text-black">Nama Lengkap<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="namalengkap" name="namalengkap">
                            </div>

                        </div>


                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="alamatlengkap" class="text-black">ALamat <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="alamatlengkap" name="alamatlengkap"
                                    placeholder="Jalan Rt rw">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="phone" class="text-black">Phone <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    placeholder="Jalan Rt rw">
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="c_order_notes" class="text-black">Catan pemesanan</label>
                            <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control"
                                placeholder="Tambhakna catatan..."></textarea>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">

                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h2 class="h3 mb-3 text-black">Pesanan Kamu </h2>
                            <div class="p-3 p-lg-5 border">
                                <table class="table site-block-order-table mb-5">
                                    <thead>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Top Up T-Shirt <strong class="mx-2">x</strong> 1</td>
                                            <td>Rp 150.00</td>
                                        </tr>

                                        <tr>
                                            <td class="text-black font-weight-bold"><strong>pesanan Total</strong>
                                            </td>
                                            <td class="text-black font-weight-bold"><strong>rp 150.00</strong></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="border p-3 mb-3">
                                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank"
                                            role="button" aria-expanded="false" aria-controls="collapsebank">Metode
                                            bayar</a></h3>

                                    <div class="collapse" id="collapsebank">
                                        <div class="py-2">
                                            <p class="mb-0"> Rekening BCA </p>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <button class="btn btn-primary btn-lg py-3 btn-block"
                                        onclick="window.location='{{ route('riwayat') }}'">Selesaikan
                                        PEsanan</button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </form>

            <!-- </form> -->
        </div>
    </div>

    </x-layuot>