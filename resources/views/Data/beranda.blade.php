@extends('template.index')

<!-- awal section content -->
@section('content')

    <div class="row">
            <div class="span8">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-bookmark"></i>
                        <h5>Shortcuts</h5>
                    </div>
                    <div class="box-content">
                        <div class="btn-group-box">
                            <a class="btn"><i class="icon-dashboard icon-large"></i><br/>Dashboard</a>
                            <a class="btn" href="pendaftaran"><i class="icon-plus-sign icon-large"></i><br/>Pendaftaran</a>
                            <a class="btn"><i class="icon-search icon-large"></i><br/>Cari</a>
                            <a class="btn"><i class="icon-list-alt icon-large"></i><br/>Laporan</a>
                        </div>
                    </div>
                </div>
            </div>
            @include('data.pesan-selamat-datang')
        </div>
         @include('data.daftar')
    </div>
@stop