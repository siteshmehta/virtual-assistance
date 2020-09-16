<nav class="navbar navbar-expand-lg navbar-light " style="background-color:#fafafa">
 
         
    <a class="navbar-brand ml-md-5 font-weight-bold logo" href="index.php" >
        <p style="color:#0f4c75;">VS &nbsp;<small class="p-0" style="color:#0f4c75bf">virtual service</small></p>
    </a>
            
            
    <button class="navbar-toggler  " type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
       
      
      <div class="collapse navbar-collapse " id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto font-weight-bold mr-md-5"> 
          <li class="nav-item">
            <a class="nav-link" href="#">Why VS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="what-we-do.php">What we do</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="about-us.php">About us</a>
          </li> 
          <!--<li class="nav-item">-->
          <!--  <a class="nav-link" href="#">FAQ</a>-->
          <!--</li> -->
          <li class="nav-item my-auto"> 
            <button class="nav-link badge badge-pill text-light p-2" data-toggle="modal" data-target="#contact-modal" style="background-color:#0f4c75 !important">
              Free consultation
            </button>
          </li> 
        </ul>
      </div>
       
       
</nav>

<div class="modal fade shadow-lg border-0" id="contact-modal" tabindex="-1" role="dialog" aria-labelledby="contactusModal" aria-hidden="true" style="background: linear-gradient(45deg, rgba(255,255,255,1) 0%, rgba(15, 76, 117,1) 100%) !important">
  <div class="modal-dialog fullscreen-modal  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">VS - Virtual assistant</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      
      <div class="modal-body">
            <form action="php/form.php" method="post">
                <input type="hidden" name="url" value="<?php echo basename($_SERVER['PHP_SELF']); ?>">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-12 text-center mt-md-4">
                            <font class="heading" style="cursor:pointer;">
                                Hire a virtual assistant
                            </font>
                        </div>
                        
                        <div class="col-12">
                            <hr><br>
                        </div>
                        
                    </div>        
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <input type="text" name="first_name" class="form-control shadow-none outline-none" placeholder="First name"  required>    
                        </div>
                        <div class="col-md-6 mt-2">
                            <input type="text" name="last_name" class="form-control shadow-none outline-none" placeholder="Last name" required>    
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <input type="email" name="email" class="form-control shadow-none outline-none" placeholder="Email ID" required>    
                        </div>
                        <div class="col-md-6 mt-2">
                            <input type="phone" name="phone" class="form-control shadow-none outline-none" required placeholder="Phone no. with country code">    
                        </div>
                    </div>
                    
                    
                    <div class="row mt-4">
                        <div class="col-12">
                            <textarea cols="20" rows="3" class="form-control shadow-none outline-none" required placeholder="Tell us the work or process that you want to outsource to your VA (150-200 word) " name="query"></textarea>
                        </div>
                    </div>
                    
                    <div class="row mt-5 text-center">
                        <div class="col-12">
                            <input type="submit" class="btn text-light" value="Submit" name="submit" style="background-color:#0f4c75 ">
                        </div>
                    </div>
                    
                    
                    
                
                </div>
            </form>    
      </div> 
      
    </div>
  </div>
</div>