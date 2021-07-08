<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">KK</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Pembuatan</li>
            </ol>
            <!-- <div class="row">
                <h1>Selamat Datang <?= $this->session->userdata('name') ?> </h1>
            </div> -->
            <!-- content here -->
            <div class="row container ">
                <?= form_open_multipart('dashboard/kk_pembuatan'); ?>
                    <label for="" class="mt-3">Nama</label>
                    <input name="nama" class="form-control mt-2" id="inputFirstName" type="text" placeholder="Masukkan nama " id="nama" required>

                    <label for="" class="mt-3">NIK</label>
                    <input name="nik" class="form-control mt-2" id="inputFirstName" type="text" placeholder="Masukkan NIK" required>

                    <label for="" class="mt-3">Surat Pengantar RT/RW</label>
                    <input name="kk_file1" class="form-control mt-2" id="inputFirstName" type="file" accept="application/pdf, .jpg, .png, .jpeg" required>

                    <label for="" class="mt-3">Pengajuan KARTU KELUARGA baru dari desa/kelurahan</label>
                    <input name="kk_file2" class="form-control mt-2" id="inputFirstName" type="file"  accept="application/pdf, .jpg, .png, .jpeg" required>

                    <label for="" class="mt-3">KARTU KELUARGA asli/fotocopy/keterangan KARTU KELUARGA kehilangan dari desa/kelurahan</label>
                    <input name="kk_file3" class="form-control mt-2" id="inputFirstName" type="file"  accept="application/pdf, .jpg, .png, .jpeg" >

                    <label for="" class="mt-3">Fotocopy KTP (Jika memiliki ktp)</label>
                    <input name="kk_file4" class="form-control mt-2" id="inputFirstName" type="file"  accept="application/pdf, .jpg, .png, .jpeg" >

                    <label for="" class="mt-3">Fotocopy ijazah terakhir (JIKA TAMAT)</label>
                    <div class="row container" style="margin-left: 1em">
                        <ul class="">
                            <li>Surat keterangan dari sekolah (JIKA IJAZAH HILANG/TIDAK TAMAT)</li>
                            <li>Fotocopy Raport (JIKA BELUM TAMAT SD)</li>
                            <li>Akte kelahiran (Memiliki) atau surat ket. Lahir dari bidan, desa/kelurahan (JIKA BELUM SEKOLAH)</li>
                        </ul>
                    </div>
                    <input name="kk_file5" class="form-control mt-2" id="inputFirstName" type="file"  accept="application/pdf, .jpg, .png, .jpeg" >

                    <label for="" class="mt-3">Fotocopy kutipan akte nikah (JIKA KAWIN), akta cerai (JIKA CERAI HIDUP), akta kematian (JIKA CERAI MATI)</label>
                    <input name="kk_file6" class="form-control mt-2" id="inputFirstName" type="file"  accept="application/pdf, .jpg, .png, .jpeg" >

                    <label for="" class="mt-3">Surat keterangan lahir dari bidan dan desa/kelurahan (JIKA PENAMBAHAN ANAK)</label>
                    <input name="kk_file7" class="form-control mt-2" id="inputFirstName" type="file"  accept="application/pdf, .jpg, .png, .jpeg" >

                    <label for="" class="mt-3">Surat pernyataan suami/istri bermaterai Rp. 6.000,- saksi 2 orang mengetahui kades/lurah (JIKA ANAK IKUT KK PROSSES CERAI)</label>
                    <input name="kk_file8" class="form-control mt-2" id="inputFirstName" type="file"  accept="application/pdf, .jpg, .png, .jpeg" >

                    <label for="" class="mt-3">Surat pindah datang (JIKA PENDATANG BARU)</label>
                    <input name="kk_file9" class="form-control mt-2" id="inputFirstName" type="file"  accept="application/pdf, .jpg, .png, .jpeg" >

                    <label for="" class="mt-3">Perubahan data lampiran pendukung asli dan Fotocopynya</label>
                    <input name="kk_file10" class="form-control mt-2" id="inputFirstName" type="file"  accept="application/pdf, .jpg, .png, .jpeg" >

                    <label for="" class="mt-3">Perubahan pekerjaan misal GURU, DOSEN, PENSIUNAN, PNS, POLRI, TNI HARUS DILAMPIRI DAN WIRASWASTA (IJIN SLIP)</label>
                    <input name="kk_file11" class="form-control mt-2" id="inputFirstName" type="file"  accept="application/pdf, .jpg, .png, .jpeg" >

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