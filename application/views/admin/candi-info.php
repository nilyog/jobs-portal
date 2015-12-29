<?php $this->load->view('header'); ?>

<div class="container">
        <div class="row">
            <div  class="col s3 per_info_list">
              <div class="card">
               <h5 class="bold">View Profile </h5>
              <ul>
                <li> <a href="<?php echo base_url(); ?>profile" class="collapsible-header waves-effect waves-teal"> Profile </a></li>
                <li> <a href="<?php echo base_url(); ?>snapshot" class="collapsible-header waves-effect waves-teal"> Snapshot </a></li>
                <li> <a href="<?php echo base_url(); ?>projects" class="collapsible-header waves-effect waves-teal"> Projects  </a></li>
                <li> <a href="<?php echo base_url(); ?>jobDetails" class="collapsible-header waves-effect waves-teal"> Job Details   </a></li>
                 <li> <a href="<?php echo base_url(); ?>education" class="collapsible-header waves-effect waves-teal"> Education  </a></li>
              </ul>

              <h5 class="bold"> Job & Application </h5>
              <ul>
                  <li><a href="<?php echo base_url(); ?>aplication-history" class="collapsible-header waves-effect waves-teal"> Application History </a></li>
                  <li><a href="#!" class="collapsible-header waves-effect waves-teal"> Saved Jobs </a></li>
              </ul>
              </div>
            </div>
            <div  class="col s9 info-list">
              <div id="snapshot" class="card">
                <h5 class="title"> Profile Snapshot </h5>

                <div class="row">
                  <div class="col s10">
                      <table>
                        <thead>
                          <tr> <td colspan="2">Nilesh Bharat Bhalerao <label>( UI Developer )</label></td> </tr>
                        </thead>
                        <tbody>
                          <tr> 
                            <td> <label>Current Designation : </label>UI Developer</td>
                            <td><label>Total Experience : </label>1.5 month  </td>
                          </tr>
                          <tr> 
                            <td> <label>Current Company : </label>Bytelogica </td>
                            <td><label>Annual Salary :  </label>12000</td>
                          </tr>
                          <tr> 
                            <td> <label>Current Location : </label>Pune</td>
                            <td><label>Highest Degree : </label>MCA </td>
                          </tr>
                          <tr> 
                            <td> <label>Preferred Location : </label>Pune</td>
                            <td><label>Phone : </label>9876543201</td>
                          </tr>
                          <tr> 
                            <td> <label>Functional Area : </label>IT-Software</td>
                            <td><label>Email : </label>nilesh@gmail.com</td>
                          </tr>
                          <tr> 
                            <td> <label>Role : </label>Web Designer</td>
                            <td><label>Permanent Address : </label>C-21 Shiv Parvati Aprt. Bh DK Heights, Sutarwadi Pashan, Pune</td>
                          </tr>
                          <tr> 
                            <td> <label>Industry : </label>IT-Software</td>
                            <td><label>Home Town/City : </label>Pune </td>
                          </tr>
                          <tr> 
                            <td> <label>Date of Birth : </label>22 Nov 1989 </td>
                            <td><label>Pincode : </label>411021 </td>
                          </tr>
                          <tr> 
                            <td> <label>Gender : </label>Male</td>
                            <td><label>Marrital Status : </label>Single</td>
                          </tr>
                          <tr>
                            <td colspan="2"> <label> Key Skills : </label>HTML5, CSS3, Jquery, JavaScript, Ionic Framework, Bootstrap, Wordpress, Adobe Photoshop, Illustrator, Corel Draw  </td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                  <div class="col s2">
                    <img src="<?php echo base_url(); ?>assets/images/edit-profile.png" alt="Profile Pic">
                     
                  </div>
                </div>
                
              </div>

            </div>
        </div>

      </div>

<?php $this->load->view('footer'); ?>
