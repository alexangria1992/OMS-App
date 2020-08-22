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
                      echo 'Request ID: '. $row['request_id'];
                     echo '</div>';
                     echo '<div class="card-body">';
                     echo '<h5 class="card-title">Request Info: ' .$row['request_info'];
                     echo '</h5>';
                     echo '<p class="card-text">'.$row['request_desc'];
                     echo '</p>';
                     echo '<p class="card-text">Request Date: '.$row['request_date'];
                     echo '</p>';
                     echo '<div class="float-right">';
                     echo '<form action="" method="POST">';
                        echo '<input type="hidden" name="id" value= '.$row["request_id"].'>';
                        echo '<input type= "submit" class="btn btn-danger mr-3" name="view" value="View">';
                        echo '<input type= "submit" class="btn btn-secondary" name="close" value="Close">';
                     echo '</form>';
                    
                     echo '</div>';
                     echo '</div>';
                    echo '</div>';
                }
            }
        ?>
    </div>

        <?php 
        if(isset($_REQUEST['view']))
        {
            $sql = "SELECT * FROM submitrequest_tb WHERE request_id = {$_REQUEST['id']}";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
        }

        if(isset($_REQUEST['close']))
        {
        $sql = "DELETE FROM submitrequest_tb WHERE request_id = {$_REQUEST['id']}";
        if($conn->query($sql) == TRUE)
        {
            echo '<meta http-equiv="refresh" content = "0;URL=?closed" / >';
        }
        else 
        {
            echo "unable to delete";
        }
    }
      
        
        ?>
       
    <div class="col-sm-5 mt-5 jumbotron">
        <form action="" method="POST">
            <h5 class="text-center">Assign Work Order Request</h5>
            <div class="form-group">
                <label for="request_id">Request ID</label>
                <input type="text" class="form-control" id="request_id" name="request_id"
                value="<?php if (isset($row['request_id'])) echo $row['request_id']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="request_info">Request Info</label>
                <input type="text" name="request_info" class="form-control" id="request_info"
                value="<?php if (isset($row['request_info'])) echo $row['request_info']; ?>">
            </div>
            <div class="form-group">
                <label for="request_desc">Description</label>
                <input type="text" name="request_desc" class="form-control" id="request_desc"
                value="<?php if (isset($row['request_desc'])) echo $row['request_desc']; ?>">
            </div>
            <div class="form-group">
                <label for="requestername">Name</label>
                <input type="text" name="requestername" class="form-control" id="requestername"
                value="<?php if (isset($row['requester_name'])) echo $row['requester_name']; ?>">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="address1">Address Line 1</label>
                    <input type="text" name="address1" class="form-control" id="address1"
                    value="<?php if (isset($row['requester_add1'])) echo $row['requester_add1']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="address2">Address Line 2</label>
                    <input type="text" name="address2" class="form-control" id="address2"
                    value="<?php if (isset($row['requester_add2'])) echo $row['requester_add2']; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="requestercity">City</label>
                    <input type="text" name="requestercity" class="form-control" id="requestercity"
                    value="<?php if (isset($row['requester_city'])) echo $row['requester_city']; ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="requesterstate">State</label>
                    <input type="text" name="requesterstate" class="form-control" id="requesterstate"
                    value="<?php if (isset($row['requester_state'])) echo $row['requester_state']; ?>">

                </div>
                <div class="form-group col-md-4">
                    <label for="requesterzip">Zip</label>
                    <input type="text" name="requesterzip" class="form-control" id="requesterzip" onkeypress="isInputNumber(event)"
                    value="<?php if (isset($row['requester_zip'])) echo $row['requester_zip']; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="requesteremail">Email</label>
                    <input type="email" name="requesteremail" class="form-control" id="requesteremail"
                    value="<?php if (isset($row['requester_email'])) echo $row['requester_email']; ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="requestermobile">Mobile</label>
                    <input type="text" name="requestermobile" class="form-control" id="requestermobile"
                    onkeypress="isInputNumber(event)"
                    value="<?php if (isset($row['requester_mobile'])) echo $row['requester_mobile']; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="assigntech">Assign to Technician</label>
                    <input type="email" name="assigntech" class="form-control" id="assigntech">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputDate">Date</label>
                    <input type="date" name="inputdate" class="form-control" id="inputDate">
                </div>
            </div>
            <div class="float-right">
                <button type="submit" name="assign" class="btn btn-success">Assign</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
            <!-- <?php echo $_REQUEST['id']; ?> -->
        </form>
    
    </div>

<?php include("includes/footer.php");

?>
