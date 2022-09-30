<?php

$conn = mysqli_connect('localhost','root','','personal_portfolio') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal portfolio</title>
    
    <!-------------------CSS FILESS ---------------------------->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="color.css">

     <!-- aos css link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

<!-----------------------Style switcher---------------------------->
<link rel="stylesheet" href="color.css" class="alternate-style" title="color-1" 
disabled>
<link rel="stylesheet" href="color-2.css" class="alternate-style" title="color-2" 
disabled>
<link rel="stylesheet" href="color-3.css" class="alternate-style" title="color-3" 
disabled>
<link rel="stylesheet" href="color-4.css" class="alternate-style" title="color-4" 
disabled>
<link rel="stylesheet" href="color-5.css" class="alternate-style" title="color-5" 
disabled>

<link rel="stylesheet" href="style-switcher.css">


 

   <!-- custom css file link  -->
</head>
<body>
<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>
    <!-- ==== Main container start ======-->
       <div class="main-container">
         <!-- ==== Aside start ======-->
           <div class="aside">
              <div class="logo">
                <a href="#"><span>P</span>ortfolio</a>
              </div>
              <div class="nav-toggler">
                <span>

                </span>
              </div>
              <ul class="nav">
                <li><a href="#home" class="active"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="#about"><i class="fa fa-user"></i>About</a></li>

                <li><a href="#services"><i class="fa fa-list"></i>Services</a></li>

                <li><a href="#portfolio"><i class="fa fa-briefcase"></i>portfolio</a></li>

                <li><a href="#contact"><i class="fa fa-comments"></i>contact</a></li>

              </ul>          
          </div>
         <!-- ==== Aside end ======-->
         <!-- ==== Main content start ======-->
         <div class="main-content">
           <!-- ==== Home section start ======-->
             <section class="home active section" id="home">
                <div class="container">
                    <div class="row">
                        <div class="home-info padd-15">
                            <h3 class="hello">Hello, my name is <span class="name">Mariam Ayman</span></h3>
                            <h3 class="my-profession">I am a <span class="typing">web developer</span></h3>
                            <p>I am a computer science senior student with knowledge and experience in web devloping through online courses and trainings, scholarships, and interns .My expertise is to create and client-side development beside server-side-development</p>
                            <a href="#" class="btn">Download Cv</a>
                        </div>
                        <div class="home-img padd-15">
                            <img src="images/moi.jpg" alt="">
                        </div>
                    </div>
                </div>
             </section>
           <!-- ==== Home section end ======-->
          <!-- ==== About section start ======-->
           <section class="about section" id="about">
            <div class="container">
              <div class="row">
                <div class="section-title padd-15">
                  <h2>About me</h2>
                </div>
              </div>
              <div class="row">
                <div class="about-content padd-15">
                  <div class="row">
                    <div class="about-text padd-15">
                      <h3>
                        I am Mariam Ayman and <s pan> Web developer</span>
                      </h3>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto ullam esse unde.
                         Esse distinctio cumque debi
                        tis  ab facilis deserunt saepe perferendis error. 
                        Dolores a possimus necessitatibus sunt odit omnis consectetur?</p>
                    </div>
                  </div>
                    <div class="row">
                      <div class="personal-info padd-15">
                        <div class="row">
                          <div class="info-item padd-15">
                            <p>Birthday:<span> 25 May 2002</span></p>
                          </div>
                          <div class="info-item padd-15">
                            <p>Age:<span> 20</span></p>
                            </div>
                            <div class="info-item padd-15">
                            <p>Email:<span> info@gmail.com</span></p>
                            </div>
                            <div class="info-item padd-15">
                            <p>Degree:<span> CS</span></p>
                            </div>
                            <div class="info-item padd-15">
                            <p>Phone:<span> 123-456-789</span></p>
                            </div>
                            <div class="info-item padd-15">
                            <p>City:<span> Cairo</span></p>
                            </div>

                       
                        </div>
                        <div class="row">
                          <div class="buttons padd-15">
                            <a href="#contact" data-section-index="1" class="btn hire-me">Hire me</a>
                          </div>
                        </div>
                      </div>
                      <div class="skilss padd-15">
                        <div class="row">
                          <div class="skill-item padd-15">
                            <h5>Css</h5>
                            <div class="progress">
                              <div class="progress-in" style="width: 90%"></div>
                              <div class="skill-percent">90%</div>
                            </div>
                          </div>
                          <div class="skill-item padd-15">
                            <h5>Html</h5>
                            <div class="progress">
                              <div class="progress-in" style="width: 95%"></div>
                              <div class="skill-percent">95%</div>
                            </div>
                          </div>
                          <div class="skill-item padd-15">
                            <h5>JavaScript</h5>
                            <div class="progress">
                              <div class="progress-in" style="width: 90%"></div>
                              <div class="skill-percent">90%</div>
                            </div>
                          </div>
                          <div class="skill-item padd-15">
                            <h5>Bootstrap</h5>
                            <div class="progress">
                              <div class="progress-in" style="width: 80%"></div>
                              <div class="skill-percent">80%</div>
                            </div>
                          </div>
                          <div class="skill-item padd-15">
                            <h5>Php and Mysql</h5>
                            <div class="progress">
                              <div class="progress-in" style="width: 50%"></div>
                              <div class="skill-percent">50%</div>
                            </div>
                          </div>
                          <div class="skill-item padd-15">
                            <h5>Type script</h5>
                            <div class="progress">
                              <div class="progress-in" style="width: 50%"></div>
                              <div class="skill-percent">50%</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="education padd-15">
                        <h3 class="title">Education</h3>
                        <div class="row">
                          <div class="timeline-box padd-15">
                            <div class="timeline shadow-dark">
                            <!--timeline item-->
                            <div class="timeline-item">
                              <div class="circle-dot"></div>
                                <h3 class="timeline-date">
                                  <i class="fa fa-calendar"></i>2019 -2023
                                </h3>
                                <h4 class="timeline-title">Master in computer science</h4>
                                <p class="timeline-text">
                                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                   Voluptatum nemo unde, inventore natus animi alias aliquid dolor maxime ipsa excepturi sint?
                                    Unde cupiditate totam eaque repellendus molestiae sunt dignissimos nisi.
                                </p> 
                              </div>
                            
                            <div class="timeline-item">
                              <div class="circle-dot"></div>
                                <h3 class="timeline-date">
                                  <i class="fa fa-calendar"></i>2019 -2023
                                </h3>
                                <h4 class="timeline-title">Master in computer science</h4>
                                <p class="timeline-text">
                                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                   Voluptatum nemo unde, inventore natus animi alias aliquid dolor maxime ipsa excepturi sint?
                                    Unde cupiditate totam eaque repellendus molestiae sunt dignissimos nisi.
                                </p>
                              </div>
                            
                            <div class="timeline-item">
                              <div class="circle-dot"></div>
                                <h3 class="timeline-date">
                                  <i class="fa fa-calendar"></i>2019 -2023
                                </h3>
                                <h4 class="timeline-title">Master in computer science</h4>
                                <p class="timeline-text">
                                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                   Voluptatum nemo unde, inventore natus animi alias aliquid dolor maxime ipsa excepturi sint?
                                    Unde cupiditate totam eaque repellendus molestiae sunt dignissimos nisi.
                                </p>
                              </div>
                           
                          </div>
                        </div>
                        </div>
                      </div>
                      <div class="experience padd-15">
                        <h3 class="title">experience</h3>
                        <div class="row">
                          <div class="timeline-box padd-15">
                            <div class="timeline shadow-dark">
                            <!--timeline item-->
                            <div class="timeline-item">
                              <div class="circle-dot"></div>
                                <h3 class="timeline-date">
                                  <i class="fa fa-calendar"></i>2019 -2023
                                </h3>
                                <h4 class="timeline-title">Master in computer science</h4>
                                <p class="timeline-text">
                                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                   Voluptatum nemo unde, inventore natus animi alias aliquid dolor maxime ipsa excepturi sint?
                                    Unde cupiditate totam eaque repellendus molestiae sunt dignissimos nisi.
                                </p> 
                              </div>
                            
                            <div class="timeline-item">
                              <div class="circle-dot"></div>
                                <h3 class="timeline-date">
                                  <i class="fa fa-calendar"></i>2019 -2023
                                </h3>
                                <h4 class="timeline-title">Master in computer science</h4>
                                <p class="timeline-text">
                                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                   Voluptatum nemo unde, inventore natus animi alias aliquid dolor maxime ipsa excepturi sint?
                                    Unde cupiditate totam eaque repellendus molestiae sunt dignissimos nisi.
                                </p>
                              </div>
                            
                            <div class="timeline-item">
                              <div class="circle-dot"></div>
                                <h3 class="timeline-date">
                                  <i class="fa fa-calendar"></i>2019 -2023
                                </h3>
                                <h4 class="timeline-title ">Master in computer science</h4>
                                <p class="timeline-text">
                                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                   Voluptatum nemo unde, inventore natus animi alias aliquid dolor maxime ipsa excepturi sint?
                                    Unde cupiditate totam eaque repellendus molestiae sunt dignissimos nisi.
                                </p>
                              </div>
                           
                          </div>
                        </div>
                        </div>
                      </div>
                    </div> 

                </div>
              </div>
            </div>
           </section>   
          <!--About section end-->
          <!--=====Service section start-->
          <section class="service section" id="services">
            <div class="container">
              <div class="row">
                <div class="section-title padd-15">
                  <h2>Services</h2>
                </div>
              </div>
              <div class="row">
                <!--====Service item start====-->
                  <div class="service-item padd-15">
                    <div class="service-item-inner">
                      <div class="icon">
                        <i class="fa fa-mobile-alt"></i>
                      </div>
                      <h4>web design</h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                      </p>
                    </div>
                  </div>
                <!--====Service item end====-->
    <!--====Service item start====-->
    <div class="service-item padd-15">
      <div class="service-item-inner">
        <div class="icon">
          <i class="fa fa-laptop-code"></i>
        </div>
        <h4>web design</h4>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        </p>
      </div>
    </div>
  <!--====Service item end====-->
   <!--====Service item start====-->
   <div class="service-item padd-15">
    <div class="service-item-inner">
      <div class="icon">
        <i class="fa fa-palette"></i>
      </div>
      <h4>web design</h4>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.    
      </p>
    </div>
  </div>
