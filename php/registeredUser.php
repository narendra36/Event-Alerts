<?php
/**
 * Created by PhpStorm.
 * User: ndodwaria
 * Date: 2/3/17
 * Time: 12:06 AM*/
    session_start();

  if(!isset($_SESSION["adminlogin"])){
    header('location: AdminLogin.php');
  }
  
    require 'conn.php';

?>
        <center>
        <form action="deleteUser.php" method="POST">
            <table style="background:white; width:50%">
                <tr><td><input type="text" placeholder="Enter Username" name="username"></td>
                    <td><input type="submit" name="submit" value="Delete User"></td></tr>
            </table>
        </form> 
    </center>
        <?php
        $sql = "SELECT * FROM USER";
        $result = $conn->query($sql);
        //echo $result." ";
        if ($result->num_rows > 0) {
            // output data of each row
            ?>
            <center><table style="border: 3px solid black; background:white;color:white;">
                    <tr><th>ID</th><th>USERNAME</th><th>NAME</th><th>ROLL NO</th><th>EMAIL</th>
                    <?php
                    while($row = $result->fetch_assoc()) {

                        ?>
                        <tr><td><?php echo $row["ID"]."" ?></td><td><?php echo $row["USERNAME"]."" ?></td>
                            <td><?php echo $row["NAME"]."" ?></td><td><?php echo $row["ROLL_NO"]."" ?></td>
                            <td><?php echo $row["EMAIL"]."" ?></td></tr><br>
                        <?php
                    }
                    ?>
                </table></center>
            <?php
        } 
        else {
            echo "0 results";
        }
        //echo $drname."<br>";
        $conn->close();

        //echo $drname."<br>";
    /*}
    else
        header("Location: index.php");
	?>*/
    ?>