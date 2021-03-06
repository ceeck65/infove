<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Starter Template</title>
    
    <!-- META TAGs -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">


    <!-- CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- THEMES -->

    <!-- <link rel="stylesheet" href="https://bootswatch.com/cerulean/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://bootswatch.com/cyborg/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://bootswatch.com/darkly/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://bootswatch.com/journal/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://bootswatch.com/lumen/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://bootswatch.com/paper/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://bootswatch.com/readable/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://bootswatch.com/sandstone/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://bootswatch.com/simplex/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://bootswatch.com/slate/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://bootswatch.com/spacelab/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://bootswatch.com/superhero/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://bootswatch.com/united/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://bootswatch.com/yeti/bootstrap.min.css"> -->

    <!-- /THEMES -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('css')
</head>

<body>

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{route('categories.index')}}">Category</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @if(session('message'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{@session('message')}}
        </div>
        @endif

        @yield('header')
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
    
    @yield('scripts')
    <script>
        $('.date-picker').datepicker();
    </script>
</body>
</html>
