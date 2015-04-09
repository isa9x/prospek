@extends('template.index')

@section('content')
<div id="Person-5" class="box">
        <div class="box-header">
            <i class="icon-list icon-large"></i>
            <h5>Siswa</h5>
            
        </div>
        <div class="box-content box-table">   
   <table class='table' id='datatables'>
        <thead>
        <tr>
          <th>ID</th>
          <th>NIS</th>
          <th>Nama</th>
          <th>Tempat</th>
          <th>Tanggal Lahir</th>
          <th>Nama Orang Tua</th>
          <th>No. Hp</th>
          <th>Alamat</th>
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
              "ajax" : "{!! route('siswa.datatables') !!}",
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

