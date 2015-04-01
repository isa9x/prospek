		<div class="form-group">
			{!! Form::label('biaya','Biaya :') !!}
			{!! Form::input('number','biaya',null,['class'=>'form-control','step'=>'1000']) !!}
		</div>
		@include('errors.list')</div>	
		 <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
		</div>
		
		