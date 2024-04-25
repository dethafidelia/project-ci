<script>
    $(document).ready(function() {
        $('#bidang').change(function() {
            var $idBidang = $(this).val();
            $.ajax({
                url: "<?= base_url('dropdown/getTimpel') ?>/" + idBidang,
                method: 'POST',
                dataType: 'json',
                success: function(data) {
                    $('#timpel').empty();
                    $.each(data, function(i, kota) {
                        $('#timpel').append('<option value="' + timpel.id_tim_pelayanan + '">' + timpel.id_tim_pelayanan + '</option>');
                    });
                }
            });
        });
    });
</script>

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
                <select class="form-select" id="bidang" name="bidang">
                    <!-- <option selected disabled>Pilih Bidang</option> -->
                    <?php if (isset($bidang)) : ?>
                        <?php foreach ($bidang as $row) : ?>
                            <option value="<?= $row['nama_bidang']; ?>"><?= $row['nama_bidang']; ?></option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
            </div>
            <div class="col-md-4 form-group">
                <label for="bidang">Tim Pelayanan</label>
                <select name="timpel" id="timpel" class="form-control">
                    <!-- <option value="">Pilih Tim Pelayanan</option> -->
                    <?php if (isset($timPelayananData)) : ?>
                        <?php foreach ($timPelayananData as $row) : ?>
                            <option value="<?= $row['nama_tim_pelayanan']; ?>"><?= $row['nama_tim_pelayanan']; ?></option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
            </div>
        </div>
    </form>
    <div class="d-flex justify-content-end mb-2">
        <a href="<?= base_url('agenda') ?>" class="btn btn-primary mr-2">Cari</a>
        <a href="<?= base_url('programasi') ?>" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr style="text-align:center;">
                    <th>NO</th>
                    <th>BIDANG</th>
                    <th>SASARAN STRATEGIS</th>
                    <th>INDIKATOR</th>
                    <th>TARGET</th>
                    <th>ASUMSI</th>
                    <th>RESIKO</th>
                    <th>KEGIATAN UTAMA</th>
                    <th>WAKTU</th>
                    <th>TOTAL BIAYA</th>
                    <th>DETAIL BIAYA</th>
                    <th>PENANGGUNG JAWAB</th>
                    <th>KETERANGAN</th>
                </tr>
            </thead>
            <tbody id="tbody">
                <!-- Isi tabel -->
            </tbody>
        </table>
    </div>
</div>

</body>

<!-- <script>
    $(document).ready(function() {
        $.ajax({
            url: "<?php echo base_url('agenda/getAllAgenda'); ?>",
            method: "GET",
            dataType: "JSON",
            async: false,
            success: function(data) {

                var order = 1;
                var html;
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    html += '<tr>';
                    html += '<td>' + order++ + '</td>';
                    html += '<td>' + data[i]['BIDANG'] + '</td>';
                    html += '<td>' + data[i]['SASARAN_STRATEGIS'] + '</td>';
                    html += '<td>' + data[i]['INDIKATOR'] + '</td>';
                    html += '<td>' + data[i]['TARGET'] + '</td>';
                    html += '<td>' + data[i]['ASUMSI'] + '</td>';
                    html += '<td>' + data[i]['RESIKO'] + '</td>';
                    html += '<td>' + data[i]['KEGIATAN_UTAMA'] + '</td>';
                    html += '<td>' + data[i]['WAKTU'] + '</td>';
                    html += '<td>' + data[i]['TOTAL_BIAYA'] + '</td>';
                    html += '<td>' + data[i]['DETAIL_DETAIL'] + '</td>';
                    html += '<td>' + data[i]['PENANGGUNG_JAWAB'] + '</td>';
                    html += '<td>' + data[i]['KETERANGAN'] + '</td>';
                    html += '<td>' + data[i]['LPJ'] + '</td>';
                    html += '</tr>';
                }
                $("tbody").html(html);
            }
        })
    })
</script>
<script>
    $(document).ready(function() {
        // Fetch bidang options on page load
        $.ajax({
            url: "<?php echo base_url('bidang/getAllBidang'); ?>",
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#bidang').append($('<option>', {
                    value: '',
                    text: 'Pilih Bidang'
                }));
                $.each(data, function(key, value) {
                    $('#bidang').append($('<option>', {
                        value: value.nama_bidang,
                        text: value.nama_bidang
                    }));
                });
            }
        });
        // Mendapatkan elemen dropdown
        var dropdown = document.getElementById('myDropdown');

        // Menambahkan event listener untuk 'change' event
        dropdown.addEventListener('change', function() {
            // Mendapatkan nilai dari pilihan yang dipilih
            var selectedValue = dropdown.value;

            getAllTimPelayanan(selectedValue);

        });

    });
</script> -->



</html>