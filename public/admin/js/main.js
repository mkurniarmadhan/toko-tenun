// (function Main() {
//   "use strict";
//   var isOnline = "onLine" in navigator ? navigator.onLine : true;
//   var isLoggedIn = /isLoggedIn=1/.test(document.cookie.toString() || "");
//   var usingSW = "serviceWorker" in navigator;
//   var swRegistration;
//   var svcworker;
//   let data_pesanan = [];
//   let dump_pesanan = localStorage.getItem("data");
//   let order_cek = localStorage.getItem("order");
//   let form_pesanan = localStorage.getItem("form_pesanan");

//   var form_data_pesanan = $("#form_data_pesanan");

//   var btn_pesan = $("#btn_pesan");
//   var card_pesanan = $(".laman-pesanan");
//   var offline_dd = $("#offline_dd");

//   document.addEventListener("DOMContentLoaded", ready, false);

//   if(form_pesanan){
//     $(".laman-pesanan").removeClass('d-none');
//     $("#btn_pesan").removeClass('d-none')
//   }

//   $(".btn_form_pesanan").on("click", function (e) {
//     btn_pesan.removeClass("d-none");
//     card_pesanan.removeClass("d-none");
//     $('input[name="nama_pemesan"]').focus();
//     // set cookie form form pemesanan
//      localStorage.setItem("form_pesanan",1);
//   });

//  if (dump_pesanan) {
//     btn_pesan.removeClass("d-none");
//     card_pesanan.removeClass("d-none");
//     $('input[name="nama_pemesan"]').focus();
//   }

//   if (usingSW) {
//     initServiceWorker().catch(console.error);
//   }

//   function ready() {
//     window.addEventListener("online", function online() {
//       isOnline = true;
//       offline_dd.addClass("d-none");
//       sendStatusUpdate();
//     });

//     window.addEventListener("offline", function offline() {
//       isOnline = false;
//       offline_dd.removeClass("d-none");
//       sendStatusUpdate();
//     });
//   }

//   async function initServiceWorker() {
//     swRegistration = await navigator.serviceWorker.register("sw.js", {
//       updateViaCache: "none",
//     });
//     svcworker =
//       swRegistration.installing ||
//       swRegistration.waiting ||
//       swRegistration.active;
//     sendStatusUpdate(svcworker);
//     navigator.serviceWorker.addEventListener(
//       "controllerchange",
//       function onController() {
//         svcworker = navigator.serviceWorker.controller;
//         sendStatusUpdate(svcworker);
//       }
//     );
//     navigator.serviceWorker.addEventListener("message", onSWMessage);
//   }

//   function onSWMessage(event) {
//     console.log(event);
//     var { data } = event;
//     if (data.requestStatusUpdate) {
//       console.log("Received status, respondindasdg...");
//       sendStatusUpdate(event.ports && event.ports[0]);
//     } else if (data == "force-logout") {
//       document.cookie = "isLoggedIn=";
//       isLoggedIn = false;
//       sendStatusUpdate();
//     }
//   }

//   function sendStatusUpdate(target) {
//     sendSWMessage({ statusUpdate: { isOnline, isLoggedIn } }, target);
//   }

//   function sendSWMessage(msg, target) {
//     if (target) {
//       target.postMessage(msg);
//     } else if (svcworker) {
//       svcworker.postMessage(msg);
//     } else {
//       navigator.serviceWorker.controller.postMessage(msg);
//     }
//   }

//   if (dump_pesanan) {
//     dump_pesanan = JSON.parse(dump_pesanan);

//     if (isLoggedIn && order_cek) {
//       window.location = `http://localhost/pemesanan.php?id=${dump_pesanan.produk_id}`;
//       localStorage.removeItem("order");
//     }

//     data_pesanan = dump_pesanan;
//     console.log(data_pesanan);
//     $("#produk_id").val(dump_pesanan.produk_id);
//     $("#nama_pemesan").val(dump_pesanan.nama_pemesan);
//     $("#email").val(dump_pesanan.email);
//     $("#telpon").val(dump_pesanan.telpon);
//     $("#catatan").val(dump_pesanan.catatan);
//   } else {
//     form_data_pesanan.on("change", function (e) {
//       const form = $("#form_data_pesanan").serializeArray();
//       const data = form.reduce(
//         (acc, { name, value }) => ({ ...acc, [name]: value }),
//         {}
//       );
//       data_pesanan = data;
//     });
//   }

// hapus Produk

//   $(".btn-hapus").on(`"click", function (e) {
//     const id = $(this).data("id");
//     Swal.fire({
//       title: "HAPUS PRODUK?",
//       icon: "warning",
//       showCancelButton: true,
//       confirmButtonColor: "#3085d6",
//       cancelButtonColor: "#d33",
//       cancelButtonText: "Batal",
//       confirmButtonText: "Ya",
//     }).then((result) => {
//       if (result.isConfirmed) {
//         $.ajax({
//           type: "POST",
//           url: "hapus-produk.php",
//           data: {
//             id: id,
//           },
//           success: function () {
//             Swal.fire({
//               icon: "success",
//               showConfirmButton: false,
//               title: "Success",
//               timer: 2000,
//             }).then(() => {
//               window.location.href = "produk.php";
//             });
//           },
//         });
//       }
//     });
//   });

//   // hapus Katgeori
//   $(".btn-hapus-kategori").on("click", function (e) {
//     const id = $(this).data("id");
//     Swal.fire({
//       title: "HAPUS KATEGORI?",
//       icon: "warning",
//       showCancelButton: true,
//       confirmButtonColor: "#3085d6",
//       cancelButtonColor: "#d33",
//       cancelButtonText: "Batal",
//       confirmButtonText: "Ya",
//     }).then((result) => {
//       if (result.isConfirmed) {
//         $.ajax({
//           type: "POST",
//           url: "hapus-kategori.php",
//           data: {
//             id: id,
//           },
//           success: function () {
//             Swal.fire({
//               icon: "success",
//               showConfirmButton: false,
//               title: "Success",
//               timer: 2000,
//             }).then(() => {
//               window.location.href = "produk.php";
//             });
//           },
//         });
//       }
//     });
//   });

//   $("#btn_pesan").on("click", function () {
//       localStorage.removeItem("form_pesanan");
//     Swal.fire({
//         icon:"success",
//         title:"BERHASIL",
//         timer:2000,
//       }).then(()=>{
//            window.location.href = '/profile/pemesanan/slug';
//       });
//   });

//   $("body").on("click", "#btn-wa", function () {
//     const id = $(this).data("id");
//     var win = window.open(
//       "https://api.whatsapp.com/send?phone=" +
//         6289694273720 +
//         `&text=http%3A%2F%2Flocalhost%2Fpesanan.php%3Fpesid%3D${id}`
//     );
//     if (win) {
//       win.focus();
//     } else {
//       alert("Please allow popups for this website");
//     }
//     return false;
//   });

//   $("body").on("click", "#btn-wa-konfirmasi", function () {
//     const id = $(this).data("id");
//     var win = window.open(
//       "https://api.whatsapp.com/send?phone=" +
//         id +
//         "&text=hallo%20kak%2C%20pesanan%20kamu%20sudah%20di%20konfirmasi%20ya"
//     );
//     if (win) {
//       win.focus();
//     } else {
//       alert("Please allow popups for this website");
//     }
//     return false;
//   });
// })(window);
