<?php $this->load->view('header'); 
?>


<div class="container">
    <h1>&nbsp;</h1>
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <form action="<?php echo base_url('welcome/add_new_user');?>" method="post"> 
                
                <div class="row">
                   <div class="col-md-12 form-group"> 
                      <div class="col-md-3">
                          <label for="Firstname">First Name : </label>
                      </div>
                      <div class="col-md-8">
                           <input type="text" name="fname" class="form-control" value="" placeholder="First Name" required>    
                      </div>
                    </div>
                </div>

                <div class="row">
                   <div class="col-md-12 form-group"> 
                      <div class="col-md-3">
                          <label for="Firstname">Last Name : </label>
                      </div>
                      <div class="col-md-8">
                           <input type="text" name="lname" class="form-control" value="" placeholder="Last Name" required>    
                      </div>
                  </div>
                </div>
                  
                <div class="row">
                  <div class="col-md-12 form-group"> 
                    <div class="col-md-3">
                        <label for="Firstname">Gender : </label>
                    </div>
                    <div class="col-md-8 radio-wrapper">
                      <span class="select  pl20">
                        <input type="radio" name="gender" id="male" value="male" class="css-checkbox">
                        <label for="male" class="css-label ">Male</label>
                      </span> &nbsp;&nbsp;&nbsp;
                      <span class="select  pl20">
                        <input type="radio" name="gender" id="female" value="female" class="css-checkbox">
                        <label for="female" class="css-label ">Female</label>
                      </span> 
                    </div>
                  </div>    
                </div>
                
                <div class="row">
                  <div class="col-md-12 form-group"> 
                    <div class="col-md-3">
                        <label for="Firstname">Address : </label>
                    </div>
                    <div class="col-md-8">
                         <textarea  name="address" class="form-control" row="5"  placeholder="Address" required>    </textarea>
                    </div>
                  </div>    
                </div>

                <div class="row">
                  <div class="col-md-12 form-group"> 
                    <div class="col-md-3">
                        
                    </div>
                    <div class="col-md-8">
                         <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                  </div>    
                </div>
                    
                    
                
            </form>

           <div>
            </div>
        </div>        
      </div>


              <!--   <pre>
                    <?php print_r($users)?>
                </pre>
               --> 

      <div class="row">
          <div class="col-md-12">
                <table id="user-list" class="table table-striped table-bordered bootstrap-datatable " width="100%">
                     <thead>
                        <tr>
                            <th>User ID</th>
                            <th>User Name</th>
                            <th>Gender</th>
                            <th>Address</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($users as $key => $value) { ?>
                      <tr>
                        <td><?php echo  $value['id']; ?> </td>
                        <td><?php echo  $value['fname']; $value['lname']; ?> </td>
                        <td><?php echo  $value['gender']; ?> </td>
                        <td><?php echo  $value['address']; ?> </td>
                      </tr>  <?php }?> 
                    <tbody>
                  </table>
          </div>
      </div>        
</div>

  <script>
    $(document).ready(function() {
      $('#user-list').DataTable();
  });

   $(document).ready(function() {
     $('select[name="user-list_length"]').addClass('form-control');
     //$('input[type="search"]').addClass('form-control');
  });    
    </script>

<?php $this->load->view('footer'); ?>
