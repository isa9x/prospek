	{!! Form::model($biayapendaftaran, ['method'=>'PATCH','action'=>  ['BiayaPendaftaranController@update',$biayapendaftaran->id]]) !!}
	
	<div class="modal-header">
  	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4>Edit</h4>
	
 
   </div>			<!-- /modal-header -->
   <div class="modal-body">
  

		@include('biayapendaftaran.form',['submitButtonText'=>'Ubah Biaya Pendaftaran'])

			<!-- /modal-body -->
     {!! Form::close() !!} 
