<?php
if(session_id()=='')
{
    session_start();
}
if(isset($_SESSION['is_adminlogin']))
    {
        $aEmail = $_SESSION['aEmail'];
    } else 
    {
        echo "<script> Location.href='login.php';</script>";
    }
    if(isset($_REQUEST['view'])){
        $sql = "SELECT * FROM submitrequest_tb WHERE request_id = {$_REQUEST['id']}";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
   }

   if(isset($_REQUEST['assign']))
   {
       if(($_REQUEST['request_id'] == "") || ($_REQUEST['request_info'] == "")
       || ($_REQUEST['request_desc'] == "") || ($_REQUEST['requestername'] == "")
       || ($_REQUEST['address1'] == "") || ($_REQUEST['address2'] == "")
       || ($_REQUEST['requestercity'] == "")  || ($_REQUEST['requesterstate'] == "")
       || ($_REQUEST['requesterzip'] == "")   || ($_REQUEST['requesteremail'] == "")
       || ($_REQUEST['requestermobile'] == "") || ($_REQUEST['assigntech'] == "")
       || ($_REQUEST['inputdate'] == ""))
       {
           $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2>Fill All Fields</div>';
       }
       else
       {
           $rid = $_REQUEST['request_id'];
           $rinfo =  $_REQUEST['request_info'];
           $rdesc =  $_REQUEST['request_desc'];
           $rname =  $_REQUEST['requestername'];
           $radd1 =  $_REQUEST['address1'];
           $radd2 =  $_REQUEST['address2'];
           $rcity =  $_REQUEST['requestercity'];
           $rstate =  $_REQUEST['requesterstate'];
           $rzip =  $_REQUEST['requesterzip'];
           $remail =  $_REQUEST['requesteremail'];
           $rmobile =  $_REQUEST['requestermobile'];
           $rassigntech =  $_REQUEST['assigntech'];
           $rdate =  $_REQUEST['inputdate'];
           $sql = "INSERT INTO assignwork_tb(request_id, request_info, 
           request_desc, requester_name, requester_add1, requester_add2,
          requester_city, requester_state , requester_zip, requester_email, 
          requester_mobile, assign_tech, assign_date) VALUES('$rid', '$rinfo', 
          '$rdesc', '$rname', '$radd1', '$radd2', '$rcity', '$rstate', '$rzip', '$remail', '$rmobile',
           '$rassigntech', '$rdate')";
           if($conn->query($sql)== TRUE)
           {
               $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Work Assigned Successfully</div>';

           }
           else
           {
               $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2>Unable to Assign work</div>';

           }


       }
       
   }

?>
<div class="col-sm-5 mt-5 jumbotron">
            <form action="" method="POST">
                <h5 class="text-center">Assign Work Order Request</h5>
                <div class="form-group">
                <label for="request_id">Request ID</label>
                <input type="text" class="form-control" id="request_id" name="request_id"
                value="<?php  if(isset($row['request_id'])) echo $row ['request_id']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="request_info">Request Info</label>
            <input type="text" name="request_info" class="form-control" id="request_info"
            value="<?php  if(isset($row['request_info'])) echo $row ['request_info']; ?>">

        </div>
        <div class="form-group">
                <label for="request_desc">Description</label>
                <input type="text" name="request_desc" class="form-control" id="request_desc"
                value="<?php  if(isset($row['request_desc'])) echo $row ['request_desc']; ?>">
        </div>
        <div class="form-group">
                <label for="requestername">Name</label>
                <input type="text" name="requestername" class="form-control" id="requestername"
                value="<?php  if(isset($row['requester_name'])) echo $row ['requester_name']; ?>">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="address1">Address Line 1</label>
                <input type="text" name="address1" class="form-control" id="address1"
                value="<?php  if(isset($row['requester_add1'])) echo $row ['requester_add1']; ?>"
                >
            
            </div>
            <div class="form-group col-md-6">
                <label for="address2">Address Line 2</label>
                <input type="text" name="address2" class="form-control" id="address2"
                value="<?php  if(isset($row['requester_add2'])) echo $row ['requester_add2']; ?>">           
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="requestercity">City</label>
                <input type="text" name="requestercity" class="form-control" id="requestercity"
                value="<?php  if(isset($row['requester_city'])) echo $row ['requester_city']; ?>">
                
            </div>
            <div class="form-group col-md-4">
                <label for="requesterstate">State</label>
                <input type="text" name="requesterstate" class="form-control" id="requesterstate"
                value="<?php  if(isset($row['requester_state'])) echo $row ['requester_state']; ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="requesterzip">Zip</label>
                <input type="text" name="requesterzip" class="form-control" id="requesterzip" onkeypress="isInputNumber(event)"
                value="<?php  if(isset($row['requester_zip'])) echo $row ['requester_zip']; ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="requesteremail">Email</label>
                <input type="email" name="requesteremail" class="form-control" id="requesteremail"
                value="<?php  if(isset($row['requester_email'])) echo $row ['requester_email']; ?>">
        </div>
        <div class="form-group col-md-4">
                <label for="requestermobile">Mobile</label>
                <input type="text" name="requestermobile" class="form-control" id="requestermobile"
                onkeypress="isInputNumber(event)"
                value="<?php  if(isset($row['requester_mobile'])) echo $row ['requester_mobile']; ?>">
        </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="assigntech">Assign to Technician</label>
                <input type="text" name="assigntech" class="form-control" id="assigntech"
                >
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
            <?php if (isset($msg)){echo $msg;}?>
    </div>
    <script>
        function isInputNumber(evt)
        {
            var ch = String.formCharCode(evt.which);
            if(!(/[0-9]/.test(ch)))
            {
            evt.preventDefault();
            }
        }
    </script>