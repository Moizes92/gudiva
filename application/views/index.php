<?php
/**
 * Created by PhpStorm.
 * User: kilenga
 * Date: 7/17/17
 * Time: 8:33 AM
 */?>
<!doctype html>
    <html lang="En-US">
        <head>
            <meta charset="UTF-8">
            <title>Gudiva Online Library</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
            <link rel="stylesheet" href="assets/css/index.css" type="text/css">

        </head>

        <body>


        <div id="first-row">
            <nav class="navbar navbar-default" >
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-brand"><img class="logo" src="assets/images/logo.png" style="height:5vh; width: 120%"></div>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white">Topics <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="olevel">O Level</a></li>
                                    <li><a href="alevel">A Level</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white">Past Papers <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="olevel_pp">O Level Past Papers</a></li>
                                    <li><a href="alevel_pp">A Level Past Papers</a></li>
                                </ul>
                            </li>

                            <li><a href="#" style="color: white">Forum</a></li>
                            <li><a href="#" style="color: white">Chat</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="login" style="color: white">Login</a></li>
                            <li><a href="register" style="color: white">Register</a></li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        <div id="second-row">
            <img src="assets/images/student1.jpg">
            <div class=" row center_contents">
                <div class="col-lg-12">
                    <p style="font-size: 50px; font-weight: 600;font-family: merifont;">Gudiva Online Library</p>
                    <p style="font-size: 50px; font-weight: 600;font-family: Verdana; color: whitesmoke">Powerful Tool</p>
                    <p style="font-size: 35px; font-weight: 600; font-family: Verdana;">For Supporting Easy Learning</p>
                    <hr><br/>
                </div>
            </div>
        </div>
        <div id="third-row">
            <div class="row" style="margin-top: 4vh; margin-left: 20px; margin-right: 20px">

                <div class="col-md-3">
                    <div class="well">
                        <div class="row upper-part">
                            <img src="assets/images/maxresdefault.jpg">
                        </div>
                        <div class="row lower-part">
                            <h4>Respiration</h4>
                            <p>
                                A process in living organisms involving the production of energy,
                                typically with the intake of oxygen and the release of carbon
                                dioxide from the oxidation of complex organic substances.
                            </p>
                            <a href="start-topic"><button class="btn btn-default pull-left start_btn">Start Topic</button> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="well">
                        <div class="row upper-part">
                            <img src="assets/images/oxidation1.png">
                        </div>
                        <div class="row lower-part">
                            <h4>Oxidation</h4>
                            <p>
                                Is the loss of electrons. It happens when an atom
                                or compound loses one or more electrons. Some
                                elements lose electrons more easily than others.
                                These elements are said to be easily oxidized.
                            </p>
                            <a href="start-topic"><button class="btn btn-default pull-left start_btn">Start Topic</button> </a>
                        </div>
                    </div>
                </div>
                <div class=" col-md-3 ">
                    <div class="well">
                        <div class="row upper-part">
                            <img src="assets/images/density.jpg"/>
                        </div>
                        <div class="lower-part">
                            <h4>Density</h4>
                            <p>
                                Density is a characteristic property of a substance.
                                The density of a substance is the relationship between
                                the mass of the substance and how much space it takes
                                up (volume).
                            </p>
                            <a href="start-topic"><button class="btn btn-default pull-left start_btn">Start Topic</button> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="well">
                        <div class="row upper-part">
                            <img src="assets/images/hyperbolic.png"/>
                        </div>
                        <div class="row lower-part">
                            <h4>Hyperbolic Functions</h4>
                            <p>
                                A function of an angle expressed as a relationship between
                                the distances from a point on a hyperbola to the origin and
                                to the coordinate axes,as hyperbolic sine or hyperbolic cosine:
                                often expressed as combinations of exponential functions.
                            </p>
                            <a href="start-topic"><button class="btn btn-default pull-left start_btn">Start Topic</button> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="footer">
                <span>Gudiva Online Library &copy <?= date('Y');  ?></span>
            </div>
        </div>


        </body>
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </html>
