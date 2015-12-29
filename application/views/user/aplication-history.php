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

            <div  class="col s9 info-list">
              <div id="snapshot" class="card">
                <h5 class="title"> Application History </h5>

                <div class="row">
                  <div class="col s10">
                  </div>
                  <div class="col s2">   
                  </div>
                </div>
                
              </div>

            </div>
        </div>

      </div>

<?php $this->load->view('footer'); ?>
