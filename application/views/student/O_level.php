<?php
/**
 * Created by PhpStorm.
 * User: kilenga
 * Date: 7/18/17
 * Time: 8:09 PM
 */
?>
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
                    <img src="assets/images/grammar.jpg"/>
                </div>
                <div class="row lower-part">
                    <h4>Grammar</h4>
                    <p>
                        the whole system and structure of a
                        language or of languages in general,
                        usually taken as consisting of syntax
                        and morphology (including inflections)
                        and sometimes also phonology and semantics.
                    </p>
                    <a href="start-topic"><button class="btn btn-default pull-left start_btn">Start Topic</button> </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <a href="olevel_topics"><button class="btn btn-default big-btn">More Topics</button> </a>
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


