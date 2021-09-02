<?php include('header.php')?>

 <h1  class="text-center">School Management System</h2>
<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
  <a class="navbar-brand" href="#">SMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Dropdown
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      
      
      <li class="nav-item dropdown">
        <?php if(isset($_SESSION['login'])){?>
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user mr-2"></i>Account
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="logout.php">logout</a>
        </div>
        <?php } else {?>
        <a href="login.php" class="nav-link"><i class="fas fa-user"></i>login</a>
        <?php } ?>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->

<div class="d-flex shadow" style="height:500px;background:linear-gradient(-40deg,navy 50%,transparent 50%)">
<div class="container-fluid my-auto">
  <div class="row">
    <div class="col-lg-6">
      <h1 class="display-3 font-weight-bold">School Management System</h1>
      <h1>You can add social media icons to the navbar to improve communication with visitors</h1>
      <button class="btn btn-lg btn-primary">click</button>
    </div>
    <div class="col-lg-6">
      <div class="w-50 mx-auto card">
        <div class="card-body">
         <form action="" method="">
            <h1>Addmission Form</h1>
          <div class="md-form">
            <input type="text" class="form-control" name="name">
            <label>Name</label>
          </div>
          <div class="md-form">
            <input type="text" class="form-control" name="email">
            <label>Email</label>
          </div>
          <div class="md-form">
            <input type="text" class="form-control" name="mobile">
            <label>Mobile</label>
          </div>
          <div class="md-form">
            <input type="text" class="form-control" name="class1">
            <label>Class</label>
          </div>
         <button class="btn btn-block btn-primary" name="submit">submit</button>
        </form>
        </div>
      </div>
    </div>


  </div>
</div>
</div>
<section class="py-5">
    <div class="text-center mb-5"><h1>Our Courses</h1></div>


    <div class="container">
       <div class="row">
         <?php for($i=0;$i<12;$i++){?>
          <div class="col-lg-3 mb-4">
            <div class="card">
             <div><img src="assets\images\school.jpg" class="img-fluid"></div>
        
                <div class="card-body">
                  <b>Web Design & Development</b>
                  <p class="card-text">
                  <p>duration:1hour</p>
                  <p>price:100</p>
                  <button class="btn btn-block btn-primary">Enroll now</button>
                  </p>
                </div>
            </div>
          </div>
          <?php } ?>
          
       </div>
    </div>
    
</section>
<div class="container" style="background:#f1f1">
  <div class="row">
    <div class="col-lg-5 pr-5 py-5">
      <b>About School Management</b>
      <h6>School Management System (SMS) streamlines and integrate the operation processes and information flow in the School to synchronize the resources namely Students, employee, material, money and books through information. This ERP facilitates School-wide Integrated Information System Covering all functional areas like Student Enquiry, Student Admission, Search Student, Re-Admission of the Student, Fee Collection, Generate of Student Id card, Student Attendance & Leave, Employee Attendance & Leave, Maintain the Inventory of Book, Suppliers and Publishers, Question Paper Creation, Employee Salary Creation, Daily Expenses, EOD, Maintain the Library Record for Student & Employee like Book Issue, Book Return, Search Book and Its generate the Defaulter List, Time Table Creation for Teachers.</h6>
       <div class="btn btn-primary" >Know More</div>
    </div>
    <div clas="col-lg-6  py-5">
      <img src="assets\images\school.jpg">
    </div> 
  </div>   
</div>


<section>
 <div class="conatiner">

   <div class="text-center mb-4">
       <b><h1>Our Teachers</h1></b>
   </div>
</div> 
</section>
<section>
  <div class="container mt-7">
    <div class="row">
        
    <div class="col-lg-3 mt-5 my-5">
      <div class="card pt-5 mr-2">
      <div class="col-7 position-absolute mt-3" style="top:-40%">
          <img src="assets/images/image4.png" class=" mw-100 border rounded-circle" >
          </div> 

           <div class="card-body">
           <b>Teacher's Name</b>
                   <p class="card-text">
                       <p>Name:</p>
                       <p>rating:<span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-half"></span</p>
                    </p>
           </div>

      </div>
    </div>
    
    <div class="col-lg-3 mt-5">
      <div class="card pt-5 mr-2">
      <div class="col-7 position-absolute mt-3" style="top:-40%">
          <img src="assets/images/image4.png" class=" mw-100 border rounded-circle" >
          </div> 

           <div class="card-body">
           <b>Teacher's Name</b>
                   <p class="card-text">
                       <p>Name:</p>
                       <p>rating:<span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-half"></span</p>
                    </p>
           </div>

      </div>
    </div>
    

    <div class="col-lg-3 mt-5">
      <div class="card pt-5 mr-2">
      <div class="col-7 position-absolute mt-3" style="top:-40%">
          <img src="assets/images/image4.png" class=" mw-100 border rounded-circle" >
          </div> 

           <div class="card-body">
           <b>Teacher's Name</b>
                   <p class="card-text">
                       <p>Name:</p>
                       <p>rating:<span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-half"></span</p>
                    </p>
           </div>

      </div>
    </div>
    
   
    <div class="col-lg-3 mt-5">
      <div class="card pt-5 mr-2">
      <div class="col-7 position-absolute mt-3" style="top:-40%">
          <img src="assets/images/image4.png" class=" mw-100 border rounded-circle" >
          </div> 

           <div class="card-body">
           <b>Teacher's Name</b>
                   <p class="card-text">
                       <p>Name:</p>
                       <p>rating:<span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-half"></span</p>
                    </p>
           </div>

      </div>
    </div>
    
 


    </div>



    <div class="row">
        
        <div class="col-lg-3 mt-5 my-5">
          <div class="card pt-5 mr-2">
          <div class="col-7 position-absolute mt-3" style="top:-40%">
              <img src="assets/images/image4.png" class=" mw-100 border rounded-circle" >
              </div> 
    
               <div class="card-body">
               <b>Teacher's Name</b>
                       <p class="card-text">
                           <p>Name:</p>
                           <p>rating:<span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-half"></span</p>
                        </p>
               </div>
    
          </div>
        </div>
        
        <div class="col-lg-3 mt-5">
          <div class="card pt-5 mr-2">
          <div class="col-7 position-absolute mt-3" style="top:-40%">
              <img src="assets/images/image4.png" class=" mw-100 border rounded-circle" >
              </div> 
    
               <div class="card-body">
               <b>Teacher's Name</b>
                       <p class="card-text">
                           <p>Name:</p>
                           <p>rating:<span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-half"></span</p>
                        </p>
               </div>
    
          </div>
        </div>
        
    
        <div class="col-lg-3 mt-5">
          <div class="card pt-5 mr-2">
          <div class="col-7 position-absolute mt-3" style="top:-40%">
              <img src="assets/images/image4.png" class=" mw-100 border rounded-circle" >
              </div> 
    
               <div class="card-body">
               <b>Teacher's Name</b>
                       <p class="card-text">
                           <p>Name:</p>
                           <p>rating:<span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-half"></span</p>
                        </p>
               </div>
    
          </div>
        </div>
        
       
        <div class="col-lg-3 mt-5 ">
          <div class="card pt-5 mr-2">
          <div class="col-7 position-absolute mt-3" style="top:-40%">
              <img src="assets/images/image4.png" class=" mw-100 border rounded-circle" >
              </div> 
    
               <div class="card-body">
               <b>Teacher's Name</b>
                       <p class="card-text">
                           <p>Name:</p>
                           <p>rating:<span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-half"></span</p>
                        </p>
               </div>
    
          </div>
        </div>
        
     
    
    
        </div>




  </div>

