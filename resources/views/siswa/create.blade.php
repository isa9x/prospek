	{!! Form::open(['url'=>'siswa']) !!}
	<div class="modal-header">
  	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h1>Tambah Siswa Baru</h1>
	
 
   </div>			<!-- /modal-header -->
   <div class="modal-body">
		@include('siswa.form',['submitButtonText'=>'Tambah Siswa'])
	{!! Form::close() !!}