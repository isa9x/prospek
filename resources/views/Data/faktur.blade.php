{!!HTML::style("assets/css/customize-template.css")!!}
            <form id="pendaftaran" class="form-horizontal" action="#" method="post">
                <div class="container">

                    <div class="row">
                        <div id="pendaftaran" class="span8">
                            <fieldset>
                                <legend></legend>
                                
                                <div class="control-group">
                                    <label class="control-labels">NIS</label>
                                    <div class="control-labels">
                                       : {!! session('siswa')['nis'] !!}
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label class="control-labels">Nama</label>
                                    <div class="control-labels">
                                       : {!! session('siswa')['nama'] !!}
                                    </div>
                                </div>

                                 <div class="control-group">
                                    <label for="Paket" class="control-labels">Paket</label>
                                    <div class="control-labels">
                                       :         {!! session('nama_paket') !!}
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label class="control-labels">Jumlah Bayar</label>
                                    <div class="control-labels">
                                      :  {!! session('bayar')['jumlah'] !!}
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label class="control-labels">Sisa</label>
                                    <div class="control-labels">
                                       : {!! session('sisa') !!}
                                    </div>
                                </div>
                                
                                <div class="control-group ">
                                    <label class="control-labels">Keterangan</label>
                                    <div class="control-labels">
                                       : {!! session('ket') !!}
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-labels">Catatan &nbsp;:
                                        <p> Uang yang telah diterima tidak dapat dikembalikan dengan alasan apapun.</p>
                                    </label>
                                    <div class="controls" style="float:right;">
                                       Palembang,  {!! date('d-m-Y',strtotime(session('bayar')['created_at'])) !!}
                                       <p>Yang menerima,</p>
                                       <br /><br />
                                       <p>Admin</p>
                                    </div>
                                </div>
                                </div>
                                
                            </fieldset>
                        </div>
                    </div>
                </div>
            </form>