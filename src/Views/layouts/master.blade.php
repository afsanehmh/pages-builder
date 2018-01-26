<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie8 no-js" lang="en">
<![endif]-->

<!--[if IE 9]>
<html class="ie9 no-js" lang="en">
<![endif]-->

<!--[if !IE]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- start: HEAD -->
<head>
    <title>@yield('page-title')</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- start: META -->
    <meta charset="utf-8" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="afsaneh mh" name="author" />

@yield('meta')
<!-- end: META -->
    <!-- start: MAIN CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
@yield('style')
<!-- end: MAIN CSS -->
</head>


<!-- end: HEAD -->
<body class="rtl">
<div class="container" style="margin: 100px auto">
    <!-- start: PAGE HEADER -->
    <div class="row">
        <div class="col-sm-12">
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>success</strong> {{ session()->get('success') }}
                </div>
            @endif
            @if(session()->has('error'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>error</strong> {{ session()->get('error') }}
                </div>
            @endif
            @yield('page-content')
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>

@yield('javascript-link')

<!-- end: MAIN JAVASCRIPTS -->
@yield('javascript')
<script>
    $(document).ready(function() {
        @yield('document-ready')
    });
    @yield('javascript-code')
</script>

<!-- end: MAIN JAVASCRIPTS -->


</body>
</html>