<!--====Service item end====-->  
 <!--====Service item start====-->
 <div class="service-item padd-15">
  <div class="service-item-inner">
    <div class="icon">
      <i class="fa fa-code"></i>
    </div>
    <h4>web design</h4>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit.     
    </p>
  </div>
</div>
<!--====Service item end====-->
 <!--====Service item start====-->
 <div class="service-item padd-15">
  <div class="service-item-inner">
    <div class="icon">
      <i class="fa fa-search"></i>
    </div>
    <h4>web design</h4>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
    </p>
  </div>
</div>
 <!--====Service item start====-->
                  <div class="service-item padd-15">
                    <div class="service-item-inner">
                      <div class="icon">
                        <i class="fa fa-bullhorn"></i>
                      </div>
                      <h4>web design</h4>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.          
                      </p>
                    </div>
                  </div>
                <!--====Service item end====-->
              </div>
            </div>

          </section>
          <!--Service section end-->
          <!--====Portfolio section start====-->
            <section class="portfolio section" id="portfolio">
              <div class="container">
                <div class="row">
                  <div class="section-title padd-15">
                    <h2>Portfolio</h2>
                  </div>
                </div>
                <div class="row">
                  <div class="portfolio-heading padd-15">
                    <h2>
                    My last projects:
                  </h2>
                </div>
                </div>  
                <div class="row">
                  <!--portfolio item starts-->
                  <div class="portfolio-item padd-15">
                    <div class="portfolio-item-inner shadow-dark">
                      <div class="portfolio-img">
                        <img src="bookstore.jpg" alt="">
                      </div>
                    </div>
                  </div>
                  <!--portfolio item end-->
                   <!--portfolio item starts-->
                   <div class="portfolio-item padd-15">
                    <div class="portfolio-item-inner shadow-dark">
                      <div class="portfolio-img">
                        <img src="socialmedia.jpg" alt="">
                      </div>
                    </div>
                  </div>
                  <!--portfolio item end-->
                   <!--portfolio item starts-->
                   <div class="portfolio-item padd-15">
                    <div class="portfolio-item-inner shadow-dark">
                      <div class="portfolio-img">
                        <img src="weatherApp.png" alt="">
                      </div>
                    </div>
                  </div>
                  <!--portfolio item end-->
                  <!--portfolio item starts-->
                  <div class="portfolio-item padd-15">
                    <div class="portfolio-item-inner shadow-dark">
                      <div class="portfolio-img">
                        <img src="javascrript.png" alt="">
                      </div>
                    </div>
                  </div>
                  <!--portfolio item end-->
                  <!--portfolio item starts-->
                  <div class="portfolio-item padd-15">
                    <div class="portfolio-item-inner shadow-dark">
                      <div class="portfolio-img">
                        <img src="java.png" alt="">
                      </div>
                    </div>
                  </div>
                  <!--portfolio item end-->
                   <!--portfolio item starts-->
                   <div class="portfolio-item padd-15">
                    <div class="portfolio-item-inner shadow-dark">
                      <div class="portfolio-img">
                        <img src="web.png" alt="">
                      </div>
                    </div>
                  </div>
                  <!--portfolio item end-->
                   <!--portfolio item starts-->
                   <div class="portfolio-item padd-15">
                    <div class="portfolio-item-inner shadow-dark">
                      <div class="portfolio-img">
                        <img src="webdes.png" alt="">
                      </div>
                    </div>
                  </div>
                  <!--portfolio item end-->
                  <!--portfolio item starts-->
                  <div class="portfolio-item padd-15">
                    <div class="portfolio-item-inner shadow-dark">
                      <div class="portfolio-img">
                        <img src="images.png" alt="">
                      </div>
                    </div>
                  </div>
                  <!--portfolio item end-->


                </div>
              </div>
            </section>        

          <!--====Portfolio section end====-->
          <!--====contact section start====-->
          <section class="contact section" id="contact">
            <div class="container">
              <div class="row">
                <div class="section-title padd-15">
                  <h2>contact Me</h2>
                </div>
              </div>
              <h3 class="contact-title">Have you Any Questions ?</h3>
              <h4 class="contact-sub-title"> I'M AT YOUR SERVICES</h4>
              <div class="row">
                <!--===== contact info item start==========-->
                <div class="contact-info-item padd-15">
                  <div class="icon"> <i class="fa fa-phone"></i></div>
                  <h4>Call us on</h4>
                  <p>+12 34 78 9072623</p>
                </div>
                 <!--===== contact info item end==========-->
                  <!--===== contact info item start==========-->
                <div class="contact-info-item padd-15">
                  <div class="icon"> <i class="fa fa-map-marker-alt"></i></div>
                  <h4>Office</h4>
                  <p>cairo</p>
                </div>
                 <!--===== contact info item end==========-->
                 <!--===== contact info item start==========-->
                    <div class="contact-info-item padd-15">
                    <div class="icon"> <i class="fa fa-envelope"></i></div>
                   <h4>email</h4>
                     <p>info@gmail.com</p>
                   </div>
             <!--===== contact info item end==========-->
             <!--===== contact info item start==========-->
             <div class="contact-info-item padd-15">
              <div class="icon"> <i class="fa fa-globe-europe"></i></div>
             <h4>website</h4>
               <p>www.domain.com</p>
             </div>
       <!--===== contact info item end==========-->
              </div>
              <h3 class="contact-title padd-15">SEND ME AN EMAIL</h3>
              <h4 class="contact-sub-title padd-15"> I'M VERY responsive to messages</h4>
              <!--=====Contact Form -->
              <div class="row">
                <div class="contact-form padd-15">
                  <form action="" method="post">
                  <div class="row">
                    <div class="form-item col-6 padd-15">
                      <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name">
                      </div>
                    </div>
                    <div class="form-item col-6 padd-15">
                      <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                      </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="form-item col-6 padd-15">
                      <div class="form-group">
                        <input type="number" name="number" class="form-control" placeholder="Number">
                      </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="form-item col-6 padd-15">
                      <div class="form-group">
                      <textarea  name="message" cols="30"row="10" class="form-control" placeholder="Enter your message"></textarea>
                      </div>
                    </div>
                  </div>
                   <div class="row">
                    <div class="form-item col-6 padd-15">
                      <div class="form-group">
                        <input type="submit" value= "send message" name="send" class="btn">
                      </div>
                    </div>
                  </div>
                  </form>
                </div>
              </div> 
            </div>
          </section>
          <!--====contact section end====-->

         </div>
         <!-- ==== Main content end ======-->


       </div>
    <!-- ==== Main container end ======-->
<!--=================Style switcher start===========-->
<div class="style-switcher">
  <div class="style-switcher-toggler s-icon">
    <i class="fas fa-cog fa-spin"></i>
  </div>
      <div class="day-night s-icon">
        <i class="fas "> </i>
      </div>
      <h4>Theme colors</h4>
      <div class="colors">
        <span class="color-1" onclick="setActiveStyle('color')"></span>
        <span class="color-2" onclick="setActiveStyle('color-2')"></span>
        <span class="color-3" onclick="setActiveStyle('color-3')"></span>
        <span class="color-4" onclick="setActiveStyle('color-4')"></span>
        <span class="color-5" onclick="setActiveStyle('color-5')"></span>

      </div>
    
  </div>
  <!-------------------Style switcher End--------------->
   <script src="script.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
   <script>
    var typing = new Typed (".typing" ,{

strings : ["full-stack developer", "Web Developer",  "Freelancer"],
typeSpeed: 100,
backSpeed:60,
loop:true
});
</script>
   <script src="style-switcher.js"></script>
 
    
</body>
</html>