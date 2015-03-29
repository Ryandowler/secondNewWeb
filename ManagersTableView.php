<html>
    <head><!--requiring The nessesary elements for this page-->
        <?php
        require 'Styles.php';
        require 'Scripts.php';
        require 'ensureUserLoggedIn.php';
        require 'NavBar.php';
        require_once 'Manager.php';
        require_once 'Connection.php';
        require_once 'ManagerTableGateway.php';

        if (isset($_GET) && isset($_GET['sortOrder'])) {
            $sortOrder = $_GET['sortOrder'];
            //checking input against my column names and if inpout is malisious just set to 'name' , completly avoid a SQL injection attack
            $colunNames = array("managerID", "name", "managerEmail");
            if (!in_array($sortOrder, $colunNames)) {
                $sortOrder = 'name';
            }
        } else {
            $sortOrder = 'name';
        }
        if (isset($_GET) && isset($_GET['filterName'])) {
            $filterName = filter_input(INPUT_GET, 'filterName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        } else {
            $filterName = NULL;
        }
        ?>

    </head>
    <body class="greenBG">
        <?php
        if (isset($message)) {
            echo '<p>' . $message . '</p>';
        }
        ?>
        <div class="mainWrapper">
            <?php
            $connection = Connection::getInstance();
            $gateway = new ManagerTableGateway($connection);

            $statement = $gateway->getManagers($sortOrder, $filterName);
            /* creating the session */
            $id = session_id();
            /* checking if there is not already a session and if there is start it */
            if ($id == "") {
                session_start();
            }
            //if events session is set add it to the array
            if (!isset($_SESSION['managers'])) {
                $managers = array();
                //hard coding variables into the array through parameters in another page

                $_SESSION['managers'] = $managers;
            } else {
                //making this session events
                $managers = $_SESSION['managers'];
            }
            ?>
            <!DOCTYPE html>
            <!-- error checking -->
            <?php
            if (isset($message)) {
                echo '<p>' . $message . '</p>';
            }
            ?>
            <!-- requiring the Code for the side bar -->
            <?php
            require 'sideBar.php';
            ?>
            <!-- requiring the Code for the top information bar -->
            <?php
            require 'topInformationBar.php';
            ?>
            <!--Managers table Start-->
            <div class="col-lg-8 col-lg-offset-3 col-md-8 col-md-offset-3 col-sm-8 col-sm-offset-3 pushDown">
                <form ID="HomeForm" class="col-lg-12" role="form" method="POST" action="deleteSelectedManagers.php" action="ManagersTableView.php?sortOrder=<?php echo $sortOrder; ?>" method="GET">
                    <table class ="col-lg-12 col-md-12 col-sm-12 homeTable table-responsive table-condensed table-striped table-hover  " >
                        <!--
                        <?php
                        $username = $_SESSION['username'];
                        echo '<h4> Welcome, ' . $username . '</h4>';
                        ?>
                        -->
                        <thead>
                            <tr>
                                <th><input type="checkbox" onclick="checkAll(this)"><br></th>
                                <th> <a href="ManagersTableView.php?sortOrder=managerID">ManagerID</a></th>
                                <th><a href="ManagersTableView.php?sortOrder=name">Name</a></th>
                                <th><a href="ManagersTableView.php?sortOrder=managerEmail">Email</a></th>
                                <th>Options</th>
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
                            echo '<td><input type="checkbox" value="' . $row['managerID'] . '" name="managers[]" /></td>';
                            echo '<td>' . $row['managerID'] . '</td>';
                            echo '<td>' . $row['name'] . '</td>';
                            echo '<td>' . $row['managerEmail'] . '</td>';
                            echo '<td class=" noHover ">'
                            //<a href="somepage.html"><button type="button">Text of Some Page</button></a>
                            . '<a href="viewManager.php?id=' . $row['managerID'] . '"><button type="button" class="btn btn-md btn-info col-lg-4 col-md-12 col-sm-12 col-xs-12" data-tooltip="View Manager"><text class="visible-xs">View</text><span class="hidden-xs glyphicon glyphicon-eye-open"></span></button></a> '
                            . '<a href="editManagerForm.php?id=' . $row['managerID'] . '"><button type="button" data-tooltip="Edit Manager" class="btn btn-md btn-info col-lg-4 col-md-12 col-sm-12 col-xs-12"><text class="visible-xs">Edit</text><span class="hidden-xs glyphicon glyphicon-wrench"></span></button></a> '
                            . '<a class="deleteManager" <a href="deleteManager.php?id=' . $row['managerID'] . '"><button type="button" data-tooltip="Delete Manager" class="btn btn-md btn-info col-lg-4 col-md-12 col-sm-12 col-xs-12"><text class="visible-xs">Delete</text><span class="hidden-xs glyphicon glyphicon-trash"></span></button></a> '
                            . '</td>';
                            echo '</tr>';
                            $row = $statement->fetch(PDO::FETCH_ASSOC);
                        }
                        ?>
                        </tbody>
                    </table>
                    <table class="col-lg-12 col-md-12 col-sm-12">
                        <tr>
                            <td><input type="submit" class="col-lg-6  deleteSelectedBTN btn btn-md btn-info" name="deleteSelected" value="Delete Selected" /></td>
                            <td><a href="createManagerform.php" class=" col-lg-6 col-lg-pull-4 col-md-pull-4 col-sm-pull-2 btn btn-md btn-info"> Create Manager</a></td>
                            <td><input type="text" name="filterName" class=" col-lg-3  form-control " placeholder="Search Manager" value="<?php echo $filterName; ?>"/></td>
                            <!--<td><button type="submit" name="filterBtn" id="filterBtn" class="btn "><span class="hidden-xs glyphicon glyphicon-search" style=""></span></button></td>-->
                        </tr>


                    </table>
                    

                    


                </form>
            </div><!--Managers table End-->
        </div> 

    </body>
</div>
</html>
