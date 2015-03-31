@extends('template.index')

<!-- awal section content -->
@section('content')
        
        <section id="pendaftaran_siswa" class="page container">
            <form id="pendaftaran" class="form-horizontal" action="#" method="post">
                <div class="container">

                    <div class="alert alert-block alert-info">
                        <p>
                           Silahkan isi data siswa pada formulir dibawah ini.
                        </p>
                    </div>
                    <div class="row">
                        <div id="pendaftaran" class="span5">
                            <fieldset>
                                <legend>Data Siswa</legend>
                                
                                <div class="control-group ">
                                    <label class="control-label">NIS</label>
                                    <div class="controls">
                                        <input required autofocus name="NIS" class="span5" type="text" value="" autocomplete="false">
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label class="control-label">Nama</label>
                                    <div class="controls">
                                        <input required autofocus name="Nama" class="span5" type="text" value="" autocomplete="false">
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label class="control-label">Tempat Lahir</label>
                                    <div class="controls">
                                        <input required name="Tempat" class="span5" type="text" value="" autocomplete="false">
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label class="control-label">Tanggal Lahir</label>
                                    <div class="controls">
                                        <input required name="Tanggal" class="span5" type="date" min="1980-01-01" max="@date('Y-m-d')" formatdate="Y-m-d" value="" autocomplete="false">
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label class="control-label">Nama Orang Tua</label>
                                    <div class="controls">
                                        <input required name="Ortu" class="span5" type="text" value="" autocomplete="false">
                                    </div>
                                </div>

                                 <div class="control-group ">
                                    <label class="control-label">Alamat</label>
                                    <div class="controls">
                                        <input required name="Alamat" class="span5" type="text" value="" autocomplete="false">
                                    </div>
                                </div>

                                 <div class="control-group ">
                                    <label class="control-label">Hp</label>
                                    <div class="controls">
                                        <input required name="Hp" placeholder="Misal : 0896-1234-1234 " type="text" pattern="\d{3,4}[\-]\d{4}[\-]\d{2,5}" title="Gunakan angka! [3 atau 4 digit angka]-[4 digit angka]-[2 sampai 5 digit angka]" required/>
                                    </div>
                                </div>

                                 <div class="control-group ">
                                    <label class="control-label">Biaya Pendaftaran</label>
                                    <div class="controls">
                                        <input required name="BP" class="span5" type="Number" value="100000" min="30000" step="1000" autocomplete="false">
                                    </div>
                                </div>                               
                            </fieldset>
                        </div>
                    </div>
                    <footer id="submit-actions" class="form-actions">
                        <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM">Save</button>
                        <button type="submit" class="btn" name="action" value="CANCEL">Cancel</button>
                    </footer>
                </div>
            </form>
        </section>
@stop