</section>

<div class="container" style="background:#39237a">
  <div class="row">
    <div class="col-lg-6">
      <h2 class="text-center text-white">Acheivements</h2>
      <img src="assets\images\school.jpg" class="mw-100 image-fluid">
    </div>  
    <div class="col-lg-6 py-5">
      
        <div class="w-50 card  ml-5 ">
          <div class="text-warning border">
          <div class="card-body  text-center " style="background:#39237a">
            <span> <i class="fa fa-graduation-cap" ></i></span><br>
            <b>300</b>
            <hr class="border-warning">
            <b>Graduates</b>
          </div>
         </div> 
        </div>
       <br>
        
        <div class="w-50 card  ml-5 ">
          <div class="text-warning border">
          <div class="card-body  text-center " style="background:#39237a">
            <span> <i class="fa fa-graduation-cap" ></i></span><br>
            <b>350</b>
            <hr class="border-warning">
            <b>Graduates</b>
          </div>
         </div> 
        </div>

       

       
         

    </div>
  </div>
</div>

<div class="py-5">
  <div class="text-center">
   <p class="font-weight-bold">What  People Say</p>   
  </div>
</div>  
<div class="container py-5">
  <div class="row">
    <div class="col-lg-6">
      <div class="text-center">
       <div class=" border rounded py-3">
        <P> <i class="fa fa-quote-left"></i> &nbsp &nbsp You can add social media icons to the navbar to improve communication with visitor,You can add social media icons to the navbar to improve communication with visito &nbsp &nbsp <i class="fa fa-quote-right"></i></p>
       </div>
        <div class="mt-n4">
           <img src="assets\images\image4.png" class="border rounded-circle mw-100 ">
           <p class="font-weight-bold">Name of Candidate:</p>
           <i>Degistation</i>
        </div>
      </div> 
    </div>
    <div class="col-lg-6">
      <div class="text-center">
        <div class="border rounded-corner py-3">
         <p><i class="fa fa-quote-left"></i>&nbsp&nbspYou can add social media icons to the navbar to improve communication with visitor,You can add social media icons to the navbar to improve communication with visito&nbsp &nbsp<i class="fa fa-quote-right"></i></p>
        </div> 
        <div class="mt-n4">
          <img src="assets\images\image4.png" class="border rounded-circle">
          <p class="font-weight-bold">Name of Candidate</p>
          <i>Destitation</i>
        </div> 
        </div>
         </div>
      </div> 
      </div>  
</div>    


<div  style="background:#39237a">
  <div class="row py-5">
    <div class="col-lg-4">
      <div class="text-white pl-5"><p>Usual links</p>
        <a href=""> <i class="fa fa-angle-right"></i>List icons</a><br>
        <a href=""> <i class="fa fa-angle-right"></i>can be used</a><br>
        <a href=""> <i class="fa fa-angle-right"></i>as bullets</a><br>
        <a href=""> <i class="fa fa-angle-right"></i>in be used</a><br>
        <a href=""> <i class="fa fa-angle-right"></i>link</a><br>
      </div>
    </div> 
    <div class="col-lg-4 pr-5"> 
      <div class="text-white"><p>social presence</p> 
         <i class="fab fa-facebook-square fa-2x"></i>
         <i class="fab fa-instagram fa-2x"></i>
         <i class="fab fa-twitter-square fa-2x"></i>
         <i class="fab fa-google fa-2x"></i>
         <i class="fab fa-whatsapp-square fa-2x"></i>
         
         
      </div>
    </div>  
    <div class="col-lg-3"> 
      <div class="text-white"><p>subscribe</p> 

         <form method="" action="">
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email">
            
          </div>
            <button class="btn btn-warning btn-block">subscribe</button>
          </div> 
         </form>
         
      </div>
    </div>  
  </div>
    
      
  




    




<?php include('footer.php')?>