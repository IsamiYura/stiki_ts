<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Konfirmasi Data Study Tracer</h4>
            </div>
            <form style="text-align:left;" action=<?php echo base_url("tracer/store")?> method="post">
                <div class="modal-body">
                    <br>
                    <p>Nama Perusahaan
                        <input class="form-control namaPerusahaan" name="instansi_pekerjaan" readonly></input>
                    </p>
                    <br>
                    <p>Durasi Tunggu Pekerjaan
                        <input class="form-control durasiTunggu" readonly></input>
                    </p>
                    <br>
                    <p>Jenis/Bidang Perusahaan
                        <input class="form-control jenisPerusahaan" name="jenis_instansi" readonly></input>
                    </p>
                    <br>
                    <p>Kesesuaian Pekerjaan dengan Pendidikan Terakhir
                        <input class="form-control kesesuaianPendidikan" name="kesesuaian_instansi" readonly></input>
                    </p>
                    <br>
                    <p>Tingkat Pendidikan Minimal pada Perusahaan / Instansi
                        <input class="form-control pendidikanMinimal" name="pendidikan_minimal" readonly></input>
                    </p>
                    <br>
                    <p>Pendapatan Per Bulan
                        <input class="form-control gajiRata2" name="gaji_rata2" readonly></input>
                        <input class="form-control hidden formatter" name="formatter" readonly></input>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                </div>
            </form>
        </div>

    </div>
</div>