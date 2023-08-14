@section('script')
    <script>
        // cek authenticate dari user !

        const _csrf_token = $("meta[name='csrf-token']").attr("content");
        const _auth_token = $("meta[name='auth-token']").attr("content");

        $("#pilih_produk").on('click', function() {
            const id = $(this).data('id');
            if (_auth_token) {
                const user_id =
                    '{{ auth()->user()->id ?? '' }}';
                $.ajax({
                    url: "{{ route('transaksi.store') }}",
                    type: "POST",
                    dataType: "JSON",
                    cache: false,
                    data: {
                        _token: _csrf_token,
                        user_id: user_id,
                        produk_id: id
                    },
                    success: function(data) {
                        const x = data.status;
                        let url = "{{ route('profile.riwayat', ':to') }}";
                        url = url.replace(':to', x);
                        Swal.fire({
                            icon: "warning",
                            showConfirmButton: false,
                            title: "Ya ... Kamu harus login dulu",
                            timer: 2000,
                        }).then(() => {
                            return location.href = url;
                        });

                    }
                })
            } else {
                Swal.fire({
                    icon: "warning",
                    showConfirmButton: false,
                    title: "Ya ... Kamu harus login dulu",
                    timer: 2000,
                }).then(() => {
                    return window.location.href = "/login";
                });
            }

            console.log(_auth_token)
            console.log(_csrf_token)
        });
    </script>
@endsection
