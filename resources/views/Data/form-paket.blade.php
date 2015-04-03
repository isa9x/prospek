@extends('template.index')

<!-- awal section content -->
@section('content')

            {!! Form::open() !!}
                <div class="container">

                    <div class="row">
                        <div id="pendaftaran" class="span5">
                            <fieldset>
                                <legend>Data Paket Yang Diambil</legend>
                                
                                <div class="control-group ">
                                    <label class="control-label">NIS</label>
                                    <div class="controls">
                                        <?php $siswa = session('siswa') ?>
                                        <input required autofocus name="NIS" class="span5" type="text" value="{!! $siswa['nis']!!}" autocomplete="false">
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label class="control-label">Nama</label>
                                    <div class="controls">
                                        <input required autofocus name="Nama" class="span5" type="text" value="" autocomplete="false">
                                    </div>
                                </div>

                                 <div class="control-group">
                                    <label for="Paket" class="control-label">Paket</label>
                                    <div class="controls">
                                        {!! Form::select('paket', $program, null, ['id'=>'paket', 'class'=>'span5'])!!}
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label class="control-label">Biaya Paket</label>
                                    <div class="controls">
                                        <input required autofocus name="BPaket" id="BPaket" class="span5" type="Number" min="0" step="1000" value="0" readonly>
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label class="control-label">Biaya Sertifikat</label>
                                    <div class="controls">
                                        <input required autofocus name="BSertifikat" id="BSertifikat" class="span5" min="0" step="1000" type="Number" value="0" readonly>
                                    </div>
                                </div>
                                
                                <div class="control-group ">
                                    <label class="control-label">Total</label>
                                    <div class="controls">
                                        <input required autofocus name="Total" id="Total" class="span5" min="0" step="1000" type="Number" value="0" readonly>
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
             {!! Form::close() !!} 

@stop
<!-- awal section javascript -->
@section('js')
<script type="text/javascript">
$(document).ready(function() {
    function total(){
        var a=$('#BPaket').val();
        var b=$('#BSertifikat').val();
        var c=parseInt(a)+parseInt(b);
        $('#Total').val(c);
    }

    $('#BPaket').change(function(){total();});
    $('#BSertifikat').change(function(){total();});
} );
</script>
@stop