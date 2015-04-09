@extends('template.index')

@section('content')

<h1>Data Siswa</h1>
	<fieldset>
	    <div class="control-group">
	        <label class="control-labels">NIS</label>
	        <div class="control-labels">
	           : {{ $siswa->nis }}
	        </div>
	    </div>

	    <div class="control-group ">
	        <label class="control-labels">Nama</label>
	        <div class="control-labels">
	           : {{ $siswa->nama }}
	        </div>
	    </div>

	     <div class="control-group">
	        <label for="Paket" class="control-labels">Tempat, Tanggal Lahir</label>
	        <div class="control-labels">
	           : {{ $siswa->tempat }}, {{ $siswa->tgl_lahir }}
	        </div>
	    </div>

	    <div class="control-group ">
	        <label class="control-labels">Nama Orang Tua</label>
	        <div class="control-labels">
	          : {{ $siswa->nama_ortu }}
	        </div>
	    </div>

	    <div class="control-group ">
	        <label class="control-labels">Nomor Hp</label>
	        <div class="control-labels">
	           : {{ $siswa->hp }}
	        </div>
	    </div>
	    
	    <div class="control-group ">
	        <label class="control-labels">Alamat</label>
	        <div class="control-labels">
	           : {{ $siswa->alamat }}
	        </div>
	    </div>

	    <div class="control-group ">
	        <label class="control-labels">Paket yang Pernah diambil :</label>
	        <div class="control-labels">
				 <div class="box-content box-table">   
					<table class='table' id='paketdatatables'>
			    		<thead>
			        		<tr>
					          <th>Nama Paket</th>
					          <th>Biaya Paket</th>
					          <th>#</th>
					        </tr>
				        </thead>
			        <tbody>
			        </tbody>
			        </table>
			     </div>
				</div>
	        </div>
	    </div>        
	</fieldset>
@stop

@section('js')

 <script type="text/javascript">    

    $(document).ready(function(){

          $("#paketdatatables").dataTable({
              "ajax" : "{!! route('siswa.paketdatatables',$siswa->id) !!}",
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
