<?php
include('../../lib/connect.php');
include('../../lib/boot.php');
include("../ReportHeader.php");
?>
<?php
session_start();
echo "
<div class='content'>
    <div class='container'>
        <h2 class='mb-5'>report</h2>
        <div class='table-responsive'>
            <table class='table table-striped custom-table'>";

                $Username = $_SESSION['Username'];
                $query = "SELECT * FROM `users` WHERE `username` = '". $Username ."'";
                $result = runquery($conn, $query);
                $row = mysqli_fetch_assoc($result);
                        echo "
                        <thead>
                            <tr>
                                <th scope='col'>Repo</th>
                                <th scope='col'>Temperature</th>
                                <th scope='col'>Pressure</th>
                                <th scope='col'>User</th>
                                <th scope='col'>Time</th>
                                <th scope='col'>Edit</th>
                            </tr>
                        </thead>
                    <tbody>
                        ";
                        $query1 = "SELECT * FROM `repo`";
                        $result1 = runquery($conn, $query1);
                        $row1 = mysqli_fetch_assoc($result1);
                        echo"
                            <tr>
                                <td>
                                    Superuser
                                </td>
                                <td>100 °C
                                </td>
                                <td>
                                    229 Pa
                                </td>
                                <td>Amir Tavana</td>
                                <td>12: 22: 55</td>
                                <td><a href='#' class='more'>Edit</a></td>
                            </tr>";
              echo "
              </tbody>
            </table>
        </div>
    </div>
</div>
";
?>

<?php
include("../ReportFooter.php");
?>