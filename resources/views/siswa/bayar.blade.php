@extends('template.index')

@section('content')

<h1>Detail Pembayaran</h1>

<fieldset>
	<div class="box-content box-table">   
		<table class='table' id='bayardatatables'>
			    		<thead>
			        		<tr>
					          <th>Jumlah Pembayaran</th>
					          <th>Tanggal Pembayaran</th>
					          <th>Sisa</th>
					        </tr>
				        </thead>
			        <tbody>
			        </tbody>
	    </table>
	</div>
</fieldset>
@stop

@section('js')
	
	<script type="text/javascript">    

    $(document).ready(function(){

          $("#bayardatatables").dataTable({
              "ajax" : "{!! route('siswa.datatablesbayar',[$id_siswa,$id_total_bayar]) !!}",
              "fnInitComplete": function(oSettings, json) {
                  //inisialisi saat datatables setelah load
                   $('a[data-method]').click(function(e){
                      handleMethod(e,$(this));
                      e.preventDefault();
                   });
                }
            }); 

    });
     
 </script>
@stop