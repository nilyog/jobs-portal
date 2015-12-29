<?php $this->load->view('header'); 
?>


<div class="home">
    <div class="row searcharea">    
      <div class="card col s12 searchBar">
          <div class="col s5  "><input type="search" class="" placeholder="Designation"></div>
          <div class="col s4 "> <input type="search" class="" placeholder="Location"></div>
          <div class="col s3 text-center serbtn"> <a class="waves-effect waves-light btn"><i class="material-icons right">search</i>Search</a> </div>
      </div>
    </div>
  <div class="container">
        <div class="row">
          <div class="col s12">
            <h6> Recruiters in Top Companies </h6>
          <div class="slider">
            <ul class="slides">
              <li>
                <img src="assets/images/logo-slide-1.jpg" alt="Company "> 
              </li>
              <li>
                <img src="assets/images/logo-slide-2.jpg" alt="Company "> 
              </li>
              <li>
                <img src="assets/images/logo-slide-3.jpg" alt="Company "> 
              </li>
              <li>
                <img src="assets/images/logo-slide-4.jpg" alt="Company "> 
              </li>
              <li>
                <img src="assets/images/logo-slide-5.jpg" alt="Company "> 
              </li>
            </ul>
          </div>
          </div>
        </div>
  </div>
    
</div>

<?php $this->load->view('footer'); ?>
