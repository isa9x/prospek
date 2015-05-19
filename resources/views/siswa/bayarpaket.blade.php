@extends('template.index')

<!-- awal section content -->
@section('content')

            {!! Form::open(['action'=>'PendaftaranController@postBayar','class'=>'form-horizontal'])!!}
                <div class="container">

                    <div class="row">
                        <div id="pendaftaran" class="span5">
                            <fieldset>
                                <legend>Pembayaran</legend> 
                                <div class="control-group ">
                                    <label class="control-label">NIS</label>
                                    <div class="controls">
                                        <input required autofocus name="NIS" class="span5" type="text" value="{!! session('siswa')['nis'] !!}" autocomplete="false" readonly>
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label class="control-label">Nama</label>
                                    <div class="controls">
                                        <input required autofocus name="Nama" class="span5" type="text" value="{!! session('siswa')['nama'] !!}" autocomplete="false" readonly>
                                    </div>
                                </div>

                                 <div class="control-group">
                                    <label for="Paket" class="control-label">Paket</label>
                                    <div class="controls">
                                         <input required autofocus name="Nama" class="span5" type="text" value="{!! session('nama_paket') !!}" autocomplete="false" readonly>
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label class="control-label">Jumlah Bayar</label>
                                    <div class="controls">
                                        <input required autofocus name="Bayar" id="Bayar" class="span5" type="Number" min=10000 max="{!! session('paket')['biaya_paket'] !!}" step=10000 value="">
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label class="control-label">Sisa Lama</label>
                                    <div class="controls">
                                        <input required autofocus name="SisaL" id="SisaL" class="span5" min="0" step="1000" type="Number" value="{!! session('paket')['biaya_paket'] !!}" readonly>
                                    </div>
                                </div>

                                 <div class="control-group ">
                                    <label class="control-label">Sisa Sekarang</label>
                                    <div class="controls">
                                        <input required autofocus name="SisaS" id="SisaS" class="span5" min="0" step="1000" type="Number" value="{!! session('paket')['biaya_paket'] !!}" readonly>
                                    </div>
                                </div>
                                
                                <div class="control-group ">
                                    <label class="control-label">Keterangan</label>
                                    <div class="controls">
                                        <input required autofocus name="Ket" id="Ket" class="span5" type="Text" value="Lunas / Belum Lunas" readonly>
                                    </div>
                                </div>
                             
                            </fieldset>
                        </div>
                    </div>
                    <footer id="submit-actions" class="form-actions">
                        <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM">Save & Pay</button>
                        <button type="submit" class="btn" name="action" value="CANCEL">Cancel</button>
                    </footer>
                </div>
            </form>

@stop
<!-- awal section javascript -->
@section('js')
<script type="text/javascript">
$(document).ready(function() {
    $('#Bayar').keyup(function(){hitung()}).change(function(){hitung()});
    function hitung(){
        var a= $('#Bayar').val();
        var b= $('#SisaL').val();
        var c= parseInt(b)-parseInt(a);
        $('#SisaS').val(c);

        if(c==0){
            $('#Ket').val('Lunas');
        }else{
            $('#Ket').val('Belum Lunas');
        }

    }
});
</script>
@stop