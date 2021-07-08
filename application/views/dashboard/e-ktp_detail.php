<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid px-4">
			<h1 class="mt-4">E-KTP</h1>
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item active">Detail pengajuan</li>
			</ol>
			<!-- <div class="row">
                <h1>Selamat Datang <?= $this->session->userdata('name') ?> </h1>
            </div> -->
			<!-- content here -->

			<div class="row container ">

				<?php if ($detail['status'] == 0) { ?>
					<div class="alert alert-danger" role="alert">
						Pengajuan Ditolak
					</div>
				<?php } elseif ($detail['status'] == 1) { ?>
					<div class="alert alert-success" role="alert">
						Pengajuan Diterima
					</div>
					<label for="" class="mt-3">Simpan dan berikan kode dibawah ini : </label>
					<h1><?= $detail['kode'] ?></h1>

				<?php } ?>

				<?php if ($detail['status'] != 2) { ?>
					<label for="" class="mt-3">Catatan : </label>
					<h1><?= $catatan['catatan'] ?></h1>
				<?php } ?>


				<form action="#">
					<label for="" class="mt-3">Nama</label>
					<input name="nama" class="form-control mt-2" id="inputFirstName" type="text" id="nama" value=" <?= $detail['nama'] ?>
				" readonly>
					<label for="" class="mt-3">NIK</label>
					<input name="nik" class="form-control mt-2" id="inputFirstName" type="text" value=" <?= $detail['nik'] ?> " readonly>
					<label for="" class="mt-3">Surat Pengantar RT/RW</label>

					<?php if ($detail['file1'] == null) { ?>
						<input name="nik" class="form-control mt-2" id="inputFirstName" type="text" value="Tidak ada file" readonly>
					<?php } else { ?>
						<a class="form-control mt-2" href="<?= base_url('dashboard/viewFile/' . $detail['file1']) ?>" target="_blank">Lihat file</a>
					<?php } ?>


					<label for="" class="mt-3">Fotocopy Kartu Keluarga</label>

					<?php if ($detail['file2'] == null) { ?>
						<input name="nik" class="form-control mt-2" id="inputFirstName" type="text" value="Tidak ada file" readonly>
					<?php } else { ?>
						<a class="form-control mt-2" href="<?= base_url('dashboard/viewFile/' . $detail['file2']) ?>" target="_blank">Lihat file</a>
					<?php } ?>

					<label for="" class="mt-3">Fotocopy Ijazah Terakhir (Jika Tamat)</label>
					<div class="row container" style="margin-left: 1em">
						<ul class="">
							<li>Surat keterangan dari sekolah (JIKA IJAZAH HILANG / TIDAK TAMAT</li>
							<li>Fotocopy Raport (JIKA BELUM TAMAR SD) atau</li>
							<li>Akte kelahiran (memiliki) atau surat keterangan Lahir dari bidan, desa / kelurahan (JIKA
								BELUM SEKOLAH)</li>
						</ul>
					</div>
					<?php if ($detail['file3'] == null) { ?>
						<input name="nik" class="form-control mt-2" id="inputFirstName" type="text" value="Tidak ada file" readonly>
					<?php } else { ?>
						<a class="form-control mt-2" href="<?= base_url('dashboard/viewFile/' . $detail['file3']) ?>" target="_blank">Lihat file</a>
					<?php } ?>

					<label for="" class="mt-3">Fotocopy Kutipan akte nikah (JIKA KAWIN), akta cerai (JIKA CERAI HIDUP), akte
						kematian (JIKA CERAI MATI)</label>
					<?php if ($detail['file4'] == null) { ?>
						<input name="nik" class="form-control mt-2" id="inputFirstName" type="text" value="Tidak ada file" readonly>
					<?php } else { ?>
						<a class="form-control mt-2" href="<?= base_url('dashboard/viewFile/' . $detail['file4']) ?>" target="_blank">Lihat file</a>
					<?php } ?>

					<label for="" class="mt-3">Surat keterangan lahir dari bidan dan desa / kelurahan</label>
					<?php if ($detail['file5'] == null) { ?>
						<input name="nik" class="form-control mt-2" id="inputFirstName" type="text" value="Tidak ada file" readonly>
					<?php } else { ?>
						<a class="form-control mt-2" href="<?= base_url('dashboard/viewFile/' . $detail['file5']) ?>" target="_blank">Lihat file</a>
					<?php } ?>

					<label for="" class="mt-3">Surat keterangan pindah yang diterbitkan oleh pemerintah kabupaten / Kota
						dari daerah asal</label>
					<?php if ($detail['file6'] == null) { ?>
						<input name="nik" class="form-control mt-2" id="inputFirstName" type="text" value="Tidak ada file" readonly>
					<?php } else { ?>
						<a class="form-control mt-2" href="<?= base_url('dashboard/viewFile/' . $detail['file6']) ?>" target="_blank">Lihat file</a>
					<?php } ?>

					<label for="" class="mt-3">Surat keterangan datang dari Luar Negeri yang diterbitkan oleh Instansi
						Pelaksana bagi WNI yang datang dari Luar Negeri karena pindah</label>
					<?php if ($detail['file7'] == null) { ?>
						<input name="nik" class="form-control mt-2" id="inputFirstName" type="text" value="Tidak ada file" readonly>
					<?php } else { ?>
						<a class="form-control mt-2" href="<?= base_url('dashboard/viewFile/' . $detail['file7']) ?>" target="_blank">Lihat file</a>
					<?php } ?>
					<label for="" class="mt-3">Foto berwarna 3x4 </label>
					<div class="row container" style="margin-left: 1em">
						<ul class="">
							<li>Background tahun lahir :</li>
							<li>MERAH = JIKA GANJIL</li>
							<li>BIRU = JIKA GENAP</li>
						</ul>
					</div>
					<?php if ($detail['file8'] == null) { ?>
						<input name="nik" class="form-control mt-2" id="inputFirstName" type="text" placeholder="Masukkan NIK" value="Tidak ada file" readonly>
					<?php } else { ?>
						<a class="form-control mt-2" href="<?= base_url('dashboard/viewFile/' . $detail['file8']) ?>" target="_blank">Lihat file</a>
					<?php } ?>
					<div class="mt-4 mb-3">
						<div class="d-grid">
							<a href=" <?= base_url('dashboard/ektp_status') ?> " class="btn btn-primary btn-block" type="submit">Kembali</a>
						</div>
					</div>
				</form>
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