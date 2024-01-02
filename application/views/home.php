<div id="content-wrapper" class="d-flex flex-column mt-4">
    <div id="content">
        <div class="container-fluid">
            <h3 class="text-center">Daftar Kelas Penumpang Bus</h3>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Pendaftaran Beasiswa</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kelas Bus</th>
                                    <th>Harga</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 1;
                                foreach ($kelas_bus as $data) : ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $data->kelas_penumpang ?></td>
                                        <td><?= $data->harga_bus ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h2 class="text-center">Daftar Bus</h2>
            <h3 class="ml-4 mt-5">Kelas Ekonomi</h3>
            <div class="d-flex">
                <img src="./assets/image/bus_ekonomi.jpg" alt="Bus Kelas Ekonomi" width="50%" class="mr-4">
                <img src="./assets/image/interior_bus_ekonomi.jpg" alt="Interior Bus Kelas Ekonomi" width="50%">
            </div>
            <br>
            <h3 class="ml-4 mt-5">Kelas Bisnis</h3>
            <div class="d-flex">
                <img src="./assets/image/bus_bisnis.jpeg" alt="Bus Kelas Bisnis" width="50%" class="mr-4">
                <img src="./assets/image/interior_bus_bisnis.jpg" alt="Interior Bus Kelas Bisnis" width="50%">
            </div>
            <br>
            <h3 class="ml-4 mt-5">Kelas Eksekutif</h3>
            <div class="d-flex">
                <img src="./assets/image/bus_eksekutif.jpg" alt="Bus Kelas Eksekutif" width="50%" class="mr-4">
                <img src="./assets/image/interior_bus_eksekutif.jpeg" alt="Interior Bus Kelas Eksekutif" width="50%">
            </div>
        </div>

    </div>
</div>