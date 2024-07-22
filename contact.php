<!DOCTYPE php>
<php lang="en">

<?php $page = 'contact'; include 'header.php' ?>
  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner contact-us" id="top contact" data-section="section1">
  <div class="container">

        <div class="col-lg-12">
          <div class="section-heading text-center">
            <h2>Contact</h2>
          </div>
        </div>

        
    <div class="row about-pg">
    
        <div class="col-md-12 mb-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d923095.809810198!2d50.65730006771296!3d25.343048600050487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45c534ffdce87f%3A0x1cfa88cf812b4032!2sQatar!5e0!3m2!1sen!2sin!4v1646651463562!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div class="col-lg-3">
            <div class="contact_info">
              <div class="info_item">
                <i class="fa fa-home"></i>
                <h6>Doha Qatar</h6>
                <p>Santa monica bullevard</p>
              </div>
              <div class="info_item">
                <i class="fa fa-headphones"></i>
                <h6><a href="#">00 (000) 0000 000</a></h6>
                <p>Mon to Fri 9am to 6 pm</p>
              </div>
              <div class="info_item">
                <i class="fa fa-envelope"></i>
                <h6><a href="#">support@colorlib.com</a></h6>
                <p>Send us your query anytime!</p>
              </div>
            </div>
          </div>
        <!-- input -->
        <div class="col-lg-9">
            <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" required=""/>
                </div>
                <div class="form-group">
                  <input
                    type="email" class="form-control" id="email" name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" required=""/>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" required=""/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" required=""></textarea>
                </div>
              </div>
              <div class="col-md-12 text-right">
                <input type="submit" value="Send Message" class="btn primary-btn">
              </div>
            </form>
          </div>

         
    </div>


</div>
      <div class="video-overlay header-text">
           
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->
 

  
  

    <?php include 'footer.php' ?>
</body>
</php>