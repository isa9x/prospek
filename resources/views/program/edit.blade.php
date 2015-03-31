	{!! Form::model($program, ['method'=>'PATCH','action'=>  ['ProgramController@update',$program->id]]) !!}
	
	<div class="modal-header">
  	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h1>Edit: {!! $program-> nik !!} </h1>
	
 
   </div>			<!-- /modal-header -->
   <div class="modal-body">
  

		@include('program.form',['submitButtonText'=>'Ubah program'])

			<!-- /modal-body -->
     {!! Form::close() !!} 
