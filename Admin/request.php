<?php
    define ('TITLE', 'Requests');
    define ('PAGE', 'request');
    include("includes/header.php");
    include("../dbConnection.php");
    if(isset($_SESSION['is_adminlogin']))
    {
        $aEmail = $_SESSION['aEmail'];
    } else 
    {
        echo "<script> Location.href='login.php';</script>";
    }
   
?>

    <div class="col-sm-4 mb-5">
        <?php
            $sql = "SELECT request_id, request_info, request_desc, request_date FROM submitrequest_tb";
            $result = $conn->query($sql);
            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    echo '<div class="card mt-5 mx-5">';
                     echo '<div class="card-header">';
                      echo 'Request ID:'. $row['request_id'];
                     echo '</div>';
                     echo '<div class="card-body">';
                     echo '<h5 class="card-title">Request Info: ' .$row['request_info'];
                     echo '</h5>';
                     echo '<p class="card-text">'.$row['request_desc'];
                     echo '</p>';
                     echo '<p class="card-text">Request Date: '.$row['request_date'];
                     echo '</p>';
                     echo '<div class="float-right">';
                     echo '<input type= "submit" class="btn btn-danger mr-3" value="View">';
                     echo '<input type= "submit" class="btn btn-secondary" value="Close">';
                     echo '</div>';
                     echo '</div>';
                    echo '</div>';
                }
            }
        ?>
    </div>

<?php include("includes/footer.php");

?>
