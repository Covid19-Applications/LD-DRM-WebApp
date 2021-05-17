<?php include('security.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>

<style type="text/css">
  
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

 button{
  background: #ffc451;
  border: 0;
  padding: 10px 24px;
  color: #151515;
  transition: 0.4s;
  border-radius: 4px;
}

.card-header h5{
  color: white;
}

</style>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Contact</h2>
          <h3>Get In Touch With <span>Us</span></h3>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">

              <div class="col-lg-6">

                <div class="row justify-content-center">

                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-map"></i>
                    <h4>Address</h4>
                    <p>Abids, Hyderabad</p>
                  </div>
                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-phone"></i>
                    <h4>Call Us</h4>
                    <p>+91 9533699475</p>
                  </div>
                  <div class="col-md-12 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-envelope"></i>
                    <h4>Email Us</h4>
                    <p>shaharyaarkutchi7@gmail.com</p>
                  </div>

                </div>

              </div>

              <div class="col-lg-6">
                
            <form action="code.php" method="post" >
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phonenumber" data-rule="minlen:8" data-msg="Please enter at least 8 chars of phone" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                   <select name="state" class="form-control" required="" >
                     <option>Select State</option>  
              <option name="state" value="andhra pradesh "> Andhra Pradesh</option>
              <option name="state" value="arunachal pradesh " > Arunachal Pradesh </option>
              <option name="state" value="assam  " > Assam  </option>
              <option name="state" value="bihar " > Bihar </option>
              <option name="state" value="chhattisgarh " > Chhattisgarh </option>
              <option name="state" value="goa " > Goa </option>
              <option name="state" value="gujarat " > Gujarat </option>
              <option name="state" value="haryana " > Haryana </option>
              <option name="state" value="himachal pradesh " > Himachal Pradesh </option>
              <option name="state" value="jammu & kashmir " > Jammu & Kashmir </option>
              <option name="state" value="jharkhand" > Jharkhand</option>
              <option name="state" value="karnataka " > Karnataka </option>
              <option name="state" value="kerala " > Kerala </option>
              <option name="state" value="madhya pradesh " > Madhya Pradesh </option>
              <option name="state" value="maharashtra " > Maharashtra </option>
              <option name="state" value="manipur " > Manipur </option>
              <option name="state" value="meghalaya " > Meghalaya </option>
              <option name="state" value="mizoram " > Mizoram </option>
              <option name="state" value="nagaland " > Nagaland </option>
              <option name="state" value="orissa " > Orissa </option>
              <option name="state" value="punjab " > Punjab </option>
              <option name="state" value="rajasthan " > Rajasthan </option>
              <option name="state" value="sikkim " > Sikkim </option>
              <option name="state" value="tamil nadu " > Tamil Nadu </option>
              <option name="state" value="telangana " > Telangana </option>
              <option name="state" value="tripura " > Tripura </option>
              <option name="state" value="uttar pradesh " > Uttar Pradesh </option>
              <option name="state" value="uttarakhand " > Uttarakhand </option>
              <option name="state" value="west bengal " > West Bengal </option>
              <option name="state" value="andaman & nicobar islands " > Andaman & Nicobar Islands </option>
              <option name="state" value="dadra and nagar haveli" > Dadra and Nagar Haveli</option>
              <option name="state" value="daman and diu" > Daman and Diu</option>
              <option name="state" value="lakshadweep " > Lakshadweep </option>
              <option name="state" value="puducherry " > Puducherry </option>
              <option name="state" value="delhi  " > Delhi  </option>
              <option name="state" value="chandigarh " > Chandigarh  </option>

      </select>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="text-center"><button type="submit" name="contact_form">Send Message</button></div>
            </form>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->


<section class="section" id="contact">
<div class="container">

<h1>Our Social Hub </h1>
<br>
<div class="card-deck text-center" id="social">

    <div class="card" style="background-color: green;">
        <div class="card-body">
            <img src="img/contact/whatsapp.png">
        </div>
        <div class="card-header">
           <a href="https://api.whatsapp.com/send?phone=919596655577&text=Hi&source=&data=&app_absent="><h5>Whatsapp</h5></a>
         </div>   
    </div>
    <div class="card" style="background-color: #1B46CF;">
        <div class="card-body">
            <img src="img/contact/facebook.png">
        </div>
        <div class="card-header">
           <a href="https://www.messenger.com/login.php?next=https%3A%2F%2Fwww.messenger.com%2Ft%2FMyGovIndia"><h5>Facebook Messenger</h5></a>
         </div>   
    </div>
    <div class="card" style="background-color:#17379D;">
        <div class="card-body">
            <img src="img/contact/facebook (1).png">
        </div>
        <div class="card-header">
           <a href="https://www.facebook.com/MyGovIndia/"><h5>Facebook Page</h5></a>
         </div>   
    </div>
    <div class="card" style="background-color: #1B46CF;">
        <div class="card-body">
            <img src="img/contact/telegram.png">
        </div>
        <div class="card-header">
           <a href="https://t.me/MyGovCoronaNewsdesk"><h5>Newsdesk Telegram</h5></a>
         </div>   
    </div>
</div>
</div>
</section>




<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>