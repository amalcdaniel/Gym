<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body style="background-color: black;">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: yellow; font: 1em sans-serif; font-variant: small-caps; ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size: 50px;">Catamount Gym</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Admission
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="admission2.php">With Cardio</a></li>
                  <li><a class="dropdown-item" href="admission.php">Without Cardio</a></li>
                  
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gallery.php">Gallery</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
          <div class="row">
              <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img height="500px" src="https://thumbs.dreamstime.com/b/muscular-athletic-bodybuilder-fitness-model-posing-exercis-weights-exercises-gym-64856941.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 style="font-size: 70px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Catamount Gym</h5>
                          <p>No pain, no gain.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img height="500px" src="https://thumbs.dreamstime.com/b/muscular-athletic-bodybuilder-fitness-model-training-arms-gym-man-great-physique-prepares-biceps-workout-gym-123273602.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 style="font-size: 70px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Catamount Gym</h5>
                          <p>Believe in yourself and you will be unstoppable</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img  height="500px" src="https://d2gg9evh47fn9z.cloudfront.net/800px_COLOURBOX33783587.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 style="font-size: 70px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Catamount Gym</h5>
                          <p>Eat big. Lift big. Get big.</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>


              </div>
          </div>
      </div>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <br>
                <br>
                <h1 style="color: yellow; font-family: Verdana, Geneva, Tahoma, sans-serif; font-weight: bold;"> Main Workouts</h1>
                <br><br><br>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item" style="background-color: gray; color: white; opacity: 0.7;">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"  style="color: black;" aria-expanded="false" aria-controls="flush-collapseOne">
                          Biceps
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body" style="color: black;">
                            
                            Here are the best biceps exercises for men:<br>
                            1) Alternating Incline Dumbbell Curl<br>
                            2) Seated Alternating Hammer Curl<br>
                            3) Standing Reverse Barbell Curl<br>
                            4) Seated Alternating Dumbbell Curl<br>
                            5) Standing Cable Curl<br>
                            6) Standing Barbell Curl<br>
                            7) Zottman Curl<br>
                            8) Decline Dumbbell Curl    
                            
                            
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item" style="background-color: gray; color:black; opacity: 0.7;">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" style="color: black" aria-expanded="false" aria-controls="flush-collapseTwo">
                          Triceps
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body" style="color: black;">
                            
                                
                            Here are the best triceps exercises for men:<br>
                            1) Cable Rope Tricep Pushdown<br>
                            2) Lying Triceps Extension<br>
                            3) Lying Triceps Extension<br>
                            4) Bench Dip<br>
                            5) One-Arm Overhead Extension<br>
                            6) Diamond Push-Ups<br>
                            7) Standard Push-Up<br>
                            8) Close-Grip Bench Press
                        
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item" style="background-color: gray; color: white; opacity: 0.7;">
                      <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" style="color: black;" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          Legs
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body" style="color: black;">
                            Here are the best leg exercises for men:<br>
                            1) Leg press<br>
                            2) Leg curl<br>
                            3) Leg extension<br>
                            4) Wall sit<br>
                            5) Dumbbell step-up<br>
                            6) Glute bridge<br>
                            7) Goblet squat<br>
                            8) Calf Raise  
                        </div>
                      </div>
                    </div>
                  </div>
                
                  <div class="accordion-item" style="background-color: gray; color:black; opacity: 0.7;">
                    <h2 class="accordion-header" id="flush-headingTwo">
                      <button class="accordion-button collapsed" type="button"  data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" style="color:black;">
                        Chest
                      </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body" style="color: black;">
                          
                              
                          Here are the best chest exercises for men:<br>
                          1) Barbell bench press<br>
                          2) Pec deck<br>
                          3) Cable crossover<br>
                          4) Chest press<br>
                          5) Inclined dumbbell flies<br>
                          6) Push-Ups<br>
                          7) Dips<br>
                        
                      
                      </div>
                    </div>
                  </div>

            </div>
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

                <br>
                <br>
                <h1 style="color: yellow; font-family: Verdana, Geneva, Tahoma, sans-serif; font-weight: bold;"> Programs</h1>
                <br><br><br>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item" style="background-color: gray;">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"  aria-expanded="true" aria-controls="collapseOne">
                          Personal Training
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Catamount Gym offers certificate courses in Fitness Management, Personal Training and Spinning Instructing. <br>
                            It covers a range of subjects to comprehensively address and ensure the best international brand practices in India.<br>
                             The 3 month courses are monitored by qualified personnel of Catamount’s Gym, and also hosts guest lectures by the biggest names <br>
                             in the international fitness industry with guaranteed internships and a firsthand opportunity to experience fitness training <br>
                             from the world leaders in it. The Catamount Gym offers the most exciting and up-to-date education pathway to gain industry leading qualifications
                             <br> as well as ongoing training in all aspects of the fitness industry. 
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item" style="background-color: gray;">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Quick Result Program
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          
                            Due To Many Reasons Like Sedentary Lifestyle, Reduced Energy Expenditure, Unhealthy Eating Habits, High Stress Levels Etc. BMI And Body Fat Levels Are Increasing Day By Day Which Is Causing Obesity. And Obesity Further Leads To Medical Conditions Like High Cholesterol, High Blood Pressure, Heart Diseases, Stroke, Diabetes, PCOD, Hypothyroidism, Gall Stones, Depression, Knee Pain Etc.

                            Hence Quick Result Program at Golds Gym Helps In Reducing Excess Fat Mass. It Is A Quick Way To Achieve Your Fitness Goals. This Program Not Only Make You Lose But Also Gain And Tone Up Your Body With The Help Of Fitness Orientation, Functional Training And Nutritional Counseling. This Program Is A Combination Of Cardio Training, High Intensity Functional Training, Nutritionist’s Support And Blood Tests. Here We Deliver On Time Results By Monitoring Them On Regular Basis.
                        <br>
                        It involves mainly weight bearing activities targeted at core muscles of the abdomen and lower back. Functional training attempts to adapt or develop exercises which allow individuals to perform the activities of daily life more easily and without injuries
                        <br>
                        Prolongs life <br>
                    Improves mood<br>
                    Achieves metabolic balance<br>
                    Promotes sustainable weight loss<br>
                    Strengthens heart and blood vessels<br>
                    Increases bone density<br>
                    Decreases risk for chronic conditions<br>
                        
                        </div>
                      </div>
                    </div>
                    
                  </div>
                      


            </div>
        </div>
    </div>
    <footer class="bg-dark text-center text-white">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Form -->
        <section class="">
          <form action="">
            <!--Grid row-->
            <div class="row d-flex justify-content-center">
              <!--Grid column-->
              <div class="col-auto">
                <p class="pt-2">
                  <strong>Sign up for our newsletter</strong>
                </p>
              </div>
              <!--Grid column-->
    
              <!--Grid column-->
              <div class="col-md-5 col-12">
                <!-- Email input -->
                <div class="form-outline form-white mb-4">
                  <input type="email" id="form5Example2" class="form-control" />
                  <label class="form-label" for="form5Example2">Email address</label>
                </div>
              </div>
              <!--Grid column-->
    
              <!--Grid column-->
              <div class="col-auto">
                <!-- Submit button -->
                <button type="submit" class="btn btn-outline-light mb-4">
                  Subscribe
                </button>
              </div>
              <!--Grid column-->
            </div>
            <!--Grid row-->
          </form>
        </section>
        <!-- Section: Form -->
      </div>
      <!-- Grid container -->
    
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: black">
        © 2020 Copyright:
        <a class="text-white" href="#">Catamount.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>
</html>