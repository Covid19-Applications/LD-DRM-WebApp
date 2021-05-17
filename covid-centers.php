<?php include('security.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>


<style type="text/css">
    
.button{
    background: #3498db;
    color: #fff;
    border-radius: 50px;
    margin: 0 15px;
    padding: 10px 30px; 
}

  
.icofont-navigation-menu:before {
    content: "\efa2";
    color: black;
}

#header.header-scrolled, #header.header-inner-pages {
    background: white;
}

#header .logo a {
    color: #000;
}

.nav-menu a {
    display: block;
    position: relative;
    color: #000;
    transition: 0.3s;
    font-size: 15px;
    font-family: "Open Sans", sans-serif;
    font-weight: 600;
}
    
</style>
    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg ">
        <div class="container">
            <br><br><br><br>
            <div class="row">
                <div class="col-lg-6">
                    <div class="bradcam_text">
                        <br>
                        <h1>Covid Care Centers</h1>
                            <p>Transit Accommodation Building near Indira Gandhi Hospital Kavaratti as Dedicated as COVID 19 HOSPITAL.</p>
                                <a href="#iso"><button class="button">Know More</button></a>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bradcam_text">
                        <img src="img/lakshadweep/center-1.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

<br><br>

    <!-- Start Sample Area -->
       <section id="clients" class="clients clients ">
      <div class="container  text-center">

        <div class="row col-lg-12">

          <div class="col-lg-6 " data-aos="zoom-in" data-aos-delay="100">
            <h4><a href="https://cdn.s3waas.gov.in/s358238e9ae2dd305d79c2ebc8c1883422/uploads/2020/05/2020051228-1.pdf">Designating Hospitals For COVID 19 Case Management.</a></h4>
          </div>

          <div class="col-lg-6 " data-aos="zoom-in" data-aos-delay="100">
            <h4><a href="https://cdn.s3waas.gov.in/s358238e9ae2dd305d79c2ebc8c1883422/uploads/2020/05/2020051289.pdf">Transit Accommodation Building</a></h4>
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <br><br><br>
    <!-- Start Align Area -->

  <!-- Start Align Area -->
  <div class="whole-wrap" >
    <div class="container box_1170">

      <div class="col-lg-12">
                    <h2 class="title-1 m-b-25" id="iso">Covid19 Isolation Centers In Lakshadweep</h2>
                    <?php
              $query = "SELECT * FROM covid_centers WHERE type='Isolation' && state ='lakshadweep' ";
              $query_run = mysqli_query($connection, $query);
          ?>
                    <div class="table-responsive table--no-card m-b-40">
                        <table class="table table-borderless table-striped table-earning"  >
                                    <thead>
                                        <tr>
                                            
                                            <th class="bg-info">Hospital Name</th>
                                            <th class="bg-warning">Address</th>
                                            <th class="bg-primary">Contact No</th>
                                            <th class="bg-danger">Directions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="state-wise">
                                       <?php
                      if(mysqli_num_rows($query_run) > 0)        
                      {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                    ?>
                                        
                                          <tr>  
                                              
                      <td><?php  echo $row['name']; ?></td>
                      <td><?php  echo $row['address']; ?></td>
                      <td><a href="tel:<?php  echo $row['number']; ?>"style="color:#E7717D;"><?php  echo $row['number']; ?></a></td>
                      <td><a href="<?php  echo $row['link']; ?>">Directions</a></td>
                       

                      </tr>

                      <?php
                          } 
                      }
                  ?>
                                        
                                </tbody>
                        </table>
                    </div>
                </div>
    </div>
  </div>
  <!-- End Align Area -->       

<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>



                

          