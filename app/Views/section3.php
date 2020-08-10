<div class="admin-form section3 hidden">

    <div class="panel heading-border">
        <div class="panel-body">


            <h2 class="text-center"><b>Form Tracer Study</b></h2>
            <h5 class="text-center">Silahkan isi form ini sesuai kondisi terbaru anda</h5>
            <hr>
            <!-- .section-divider -->

            <div class="panel bg-primary">
                <h2 class="text-center">Data Riwayat Pendidikan</h2>
            </div>

            <div class="panel">
                <div class="panel-body bg-light">
                    <div class="row">
                        <div class="section">
                            <h4>Apakah bidang kerja anda saat ini sudah sesuai dengan program studi yang anda ambil di
                                STIKI Malang?</h4>
                            <hr>
                            <div class="form-row">

                                <div class="row">
                                    <div class="text-center col-md-6">
                                        <button class="btn btn-primary btn-block sesuai iya-sesuai" id="iya" onClick="reply_click(this.id)" name="kesesuaianKerja"
                                            value="Sesuai">Sesuai</button>
                                    </div>
                                    <div class="text-center col-md-6">
                                        <button class="btn btn-warning btn-block sesuai tidak-sesuai" id="tidak" onClick="reply_click(this.id)" name="kesesuaianKerja"
                                            value="Tidak Sesuai">Tidak Sesuai</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel">

                <div class="panel-body bg-light">
                    <h4>Apa tingkat pendidikan minimal yang dibutuhkan pada departemen tempat anda bekerja?</h4>
                    <div class="option-group row">
                        <div class="pilihan col-md-12">
                            <label class="option col-md-6">
                                <input type="radio" name="pendidikanMinimal" value="SMA Sederajat">
                                <span class="radio"></span>SMA Sederajat
                            </label>

                            <label class="option">
                                <input type="radio" name="pendidikanMinimal" value="Strata 1">
                                <span class="radio"></span>Strata 1
                            </label>
                        </div>

                        <div class="pilihan col-md-12">
                            <label class="option col-md-6">
                                <input type="radio" name="pendidikanMinimal" value="Diploma 1">
                                <span class="radio"></span>Diploma 1
                            </label>

                            <label class="option">
                                <input type="radio" name="pendidikanMinimal" value="Strata 2">
                                <span class="radio"></span>Strata 2
                            </label>
                        </div>

                        <div class="pilihan col-md-12">
                            <label class="option col-md-6">
                                <input type="radio" name="pendidikanMinimal" value="Diploma 3">
                                <span class="radio"></span>Diploma 3
                            </label>

                        </div>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-body bg-light">
                    <h4>Kira-kira berapa pendapatan anda (take home pay) setiap bulannya?</h4>
                    <div class="row">
                        <div>
                            <div class="section">

                                <br>
                                <div class="form-row">


                                    <label class="field">
                                        <input type="text" name="gajiRata2" class="gui-input gajiRata2"
                                            placeholder="Masukkan rata-rata pendapatan anda">
                                            </input>
                                    </label>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-9 pull-right">
                <div class="pull-right">
                    <div class="align-center text-center col-md-6 float-left" style="margin-left:auto;">
                        <button class="btn btn-success btn-block prev">Prev.</button>
                    </div>

                    <div class="text-center col-md-6">
                        <button class="btn btn btn-primary simpan" data-toggle="modal" data-target="#myModal">
                            <i class="glyphicon glyphicon-floppy-save" style="color:white;"></i>
                            <h4>Simpan</h4>
                        </button>
                    </div>
                </div>

            </div>
        </div>


    </div>