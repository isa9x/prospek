	{!! Form::open(['url'=>'biayapendaftaran']) !!}
	<div class="modal-header">
  	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h1>Tambah biayapendaftaran Baru</h1>
	
 
   </div>			<!-- /modal-header -->
   <div class="modal-body">
		@include('biayapendaftaran.form',['submitButtonText'=>'Tambah Biaya Pendaftaran'])
	{!! Form::close() !!}