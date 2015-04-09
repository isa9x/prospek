		<div class="form-group">
			{!! Form::label('id','ID :') !!}
			{!! Form::text('id',null,['class'=>'form-control']) !!}


			{!! Form::label('nis','NIS :') !!}
			{!! Form::text('nis',null,['class'=>'form-control']) !!}


			{!! Form::label('nama','Nama :') !!}
			{!! Form::text('nama',null,['class'=>'form-control']) !!}

			{!! Form::label('tempat','Tempat :') !!}
			{!! Form::text('tempat',null,['class'=>'form-control']) !!}

			{!! Form::label('tgl_lahir','Tanggal Lahir :') !!}
			{!! Form::text('tgl_lahir',null,['class'=>'form-control']) !!}

			{!! Form::label('nama_ortu','Nama Orang Tua :') !!}
			{!! Form::text('nama_ortu',null,['class'=>'form-control']) !!}

			{!! Form::label('hp','No. Hp :') !!}
			{!! Form::text('hp',null,['class'=>'form-control']) !!}

			{!! Form::label('alamat','Alamat :') !!}
			{!! Form::text('alamat',null,['class'=>'form-control']) !!}
			
		</div>
		@include('errors.list')</div>	
		 <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
		</div>
		
		