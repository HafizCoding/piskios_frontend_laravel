<!DOCTYPE html>
<html>
    <head>
    <title>PisKios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet"> 
    <style type="text/css">
        #halo{
            font-family: 'Indie Flower', cursive;
            font-size: 30px;
            color: white;
        }
        #warnafont{
            color: white;
        }
        #warnafont2{
            color: black;
        }
    </style>
    </head>
    <body>
    <nav style="background-color:#00008B;" class="navbar navbar-expand-lg navbar-light ">
        <a id="halo" class="navbar-brand" href='#' rel="stylesheet"><b>PisKios</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a id="warnafont" class="nav-link" href="#"> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a id="warnafont" class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="warnafont" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-aria-expanded="false">
                        dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a id="warnafont2" class="dropdown-item" href="#">Aksi</a>
                        <a id="warnafont2" class="dropdown-item" href="#">Aksi lain</a>
                        <div class="dropdown-divider"></div>
                        <a id="warnafont2" class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a id="warnafont" class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-dark" type="submit"><b>Search</b></button>
            </form>
        </div>
    </nav>
    </body>
</html>


