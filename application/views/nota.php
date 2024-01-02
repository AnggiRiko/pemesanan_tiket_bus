<!-- nota.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Nota Pemesanan Tiket</title>
    <style>
        /* Gaya CSS untuk halaman nota */
        body {
            font-family: Arial, sans-serif;
        }

        .nota {
            width: 58mm;
            margin: 0 auto;
            padding: 10px;
        }

        .judul {
            text-align: center;
            font-size: 18px;
        }

        .data {
            margin-top: 20px;
        }

        /* Gaya cetak */
        @media print {
            .nota {
                width: 100%;
                margin: 0;
                padding: 0;
            }
        }
    </style>
</head>

<body>
    <div class="nota">
        <div class="data">
            <h2>Bukti Pembayaran Tiket Bus</h2>
            <p>Nama: <?= $pesan['nama']; ?></p>
            <p>Nomor Identitas: <?= $pesan['no_identitas']; ?></p>
            <p>Nomor HP: <?= $pesan['nomor_hp']; ?></p>
            <p>Kelas Penumpang: <?= $pesan['kelas_penumpang']; ?></p>
            <p>Jumlah Penumpang: <?= $pesan['jumlah_penumpang']; ?></p>
            <p>Jumlah Penumpang Lansia: <?= $pesan['jumlah_penumpang_lansia'] . " Orang"; ?></p>
            <p>Harga Tiket: <?= " Rp. " . $pesan['harga'] . " Orang"; ?></p>
            <p>Total Bayar: <?= $pesan['total']; ?></p>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>