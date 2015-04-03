@extends('template.index')

<!-- awal section content -->
@section('content')
        
        <section id="pendaftaran_siswa" class="page container">
            {!! Form::open(['action'=>'PendaftaranController@postIndex','class'=>'form-horizontal'])!!}
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
                                        <input required autofocus name="siswa[nis]" class="span5" type="text" value="" autocomplete="false">
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label class="control-label">Nama</label>
                                    <div class="controls">
                                        <input required autofocus name="siswa[nama]" class="span5" type="text" value="" autocomplete="false">
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label class="control-label">Tempat Lahir</label>
                                    <div class="controls">
                                        <input required name="siswa[tempat]" class="span5" type="text" value="" autocomplete="false">
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label class="control-label">Tanggal Lahir</label>
                                    <div class="controls">
                                        <input required name="siswa[tgl_lahir]" class="span5" type="date" min="1980-01-01" max="@date('Y-m-d')" formatdate="Y-m-d" value="" autocomplete="false">
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label class="control-label">Nama Orang Tua</label>
                                    <div class="controls">
                                        <input required name="siswa[nama_ortu]" class="span5" type="text" value="" autocomplete="false">
                                    </div>
                                </div>

                                 <div class="control-group ">
                                    <label class="control-label">Alamat</label>
                                    <div class="controls">
                                        <input required name="siswa[alamat]" class="span5" type="text" value="" autocomplete="false">
                                    </div>
                                </div>

                                 <div class="control-group ">
                                    <label class="control-label">Hp</label>
                                    <div class="controls">
                                        <input required name="siswa[hp]" placeholder="Misal : 0896-1234-1234 " type="text" pattern="\d{3,4}[\-]\d{4}[\-]\d{2,5}" title="Gunakan angka! [3 atau 4 digit angka]-[4 digit angka]-[2 sampai 5 digit angka]" required/>
                                    </div>
                                </div>

                                 <div class="control-group ">
                                    <label class="control-label">Biaya Pendaftaran</label>
                                    <div class="controls">
                                        <input required name="siswa[biaya_pendaftaran]" class="span5" type="Number" value="{!! $biaya !!}" autocomplete="false" readonly>
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