<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="<?php echo base_url("styles.css") ?>">

</head>

<body>
    <div class="navbar">
        <h2>PAROKI KELUARGA KUDUS BANTENG</h2>
    </div>
    <div class="navbar">
        <ul>
            <li><a href="HOME.html">Home</a></li>
            <li><a class="active" href="AGENDA.html">Agenda</a></li>
            <li><a href="MONEV.html">Monev</a></li>
            <li><a href="ABOUT.html">About</a></li>
            <li style="float:right"><a class="active" href="LOGIN.html">Logout</a></li>
        </ul>
    </div>

    <div>
        <form>
            <table>
                <tbody>
                    <tr>
                        <td style="width: 150px;font-size:12px;color:#555555;">
                            <span>Tahun Anggaran</span>
                        </td>

                        <td>
                            <div class="dropdown">
                                <select name="bidang" id="bidang" class="dropdown-select">
                                    <option value="">-- SEMUA --</option>
                                    <option value="00">20024</option>
                                    <option value="01">2023</option>
                                    <option value="02">2022</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 150px;font-size:12px;color:#555555;">
                            <span>Bidang</span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <select name="bidang" id="bidang" class="dropdown-select">
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
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 150px;font-size:12px;color:#555555;"><span>Bulan</span></td>
                        <td>
                            <div class="dropdown">
                                <select name="sesi_bulan" id="sesi_bulan" class="dropdown-select">
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
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input name="open" type="hidden" value="2">
                            <input name="btncari" class="btn-cari" value="Cari" type="submit" onclick="post('filterbox2', this); return false">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        <div class="table-container">
            <table class="table table-striped table-bordered">
                <tbody>
                    <tr align="center">
                        <th class="header-cell">NO</th>
                        <th class="header-cell">BIDANG / TIMPEL</th>
                        <th class="header-cell">NAMA KEGIATAN</th>
                        <th class="header-cell">INDIKATOR</th>
                        <th class="header-cell">TARGET</th>
                        <th class="header-cell">PELAKSANAAN</th>
                        <th class="header-cell">DANA LAIN-LAIN / KEPANITIAAN</th>
                        <th class="header-cell">PENANGGUNG JAWAB</th>
                        <th class="header-cell">PROGRAM VISIONER</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


</body>

</html>