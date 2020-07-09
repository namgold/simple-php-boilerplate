
<div class="container" style="padding-top: 5%; padding-bottom: 5%;">
<h2>Register Form</h2>
  <form name="registerForm" action="" method="post" onsubmit="return validateRegisterForm()">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo escape(Input::get('name')); ?>">
    </div>
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" value="<?php echo escape(Input::get('username')); ?>">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <div class="form-group">
      <label for="password_again">Confirm Password:</label>
      <input type="password" class="form-control" id="password_again" placeholder="Confirm your password" name="password_again">
    </div>
    <input class="btn btn-primary" type="submit" value="Register me">
  </form>
</div>
<script>
    function validateRegisterForm() {
        if (document.forms.registerForm.name.value == "") {
            alert("Name must be filled out");
            return false;
        }
        if (document.forms.registerForm.username.value == "") {
            alert("Username must be filled out");
            return false;
        }
        if (document.forms.registerForm.password.value === "") {
            alert("Password must be filled out");
            return false;
        }
        if (document.forms.registerForm.password.value !== document.forms.registerForm.password_again.value) {
            alert("Password not match");
            return false;
        }
    }
</script>