

<h4 style="padding-left: 20px;">Welcome to your profile - <?php echo ucwords($user_info['name']); ?></h4>
<div class="col-xs-12 col-sm-8">
    <ul class="list-group">
        <li class="list-group-item"><i class="fa fa-user"></i> <?php echo ucwords($user_info['name']); ?></li>
        <li class="list-group-item"><i class="fa fa-phone"></i> <?php echo ucwords($user_info['mobile']); ?></li>
        <li class="list-group-item"><i class="fa fa-envelope"></i> <?php echo ucwords($user_info['email']); ?></li>
        <li class="list-group-item"><i class="fa fa-lock"></i> <?php echo ucwords($user_info['password']); ?></li>
    </ul>
</div>