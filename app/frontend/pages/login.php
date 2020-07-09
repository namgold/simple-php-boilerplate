<div class="container" style="padding-top: 1%; padding-bottom: 5%;">
<h2>Login Form</h2>
    <form name="loginForm" action="" method="post" onsubmit="return validateForm()">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" autocomplete placeholder="Enter Username" name="username">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="password" autocomplete placeholder="Enter password" name="password">
        </div>
        <div class="form-group form-check">
            <label for="remember">
                <input type="checkbox" name="remember" id="remember"> Remember Me
            </label>
        </div>
        <input class="btn btn-primary" type="submit" value="Log In">
    </form>
</div>
<script>
    function validateForm() {
        if (document.forms.loginForm.username.value == "") {
            alert("Name must be filled out");
            return false;
        }
        if (document.forms.loginForm.password.value == "") {
            alert("Password must be filled out");
            return false;
        }
    }
</script>