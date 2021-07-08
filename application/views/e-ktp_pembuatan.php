<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">E-KTP</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Pembuatan</li>
            </ol>
            <!-- <div class="row">
                <h1>Selamat Datang <?= $this->session->userdata('name') ?> </h1>
            </div> -->
            <!-- content here -->
            <div class="row container ">
                <?= form_open_multipart('dashboard/ektp_pembuatan'); ?>
                    <label for="" class="mt-3">Nama</label>
                    <input name="nama" class="form-control mt-2" id="inputFirstName" type="text" placeholder="Masukkan nama " id="nama" required>
                    <label for="" class="mt-3">NIK</label>
                    <input name="nik" class="form-control mt-2" id="inputFirstName" type="text" placeholder="Masukkan NIK" required>
                    <label for="" class="mt-3">Surat Pengantar RT/RW</label>
                    <input name="ektp_file1" class="form-control mt-2" id="inputFirstName" type="file" accept="application/pdf, .jpg, .png, .jpeg" required>
                    <label for="" class="mt-3">Fotocopy Kartu Keluarga</label>
                    <input name="ektp_file2" class="form-control mt-2" id="inputFirstName" type="file"  accept="application/pdf, .jpg, .png, .jpeg" required>
                    <label for="" class="mt-3">Fotocopy Ijazah Terakhir (Jika Tamat)</label>
                    <div class="row container" style="margin-left: 1em">
                        <ul class="">
                            <li>Surat keterangan dari sekolah (JIKA IJAZAH HILANG / TIDAK TAMAT</li>
                            <li>Fotocopy Raport (JIKA BELUM TAMAR SD) atau</li>
                            <li>Akte kelahiran (memiliki) atau surat keterangan Lahir dari bidan, desa / kelurahan (JIKA BELUM SEKOLAH)</li>
                        </ul>
                    </div>
                    <input name="ektp_file3" class="form-control mt-2" id="inputFirstName" type="file"  accept="application/pdf, .jpg, .png, .jpeg" >
                    <label for="" class="mt-3">Fotocopy Kutipan akte nikah (JIKA KAWIN), akta cerai (JIKA CERAI HIDUP), akte kematian (JIKA CERAI MATI)</label>
                    <input name="ektp_file4" class="form-control mt-2" id="inputFirstName" type="file"  accept="application/pdf, .jpg, .png, .jpeg" >
                    <label for="" class="mt-3">Surat keterangan lahir dari bidan dan desa / kelurahan</label>
                    <input name="ektp_file5" class="form-control mt-2" id="inputFirstName" type="file"  accept="application/pdf, .jpg, .png, .jpeg" >
                    <label for="" class="mt-3">Surat keterangan pindah yang diterbitkan oleh pemerintah kabupaten / Kota dari daerah asal</label>
                    <input name="ektp_file6" class="form-control mt-2" id="inputFirstName" type="file"  accept="application/pdf, .jpg, .png, .jpeg" >
                    <label for="" class="mt-3">Surat keterangan datang dari Luar Negeri yang diterbitkan oleh Instansi Pelaksana bagi WNI yang datang dari Luar Negeri karena pindah</label>
                    <input name="ektp_file7" class="form-control mt-2" id="inputFirstName" type="file"  accept="application/pdf, .jpg, .png, .jpeg" >
                    <label for="" class="mt-3">Foto berwarna 3x4 </label>
                    <div class="row container" style="margin-left: 1em">
                        <ul class="">
                            <li>Background tahun lahir :</li>
                            <li>MERAH = JIKA GANJIL</li>
                            <li>BIRU = JIKA GENAP</li>
                        </ul>
                    </div>
                    <input name="ektp_file8" class="form-control mt-2" id="inputFirstName" type="file"  accept="application/pdf, .jpg, .png, .jpeg" >
                    <div class="mt-4 mb-3">
                        <div class="d-grid">
                        <button class="btn btn-primary btn-block" type="submit">Ajukan</button>
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