<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>authentification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" integrity="sha512-oAvZuuYVzkcTc2dH5z1ZJup5OmSQ000qlfRvuoTTiyTBjwX1faoyearj8KdMq0LgsBTHMrRuMek7s+CxF8yE+w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
<body class="bg-dark">
  
  
<nav class="bg-primary d-flex justify-content-between p-3 ">
  <div class="d-flex mx-4 mt-1 ">
    
    <h5>Welcom! in electronacer</h5>
  </div>
  <div class="mx-4">
    
    <img width="20 px " height="20px" class="mx-5"  src="logo.png" alt="">

  </div>

 </nav>


 <div >
  <div style="margin-left: 23%;" class="bg-primary  p-2 w-50 d-flex justify-content-center text-white fs-3 ">Log in to your acount</div>
  <form  method="POST" style="margin-left:23% ;" class="w-50  bg-light p-4">
    <div class="form-group mb-3 w-75  mx-5">
      <label for="identifient">identifient </label>
      <input type="number" name="userid" class="form-control" id="name"   placeholder="enter username">
      
    </div>
    <div class="form-group mb-3 w-75 mx-5">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control" id="password" placeholder="Password">
    </div>
   
    <button type="submit" class="btn btn-primary mx-5">Log In</button>
  </form>

 </div >


 <?php
   include ('conixion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if userId and password are set and not null 
    if (isset($_POST['userid'], $_POST['password'])) {
        $userId = $_POST['userid']; //stocker l'input en variable pour utilise
        $password = $_POST['password'];//stocker l'input en variable pour utilise

        // Prepare a SQL statement using a prepared statement to prevent SQL injection
        $stmt = $connection->prepare("SELECT * FROM User WHERE UserId = ? AND Passwords = ?");
        $stmt->bind_param("is", $userId, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if any rows were returned
        if ($result->num_rows > 0) {
            header("Location: home.php");
            exit();
        } else {
            echo '<script>alert("Login failed. Please check your userId and password.");</script>';
        }

        // Close the statement
        $stmt->close();
    }
}

// Close the MySQL connection
$connection->close();
?>





<footer class="no-print bg-dark text-light">
        <div class="card mt-5 mb-4"></div>  
        <div class=" container tol MMM">
      <div class="row  FFF ">
      <div class=" col-lg-3  col-sm-4 col-6"><img class="w-50 " src="logo.png" alt=""></h5>
        <P class="w-50">Savor the artistry where every dish is a culinary masterpiece</P>
      
      </div>
      <div class="col-lg-3 col-sm-4 col-6">
          <h6 >Useful links</h6>
          <p>About us</p>
          <p>Events</p>
          <p>Blogs</p>
          <p>FAQ</p>
      </div>
      <div class="  col-lg-3 col-sm-4 col-6">
          <h6 >Main Menu</h6>
          <p>Home</p>
          <p>Menu</p>
          <p>Blogs</p>
          <p>Create</p>

      </div>
      <div class=" col-lg-3  col-sm-4 col-6">
          <h6 >Contact Us</h6>
          <p>wokstar@email.coms</p>
          <p>+64 958 248 966</p>
          <p>Social media</p>
       
      </div>
  </div>
  <div   class="row " >
      <div class="col-lg-5   ">
  
</div>
  <div class="col-lg-5 mt-4  col-12 "><p >Copyright   2023 Dscode | All rights reserved</p></div>
</div>
  </div> 
</footer>

</body>
</html>