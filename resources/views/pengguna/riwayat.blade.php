<x-pengguna-layout>

    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong
                        class="text-black">Contact</strong></div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">


            <div class="row mb-5">
                <div class="col-md-12">
                    <h2 class="h3 mb-3 text-black">Riwayat Pesanan Kamu </h2>
                    <div class="p-3 p-lg-5 border">
                        <table class="table site-block-order-table mb-5">
                            <thead>
                                <th>Kode Transaksi</th>
                                <th>Tanggal Transaksi</th>
                                <th>Total</th>
                                <th>Opsi</th>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>#8764375nd</td>
                                    <td>MInggu , 23 November 2023</td>
                                    <td>Rp 150.00</td>
                                    <td><a href="{{ route('riwayatshow') }}" class="btn-sm btn btn-success"> Lihat
                                            detail</a></td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


        </div>
    </div>
</x-pengguna-layout>
