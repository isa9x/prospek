 <!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Simple Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="layout" content="main"/>
    
    <!--script type="text/javascript" src="http://www.google.com/jsapi"></script-->

    {!!HTML::script("assets/js/jquery/jquery-2.0.3.min.js")!!}
    {!!HTML::style("assets/css/customize-template.css")!!}

    {!!HTML::script("assets/datatables/jquery.datatables.js")!!}
    {!!HTML::style("assets/datatables/jquery.datatables.css")!!}



    <style>
        #body-content { padding-top: 40px;}
    </style>
</head>
    <body>
        <div id="body-container">
            <div id="body-content">
                
        <section class="navbar-fixed-top nav nav-page">
        <div class="container">
            <div class="row">
                <div class="span7">
                    <header class="page-header">
                        <h3>Lembaga Kursus Prospek<br/>
                            <small>Jalan Letnan Sayuti No 1365 Palembang.</small>
                        </h3>
                    </header>
                </div>
                <div class="page-nav-options">
                    <div class="span9">
                        <ul class="nav nav-pills">
                            <li>
                                <a href="#"><i class="icon-off icon-large"></i>Log Out</a>
                            </li>
                        </ul>
                        <ul class="nav nav-tabs">
                            <li><a href="#">Pembayaran</a></li>
                            <li><a href="#">Data Siswa</a></li>
                            <li><a href="#">Data User</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page container" style="margin-top:50px;">
        <!-- Content pada template -->

        @yield('content')

    </section>

    

            </div>
        </div>

        <div id="spinner" class="spinner" style="display:none;">
            Loading&hellip;
        </div>

        <footer class="application-footer">
            <div class="container">
                
                <div class="disclaimer">
                    <p>Lembaga Kursus Prospek. All right reserved.</p>
                    <p>Copyright © <a href="http://lapro.id" target="blank">Lapro.id</a> 2015</p>
                </div>
            </div>
        </footer>
        
        {!!HTML::script("assets/js/bootstrap/bootstrap-transition.js")!!}
        {!!HTML::script("assets/js/bootstrap/bootstrap-alert.js")!!}
        {!!HTML::script("assets/js/bootstrap/bootstrap-modal.js")!!}
        {!!HTML::script("assets/js/bootstrap/bootstrap-dropdown.js")!!}
        {!!HTML::script("assets/js/bootstrap/bootstrap-scrollspy.js")!!}
        {!!HTML::script("assets/js/bootstrap/bootstrap-tab.js")!!}
        {!!HTML::script("assets/js/bootstrap/bootstrap-tooltip.js")!!}
        {!!HTML::script("assets/js/bootstrap/bootstrap-popover.js")!!}
        {!!HTML::script("assets/js/bootstrap/bootstrap-button.js")!!}
        {!!HTML::script("assets/js/bootstrap/bootstrap-collapse.js")!!}
        {!!HTML::script("assets/js/bootstrap/bootstrap-carousel.js")!!}
        {!!HTML::script("assets/js/bootstrap/bootstrap-typeahead.js")!!}
        {!!HTML::script("assets/js/bootstrap/bootstrap-affix.js")!!}
        {!!HTML::script("assets/js/bootstrap/bootstrap-datepicker.js")!!}
        {!!HTML::script("assets/js/jquery/jquery-tablesorter.js")!!}
        {!!HTML::script("assets/js/jquery/jquery-chosen.js")!!}
        {!!HTML::script("assets/js/jquery/virtual-tour.js")!!}
        <script type="text/javascript">
       
       /* $(function() {
            $('#sample-table').tablesorter();
            $('#datepicker').datepicker();
            $(".chosen").chosen();
        });*/
        </script>
          @yield('js')
    </body>
</html>