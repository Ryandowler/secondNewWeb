<html>
    <head>
        <?php
        require 'NavBar.php';
        require 'ensureUserLoggedIn.php';
        //I didnt use this as i went with the better option of drop down sign out like a real site
        // Calling in navigation bar, if i need to edit just edit NavBar.php
        require 'Styles.php';
        require 'Scripts.php';
        ?>

    </head>
    <body class="greenBG">
        <div class="container pushDown1">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="redBG col-lg-12">
                        <form class="form-horizontal" action="" method="post">
                            <fieldset>
                                <legend class="text-center">Contact us</legend>

                                <!-- Name input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">Name</label>
                                    <div class="col-md-9">
                                        <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                                    </div>
                                </div>

                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="email">Your E-mail</label>
                                    <div class="col-md-9">
                                        <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                                    </div>
                                </div>

                                <!-- Message body -->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="message">Your message</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                                    </div>
                                </div>

                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-info btn-lg">Submit</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>