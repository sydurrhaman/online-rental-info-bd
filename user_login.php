<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-content-one border">
                    <h2 class="title">User Login</h2>
                </div><!-- /.Apartments-heading-content -->
            </div><!-- /.col-md-12 -->
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <?php
                if (isset($_POST['user_login'])) {
                    $users_data = $obj->users_login($_POST['email'], $_POST['password']);
                    if(mysqli_num_rows($users_data) > 0){
                        $row = mysqli_fetch_array($users_data);
                        $_SESSION['user_id'] = $row['id'];
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['mobile'] = $row['mobile'];
                        $_SESSION['password'] = $row['password'];
                        echo"<script>window.location.href='?page=user_profile.php'</script>";
                    } else{
                        echo "<h4 class='text-danger'>Email address or Password Not Valid</h4>";
                    }
                }


                ?>
                <form class="cd-form" method="post" action="">
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
            </div>
        </div>
    </div>
</section>