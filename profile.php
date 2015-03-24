<html>
    <head> 
        <?php
        require 'User.php';
        require 'ensureUserLoggedIn.php';
        require 'Styles.php';
        require 'Scripts.php';
        require 'NavBar.php';
        ?>
    </head>
    <body>
        <div class="container">
            <div class=" profileLeft col-lg-6">
                <div class="user-image col-lg-4">
                    <img src="img/profilePic.png" class="img-responsive thumbnail">
                </div>
                <div class="user-pad">
                    <h3>Welcome back,  <?php
                        $username = $_SESSION['username'];
                        echo $username;
                        ?></h3>

                    <h4 class="white"><i class=""></i>Ryan Dowler</h4>
                    <h4 class="white"><i class=""></i><span class="hidden-xs glyphicon glyphicon-star-empty"></span> Prestige User</h4>
                    <h4 class="white"><i class=""></i><span class="hidden-xs glyphicon glyphicon-eye-open"></span> 14765 Views</h4>
                    <h4 class="white"><i class=""></i><span class="hidden-xs glyphicon glyphicon-user"></span> 144 Connects</h4>
                    <h4 class="white"><i class="fa fa-twitter"></i> @RyanD123twitter</h4>
                    <a href="#" class=" btn btn-info col-lg-2 col-md-2  "><span class="glyphicon glyphicon-pencil">Update</span></a>

                </div>



            </div>
            <div class="profileRight col-lg-6">
                <h3 class="col-lg-offset-4"> Your Active Events</h3>
                <div class="col-lg-12"><h5 class="col-lg-4 ">kodaline in 5 days</h5><h5 class="col-lg-4">Eminem in 32 days</h5><h5 class="col-lg-4">Gaslight in 75 days</h5></div>

                <img src="img/KodalineProfile.jpg"class="col-lg-4 profilePic">
                <img src="img/eminem1.jpg"class="col-lg-4 profilePic">
                <img src="img/gaslight1.jpg"class="col-lg-4 profilePic">
                <div class="">
                    <h5 class="col-lg-4 "><a href="viewEvent.php?id=68"><button type="button" class="btn btn-md btn-info col-lg-4 col-md-12 col-sm-12 col-xs-12" data-tooltip="View Kodaline"><text class="visible-xs">View</text><span class="hidden-xs glyphicon glyphicon-eye-open"></span></button></a>
                        <a href="editEventForm.php?id=68"><button type="button" class="btn btn-md btn-info col-lg-4 col-md-12 col-sm-12 col-xs-12" data-tooltip="Edit Kodaline"><text class="visible-xs">Edit</text><span class="hidden-xs glyphicon glyphicon-wrench"></span></button></a>
                        <a class="deleteEvent" <a href="deleteEventForm.php?id=68"><button type="button" class="btn btn-md btn-info col-lg-4 col-md-12 col-sm-12 col-xs-12" data-tooltip="Cancel Kodaline"><text class="visible-xs">Delete</text><span class="hidden-xs glyphicon glyphicon-trash"></span></button></a>
                    </h5>
                    <h5 class="col-lg-4 "><a href="viewEvent.php?id=92"><button type="button" class="btn btn-md btn-info col-lg-4 col-md-12 col-sm-12 col-xs-12" data-tooltip="View Eminem"><text class="visible-xs">View</text><span class="hidden-xs glyphicon glyphicon-eye-open"></span></button></a>
                        <a href="editEventForm.php?id=92"><button type="button" class="btn btn-md btn-info col-lg-4 col-md-12 col-sm-12 col-xs-12" data-tooltip="Edit Eminem"><text class="visible-xs">Edit</text><span class="hidden-xs glyphicon glyphicon-wrench"></span></button></a>
                        <a class="deleteEvent" <a href="deleteEventForm.php?id=92"><button type="button" class="btn btn-md btn-info col-lg-4 col-md-12 col-sm-12 col-xs-12" data-tooltip="Cancel Eminem"><text class="visible-xs">Delete</text><span class="hidden-xs glyphicon glyphicon-trash"></span></button></a>
                    </h5>
                    <h5 class="col-lg-4 "><a href="viewEvent.php?id=96"><button type="button" class="btn btn-md btn-info col-lg-4 col-md-12 col-sm-12 col-xs-12" data-tooltip="View Gaslight"><text class="visible-xs">View</text><span class="hidden-xs glyphicon glyphicon-eye-open"></span></button></a>
                        <a href="editEventForm.php?id=96"><button type="button" class="btn btn-md btn-info col-lg-4 col-md-12 col-sm-12 col-xs-12" data-tooltip="Edit Gaslight"><text class="visible-xs">Edit</text><span class="hidden-xs glyphicon glyphicon-wrench"></span></button></a>
                        <a class="deleteEvent" <a href="deleteEventForm.php?id=96"><button type="button" class="btn btn-md btn-info col-lg-4 col-md-12 col-sm-12 col-xs-12" data-tooltip="Cancel Gaslight"><text class="visible-xs">Delete</text><span class="hidden-xs glyphicon glyphicon-trash"></span></button></a>
                    </h5>
                </div>
            </div>
            <div class="greenBG2 col-lg-12 col-lg-push-0 pushDown1">
                <div class="col-lg-12 col-lg-pull-1">
                <?php
                require 'topInformationBar.php';
                ?>
                </div>
                <div class="container ">
                    <a href="createeventform.php" class="secondaryButtons btn btn-lg btn-info col-lg-2 col-lg-push-1 col-md-2 col-md-push-1 col-sm-2 col-sm-push-1  hidden-xs pushDown "><div>Create Event<p><span id="bigPluss"class="glyphicon glyphicon-plus"></span></p></div></a>
                    <a href="createManagerForm.php" class="secondaryButtons btn btn-lg btn-info col-lg-2 col-lg-push-3 col-md-2 col-md-push-3 col-sm-2 col-sm-push-3  hidden-xs pushDown"><div>Create Manager<p><span id="bigPluss"class="glyphicon glyphicon-plus"></span></p></div></a>
                    <a href="#" class="secondaryButtons btn btn-lg  btn-info col-lg-2 col-lg-push-5 col-md-2 col-md-push-5 col-sm-2 col-sm-push-5 hidden-xs pushDown"><div>Create Organiser<p><span id="bigPluss"class="glyphicon glyphicon-plus"></span></p></div></a>
                    <a href="#" class="secondaryButtons btn btn-lg btn-info  col-xs-3 col-xs-push-1 visible-xs"><div><span class="glyphicon glyphicon-plus"></span></div></a>
                    <a href="#" class="secondaryButtons btn btn-lg btn-info  col-xs-3 col-xs-push-2 visible-xs"><div><span class="glyphicon glyphicon-question-sign"></span></div></a>
                    <a href="#" class="secondaryButtons btn btn-lg btn-info  col-xs-3 col-xs-push-3 visible-xs"><span class="glyphicon glyphicon-list-alt " ></span></a>
                </div>
            </div>



    </body>
</html>