<?php
    define('TITLE', 'Requester Profile');
    define('PAGE', 'RequesterProfile');
    include("includes/header.php");
    include ("../dbConnection.php");
    session_start();
    if($_SESSION['is_login'])
    {
        $rEmail = $_SESSION['rEmail'];
    } 
    else 
    {
        echo "<script>location.href='RequesterLogin.php';</script>";
    }
    $sql = "SELECT r_name, r_email FROM requesterlogin_tb WHERE r_email = '$rEmail' ";
    $result = $conn->query($sql);
    if($result->num_rows == 1)
    {
        $row = $result->fetch_assoc();
        $rName = $row['r_name'];
    }

    if(isset($_REQUEST['nameupdate']))
    {
        if($_REQUEST['rName'] == "")
        {
           $passmsg =  '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields</div>';
        }
        else 
        {
          $rName =  $_REQUEST['rName'];
          $sql = "UPDATE requesterlogin_tb SET r_name = '$rName' WHERE r_email = '$rEmail'";
          if($conn->query($sql)== TRUE)
          {
              $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully</div>';
          }
          else
          {
            $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Updated Unsuccessfully</div>';
          }
        }
    }
?>



         <!-- Start Profile Section -->
            <div class="col-sm-6" style="margin-top: 51px;">
                <form action="" method="POST" class="mx-5">
                    <div class="form-group">
                        <label  for="rEmail">Email</label>
                        <input class="form-control" type="email" name="rEmail" id="rEmail"
                        value="<?php echo $rEmail ?>"readonly>
                    </div>
                    <div class="form-group">
                         <label for="rName">Name</label> 
                         <input class="form-control" type="text" name="rName" id="rName"
                         value="<?php echo $rName ?>">
                    </div>
                    <button type="submit" class="btn btn-danger" name="nameupdate">Update</button>
                    <?php if(isset($passmsg))
                    {
                        echo $passmsg;
                    }
                    ?>
                  
                </form>
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
            <?php
                include("includes/footer.php");
            ?>