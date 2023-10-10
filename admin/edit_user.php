<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> User Edit Form</a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Edit User Details</h4>
                    </div>
                    <div class="tab-inn">
                        <?php
                        $user_id= $_GET['id'];
                        $current_user = $obj->user_data_edit_show($user_id);

                        $current_user_row = mysqli_fetch_array($current_user);
                        echo $user_id;
                        if(isset($_POST['updateInfo'])) {
                            $obj->user_data_update($user_id,$_POST['name'],$_POST['email'],$_POST['password'],$_POST['mobile']);
                        }
                        ?>
                        <form action="" method="post">
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="name" type="text" name="name" value="<?php echo $current_user_row['name']; ?>" class="validate">
                                    <label for="name">Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="email" type="email" name="email" value="<?php echo $current_user_row['email']; ?>" class="validate">
                                    <label for="email">email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="password" type="password" name="password" value="<?php echo $current_user_row['password']; ?>" class="validate">
                                    <label for="password">password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="cphone" type="text" name="mobile" value="<?php echo $current_user_row['mobile']; ?>" class="validate">
                                    <label for="cphone">Mobile</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="submit" name="updateInfo" class="waves-effect waves-light btn-large">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>