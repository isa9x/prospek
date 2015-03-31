@extends('template.index')

<!-- awal section content -->
@section('content')
	<div id="Person-5" class="box">
        <div class="box-header">
            <i class="icon-list icon-large"></i>
            <h5>Data Paket Yang Diikuti Siswa A</h5>
            
        </div>
        <div class="box-content box-table">
        <table class="table table-hover tablesorter" id="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Paket</th>
                    <th>Jumlah Bayar</th>
                    <th>Sisa</th>
                    <th>Aksi</th>
                </tr>
            </thead>
             <tfoot>
                <tr>
                    <th>No</th>
                    <th>Paket</th>
                    <th>Jumlah Bayar</th>
                    <th>Sisa</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
            
                <tr>
                    <td>1</td>
                    <td>Akuntansi Dasar</td>
                    <td>Rp 150.000</td>
                    <td>Rp 400.000</td>
                    <td>
                        <a href="bayar" class="btn"><i class="icon-money"></i> Bayar</a>
                        <a href="data-bayar" class="btn"><i class="icon-list-alt"></i> Lihat Detail</a>
                    </td>
                </tr>
            
                 <tr>
                    <td>2</td>
                    <td>Algoritma Pemrograman</td>
                    <td>Rp 550.000</td>
                    <td>Rp 250.000</td>
                    <td>
                        <a href="bayar" class="btn"><i class="icon-money"></i> Bayar</a>
                        <a href="data-bayar" class="btn"><i class="icon-list-alt"></i> Lihat Detail</a>
                    </td>
                </tr>
            
                 <tr>
                    <td>3</td>
                    <td>Pemrograman C++</td>
                    <td>Rp 150.000</td>
                    <td>Rp 650.000</td>
                    <td>
                        <a href="bayar" class="btn"><i class="icon-money"></i> Bayar</a>
                        <a href="data-bayar" class="btn"><i class="icon-list-alt"></i> Lihat Detail</a>
                    </td>
                </tr>
            	
            	 <tr>
                    <td>4</td>
                    <td>Pemrograman Java</td>
                    <td>Rp 800.000</td>
                    <td>Rp 0</td>
                    <td>
                        <a href="bayar" class="btn" disabled><i class="icon-money"></i> Bayar</a>
                        <a href="data-bayar" class="btn"><i class="icon-list-alt"></i> Lihat Detail</a>
                    </td>
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
