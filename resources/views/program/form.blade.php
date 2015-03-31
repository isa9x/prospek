		<div class="form-group">
			{!! Form::label('kode','Kode :') !!}
			{!! Form::text('kode',null,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('nama','Nama :') !!}
			{!! Form::text('nama',null,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('biaya','Biaya :') !!}
			{!! Form::text('biaya',null,['class'=>'form-control']) !!}
		</div>
		@include('errors.list')</div>	
		 <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
		</div>
		
		