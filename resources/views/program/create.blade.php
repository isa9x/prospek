	{!! Form::open(['url'=>'program']) !!}
	<div class="modal-header">
  	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h1>Tambah Program Baru</h1>
	
 
   </div>			<!-- /modal-header -->
   <div class="modal-body">
		@include('program.form',['submitButtonText'=>'Tambah Program'])
	{!! Form::close() !!}