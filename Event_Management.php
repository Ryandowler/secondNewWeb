<!doctype html>
<?php
require 'Styles.php';
require 'Scripts.php';
require 'ensureUserLoggedIn.php';
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>My Website</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->



    </head>
    <body>
        <?php
        if (isset($message)) {
            echo '<p>' . $message . '</p>';
        }
        ?>


        <!-- Calling in navigation bar, if i need to edit just edit NavBar.php-->
        <?php
        require 'NavBar.php'
        ?>

        <!-- 
        <div class="container">
                <div class = "jumbotron">
                        <h1> Helloworld!!</h1>
                        <p> haqqq reuny ahahahsgdydguydgwefuyfg gefuyeyfui fuiwe efue euieufhefuh eui eouifh eoifh eo eo eo fehoeh eiofhoe eofgeo eiof </p>
                        <a class ="btn btn-default">Book now</a>
                </div>
                
                <div class="spaceUnderJumbo col-lg-12">
                        <button type="button" class="btn btn-lg link-btn col-lg-4">
                                <a href ="#"> Create Event</a>
                        </button>
                        <button type="button" class="btn btn-lg link-btn col-lg-4 ">
                                <a href ="#"> What We Do</a>
                        </button>
                        <button type="button" class="btn btn-lg link-btn col-lg-4">
                                <a href ="#"> Why Us</a>
                        </button>
                </div>
                
        </div>
        
        
        -->
        <div class="mainColour">


            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/kodaline1.jpg" alt="...">
                        <div class="carousel-caption carouselCaptionMove">
                            <h3 class="hidden-xs">This June: <text class="bandName hidden-xs">Kodaline </text></h3>

                        </div>
                        <div class="carousel-caption carouselButton">
                            <a href="viewEvent.php?id=68" class="btn btn-lg bookNowButton1 hidden-xs hidden-sm hidden-md ">Book Now</a>
                        </div>

                    </div>
                    <div class="item">
                        <img src="img/eminem.jpg" alt="...">
                        <div class="carousel-caption carouselCaptionMove3">
                            <h3 class="hidden-xs">This July: <text class="bandName hidden-xs">Eminem </text></h3>
                        </div>
                        <div class="carousel-caption carouselButton">
                            <a href="viewEvent.php?id=92" class="btn btn-lg bookNowButton hidden-xs hidden-sm hidden-md">Book Now</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/12.jpg" alt="...">
                        <div class="carousel-caption carouselCaptionMove2">
                            <h3 class="hidden-xs">This August: <text class="bandName hidden-xs"><p>Gaslight Anthem</p></text></h3>
                        </div>
                        <div class="carousel-caption carouselButton">
                            <a href="viewEvent.php?id=96" class="btn btn-lg bookNowButton hidden-xs hidden-sm hidden-md">Book Now</a>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <div class="arrowBox hidden-xs"><span class="hidden-xs glyphicon glyphicon-chevron-left"></span></div>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <div class="arrowBox hidden-xs"><span class="hidden-xs glyphicon glyphicon-chevron-right"></span></div>
                </a>
            </div>
            <!-- Carousel -->
            <ul class="greenFont nav nav-pills nav-justified">
                <li data-target="#carousel1" data-slide-to="0" class="active">
                    <a href="viewEvent.php?id=68">Kodaline<p> 27th June</p></a>
                </li>
                <li data-target="#carousel1" data-slide-to="1" >
                    <a href="viewEvent.php?id=92">Eminem<p> 9th July</p></a>
                </li>
                <li data-target="#carousel1" data-slide-to="2">
                    <a href="viewEvent.php?id=96">Gaslight Anthem<p> 23th August</p></a>
                </li>
            </ul>
            <!-- END Carousel -->




            <div class="spaceUnderJumbo col-lg-12 ">
                <div class="container ">
                    <a href="createeventform.php" class="secondaryButtons btn btn-lg btn-info col-lg-2 col-lg-push-1 col-md-2 col-md-push-1 col-sm-2 col-sm-push-1  hidden-xs "><div>Create Event</div></a>
                    <a href="#" class="secondaryButtons btn btn-lg btn-info col-lg-2 col-lg-push-3 col-md-2 col-md-push-3 col-sm-2 col-sm-push-3  hidden-xs"><div>What We Do</div></a>
                    <a href="#" class="secondaryButtons btn btn-lg  btn-info col-lg-2 col-lg-push-5 col-md-2 col-md-push-5 col-sm-2 col-sm-push-5 hidden-xs"><div>Why Us</div></a>
                    <a href="#" class="secondaryButtons btn btn-lg btn-info  col-xs-3 col-xs-push-1 visible-xs"><div><span class="glyphicon glyphicon-plus"></span></div></a>
                    <a href="#" class="secondaryButtons btn btn-lg btn-info  col-xs-3 col-xs-push-2 visible-xs"><div><span class="glyphicon glyphicon-question-sign"></span></div></a>
                    <a href="#" class="secondaryButtons btn btn-lg btn-info  col-xs-3 col-xs-push-3 visible-xs"><span class="glyphicon glyphicon-list-alt " ></span></a>
                </div>


            </div>
            <!------------------- STAFF AND CUSTOMER VOUCHING SECTION -------------------->
            <div class="vouch col-lg-12">
                <!--------HEADERS ---------->
                <div class ="container ">
                    <h1 class="staffHeader col-lg-6 col-lg-push-1 col-md-6 col-md-push-1 col-sm-6 col-sm-push-1 hidden-xs"> Our Organisers</h1>
                    <h1 class="staffHeader col-xs-6 col-xs-push-3 visible-xs"> Organisers</h1>
                    <h1 class="staffHeader col-lg-6 col-lg-push-1 col-md-6 col-md-push-1 col-sm-6 col-sm-push-1 hidden-xs"> Our Customers</h1>


                </div>
                <!--------/HEADERS ---------->
                <div class ="container">
                    <!-------------------------------STAFF 1 ------------------------------------->
                    <div class="staff2 col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="staffImage col-lg-10 col-lg-push-0 col-md-10 col-md-push-0 col-sm-12 col-sm-push-0 col-xs-5  ">
                            <img class="img-rounded img-responsive"src ="img/harvey.png">
                        </div>
                        <div> 
                            <h3 class="hidden-sm col-lg-12 "> Harvey Specter</h3> 
                            <h3 class="nameXS bold visible-sm col-xs-12 col-sm-pull-1 "> Harvey Specteqr</h3>

                            <p class="bio hidden-xs hidden-sm col-lg-11 col-md-11">
                                I am a hard working devoted & joyful Event planner. 
                                I really do enjoy my work and blah.
                                I have been managing for 9 years now
                            </p>
                            <p class="bioXS visible-xs visible-sm">
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making
                            </p>
                            <!-- LEARN MORE about the STAFF BUTTON-->	
                            <div class="text-center">						
                                <a href="#harveySpecter" data-toggle="modal" class=" btn btn-lg btn-info col-lg-12 col-lg-push-0 col-md-12 col-md-push-0 col-sm-12 col-sm-push-0 ">Learn More</a> 
                            </div>
                        </div> 
                    </div>

                    <!-- Creates SPACE for the mobile view-->
                    <div class="col-xs-12 visible-xs xsInvisiblePush">.</div>
                    <!------------------------------STAFF 2 ---------------------------------------------------------------------->
                    <div class="staff2 col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="staffImage col-lg-10 col-lg-push-0 col-md-10 col-md-push-0 col-sm-12 col-sm-push-0 col-xs-5">
                            <img class="img-rounded img-responsive"src ="img/luas.png">
                        </div>
                        <div>
                            <h3 class="hidden-sm col-lg-12 "> Louis Litt</h3> 
                            <h3 class="nameXS bold visible-sm col-xs-12 col-sm-pull-1 "> Louis Litt</h3>
                            <p class="bio hidden-xs hidden-sm col-lg-11 col-md-11">
                                I am a hard working devoted & joyful Event planner. 
                                I really do enjoy my work and blah.
                                I have been managing for 9 years now
                            </p>
                            <p class="bioXS visible-xs visible-sm">
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making
                            </p>
                            <!-- LEARN MORE about the STAFF BUTTON-->	
                            <div class="text-center">	
                                <a href="#louisLitt" data-toggle="modal" class=" btn btn-lg btn-info col-lg-12 col-lg-push-0 col-md-12 col-md-push-0 col-sm-12 col-sm-push-0 ">Learn More</a>
                            </div>
                        </div>
                        <!--
                        <div class="socialMedia list-inline">	
                                <img class="img-rounded img-responsive "src ="img/facebook.png"/>
                                <img class="img-rounded img-responsive"src ="img/twitter.png"/>
                                <img class="img-rounded img-responsive"src ="img/youtube.png"/>
                                <img class="img-rounded img-responsive"src ="img/google+.png"/>
                        </div>
                        -->
                    </div>
                    <!-- Creates SPACE for the mobile view-->
                    <div class="col-xs-12 visible-xs xsInvisiblePush">.</div>
                    <!---Header for XS-->
                    <h1 class="staffHeader col-xs-6 col-xs-push-3 visible-xs"> Customers</h1>
                    <!----------------------------CUSTOMER -------------------------------------------------------------------->
                    <div class="customer col-lg-5 col-md-5 col-sm-5 col-xs-12 col-lg-push-1 col-md-push-1 col-sm-push-1 ">
                        <div class="">
                            <div class="customerImage col-lg-5 col-md-5 col-sm-6 col-xs-5">
                                <img class="img-rounded img-responsive"src ="img/james.png">
                            </div>
                            <h4 class=" col-lg-7"> Red Redington</h4> 
                            <h4 class="customerJob col-lg-7"> The O2 Dublin</h4> 
                            <div id="horizontalLine" class="col-lg-12 hidden-md hidden-lg hidden-sm hidden-xs"> </div>
                            <div id="horizontalLineMD" class="col-lg-12 visible-md"> </div>

                        </div>

                        <div> 

                            <p class="comment col-lg-12">
                            <div class="col-lg-12">
                                This website is amaxing the service they provide is even beter blabaday blah de bla
                                This website is amaxing the service they provide is even 
                                <!-- Visible only when NOT XS-->
                                <text class="hidden-xs hidden-sm">
                                beter blabaday blah de bla This website is amaxing the service they provide is even beter blabaday blah de
                                </text>
                                <a href="#" class="visible-xs continueReading btn btn-sm contiueReadingBTN col-xs-4 col-xs-push-9 " >Continue Reading</a>
                                <div class="customerCysleBTN">
                                    <!-- Button LEFT-->							
                                    <a href="#" class=" btn previousButton btn-info col-lg-2 col-md-2  ">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a> 
                                    <!-- Button RIGHT-->	
                                    <a href="#" class=" btn btn-info col-lg-2 col-md-2 col-lg-push-1 col-md-push-1 ">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a> 
                                </div>
                            </div>

                            </p>
                            <!--
                            <p class="comment visible-xs">
                             i am hard worker blah bjd djduud hd
                             i am hard worker blah bjd djduud hd
                             i am hard worker blah bjd djduud hd 
                            </p>
                            -->
                        </div>

                    </div>
                </div>
                <!-- /STAFF AND CUSTOMER VOUCHING SECTION -->
            </div>
            <!----------------------------------------------- FOOTER -------------------------------------------->
           <div class="hidden-xs">
                <?php
                require 'footer.php';
                ?>
            </div>
            <div class="visible-xs">
                <?php
                require 'mobileFooter.php';
                ?>
            </div>


            <!---------------- Model Box harveySpecter -------------->
            <div id="harveySpecter" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                    <div class=" staffModalHeader modal-header">
                        <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
                        <h3>Harvey Specter</h3>
                    </div>
                    <div class="modal-body">
                        <img src="img/harvey.jpg" class="staffBioModal img-responsive pull-left">
                        <small>
                            Harvey Reginald Specter, Esq. from NY, is a skilled Web Designer, considered
                            "the best coder in New York City", and a name partner at Pearson Specter Litt.
                            After being promoted to the position of senior partner at Pearson Hardman, 
                            he hired Mike Ross, a veritable genius who was able to pass the bar exam despite
                            not attending law school, as his associate.
                        </small>
                        <div class="ratings">
                            <p class="pull-left">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </p>
                            <p class="pull-left ratingM">15 reviews</p>
                            <br>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <p class="pull-left"><strong>Years at Eventer:16</strong></p><button class="btn btn-primary" data-dismiss="modal">BACK</button>
                        <div class="">
                            <a href="https://www.facebook.com/"><img class="col-lg-1 col-md-1 col-sm-1 col-xs-2 img-rounded img-responsive"src ="img/facebook.png"/></a>
                            <a href="https://www.twitter.com/"><img class="col-lg-1 col-md-1 col-sm-1 col-xs-2 img-rounded img-responsive"src ="img/twitter.png"/></a>
                            <a href="https://www.youtube.com/"><img class="col-lg-1 col-md-1 col-sm-1 col-xs-2 img-rounded img-responsive"src ="img/youtube.png"/></a>
                            <a href="https://plus.google.com"><img class="col-lg-1 col-md-1 col-sm-1 col-xs-2 img-rounded img-responsive"src ="img/google+.png"/></a>
                        </div>
                    </div>

                </div>
            </div>
            <!------END----------/ Model Box harveySpecter -------------->

            <!---------------- Model Box louisLitt -------------->
            <div id="louisLitt" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                    <div class=" staffModalHeader modal-header">
                        <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
                        <h3>Louis Litt</h3>
                    </div>
                    <div class="modal-body">
                        <img src="img/luas.jpg" class="staffBioModal img-responsive pull-left" >
                        <small>
                            Louis Marlowe Litt, Esq. is a lawyer and name partner at Pearson Spector Litt. He was promoted
                            to the position of senior partner at Pearson Hardman by Daniel Hardman prior to the latter's dismissal
                            from the firm, and retained his position after the subsequent merger with Darby International. Louis was
                            in a relationship with Sheila Sazs and they were due to be engaged; but their relationship ended due to
                            a disagreement of having kids or not.
                        </small>
                        <div class="ratings">
                            <p class="pull-left">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </p>
                            <p class="pull-left ratingM">15 reviews</p>
                            <br>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <p class="pull-left"><strong>Years at Eventer:11</strong></p><button class="btn btn-primary" data-dismiss="modal">BACK</button>
                        <div class="">
                            <a href="https://www.facebook.com/"><img class="col-lg-1 col-md-1 col-sm-1 col-xs-2 img-rounded img-responsive"src ="img/facebook.png"/></a>
                            <a href="https://www.twitter.com/"><img class="col-lg-1 col-md-1 col-sm-1 col-xs-2 img-rounded img-responsive"src ="img/twitter.png"/></a>
                            <a href="https://www.youtube.com/"><img class="col-lg-1 col-md-1 col-sm-1 col-xs-2 img-rounded img-responsive"src ="img/youtube.png"/></a>
                            <a href="https://plus.google.com"><img class="col-lg-1 col-md-1 col-sm-1 col-xs-2 img-rounded img-responsive"src ="img/google+.png"/></a>
                        </div>
                    </div>
                </div>
            </div>
            <!------END----------/ Model Box louisLitt -------------->


































        </div>









        <!-- javascript -->
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
