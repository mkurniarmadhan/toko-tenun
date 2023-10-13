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

            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0">
                    <h2 class="h3 mb-3 text-black">Detail Pemesan </h2>
                    <div class="p-3 p-lg-5 border">
                        {{-- <div class="form-group">
                            <label for="c_country" class="text-black">Country <span class="text-danger">*</span></label>
                            <select id="c_country" class="form-control">
                                <option value="1">Select a country</option>
                                <option value="2">bangladesh</option>
                                <option value="3">Algeria</option>
                                <option value="4">Afghanistan</option>
                                <option value="5">Ghana</option>
                                <option value="6">Albania</option>
                                <option value="7">Bahrain</option>
                                <option value="8">Colombia</option>
                                <option value="9">Dominican Republic</option>
                            </select>
                        </div> --}}
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_fname" class="text-black">Nama Lengkap<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_fname" name="c_fname">
                            </div>

                        </div>


                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_address" class="text-black">ALamat <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_address" name="c_address"
                                    placeholder="Jalan Rt rw">
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Patokan lokasi (optional)">
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="c_state_country" class="text-black">State / Country <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_state_country" name="c_state_country">
                            </div>
                            <div class="col-md-6">
                                <label for="c_postal_zip" class="text-black">Posta / Zip <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
                            </div>
                        </div>

                        <div class="form-group row mb-5">
                            <div class="col-md-6">
                                <label for="c_email_address" class="text-black">Email Address <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_email_address" name="c_email_address">
                            </div>
                            <div class="col-md-6">
                                <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_phone" name="c_phone"
                                    placeholder="Phone Number">
                            </div>
                        </div>



                        {{-- <div class="form-group">
                            <label for="c_ship_different_address" class="text-black" data-toggle="collapse"
                                href="#ship_different_address" role="button" aria-expanded="false"
                                aria-controls="ship_different_address"><input type="checkbox" value="1"
                                    id="c_ship_different_address"> Ship To A Different Address?</label>
                            <div class="collapse" id="ship_different_address">
                                <div class="py-2">

                                    <div class="form-group">
                                        <label for="c_diff_country" class="text-black">Country <span
                                                class="text-danger">*</span></label>
                                        <select id="c_diff_country" class="form-control">
                                            <option value="1">Select a country</option>
                                            <option value="2">bangladesh</option>
                                            <option value="3">Algeria</option>
                                            <option value="4">Afghanistan</option>
                                            <option value="5">Ghana</option>
                                            <option value="6">Albania</option>
                                            <option value="7">Bahrain</option>
                                            <option value="8">Colombia</option>
                                            <option value="9">Dominican Republic</option>
                                        </select>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="c_diff_fname" class="text-black">First Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="c_diff_fname"
                                                name="c_diff_fname">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="c_diff_lname" class="text-black">Last Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="c_diff_lname"
                                                name="c_diff_lname">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="c_diff_companyname" class="text-black">Company Name </label>
                                            <input type="text" class="form-control" id="c_diff_companyname"
                                                name="c_diff_companyname">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="c_diff_address" class="text-black">Address <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="c_diff_address"
                                                name="c_diff_address" placeholder="Street address">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            placeholder="Apartment, suite, unit etc. (optional)">
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="c_diff_state_country" class="text-black">State / Country <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="c_diff_state_country"
                                                name="c_diff_state_country">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="c_diff_postal_zip" class="text-black">Posta / Zip <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="c_diff_postal_zip"
                                                name="c_diff_postal_zip">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-5">
                                        <div class="col-md-6">
                                            <label for="c_diff_email_address" class="text-black">Email Address <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="c_diff_email_address"
                                                name="c_diff_email_address">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="c_diff_phone" class="text-black">Phone <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="c_diff_phone"
                                                name="c_diff_phone" placeholder="Phone Number">
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div> --}}

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
                                            <td class="text-black font-weight-bold"><strong>pesanan Total</strong></td>
                                            <td class="text-black font-weight-bold"><strong>rp 150.00</strong></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="border p-3 mb-3">
                                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse " href="#collapsebank"
                                            role="button" aria-expanded="false" aria-controls="collapsebank">Metode
                                            bayar</a></h3>

                                    <div class="collapse show" id="collapsebank">
                                        <div class="py-2">
                                            <p class="mb-0"> Rekening BCA </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="text-black h4" for="coupon">BUKTI BAYAR </label>
                                        <p>Silahkan upload bukti bayar</p>
                                    </div>
                                    <div class="col-md-8 mb-3 ">
                                        <input type="file" class="form-control" id="coupon" placeholder="Coupon Code">
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn btn-primary btn-sm">Upload Coupon</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- </form> -->
        </div>
    </div>

    </x-layuot>