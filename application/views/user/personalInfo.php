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
                <li> <a href="<?php echo base_url(); ?>jobDetails" class="collapsible-header waves-effect waves-teal"> Employment    </a></li>
                 <li> <a href="<?php echo base_url(); ?>education" class="collapsible-header waves-effect waves-teal"> Education  </a></li>
                <!-- <li> <a href="#!">&nbsp;</a></li>
               --></ul>

              <h5 class="bold"> Job & Application </h5>
              <ul>
                  <li><a href="<?php echo base_url(); ?>aplication-history" class="collapsible-header waves-effect waves-teal"> Application History </a></li>
                  <li><a href="#!" class="collapsible-header waves-effect waves-teal"> Saved Jobs </a></li>
              </ul>
              </div>
            </div>

            <div  class="col s9 personalDetails">
              <div class="card">
              <h5 class="title"> New client registration </h5>
                <ul class="collapsible " data-collapsible="accordion">
                  <li>
                    <div class="collapsible-header active  blue lighten-3"># Personal Details</div>
                    <div class="collapsible-body">
                       <form>
                        <div class="row">
                          <div class="input-field col s6">
                            <input id="fname" type="text" class="validate" name="fname" required>
                            <label for="fname">First name</label>
                          </div>
                          <div class="input-field col s6">
                            <input id="lname" type="text" class="validate" name="lname" required>
                            <label for="lname">Last name</label>
                          </div>
                          
                          <div class="input-field col s6">
                              <div class="col s4 p0"> <h6 class="gender"> Marital Status </h6> </div>
                              <div class="col s3"> 
                                <input name="marit_status" type="radio" id="single" />
                                <label for="single">Single</label>
                              </div>
                              <div class="col s3"> 
                                <input name="marit_status" type="radio" id="married" />
                                <label for="married">Married</label>
                              </div>
                          </div>
                          <div class="input-field col s6">
                              <div class="col s3"> <h6 class="gender"> Gender </h6> </div>
                              <div class="col s3"> 
                                <input name="gender" type="radio" id="male" />
                                <label for="male">Male</label>
                              </div>
                              <div class="col s3"> 
                                <input name="gender" type="radio" id="female" />
                                <label for="female">Female</label>
                              </div>
                          </div>

                          <div class="input-field col s6">
                            <input type="date" class="datepicker" id="dob" name="birthdate" required>
                            <label for="dob">Birth Date </label>
                          </div>
                          <div class="input-field col s6">
                            <input type="number" class="" id="contNum" length="10" name="contactNo" required>
                            <label for="contNum" data-error="Invalid number">Contact Number </label>
                          </div>
                          <div class="input-field col s6">
                            <input id="email" type="email" class="validate" name="email" required>
                            <label for="email" data-error="Email not valid" data-success="right">Email</label>
                          </div>
                          <div class="input-field col s6">
                            <textarea id="address" class="materialize-textarea" name="address" required></textarea>
                            <label for="address">Parmanent Address</label>
                          </div>
                          <div class="input-field col s6">
                            <input id="pwd" type="password" class="validate" name="password" required>
                            <label for="pwd"  >Password</label>
                          </div>
                           <div class="input-field col s6">
                            <input id="pwd2" type="password" class="validate">
                            <label for="pwd22"  data-error="Password not match" data-success="Password match">Re type password</label>
                          </div>  
                            <div class="input-field col s6">
                                  <select >
                                    <option value="default" selected>Select City</option>
                                    <optgroup label="Maharashtra">
                                      <option value="1">Pune</option>
                                      <option value="2">Nashik</option>
                                      <option value="2">Mumbai</option>
                                    </optgroup>
                                    <optgroup label="Gujarat">
                                      <option value="3">Gandhinagar</option>
                                      <option value="4">Ganap</option>
                                    </optgroup>
                                  </select>
                                  <label>Select City</label>
                            </div>
                          <div class="input-field col s6">
                            <input id="pincode" type="number" length="6" name="pincode" required> 
                            <label for="pincode" data-error="Please enter right pincode">Pincode</label>
                          </div>

                          <div class="input-field col s6 offset-s6 ">
                            <button class="btn waves-effect waves-light pull-right" type="submit" name="action" onclick="Materialize.toast('Form Submited', 2000)" >Submit
                            </button>
                          </div>
                        </div>  
                      </form>

                    </div>
                  </li>

                  <li>
                    <div class="collapsible-header  blue lighten-3"> # Educational Details</div>
                    <div class="collapsible-body eduInfo">
                        <!-- fileds for Post graducation  -->
                        <div class="row">
                          <div class="input-field col s12">
                            <h6 class="orange-text lighten-1"> Fill post graduation details</h6>
                          </div>
                          <div class="input-field col s2">
                                <select >
                                  <option value="default" class="grey-text lighten-3" selected>Select degree</option>
                                    <option value="MCA">MCA</option>
                                    <option value="MCS">MCS</option>
                                    <option value="MBA">MBA</option>
                                    <option value="M.Com">M.Com</option>
                                    <option value="M.A.">M.A.</option>
                                </select>
                                <label>Post Graduation</label>
                          </div>
                          <div class="input-field col s3">
                            <input id="pg_pasingyear" type="date" class="datepicker" name="pg_passingyr" required> 
                            <label for="pg_pasingyear" data-error="Please enter right pincode">Passing Year</label>
                          </div>
                          <div class="input-field col s2">
                            <input id="pg_markobtain" type="number" length="5" name="pg_mark_obtain" required> 
                            <label for="pg_markobtain" >Marks Obtain</label>
                          </div>
                          <div class="input-field col s5">
                                <select >
                                  <option value="default" class="grey lighten-3" selected>Select University</option>
                                    <option value="Pune University">Pune University</option>
                                    <option value="Tilak Maharashtra Vidyapith">Tilak Maharashtra Vidyapith</option>
                                    <option value="Shivaji University">Shivaji University</option>
                                    <option value="Babasaheb Ambedkar Marathvada University">Babasaheb Ambedkar Marathvada University</option>
                                    <option value="Yashavantrao Chavan Mukta Vidyapith">Yashavantrao Chavan Mukta Vidyapith</option>
                                </select>
                                <label>University</label>
                          </div>
                        </div>  
                      
                        <!-- fileds for Under graducation  -->
                        <div class="row">
                          <div class="input-field col s12">
                            <h6 class="orange-text lighten-1"> Fill under graduation details</h6>
                          </div>
                          <div class="input-field col s2">
                                <select >
                                  <option value="default" class="grey lighten-3" selected>Select degree</option>
                                    <option value="BCA">BCA</option>
                                    <option value="BFA">BFA</option>
                                    <option value="BBA">BBA</option>
                                    <option value="B.Com">B.Com</option>
                                    <option value="B.A.">B.A.</option>
                                </select>
                                <label>Under Graduation</label>
                          </div>
                          <div class="input-field col s3">
                            <input id="ug_pasingyear" type="date" class="datepicker" name="ug_passingyr" required> 
                            <label for="ug_pasingyear" data-error="Please enter right pincode">Passing Year</label>
                          </div>
                          <div class="input-field col s2">
                            <input id="ug_markobtain" type="number" length="5" name="ug_mark_obtain" required> 
                            <label for="ug_markobtain" >Marks Obtain</label>
                          </div>
                          <div class="input-field col s5">
                              <select >
                                  <option value="default" selected>Select University</option>
                                  <option value="Pune University">Pune University</option>
                                  <option value="Tilak Maharashtra Vidyapith">Tilak Maharashtra Vidyapith</option>
                                  <option value="Shivaji University">Shivaji University</option>
                                  <option value="Babasaheb Ambedkar Marathvada University">Babasaheb Ambedkar Marathvada University</option>
                                  <option value="Yashavantrao Chavan Mukta Vidyapith">Yashavantrao Chavan Mukta Vidyapith</option>
                              </select>
                              <label>University</label>
                          </div>
                        </div>
                          
                          
                        <!-- fileds for HSC -->
                        <div class="row"> 
                          <div class="input-field col s12">
                            <h6 class="orange-text lighten-1"> Fill 12 <sup>th</sup> (H.S.C.) details</h6>
                          </div>
                          <div class="input-field col s4">
                            <input id="hsc_pasingyear" type="date" class="datepicker" name="hsc_passingyr" required> 
                            <label for="hsc_pasingyear" data-error="Please enter right pincode">Passing Year</label>
                          </div>
                          <div class="input-field col s3 p0">
                            <input id="hsc_markobtain" type="number" length="5" name="hsc_mark_obtain" required> 
                            <label for="hsc_markobtain" >Marks Obtain</label>
                          </div>
                          <div class="input-field col s5">
                              <select >
                                  <option value="default" class="grey lighten-3" selected>Select Board</option>
                                  <option value="Maharashtra Board">Maharashtra Board</option>
                                  <option value="CBSC">C.B.S.C Board</option>
                              </select>
                              <label>Board</label> 
                          </div>
                        </div>

                        <!-- fileds for SSC -->
                        <div class="row">
                          <div class="input-field col s12">
                            <h6 class="orange-text lighten-1"> Fill 10 <sup>th</sup> (S.S.C.) details</h6>
                          </div>
                        
                          <div class="input-field col s4">
                            <input id="ssc_pasingyear" type="date" class="datepicker" name="ssc_passingyr" required> 
                            <label for="ssc_pasingyear" data-error="Please enter right pincode">Passing Year</label>
                          </div>
                          <div class="input-field col s3 p0">
                            <input id="ssc_markobtain" type="number" length="5" name="ssc_mark_obtain" required> 
                            <label for="ssc_markobtain" >Marks Obtain</label>
                          </div>
                          <div class="input-field col s5">
                              <select >
                                  <option value="default" class="grey lighten-3" selected>Select Board</option>
                                  <option value="Maharashtra Board">Maharashtra Board</option>
                                  <option value="CBSC">C.B.S.C Board</option>
                              </select>
                              <label>Board</label> 
                          </div>
                        </div> 

                        <div class="row">
                           <div class="input-field col s6 offset-s6">
                            <button class="btn waves-effect waves-light pull-right" type="submit" name="action">Submit
                            </button>
                          </div>
                        </div>         
                    </div>
                  </li>

                 
                  <li>
                    <div class="collapsible-header  blue lighten-3"># Add Projects</div>
                    <div class="collapsible-body">
                      <form id="addProject">
                        <div class="row">
                          <div class="input-field col s6">
                            <input id="client" type="text" class="validate" name="client" required>
                            <label for="client">Client name</label>
                          </div>
                          <div class="input-field col s6">
                            <input id="project_title" type="text" class="validate" name="project_title" required>
                            <label for="project_title">Project Title</label>
                          </div>  
                        </div>
                        <div class="row">
                          <div class="input-field col s4">
                            <input id="proj_duration" type="number" class="validate" name="proj_duration" required>
                            <label for="proj_duration">Project Duration</label>
                          </div>
                          <div class="input-field col s4">
                            <input id="role" type="text" class="validate" name="role" required>
                            <label for="role">Role</label>
                          </div>
                          <div class="input-field col s4">
                            <input id="team_size" type="text" class="validate" name="team_size" required>
                            <label for="team_size">Team  Size</label>
                          </div>
                        </div>  
                        <div class="row">
                             <div class="input-field col s6">
                                <textarea id="proj_details" class="materialize-textarea" name="proj_details" required></textarea>
                                <label for="proj_details">Project Details</label>
                              </div>
                             
                              <div class="input-field col s6">
                                <textarea id="skills_used" class="materialize-textarea" name="skills_used" required></textarea>
                                <label for="skills_used">Skills Used</label>
                              </div>
                        </div>
                        <div class="row">
                           <div class="input-field col s6 offset-s6">
                            <button class="btn waves-effect waves-light pull-right" type="submit" name="action">Submit
                            </button>
                          </div>
                        </div>  
                      </form>  
                    </div>
                  </li>
                </ul>

            </div>

            <div class="input-field col s6">
                
            </div>

            </div>
        </div>

      </div>

<?php $this->load->view('footer'); ?>
