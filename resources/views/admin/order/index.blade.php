<x-app-layout>

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Riwayat Order</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Pemesanan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tanggal Pesan</th>
                                <th>Nama Pemesan</th>
                                <th>Total </th>
                                <th>Status Bayar</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Tanggal Pesan</th>
                                <th>Nama Pemesan</th>
                                <th>Total </th>
                                <th>Status Bayar</th>
                                <th>Opsi</th>
                            </tr>
                        </tfoot>
                        <tbody>


                            @forelse ($orders as $order)
                            {{ $order }}
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>New York</td>
                                <td>New York</td>
                                <td>
                                    <a class="btn btn-success" href="#" data-toggle="modal" data-target="#hapusModal">
                                        Lihat
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td> Masih Kosong</td>
                            </tr>
                            @endforelse




                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>



    @push('script')


    <link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <!-- Page level plugins -->
    <script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('admin/js/demo/datatables-demo.js') }}"></script>

    @endpush
</x-app-layout>