<form method="POST" action="<?=$folder;?>/proses.php">
    <div id="form" class="modal">
        <div class="modal-content">
            <h4 class="card-title">Tambah Tabel Database</h4>
            <!-- BEGIN: input tab -->
            <div class="row">
                <div class="input-field col s6">
                    <input id="judul_tabel_sistem" type="text" name="judul_tabel_sistem" value="<?=$data['judul_tabel_sistem'];?>" required>
                    <label for="judul_tabel_sistem" class="">Judul Tabel</label>
                </div>
                <div class="input-field col s6">
                    <input id="nama_tabel_sistem" type="text" name="nama_tabel_sistem" value="<?=$data['nama_tabel_sistem'];?>" required>
                    <label for="nama_tabel_sistem" class="">Nama Tabel</label>
                </div>
            </div>
            <!-- END: input tab -->
            <h4 class="card-title">Detail Anggaran Belanjaan</h4>
            <hr>    
            <!-- BEGIN: input tab -->
            <div class="view-select2">
                <div class="row">
                    <div class="input-field col s3">
                        <input type="text" name="judul_field_sistem[]" value="<?=$rows['judul_field_sistem'];?>" required>
                        <label class="">Judul Field</label>
                    </div>
                    <div class="input-field col s2">
                        <input id="nama_field_sistem" type="text" name="nama_field_sistem[]" value="<?=$rows['nama_field_sistem'];?>" required>
                        <label class="">Nama Field</label>
                    </div>
                    <div class="input-field col s2">
                        <div class="select-wrapper">
                            <select name="tipe_field_sistem[]" class="browser-default" required>
                                <option value="int">int</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-field col s2">
                        <input type="text" name="values_field_sistem[]" value="11">
                        <label class="">Value</label>
                    </div>
                    <div class="input-field col s2">
                        <div class="select-wrapper">
                            <select name="keterangan_field_sistem[]" class="browser-default">
                                <option value="primary">primary</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-field col s1">
                        <button type="button" class="mb-6 btn-floating waves-effect waves-light gradient-45deg-light-blue-cyan add-more"><i class="material-icons">add</i></button>
                    </div>
                </div>
            </div>
            <!-- END: input tab -->        
            <div class=" before-add-more">
                
            </div>
        </div>
        <div class="modal-footer">
            <button type="reset" class="waves-effect waves-green btn-flat" style="float: left;">Reset</button>
            <button class="waves-effect waves-green btn-flat" name="tambah" style="float: right;">Simpan</button>
        </div>
    </div>
</form>

<div class="copy hide">
    <!-- BEGIN: input tab -->
            <div class="view-select2">
                <div class="row">
                    <div class="input-field col s3">
                        <input type="text" name="judul_field_sistem[]" value="<?=$rows['judul_field_sistem'];?>" required>
                        <label class="">Judul Field</label>
                    </div>
                    <div class="input-field col s2">
                        <input id="nama_field_sistem" type="text" name="nama_field_sistem[]" value="<?=$rows['nama_field_sistem'];?>" required>
                        <label class="">Nama Field</label>
                    </div>
                    <div class="input-field col s2">
                        <div class="select-wrapper">
                            <select name="tipe_field_sistem[]" class="browser-default" required>
                                <option value>~ Tipe ~</option>
                                <option value="int">int</option>
                                <option value="varchar">varchar</option>
                                <option value="date">date</option>
                                <option value="time">time</option>
                                <option value="datetime">datetime</option>
                                <option value="year">year</option>
                                <option value="month">month</option>
                                <option value="enum">enum</option>
                                <option value="file">file</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-field col s2">
                        <input type="text" name="values_field_sistem[]" value="<?=$rows['values_field_sistem'];?>">
                        <label class="">Value</label>
                    </div>

                    <div class="input-field col s2">
                        <div class="select-wrapper">
                            <select name="keterangan_field_sistem[]" class="browser-default">
                                <option value>~ Sistem ~</option>
                                <option value="index">index</option>
                            </select>
                        </div>
                    </div>                    
                    <div class="input-field col s1">
                        <button type="button" class="mb-6 btn-floating btn-flat waves-effect waves-light red white-text remove"><i class="material-icons">clear</i></button>
                    </div>
                </div>
            </div>
            <!-- END: input tab -->  
</div>