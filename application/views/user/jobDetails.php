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
              </ul>

              <h5 class="bold"> Job & Application </h5>
              <ul>
                  <li><a href="<?php echo base_url(); ?>aplication-history" class="collapsible-header waves-effect waves-teal"> Application History </a></li>
                  <li><a href="#!" class="collapsible-header waves-effect waves-teal"> Saved Jobs </a></li>
              </ul>
              </div>
            </div>

            <div  class="col s9 job-list">
              <div id="snapshot" class="card">
                <h5 class="title"> Employment Details</h5>
                <div class="row">
                  <div class="col s12">
                    <ul class="collapsible " data-collapsible="accordion">
                       <li>
                          <div class="collapsible-header  blue lighten-3"><i class="large material-icons white-text text-darken-2 ">recent_actors</i> Add Employment Details </div>
                          <div class="collapsible-body">
                            <form id="jobDetails">
                              <div class="row">
                                <div class="input-field col s6">
                                    <input id="designation" type="text" class="validate" name="designation" required>
                                    <label for="designation">Current Designation</label>
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
                                      <label>Job Location</label>
                                </div>
                              </div> 
                              <div class="row">
                                <div class="input-field col s6">
                                  <textarea id="job_desc" class="materialize-textarea" name="job_desc" required></textarea>
                                  <label for="job_desc">Job description</label>
                                </div>    
                                <div class="input-field col s6">
                                  <select >
                                    <option value="default" selected>Current Company</option>
                                      <option value="lastCompany">Previous Company</option>
                                  </select>
                                  <label>Working status</label>
                                </div>
                              </div>
                              <div class="row">
                                <div class="input-field col s9">
                                 <input id="skillset" type="text" class="validate" name="skillset" required>
                                    <label for="skillset">Skills set</label>
                                </div>
                                <div class="input-field col s3">
                                  <select >
                                      <option value="default" selected>Fresher</option>
                                        <option value="1">1+</option>
                                        <option value="2">2+</option>
                                        <option value="2">3+</option>
                                        <option value="3">4+</option>
                                        <option value="4">8+</option>
                                    </select>
                                    <label>Work Experience</label>
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
                </div>
                <div class="row">
                  <div class="col s12">
                    <ul class="joblist">
                      <li>
                        <div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">
                          <a class="btn-floating btn-small green">
                            <i class="large material-icons">mode_edit</i>
                          </a>
                          <ul>
                           <li><a class="btn-floating red"><i class="material-icons">delete</i></a></li>
                            <li><a class="btn-floating blue editRecord"><i class="material-icons">mode_edit</i></a></li>
                            <li>
                          </ul>
                        </div>
                        <p>
                          Currently working at <b> Bytelogica Solutions </b> as <b> UI Developer</b> <br>
                          from Jun 2015 to Current (6 months)<br>
                          Description : Working as UI developer. Converting PSD to responsive HTML pages usgin HTML5, CSS3, BOOTSTRAP etc.<br>
                          Wakad, Pune 411027  
                        </p>

                      </li>
                      <li>
                        <div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">
                          <a class="btn-floating btn-small grey accent-3">
                            <i class="large material-icons">mode_edit</i>
                          </a>
                          <ul>
                           <li><a class="btn-floating red"><i class="material-icons">delete</i></a></li>
                            <li><a class="btn-floating blue editRecord"><i class="material-icons">mode_edit</i></a></li>
                            <li>
                          </ul>
                        </div>
                        
                        <p> 
                          Previously working with <b> small2BIG </b> as <b> Front end developer</b> <br>
                          from Jun 2014 to Jun 2015 (1 year)<br>
                          Description : Working as UI developer. Converting PSD to responsive HTML pages.<br>
                          Baner, Pune 411020 
                        </p>
                      </li>
                      <li>
                        <div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">
                          <a class="btn-floating btn-small grey accent-3">
                            <i class="large material-icons">mode_edit</i>
                          </a>
                          <ul>
                           <li><a class="btn-floating red"><i class="material-icons">delete</i></a></li>
                            <li><a class="btn-floating blue editRecord"><i class="material-icons">mode_edit</i></a></li>
                            <li>
                          </ul>
                        </div>
                        
                        <p> 
                          Previously working with <b> Modern High School  </b> as <b> Instructor</b> <br>
                          from Jun 2014 to Jun 2015 (1 year)<br>
                         
                          Baner, Pune 411020 
                        </p>
                      </li>
                    </ul>
                  </div>
                </div>
                
              </div>

            </div>
        </div>

      </div>

<?php $this->load->view('footer'); ?>
<script type="text/javascript">
  $(document).ready(function(){
    $(".editRecord").click(function(){
      var editpath = $(this).parents(".card").find("ul.collapsible").children("li");
      $(editpath).addClass("active");
      $(editpath).children(".collapsible-header").addClass("active");
      $(editpath).children(".collapsible-body").show('slow');
    });
  });
</script>