<html>
    <head
    <?php
    require 'NavBar.php';
    require 'ensureUserLoggedIn.php';
    //I didnt use this as i went with the better option of drop down sign out like a real site
    // Calling in navigation bar, if i need to edit just edit NavBar.php
    require 'Styles.php';
    require 'Scripts.php';
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
        $id = session_id();
        if ($id == "") {
            session_start();
        }

        require 'ensureUserLoggedIn.php';

        if (!isset($_GET) || !isset($_GET['id'])) {
            die('Invalid request');
        }
        $id = $_GET['id'];

        $connection = Connection::getInstance();
        $gateway = new EventTableGateway($connection);

        $statement = $gateway->getEventById($id);
        ?>

        <?php
        require 'sideBar.php';
        ?>
        <?php
        require 'topInformationBar.php';
        ?>

        <div class="col-lg-8 col-lg-offset-3 col-md-8 col-md-offset-3 col-sm-8 col-sm-offset-3 pushDown">

            <form ID="HomeForm" class="col-lg-12" method="POST" action="deleteSelectedEvents.php">
                <table class ="homeTable table-responsive  table-condensed table-striped table-hover  " >
                    <!--<?php
                    $username = $_SESSION['username'];
                    echo '<h4> Welcome, ' . $username . '</h4>';
                    ?>
                    -->
                    <thead>
                        <tr id="bleh">
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th class="thPush">Start Date</th>
                            <th class="thPush">End Date </th>
                            <th>Time</th>
                            <th>Max Attendees</th>
                            <th>Cost</th>
                            <th>Manager ID</th>
                        </tr>
                    </thead>
                    <tbody> 
                        <?php
                        $row = $statement->fetch(PDO::FETCH_ASSOC);


                        echo '<td>' . $row['eventID'] . '</td>';
                        echo '<td>' . $row['title'] . '</td>';
                        echo '<td>' . $row['description'] . '</td>';
                        echo '<td >' . $row['startDate'] . '</td>';
                        echo '<td>' . $row['endDate'] . '</td>';
                        echo '<td>' . $row['time'] . '</td>';
                        echo '<td>' . $row['maxAttendees'] . '</td>';
                        echo '<td>' . $row['cost'] . '</td>';
                        echo '<td>' . $row['managerID'] . '</td>';
                        ?>
                    </tbody>
                </table> 
                <table class="pushDown1em">
                        <tr>
                            <td><a href="editEventForm.php?id=<?php echo $row['eventID']; ?>" class="btn btn-md btn-info ">Edit Event</a></td>
                            <td><a class="btn btn-md btn-info" href="deleteEvent.php?id=<?php echo $row['eventID']; ?> " >Delete Event</a></td>		 
                        </tr> 
                    </table>
            </form>
        </div>
    </div>

</body>
</html>
