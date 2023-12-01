<!-- NAME: VALMIKI BHATT - 200524559
  PAIRED WITH: NIRMIT TANDEL - 200548670 -->

<?php require ('./inc/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name = "robots" content = "noindex, nofollow">
    <meta name = "description" content = "index-page">
<link rel="stylesheet" href="./css/style.css">
  <main>
    <section class="masthead">
      <div>
        <h1>Welcome To Stolebucks!</h1>
        <p>This is ripoff of Starbucks!!</p>
      </div>
    </section>
    <section class="form-row row">
      <div class="col-sm-12 col-md-6 col-lg-6">
        <h3>Don't have an account, then sign up below!</h3>
        <form method="post" action="save-admin.php">
        	<p><input class="form-control" name="first_name" type="text" placeholder="First Name" required/></p>
        	<p><input class="form-control" name="last_name" type="text" placeholder="Last Name" required /></p>
        	<p><input class="form-control" name="username" type="text" placeholder="Username" required /></p>
        	<p><input class="form-control" name="password" type="password" placeholder="Password" required /></p>
        	<p><input class="form-control" name="confirm" type="password" placeholder="Confirm Password" required /></p>

          <input class="btn btn-light" type="submit" name="submit" value="Register" />
        </form>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6">
        <h3>Already have an account, then sign in below!</h3>
        <form method="post" action="display.php">
        	<p><input class="form-control" name="username" type="text" placeholder="Username" required /></p>
        	<p><input class="form-control" name="password" type="password" placeholder="Password" required /></p>
          <input class="btn btn-light" type="submit" value="Login" />
        </form>
      </div>
    </section>
  </main>
  
<?php require ('./inc/footer.php'); ?>
