@extends('template.index')

<!-- awal section content -->
@section('content')
	<div id="Person-5" class="box">
        <div class="box-header">
            <i class="icon-user icon-large"></i>
            <h5>Data Pembayaran Siswa A</h5>
            
        </div>
        <div class="box-content box-table">
        <table class="table table-hover tablesorter" id="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Bayar</th>
                    <th>Jumlah Bayar</th>
                    <th>Sisa</th>
                    <th>Aksi</th>
                </tr>
            </thead>
             <tfoot>
                <tr>
                    <th>No</th>
                    <th>Tanggal Bayar</th>
                    <th>Jumlah Bayar</th>
                    <th>Sisa</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
            
                <tr>
                    <td>1</td>
                    <td>2015-01-25</td>
                    <td>Rp 150.000</td>
                    <td>Rp 400.000</td>
                    <td><button class="btn"><i class="icon-print"></i> Cetak</button></td>
                </tr>
            
                 <tr>
                    <td>2</td>
                    <td>2015-02-25</td>
                    <td>Rp 150.000</td>
                    <td>Rp 250.000</td>
                    <td><button class="btn"><i class="icon-print"></i> Cetak</button></td>
                </tr>
            
                 <tr>
                    <td>3</td>
                    <td>2015-03-25</td>
                    <td>Rp 150.000</td>
                    <td>Rp 100.000</td>
                    <td><button class="btn"><i class="icon-print"></i> Cetak</button></td>
                </tr>
            	
            	 <tr>
                    <td>4</td>
                    <td>2015-04-01</td>
                    <td>Rp 150.000</td>
                    <td>Rp 0</td>
                    <td><button class="btn"><i class="icon-print"></i> Cetak</button></td>
                </tr>
            </tbody>
        </table>
        </div>

    </div>

@stop


@section('js')
	<script type="text/javascript">
		$(document).ready(function() {
		    $('#table').dataTable();
		} );
	</script>
@stop
