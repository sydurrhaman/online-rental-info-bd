<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-content-one border">
                    <h2 class="title">User Registration</h2>
                </div><!-- /.Apartments-heading-content -->
            </div><!-- /.col-md-12 -->
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <?php
                if(isset($_POST['user_reg'])) {
                    // print_r($_POST);exit;
                    $obj->user_data_save($_POST['name'],$_POST['email'],$_POST['password'],$_POST['mobile']);
                }
                ?>
                <form class="cd-form" method="post" action="">
                    <p class="fieldset">
                        <label class="image-replace cd-username" for="signup-username">Username</label>
                        <input class="full-width has-padding has-border" id="signup-username" type="text" name="name" placeholder="Username" required="name">
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signup-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="signup-email" type="email" name="email" placeholder="E-mail" required="email">
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signup-password">Password</label>
                        <input class="full-width has-padding has-border" id="signup-password" type="text" name="password" placeholder="Password" required="password">
                        <a href="#0" class="hide-password">Hide</a>
                        <span class="cd-error-message">Error message here!</span>
                    </p>
                    <p class="fieldset">
                        <label class="image-replace cd-username" for="signup-username">Your Phone Number</label>
                        <input class="full-width has-padding has-border" id="signup-username" type="text" name="mobile" placeholder="Your phone number" required="mobile">
                        <span class="cd-error-message">Error message here!</span>
                    </p>
                    <p class="fieldset">
                        <input class="full-width has-padding" type="submit" name="user_reg" value="Create account">
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>