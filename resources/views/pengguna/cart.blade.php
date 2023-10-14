<x-pengguna-layout>

    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="{{ route('dashboard') }}">Home</a> <span class="mx-2 mb-0">/</span>
                    <strong class="text-black">Cart</strong></div>
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

                                    <th class="product-name">Produk</th>
                                    <th class="product-price">Harga</th>
                                    <th class="product-quantity">Jumlah</th>
                                    <th class="product-total">Total</th>
                                    <th class="product-remove">Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($carts as $cart)
                                {{ $cart->foto }}
                                <tr>

                                    <td class="product-name">
                                        <h2 class="h5 text-black">{{ $cart->name }}</h2>
                                    </td>
                                    <td>RP {{ number_format($cart->price) }}</td>
                                    <td>

                                        <div rowId={{ $cart->id }} style="max-width: 120px;"
                                            class="input-group w-auto
                                            justify-content-end
                                            align-items-center">
                                            <input type="button" value="-" class="btn btn-outline-primary button-minus "
                                                data-field="quantity">
                                            <input type="number" step="1" max="10" value="{{ $cart->quantity }}"
                                                name="quantity"
                                                class="form-control   quantity-field border-0 text-center w-25">
                                            <input type="button" value="+" class="btn btn-outline-primary button-plus"
                                                data-field="quantity">
                                        </div>

                                    </td>
                                    <td>Rp {{ number_format($cart->getPriceSum()) }}</td>
                                    <td><a href="{{ route('cart.remove', $cart->id) }}"
                                            class="btn btn-primary btn-sm">X</a></td>
                                </tr>

                                @empty
                                <tr>
                                    <td>Keranjang Masih Kosong</td>
                                </tr>
                                @endforelse


                            </tbody>
                        </table>
                    </div>

            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="row mb-5">

                        <div class="col-md-6">
                            <a href="{{ route('katalog') }}" class="btn btn-outline-primary btn-sm btn-block">Cari
                                Produk Lain </a>
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
                                    <strong class="text-black">Rp {{ number_format(\Cart::getSubTotal()) }}</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">

                                    <a href="{{ route('checkout') }}"
                                        class="btn btn-primary btn-lg py-3 btn-block">Order</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



    @push('script')
    <script>
        function incrementValue(e) {
                e.preventDefault();
                var fieldName = $(e.target).data('field');

                var parent = $(e.target).closest('div');

                var rowId = parent.attr('rowId')
                var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);
                if (!isNaN(currentVal)) {
                    parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
                } else {
                    parent.find('input[name=' + fieldName + ']').val(0);
                }
var currentVal = currentVal +1
                sendAjax(rowId, currentVal)


            }




            function decrementValue(e) {
                e.preventDefault();
                var fieldName = $(e.target).data('field');
                var parent = $(e.target).closest('div');
                var rowId = parent.attr('rowId')
                var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);
                if (!isNaN(currentVal) && currentVal > 0) {
                    parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
                } else {
                    parent.find('input[name=' + fieldName + ']').val(0);
                }
var currentVal = currentVal -1
                sendAjax(rowId, currentVal)

            }



            function sendAjax(rowId, currentVal) {

                $.ajax({
                    url: '{{ route('cart.update') }}',
                    method: "patch",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: rowId,
                        qty: currentVal
                    },
                    success: function(response) {
                           window.location.reload();

                    }
                });


            }



            $('.input-group ').on('click', '.button-minus', function(e) {
                decrementValue(e);
            });
            $('.input-group ').on('click', '.button-plus', function(e) {
                incrementValue(e);

            });
    </script>
    @endpush



</x-pengguna-layout>