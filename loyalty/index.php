<?php include "../header.php"; ?>
    <div class="container">
<?php
session_start();
if(isset($_SESSION['user'])){
?>
        <h1>Welcome <?php echo $_SESSION['user']['first'] ?>!</h1>
<?php
}else{
?>
        <div class="col-6">
            <h2>Why join the Bready Member Club?</h2>
            <p>By being a member, you can get weekly offers and coupons right in your email. You can also get points back in your account on every purchase you make!</p>
            <p>If you are interested in joining, you may ask our clerk at our location or register below.</p>
        </div>
        <script>
            function show(id){
                $(id).removeClass('hidden');
            }
            
            function hide(id){
                $(id).addClass('hidden');
            }
            
            $(function(){
                $("#datepicker").datepicker({
                    yearRange:"-100:+0",
                    changeYear:true,
                    changeMonth:true,
                    minDate:"-100Y",
                    maxDate:"+0"
                });
            });
        </script>
        <div class="col-6">
            <h2>Accounts</h2>
            <p>Manage your Breader Member account or register for one here.</p>
            <div class="selector button col-6" onclick="show('#signin');hide('#signup');">Sign In</div>
            <div class="selector button col-6" onclick="show('#signup');hide('#signin');">Sign Up</div>
            <div class="form-container" id="signin">
            <form action="account.php" method="POST">
                <h2 title="This may be your username, phone, email or account number">ID</h2><input type="text" name="login-id" required>
                <h2>Password</h2><input type="password" name="login-pass" required>
                <input type="submit" class="button" value="Login">
            </form> 
            </div>
            <div class="form-container hidden" id="signup">
            <form action="register.php" method="POST">
                <h2>First Name</h2><input type="text" required>
                <h2>Last Name</h2><input type="text" required>
                <h2>Username</h2><input type="text" required>
                <h2>E-mail</h2><input type="email" required>
                <h2>Phone Number</h2><input type="phone" required>
                <h2>Date of Birth</h2><input type="text" id="datepicker" required>
                <h2>Mailing Address</h2><input type="text" required>
                <h2>Create a Password</h2><input id="pass" type="password" required>
                <h2>Confirm Password</h2><input id="pass_confirm" type="password" required>
                <input type="submit" class="button" value="Register">
            </form>
            <script language='javascript' type='text/javascript'>
                function check(input) {
                    if (input.value != document.getElementById('pass_confirm').value) {
                        input.setCustomValidity('Passwords must match.');
                    } else {
                        // input is valid -- reset the error message
                        input.setCustomValidity('');
                    }
                }
                
                $("#pass").keyup(function(){
                    check(document.getElementById('pass'));
                });
                $("#pass_confirm").keyup(function(){
                    check(document.getElementById('pass'));
                });
            </script>
            </div>
        </div>
<?php
}
echo "</div>";
include "../footer.php"; ?>
