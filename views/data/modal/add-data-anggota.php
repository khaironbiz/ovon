<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
    Add Anggota 
</button>
<!-- Modal -->
<form action="" method="POST">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pengkajian Anggota Keluarga <?= $data_kel['nama_keluarga']; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama Anggota</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" placeholder="Nama Anggota Keluarga" name="nama_anggota" required>
                            <input type="hidden" class="form-control" value="<?= $key ?>" name="add_anggota" required>
                        </div>
                        <label class="col-sm-2 col-form-label">Status Keluarga</label>
                        <div class="col-sm-4">
                            <select class="form-control" required name="jenis_keluarga">
                                <option value="">---Jenis Keluarga----</option>
                                <option value="1">Kepala Keluarga</option>
                                <option value="2">Suami/Istri</option>
                                <option value="3">Anak</option>
                                <option value="4">Saudara</option>
                                <option value="5">Orang Tua</option>
                                <option value="6">Pembantu</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-3">
                            <select class="form-control" required name="jenis_kelamin">
                                <option value="">---Jenis Kelamin----</option>
                                <option value="1">Laki-laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" name="tgl_lahir">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Golongan Darah</label>
                        <div class="col-sm-3">
                            <select class="form-control" required name="golongan_darah">
                                <option value="">---Golongan Darah----</option>
                                <option value="1">A</option>
                                <option value="2">B</option>
                                <option value="3">AB</option>
                                <option value="4">O</option>
                                <option value="5">Tidak Tahu</option>
                            </select>
                        </div>
                        <label class="col-sm-2 col-form-label">Status Vaksin Covid-19</label>
                        <div class="col-sm-4">
                            <select class="form-control" required name="vaksin_covid19">
                                <option value="">---Vaksin Covid-19----</option>
                                <option value="1">Belum Vaksin</option>
                                <option value="2">Baru Dosis 1</option>
                                <option value="3">Vaksin Lengkap</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Berat Badan</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" name="berat_badan" placeholder="Berat Badan (kg)">
                        </div>
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Tinggi Badan</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" name="tinggi_badan" placeholder="Tinggi Badan / Panjang Badan(cm)">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Status Pendidikan</label>
                        <div class="col-sm-3">
                            <select class="form-control" required name="status_pendidikan">
                                <option value="">---Pendidikan----</option>
                                <option value="1">Belum Usia Sekolah</option>
                                <option value="2">Sedang Sekolah</option>
                                <option value="3">Tidak Sekolah</option>
                                <option value="4">Tidak Tamat SD</option>
                                <option value="5">Tamat SD</option>
                                <option value="6">Tamat SMP</option>
                                <option value="7">Tamat SMA</option>
                                <option value="8">Tamat Kuliah</option>
                            </select>
                        </div>
                        <label class="col-sm-2 col-form-label">Status Pekerjaan</label>
                        <div class="col-sm-4">
                            <select class="form-control" required name="status_pekerjaan">
                                <option value="">---Status Pekerjaan----</option>
                                <option value="1">Bukan Usia Kerja</option>
                                <option value="2">PNS</option>
                                <option value="3">Pegawai Pemerintah Non PNS</option>
                                <option value="4">Karyawan Swasta</option>
                                <option value="5">Wiraswasta</option>
                                <option value="6">Petani</option>
                                <option value="7">Nelayan</option>
                                <option value="8">Buruh Harian Lepas</option>
                                <option value="9">Tidak Bekerja</option>
                                <option value="10">Pensiunan</option>
                                <option value="11">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Frekwensi Nadi</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" name="nadi" placeholder="Nadi x/menit">
                        </div>
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Tekanan Darah</label>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" name="sistolik" placeholder="sistolik mmHg">
                        </div>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" name="diastolik" placeholder="diastolik mmHg">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kolesterol</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" name="cholesterol" placeholder="Kolestrol (mg/dl)">
                        </div>
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Gula Darah Sewaktu</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" name="gula_darah" placeholder="gula_darah (mg/dl)">
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Hemoglobin</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" name="hb" placeholder="HB (gr/dl)">
                        </div>
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Asam Urat</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" name="asam_urat" placeholder="asam_urat (mg/dl)">
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Riwayat Kesehatan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="riwayat_kesehatan" placeholder="Riwayat Kesehatan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Keluhan Saat ini</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="keluhan_kesehatan" placeholder="Riwayat Kesehatan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Demam</label>
                        <div class="col-sm-3">
                            <select class="form-control" required name="demam">
                                <option value="">---Demam----</option>
                                <option value="1">YA</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Diare</label>
                        <div class="col-sm-4">
                            <select class="form-control" required name="diare">
                                <option value="">---Diare----</option>
                                <option value="1">YA</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kebiasaan Merokok</label>
                        <div class="col-sm-3">
                            <select class="form-control" required name="merokok">
                                <option value="">---Kebiasaan Merokok----</option>
                                <option value="1">Usia dibawah 12 tahun</option>
                                <option value="2">Tidak Pernah Merokok</option>
                                <option value="3">Kadang-kadang</option>
                                <option value="4">Merokok Setiap Hari</option>
                                <option value="5">Sudah Berhenti Merokok</option>
                            </select>
                        </div>
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Olah Raga</label>
                        <div class="col-sm-2">
                            <select class="form-control" required name="frekwensi_olah_raga">
                                <option value="">---Frekwensi----</option>
                                <option value="1">3X/Minggu atau lebih</option>
                                <option value="2">Kurang dari 3X/Minggu</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <select class="form-control" required name="durasi_olah_raga">
                                <option value="">---Durasi----</option>
                                <option value="1">30 Menit atau Lebih</option>
                                <option value="2">Kurang dari 30 Menit</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>
