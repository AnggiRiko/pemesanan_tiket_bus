<!-- Footer -->
<footer class="bg-primary text-white text-center py-3 fixed" style="margin-top: 5rem;">
    &copy; 2023 Pemesanan Tiket Bus
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('assets/') ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url('assets/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url('assets/') ?>js/demo/datatables-demo.js"></script>

<script>
    $('#kelas_penumpang').change(function() {
        var kelas_penumpang = $(this).val();

        $.ajax({
            url: '<?= base_url() ?>pesan/get_harga_tiket',
            data: {
                kelas_penumpang: kelas_penumpang
            },
            method: 'post',
            dataType: 'JSON',
            success: function(hasil) {
                $('#harga').val(hasil.harga_bus);
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $("#hitung_total").click(function() {
            // Mengambil jumlah penumpang
            var jumlah_penumpang = parseInt($("#jumlah_penumpang").val()) || 0;
            var jumlah_penumpang_lansia = parseInt($("#jumlah_penumpang_lansia").val()) || 0;

            // Mengambil harga per penumpang dari input dengan ID "harga"
            var harga_per_penumpang = parseFloat($("#harga").val().replace(/\D/g, '')) || 0;

            // Menghitung total bayar
            var total_bayar = (jumlah_penumpang * harga_per_penumpang) + (jumlah_penumpang_lansia * harga_per_penumpang * 0.9);

            // Menampilkan total bayar
            $("#total").val("Rp. " + total_bayar.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1."));
        });
    });
</script>


</body>

</html>