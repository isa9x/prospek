	{!! Form::open(['url'=>'sertifikat']) !!}
	<div class="modal-header">
  	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h1>Tambah Sertifikat Baru</h1>
	
 
   </div>			<!-- /modal-header -->
   <div class="modal-body">
		@include('sertifikat.form',['submitButtonText'=>'Tambah Sertifikat'])
	{!! Form::close() !!}