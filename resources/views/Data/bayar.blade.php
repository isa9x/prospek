@extends('template.index')

<!-- awal section content -->
@section('content')

            <form id="pendaftaran" class="form-horizontal" action="faktur" method="post">
                <div class="container">

                    <div class="row">
                        <div id="pendaftaran" class="span5">
                            <fieldset>
                                <legend>Pembayaran</legend>
                                
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

                                 <div class="control-group">
                                    <label for="Paket" class="control-label">Paket</label>
                                    <div class="controls">
                                        <select id="Paket" name="Paket" class="span5">
                                            <option value="">-- Pilih Paket --</option>
                                            <option>
                                                Akuntansi Dasar Privat
                                            </option>
                                            <option>
                                                Akuntansi Dasar Semi Privat
                                            </option>
                                            <option>
                                                Akuntansi Menengah Privat
                                            </option>
                                            <option>
                                                Akuntansi Menengah Semi Privat
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label class="control-label">Jumlah Bayar</label>
                                    <div class="controls">
                                        <input required autofocus name="Bayar" id="Sisa" class="span5" type="Number" min="20000" step="1000" value="0" readonly>
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label class="control-label">Sisa</label>
                                    <div class="controls">
                                        <input required autofocus name="Sisa" id="Sisa" class="span5" min="0" step="1000" type="Number" value="0" readonly>
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
    
} );
</script>
@stop