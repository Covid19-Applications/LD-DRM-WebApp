
<style type="text/css">

form #logout{
  margin-top: -10px;
  margin-left: 15px;
}  

</style>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-10 d-flex align-items-center justify-content-end">

          <h1 class="logo mr-auto"><a href="index.php">Namude Lakshadweep</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="covid-dashboard.php">Covid19 Dashboard</a></li>
          <li class="drop-down"><a href="">Services</a>
            <ul>
              <li class="drop-down"><a href="#">Health Care</a>
                <ul>
                  <li><a href="covid-centers.php">Public Health Care</a></li>
                  <li><a href="medical.php">Medical</a></li>
                  <li><a href="blood-donate.php">Blood Bank</a></li>
                  <li><a href="msme.php">MSME</a></li>
                </ul>
              </li>
              <li class="drop-down"><a href="#">Disaster Management</a>
                <ul>
                 <li><a href="donate-equipment.php">Donations</a></li>
                  <li><a href="govt.php">Government Services</a></li>
                  <li><a href="epass.php">Movement Pass</a></li>
                  <li><a href="volunteer.php">Volunteers</a></li>
                  <li><a href="clusters.php">Cluster Geofencing</a></li>
                </ul>
              </li>
              <li class="drop-down"><a href="#">Education & Skilling</a>
                <ul>
                  <li><a href="hr.php">HR Recruitment</a></li>
                  <li><a href="courses.php">Online Vocational Courses</a></li>
                  <li><a href="blog">Man Power</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="contact.php">Contact</a></li>
           <li class="get-started">
            <form action="logout.php" method="POST"> 
            <button type="submit" name="user_logout_btn" class="btn btn-primary" id="logout">Logout</button>
          </form></li>

        </ul>
      </nav><!-- .nav-menu -->

        </div>
      </div>
    </div>
  </header><!-- End Header -->