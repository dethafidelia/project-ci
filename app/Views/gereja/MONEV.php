<div class="container">
    <form>
        <div class="row">
            <div class="col-md-4 form-group">
                <label for="tahun_anggaran">Tahun Anggaran</label>
                <select name="tahun_anggaran" id="tahun_anggaran" class="form-control">
                    <option value="">-- SEMUA --</option>
                    <option value="00">2024</option>
                    <option value="01">2023</option>
                    <option value="02">2022</option>
                </select>
            </div>
            <div class="col-md-4 form-group">
                <label for="bidang">Bidang</label>
                <select name="bidang" id="bidang" class="form-control">
                    <option value="">-- SEMUA --</option>
                    <option value="00">Dewan Harian</option>
                    <option value="01">Bidang Liturgi dan Peribadatan</option>
                    <option value="02">Bidang Pewartaan dan Evangelisasi</option>
                    <option value="03">Bidang Pelayanan Kemasyarakatan</option>
                    <option value="04">Bidang Paguyuban dan Persaudaraan</option>
                    <option value="05">Bidang Rumah Tangga</option>
                    <option value="06">Bidang Penelitian dan Pengembangan</option>
                    <option value="07">Koordinator Ketua Lingkungan</option>
                </select>
            </div>
            <div class="col-md-4 form-group">
                <label for="bulan">Bulan</label>
                <select name="bulan" id="bulan" class="form-control">
                    <option value="">-- SEMUA --</option>
                    <option value="01">Januari</option>
                    <option value="02">Februari</option>
                    <option value="03">Maret</option>
                    <option value="04">April</option>
                    <option value="05">Mei</option>
                    <option value="06">Juni</option>
                    <option value="07">Juli</option>
                    <option value="08">Agustus</option>
                    <option value="09">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-right">
                <input name="open" type="hidden" value="2">
                <input name="btncari" class="btn btn-primary" value="Cari" type="submit">
            </div>
        </div>
    </form>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>NO</th>
                    <th>BIDANG / TIMPEL</th>
                    <th>NAMA KEGIATAN</th>
                    <th>INDIKATOR</th>
                    <th>TARGET</th>
                    <th>PELAKSANAAN</th>
                    <th>DANA LAIN-LAIN / KEPANITIAAN</th>
                    <th>PENANGGUNG JAWAB</th>
                    <th>PROGRAM VISIONER</th>
                </tr>
            </thead>
            <tbody>
                <!-- Isi tabel -->
            </tbody>
        </table>
    </div>
</div>

</body>

</html>