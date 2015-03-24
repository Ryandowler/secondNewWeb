<html>
    <head><!--requiring The nessesary elements for this page-->
        <?php
        require 'Styles.php';
        require 'Scripts.php';
        require 'ensureUserLoggedIn.php';
        require 'NavBar.php';
        require_once 'Event.php';
        require_once 'Connection.php';
        require_once 'EventTableGateway.php';
        ?>
    </head>
    <body class="greenBG">
        <?php
        if (isset($message)) {
            echo '<p>' . $message . '</p>';
        }
        ?>
        <div>
            <?php
            $connection = Connection::getInstance();
            $gateway = new EventTableGateway($connection);

            $statement = $gateway->getEvents();
            /* creating the session */
            $id = session_id();
            /* checking if there is not already a session and if there is start it */
            if ($id == "") {
                session_start();
            }
            //if events session is set add it to the array
            if (!isset($_SESSION['events'])) {
                $events = array();
                //hard coding variables into the array through parameters in another page

                $_SESSION['events'] = $events;
            } else {
                //making this session events
                $events = $_SESSION['events'];
            }
            ?>
            <!DOCTYPE html>
            <!-- error checking -->
            <?php
            if (isset($message)) {
                echo '<p>' . $message . '</p>';
            }
            ?>

            <?php
            require 'sideBar.php';
            ?>
            <?php
            require 'topInformationBar.php';
            ?>



            <div class="col-lg-8 col-lg-offset-3 col-md-8 col-md-offset-3 col-sm-8 col-sm-offset-3 col-xs-12 col-xs-offset-0 pushDown">

                <form ID="HomeForm" class="col-lg-12" method="POST" action="deleteSelectedEvents.php">
                    <table class ="homeTable table-responsive  table-condensed table-striped table-hover  " >
                        <!--<?php
                        $username = $_SESSION['username'];
                        echo '<h4> Welcome, ' . $username . '</h4>';
                        ?>
                        -->
                        <thead>
                            <tr id="bleh">
                                <th><input type="checkbox" onclick="checkAll(this)"><br></th>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th class="thPush">Start Date</th>
                                <th class="thPush">End Date </th>
                                <th>Time</th>
                                <th>Max Attendees</th>
                                <th>Cost</th>
                                <th>Manager ID</th>
                                <th  class="col-lg-3">Options</th>
                            </tr>

                        </thead>
                        <tbody> 
                        <script language="javascript">
                            function checkAll(master) {
                                var checked = master.checked;
                                var col = document.getElementsByTagName("INPUT");
                                for (var i = 0; i < col.length; i++) {
                                    col[i].checked = checked;
                                }
                            }
                        </script>
                        <?php
                        $row = $statement->fetch(PDO::FETCH_ASSOC);
                        while ($row) {

                            echo '<td><input type="checkbox" value="' . $row['eventID'] . '" name="events[]" /></td>';
                            echo '<td>' . $row['eventID'] . '</td>';
                            echo '<td>' . $row['title'] . '</td>';
                            echo '<td>' . $row['description'] . '</td>';
                            echo '<td >' . $row['startDate'] . '</td>';
                            echo '<td>' . $row['endDate'] . '</td>';
                            echo '<td>' . $row['time'] . '</td>';
                            echo '<td>' . $row['maxAttendees'] . '</td>';
                            echo '<td>' . $row['cost'] . '</td>';
                            echo '<td>' . $row['managerID'] . '</td>';

                            echo '<td class=" noHover ">'
                            //<a href="somepage.html"><button type="button">Text of Some Page</button></a>
                            . '<a href="viewEvent.php?id=' . $row['eventID'] . '"><button type="button" class="btn btn-md btn-info col-lg-4 col-md-12 col-sm-12 col-xs-12" data-tooltip="View Event"><text class="visible-xs">View</text><span class="hidden-xs glyphicon glyphicon-eye-open"></span></button></a> '
                            . '<a href="editEventForm.php?id=' . $row['eventID'] . '"><button type="button" class="btn btn-md btn-info col-lg-4 col-md-12 col-sm-12 col-xs-12" data-tooltip="Edit Event"><text class="visible-xs">Edit</text><span class="hidden-xs glyphicon glyphicon-wrench"></span></button></a> '
                            . '<a class="deleteEvent" <a href="deleteEvent.php?id=' . $row['eventID'] . '"><button type="button" class="btn btn-md btn-info col-lg-4 col-md-12 col-sm-12 col-xs-12" data-tooltip="Delete Event"><text class="visible-xs">Delete</text><span class="hidden-xs glyphicon glyphicon-trash"></span></button></a> '
                            . '</td>';
                            echo '</tr>';
                            $row = $statement->fetch(PDO::FETCH_ASSOC);
                        }
                        ?>
                        </tbody>
                    </table>  
                    <table >
                        <tr >
                            <td><input type="submit" class="niceFont deleteSelectedBTN btn btn-md btn-info" name="deleteSelected" value="Delete Selected" /></td>
                            <td><a href="createEventForm.php" class=" col-lg-12 col-lg-push-2 btn btn-md btn-info"> Create Event</a></td>		 
                        </tr> 
                    </table>
                </form>
            </div>

        </div> 



    </body>
</html>
