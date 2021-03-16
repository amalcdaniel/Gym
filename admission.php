<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body  >
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: yellow; font: 1em sans-serif; font-variant: small-caps;">
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
    
    <div class="container"  >
        <div class="row">
          <centre><h2 style="text-align: center;"> <b>REGISTRATION - WITHOUT CARDIO</b></h2></centre>
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
               <form>
                 <BR>
               
                   <br>
                   <br>
                   <table class="table " style="height: 350px; width: 500px; margin-left: auto; margin-right: auto;">
              
                    <tr>
                        <td>
                            <input type="text" class="form-control" placeholder="First Name" required>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text"  placeholder="Address 1" class="form-control" required></td>
                    </tr>
                    <tr><td><input type="number" class="form-control" placeholder="Age" required></td>
                    </tr>
                    <tr>
                        <td>
                          <label>Gender:</label>
                            <input type="radio" name="gender" id="male" value="male"  class="form-check-input">
                            <label>Male</label>
                            <input type="radio" name="gender" id="female" value="female" class="form-check-input">
                            <label>Female</label>
                            
                        </td>
                    </tr>
                    <tr>
                       <td> Admission Fees:</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="number"  placeholder="7500" class="form-control" readonly>
                        </td>
                    </tr>
                    </table>
</form>
</div>

                    <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                      <form>
                        
                    
                          <br>
                          <br>
                          <br>
                          <table class="table " style="height: 300px; width: 600px; margin-left: auto; margin-right: auto;">
                     
                           <tr>
                              
                               <td>
                                   <input type="text" class="form-control" placeholder="Last Name" required>
                               </td>
                           </tr>
                           <tr>
                               <td><input type="text" placeholder="Address 2" class="form-control"></td>
                           </tr>
                           <tr>
                              <td> <input type="tel" class="form-control" placeholder="Mobile Number" required>
                           </td>
                           </tr>
                           <tr>
                               
                               <td>
                                   <input type="number" class="form-control" placeholder="Weight" required>
                               </td>
                              </tr>
                              <tr>
                               
                                <td>
                                    <input type="number" class="form-control" placeholder="Height" required>
                                </td>
                               </tr>
              </table>
            
            </form>
            </div>

          <!-- Button trigger modal -->
<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Register
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Plese click Register button to confirm Registration
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Register</button>
      </div>
    </div>
  </div>
</div>

        </div>
    </div>
<br><br><br>
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