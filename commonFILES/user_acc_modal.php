<style>
    #inputNPass{
        display: none;
    }
</style>
<?php
    include('../db_file/db_conn.php');

    session_start();

    $user_id = $_SESSION['user_db_id'];
    $fetch_query = "select * from userdata where id='$user_id'";
    $run_query = mysqli_query($con, $fetch_query);
    if($run_query){       
        $user_home_data = mysqli_fetch_assoc($run_query);
        
        $home_username = $user_home_data['name'];
        $home_email = $user_home_data['email'];
        $home_phone = $user_home_data['phone'];
        $home_dob = $user_home_data['dob'];
        $home_adhaar = $user_home_data['adhaar'];
        $home_pan = $user_home_data['pan'];
        
        $home_pass = $user_home_data['pass'];
    }
    
    $bank_fetch_query = "select * from user_bank where user_id='$user_id'";
    $bank_run_query = mysqli_query($con, $bank_fetch_query);
    if($bank_run_query){
        $user_bank_data = mysqli_fetch_assoc($bank_run_query);
        
        $u_bank_name = $user_bank_data['b_name'];
        $u_bank_ifsc = $user_bank_data['ifsc'];
        $u_bank_accno = $user_bank_data['accno'];
    }

 
?>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Account Setting</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            
          
    <form action="../home.php" method="POST">
            
            <div class="row">
                <div class="col-lg-6 col-12">
                    <label for="inputName" >Name</label>
                    <input type="text" id="inputName" class="form-control" name="h_name" placeholder="Name" value="<?php echo $home_username ?>" required ><br>
                </div>
                <div class="col-lg-6 col-12">
                    <label for="inputEmail">Email address</label>
                    <input type="email" id="inputEmail" class="form-control" name="h_email" placeholder="Email address" value="<?php echo $home_email ?>" required><br>            
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <label for="inputPhone">Phone No</label>
                    <input type="number" id="inputPhone" class="form-control" name="h_phone" placeholder="Phone No" value="<?php echo $home_phone ?>" required><br>
                </div>
                <div class="col-lg-6 col-12">
                    <label for="inputDOB">DOB</label>
                    <input type="date" id="inputDOB" class="form-control" name="h_dob" placeholder="Email address" value="<?php echo $home_dob ?>" required><br>
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <label for="inputAdhaar" >Adhaar Number</label>
                    <input type="text" id="inputAdhaar" class="form-control" name="h_adhaar" placeholder="Adhaar number" value="<?php echo $home_adhaar ?>" required ><br>
                </div>
                <div class="col-lg-6 col-12">
                    <label for="inputPan" >Pan Number</label>
                    <input type="email" id="inputPan" class="form-control" name="h_pan" placeholder="Pan number" value="<?php echo $home_pan ?>" required><br>       
                </div>
            </div>
            
            <div class="row" style="padding: 0px 20px">
                <button class="btn btn-outline-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Change Password
                </button>
                
                
                <div class="collapse" id="collapseExample">
                    <div class=" card-body">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="input-group mb-3" id="current_pass">
                                  <input type="password" class="form-control" placeholder="Current Password" aria-label="Current Password" aria-describedby="check_button" name="h_c_pass" id="inputCPass">
                                  <button class="btn btn-outline-secondary" type="button" id="check_button" name="check">Check</button>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <input type="password" id="inputNPass" class="form-control new_pass" name="h_n_pass" placeholder="New Password" value="" required>                                              
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
                       
            <hr>
            
            <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <span>Bank Details</span>
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <label for="bankname" >Name Of The Bank</label>
                                    <input type="text" id="bankname" class="form-control" name="h_bank_name" placeholder="Bank Name" value="<?php echo $u_bank_name ?>" required ><br>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label for="ifsc_no">IFSC Number</label>
                                    <input type="text" id="ifsc_no" class="form-control" name="h_ifsc" placeholder="IFSC no" value="<?php echo $u_bank_ifsc ?>"><br>            
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-12">
                                    <label for="accno" >Bank Account Number</label>
                                    <input type="number" id="accno" class="form-control" name="h_accno" placeholder="Bank Acc No" value="<?php echo $u_bank_accno ?>" required ><br>
                                </div>
                            </div>
                      </div>
                    </div>
                  </div>
            </div>
        
        </form>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" name="save_data">Save</button>
      </div>
    </div>
  </div>
</div>