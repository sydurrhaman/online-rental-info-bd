<!-- Registrar Or Sign In-content -->
<div class="cd-user-modal">
    <div class="cd-user-modal-container">
        <ul class="cd-switcher">
            <li><a href="#0">Sign in</a></li>
            <li><a href="#0">New account</a></li>
        </ul>

        <!-- log in form -->
        <div id="cd-login">
            <form class="cd-form" method="post" action="">
                <?php
                if (isset($_POST['user_login'])) {
                    $users_data = $obj->users_login($_POST['email'], $_POST['password']);
                    if(mysqli_num_rows($users_data) > 0){
                        $row = mysqli_fetch_array($users_data);
                        $_SESSION['user_id'] = $row['id'];
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['password'] = $row['password'];
                        echo"<script>window.location.href='?page=users_profile.php'</script>";
                    } else{
                        echo "<h4 class='text-danger'>Email address or Password Not Valid</h4>";
                    }
                }


                ?>
                <p class="fieldset">
                    <label class="image-replace cd-email" for="signin-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="signin-email" type="email" name="email" placeholder="E-mail">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signin-password">Password</label>
                    <input class="full-width has-padding has-border" id="signin-password" type="text" name="password" placeholder="Password">
                    <a href="#0" class="hide-password">Hide</a>
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <input type="checkbox" id="remember-me" checked>
                    <label for="remember-me">Remember me</label>
                </p>

                <p class="fieldset">
                    <input class="full-width" type="submit" name="user_login" value="Login">
                </p>
            </form>

            <p class="cd-form-bottom-message">
                <a href="#0">Forgot your password?</a>
            </p>
            <a href="#0" class="cd-close-form">Close</a>
        </div> <!-- cd-login -->

        <!-- sign up form -->
        <div id="cd-signup">
            <?php
            if(isset($_POST['user_reg'])) {
                echo "hello";
                $obj->user_data_save($_POST['name'], $_POST['email'], $_POST['password'], $_POST['mobile']);
            }
            ?>
            <form class="cd-form" method="post" action="index.php">
                <p class="fieldset">
                    <label class="image-replace cd-username" for="signup-username">Username</label>
                    <input class="full-width has-padding has-border" id="signup-username" type="text" name="name" placeholder="Username">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-email" for="signup-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="signup-email" type="text" name="email" placeholder="E-mail">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signup-password">Password</label>
                    <input class="full-width has-padding has-border" id="signup-password" type="text" name="password" placeholder="Password">
                    <a href="#0" class="hide-password">Hide</a>
                    <span class="cd-error-message">Error message here!</span>
                </p>
                <p class="fieldset">
                    <label class="image-replace cd-password" for="signup-password">Your Phone Number</label>
                    <input class="full-width has-padding has-border" id="signup-password" type="text" name="mobile" placeholder="Your phone number">
                    <a href="#0" class="hide-password">Hide</a>
                    <span class="cd-error-message">Error message here!</span>
                </p>
                <p class="fieldset">
                    <input class="full-width has-padding" type="submit" name="user_reg" value="Create account">
                </p>
            </form>
            <a href="#0" class="cd-close-form">Close</a>
        </div> <!-- cd-signup -->

        <!-- reset password form -->
        <div id="cd-reset-password">
            <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

            <form class="cd-form">
                <p class="fieldset">
                    <label class="image-replace cd-email" for="reset-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                    <span class="cd-error-message">Error message here!</span>
                </p>
                <p class="fieldset">
                    <input class="full-width has-padding" type="submit" value="Reset password">
                </p>
            </form>

            <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
        </div> <!-- cd-reset-password -->
        <a href="#0" class="cd-close-form">Close</a>
    </div> <!-- cd-user-modal-container -->
</div> <!-- cd-user-modal -->