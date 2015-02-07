<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="icon" href="../../favicon.ico">

    <title>Student Portal | Template</title>

    <!-- bootstrap -->
    <link href="https://student-portal.co.uk/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://student-portal.co.uk/js/html5shiv/html5shiv.min.js"></script>
    <script src="https://student-portal.co.uk/js/respond/respond.min.js"></script>
    <![endif]-->

    <style>
    html {
        position: relative;
        min-height: 100%;
    }
    body {
        margin-bottom: 60px;
    }
    footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 60px;
        background-color: #f5f5f5;
    }

    body > .container {
        padding: 60px 15px 0;
    }
    .container .text-muted {
        margin: 20px 0;
    }

    .footer > .container {
        padding-right: 15px;
        padding-left: 15px;
    }

    code {
        font-size: 80%;
    }
    </style>


</head>

<body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
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
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#contact">Contact</a></li>
    <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
    <ul class="dropdown-menu" role="menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li class="divider"></li>
    <li class="dropdown-header">Nav header</li>
    <li><a href="#">Separated link</a></li>
    <li><a href="#">One more separated link</a></li>
    </ul>
    </li>
    </ul>
    </div><!--/.nav-collapse -->
    </div>
    </nav>

    <!-- Begin page content -->
    <div class="container">
    <div class="page-header">
    <h1>Sticky footer with fixed navbar</h1>
    </div>
    <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body > .container</code>.</p>
    <p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p>
    </div>

    <footer>
    <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
    </div>
    </footer>

    <!-- js library -->
    <script src="https://student-portal.co.uk/assets/js/jquery/jquery-latest.min.js"></script>

    <!-- bootstrap -->
    <script src="https://student-portal.co.uk/assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- common-->
    <script src="https://student-portal.co.uk/assets/js/common/ie10-viewport-bug-workaround.js"></script>

  </body>
</html>
