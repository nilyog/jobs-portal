<?php $this->load->view('header'); ?>

<div class="container">
        <div class="row">
            <div  class="col s9 new_reg">
              <div id="snapshot" class="card">
                <h5 class="title">Jonseeker / Company Register</h5>

                <div class="row">
                  <div class="input-field col s6">
                      <input id="fname" type="email" class="validate" name="fname" required>
                      <label for="fname">First name</label>
                  </div>
                  <div class="input-field col s6">
                      <input id="lname" type="email" class="validate" name="lname" required>
                      <label for="lname">Last name</label>
                  </div>
                 
                  <div class="input-field col s6">
                      <input id="reg_email" type="email" class="validate" name="reg_email" required>
                      <label for="reg_email">Email id</label>
                  </div>
                  <div class="input-field col s6">
                      <input id="bdate" type="text" class="datepicker  validate" name="bdate" required>
                      <label for="bdate">Birth Date</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="pwd_org" type="password" class="validate" name="pwd_org" required>
                    <label for="pwd_org"  >Password</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="reg_pwd" type="password" class="validate" name="reg_pwd" required>
                    <label for="reg_pwd"  >Re Password</label>
                  </div>
                   <div class="col s6 offset-s6 ">
                    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn pull-right">Login</a>
                  </div> 
                </div>
                
              </div>

            </div>
        </div>

      </div>

<?php $this->load->view('footer'); ?>
