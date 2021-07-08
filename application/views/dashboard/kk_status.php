<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"> <?= $title2 ?> </h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Status Pengajuan</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($status as $status) : ?>
                                <tr>
                                    <td> <?= $i ?> </td>
                                    <td> <?= $status->nama ?> </td>
                                    <?php if ($status->status == 0) { ?>
                                        <td>Ditolak</td>
                                    <?php } else if ($status->status == 1) { ?>
                                        <td>Diterima</td>
                                    <?php } else if ($status->status == 2) { ?>
                                        <td>Review</td>
                                    <?php } ?>
                                    <td> <?= date("d-F-Y, H:i:s", $status->date_created); ?> </td>
                                    <td class="text-center"> <a href=" <?= base_url('dashboard/kk_detail/'.$status->id) ?> " class="btn btn-primary">Lihat Detail</a></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2021</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>