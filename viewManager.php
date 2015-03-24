<html>
    <head
    <?php
    require 'NavBar.php';
    require 'ensureUserLoggedIn.php';
    require 'Styles.php';
    require 'Scripts.php';
    require_once 'Manager.php';
    require_once 'Connection.php';
    require_once 'ManagerTableGateway.php';
    
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
        //require 'ensureUserLoggedIn.php

        if (!isset($_GET) || !isset($_GET['id'])) {
            die('Invalid request');
        }
        
        $id = $_GET['id'];

        $connection = Connection::getInstance();
        $gateway = new ManagerTableGateway($connection);

        $statement = $gateway->getManagerById($id);
        ?>
        
        <?php
        require 'sideBar.php';
        ?>
        <?php
        require 'topInformationBar.php';
        ?>

        <div class="col-lg-8 col-lg-offset-3 col-md-8 col-md-offset-3 col-sm-8 col-sm-offset-3 pushDown">

       
            <form ID="HomeForm" class="col-lg-12" method="POST" action="deleteSelectedManagers.php">
                    <table class ="homeTable table-responsive table-condensed table-striped table-hover  " >
                        <!--<?php
                        $username = $_SESSION['username'];
                        echo '<h4> Welcome, ' . $username . '</h4>';
                        ?>
                        -->
                        <thead>
                            <tr>
                                <th>ManagerID</th>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $row = $statement->fetch(PDO::FETCH_ASSOC); 
                            echo '<td>' . $row['managerID'] . '</td>';
                            echo '<td>' . $row['name'] . '</td>';
                            echo '<td>' . $row['managerEmail'] . '</td>';
                            ?>
                        </tbody>
                    </table>  
                    <table>
                        <tr><td><input type="submit" class=" deleteSelectedBTN btn btn-md btn-info" name="deleteSelected" value="Delete Selected" /></td>
                            <td><a href="createManagerform.php" class=" col-lg-12 col-lg-push-2 btn btn-md btn-info"> Create Manager</a></td>		 
                        </tr> 
                    </table>
                </form>
            
        </div>
        
    </div>
    
</body>
</html>
