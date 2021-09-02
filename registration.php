<?php include('../header.php');

if(isset($_POST['submit'])){
 $firstname=$_POST['firstname'];
 $lastanme=$_POST['lastname'];
 $email=$_POST['email'];
 $password=$_POST['password'];

}




?>


<div class=" bg-light vh-100 d-flex">
   <div class="col-lg-3 m-auto">
     <div class="card">
         <div class="font-weight-bold text-center pt-4 mb-n4 btn-block">Registartion</div>
       <div class="card-body">
          <form action="actions/login.php" method="post">
            <div class="form-group md-form">
              <input type="text" class="form-control" name="firstname" required>
               <label>Firstname</label>
             </div> 
             <div class="form-group md-form">
              <input type="text" class="form-control" name="lastname" required>
               <label>Lastname</label>
             </div> 
             <div class="form-group md-form">
              <input type="email" class="form-control" name="email" required>
               <label>Email</label>
             </div> 
             <div class="form-group md-form">
              <input type="password" class="form-control" name="password" required>
               <label>password</label>
             </div>
             <div class="form-group">
                 <button type="submit" class="btn btn-primary btn-block" name="submit">Registation</button>
             </div>
           </form>
        </div>
    </div> 
   </div>
</div>


<?php include('../footer.php')?>