


<?php require_once'controllers/authController.php'; ?>



<html lang="en">
        <head>
                <meta charset = "UTF-8">
                <title>changepassword</title>
                <link rel = "stylesheet"
                  href = "style.css" />
        </head>
    <body>
        <div class="container">
           <div class="row">
            <div class="col-md-4 offset-md-4 form-div login">
            <form action="forgetPassword.php" method="post">
              <h3 class="text-center"> recover password</h3>

              <?php if (count($errors) >   0): ?> 
         <div class="alert alert-danger">
               <?php foreach ($errors as $error): ?> 
                    <li>  <?php  echo $error; ?>  </li>
              <?php endforeach; ?>
              </div>
           <?php endif; ?>

<div class="form-group">
       <label>Email</label>
       <input type="text" name="email" class="form-control form-control-lg" required>
      </div>

                <div class="form-group">
                <button type="submit" name="forget-password" class="btn btn-primary btn-block">recover password


                </button>
                  </div>
              </form>
            </div>
          </div>
        </div>


    </body>
</html>