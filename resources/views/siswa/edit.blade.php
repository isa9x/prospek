	{!! Form::model($siswa, ['method'=>'PATCH','action'=>  ['SiswaController@update',$siswa->id]]) !!}
	
	<div class="modal-header">
  	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h1>Edit</h1>
	
 
   </div>			<!-- /modal-header -->
   <div class="modal-body">
  

		@include('siswa.form',['submitButtonText'=>'Ubah Siswa'])

			<!-- /modal-body -->
     {!! Form::close() !!} 
