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
                                        <input required autofocus name="siswa[nis]" id="nis" class="span5" type="text" value="" autocomplete="false" disabled>
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label class="control-label">Nama</label>
                                    <div class="controls">
                                        <input required autofocus name="siswa[nama]" id="nama" class="span5" type="text" value="" autocomplete="false">
                                    </div>
                                </div>

                                 <div class="control-group ">
                                    <label class="control-label">Tanggal Lahir</label>
                                    <div class="controls">
                                        <input required name="siswa[tgl_lahir]" id="tgl_lahir" class="span5" type="date" min="1980-01-01" max="@date('Y-m-d')" formatdate="Y-m-d" value="" autocomplete="false">
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label class="control-label">Tempat Lahir</label>
                                    <div class="controls">
                                        <input required name="siswa[tempat]" id="tempat" class="span5" type="text" value="" autocomplete="false">
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label class="control-label">Nama Orang Tua</label>
                                    <div class="controls">
                                        <input required name="siswa[nama_ortu]" id="nama_ortu" class="span5" type="text" value="" autocomplete="false">
                                    </div>
                                </div>

                                 <div class="control-group ">
                                    <label class="control-label">Alamat</label>
                                    <div class="controls">
                                        <input required name="siswa[alamat]" id="alamat" class="span5" type="text" value="" autocomplete="false">
                                    </div>
                                </div>

                                 <div class="control-group ">
                                    <label class="control-label">Hp</label>
                                    <div class="controls">
                                        <input required name="siswa[hp]" placeholder="Misal : 0896-1234-1234 " type="text" pattern="\d{3,4}[\-]\d{4}[\-]\d{2,5}" title="Gunakan angka! [3 atau 4 digit angka]-[4 digit angka]-[2 sampai 5 digit angka]" id="hp" required/>
                                    </div>
                                </div>

                                 <div class="control-group ">
                                    <label class="control-label">Biaya Pendaftaran</label>
                                    <div class="controls">
                                        <input required name="siswa[biaya_pendaftaran]" class="span5" type="Number" value="{!! $biaya !!}" autocomplete="false" readonly>

                                        <input required name="cek" id='cek' class="span5" type="hidden" value="0" autocomplete="false" readonly>
                                    </div>

                                </div>                               
                            </fieldset>
                        </div>
                    </div>
                    <footer id="submit-actions" class="form-actions">
                        <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM">Next</button>
                        <button type="submit" class="btn" name="action" value="CANCEL">Cancel</button>
                    </footer>
                </div>
            </form>
        </section>
@stop

@section('js')
<script type="text/javascript">
$(document).ready(function() {
    function cekSiswa(){
        $.ajax({
            url:'{!! url("ceksiswa") !!}',
            type: 'post',
            dataType: 'json',
            data:{nama:$('#nama').val(), tgl:$('#tgl_lahir').val()},

            success: function(data){
                if(data.cek==1){
                    alert("data sudah ada");
                     $('#nis').val(data.siswa.nis);  
                     $('#tempat').val(data.siswa.tempat);
                     $('#nama_ortu').val(data.siswa.nama_ortu);  
                     $('#alamat').val(data.siswa.alamat);
                     $('#hp').val(data.siswa.hp);  
                     $('#biaya_pendaftaran').val(data.siswa.biaya_pendaftaran);
                     $('#cek').val(1);
                     $('.form-horizontal').find(':input').removeAttr('disabled');

                }
                else{
                    $('#nis').val();  
                    $('#tempat').val();
                    $('#nama_ortu').val();  
                    $('#alamat').val();
                    $('#hp').val();  
                    $('#biaya_pendaftaran').val(); 
                    $('#cek').val(0);
                }
            }
        });
    }
    $('#nama').change(function(){cekSiswa()});
    $('#tgl_lahir').change(function(){cekSiswa()});
});
</script>
@stop