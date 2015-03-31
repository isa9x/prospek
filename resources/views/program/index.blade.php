@extends('template.index')

@section('content')
<div id="Person-5" class="box">
        <div class="box-header">
            <i class="icon-list icon-large"></i>
            <h5>Program</h5>
            
        </div>
        <div class="box-content box-table">

 <a class="btn btn-primary pull-right" id="sign" data-toggle='modal' data-target='#myModal' href="{!! route('program.create') !!}"><i class="icon-g-circle-plus"></i>Tambah</a>
   
   <table class='table ' id='datatables'>
        <thead>
        <tr>
          <th>Kode</th>
          <th>Nama</th>
          <th>Biaya</th>
          <th>#</th>
        </tr>
        </thead>
        <tbody>
          
        </tbody>
    </table>
  </div>
</div>
@stop

@section('js')

@include('modal')

 {!!HTML::script("assets/laravel/laravel.methodHandler.js")!!} 
   
 <script type="text/javascript">    

    $(document).ready(function(){

          $("#datatables").dataTable({
              "ajax" : "{!! route('program.datatables') !!}",
              "fnInitComplete": function(oSettings, json) {
                  //inisialisi saat datatables setelah load
                   $('a[data-method]').click(function(e){
                      handleMethod(e,$(this));
                      e.preventDefault();
                   });
                }
            }); 

    });
     
 </script>
 @stop

