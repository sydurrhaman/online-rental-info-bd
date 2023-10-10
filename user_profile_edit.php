<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php
                if(isset($_POST['user_reg'])) {
                    // print_r($_POST);exit;
                    $obj->user_profile_update($_SESSION['user_id'],$_POST['name'],$_POST['email'],$_POST['password'],$_POST['mobile']);
                }
                ?>
                <form class="cd-form" method="post" action="">
                    <p class="fieldset">
                        <label class="image-replace cd-username" for="signup-username">User Name</label>
                        <input class="full-width has-padding has-border" value="<?php echo $user_info['name'] ?>" id="signup-username" type="text" name="name" placeholder="User Name" required="">
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signup-email">E-mail</label>
                        <input class="full-width has-padding has-border" value="<?php echo $user_info['email'] ?>" id="signup-email" type="text" name="email" placeholder="E-mail" required="">
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signup-password">Password</label>
                        <input class="full-width has-padding has-border" value="<?php echo $user_info['password'] ?>" id="signup-password" type="text" name="password" placeholder="Password" required="">
                        <a href="#0" class="hide-password">Hide</a>
                        <span class="cd-error-message">Error message here!</span>
                    </p>
                    <p class="fieldset">
                        <label class="image-replace cd-username" for="signup-username">Your Phone Number</label>
                        <input class="full-width has-padding has-border" value="<?php echo $user_info['mobile'] ?>" id="signup-username" type="text" name="mobile" placeholder="Your phone number" required="">
                        <span class="cd-error-message">Error message here!</span>
                    </p>
                    <p class="fieldset">
                        <input class="full-width has-padding" type="submit" name="user_reg" value="Update account">
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>