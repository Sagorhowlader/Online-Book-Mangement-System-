<?php
    $title = "Author section";
    require_once "./template/header.php";
?>

    <form class="form-horizontal" method="post" action="admin_verify.php">
        <div class="form-group">
           <center>  <h2>Login Panel</h2></center>
            <label for="name" class="control-label col-md-4">Username</label>
            <div class="col-md-4">
                <input type="text" name="name" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="pass" class="control-label col-md-4">Password</label>
            <div class="col-md-4">
                <input type="password" name="pass" class="form-control">
            </div>
        </div>
        <center><h4> <input type="radio" name="login" value="admin">  Admin           
   <input type="radio" name="login" value="user">   User</h4>
       </center> <center><input type="submit" name="submit" class="btn btn-primary"></center>
    </form>

<?php
    require_once "./template/footer.php";
?>