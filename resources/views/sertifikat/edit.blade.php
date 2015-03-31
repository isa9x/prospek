	{!! Form::model($sertifikat, ['method'=>'PATCH','action'=>  ['SertifikatController@update',$sertifikat->id]]) !!}
	
	<div class="modal-header">
  	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h1>Edit</h1>
	
 
   </div>			<!-- /modal-header -->
   <div class="modal-body">
  

		@include('sertifikat.form',['submitButtonText'=>'Ubah Sertifikat'])

			<!-- /modal-body -->
     {!! Form::close() !!} 
