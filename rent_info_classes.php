<?php
/**
 * Created by PhpStorm.
 * User: Sanjoy Mondal
 * Date: 8/5/2017
 * Time: 11:29 PM
 */

class rent_info_classes {
    public $hostname = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname ="rent_info_dbt";
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            echo mysqli_connect_error() . "Database not connect";
        } else {
            //echo"<h1 style='margin-top: 60px;'>Database connect</h1>";
        }
    }

    /*frontend*/

    public function user_data_save($n,$e,$p,$m){
        //print_r($_POST);exit;
        $sql ="INSERT INTO users (name,email,password,mobile,roll) VALUES ('$n','$e','$p','$m','user')";
        if(!mysqli_query($this->conn,$sql)){
            echo"Data does not save";
        }else{
            echo"<h3 class='text-success'>Data has been save</h3>";
        }
    }
    public function user_profile_update($id,$n,$e,$p,$m){
        //print_r($_POST);exit;
        $sql ="UPDATE users SET name='$n',email='$e',password='$p',mobile='$m',roll='user' WHERE id='$id'";
        if(!mysqli_query($this->conn,$sql)){
            echo"Data does not save";
        }else{
            echo "<script> window.location.href='?page=user_profile.php&n=success'</script>";
        }
    }

    /*user login*/
    public function users_login($e,$p){
        $sql = "SELECT * from users where email = '$e' AND password = '$p' AND roll ='user'";
        $return_user_data = mysqli_query($this->conn,$sql);
        return $return_user_data;
    }

    public function reg_data_show(){
        $sql = "SELECT * from users";
        $return_user_data = mysqli_query($this->conn,$sql);
        return $return_user_data;
    }

    public function user_data_delete($id){
        $sql="Delete from users WHERE id='$id'";
        $return_user_data=mysqli_query($this->conn,$sql);
        return$return_user_data;
    }

    public function user_data_edit_show($id){
        $sql = "SELECT * from users WHERE id ='$id'";
        $return_user_info = mysqli_query($this->conn,$sql);
        return $return_user_info;
    }

    public function user_data_update($id,$n,$e,$p,$m){
        $sql = "UPDATE users SET name='$n',email='$e',password='$p',mobile='$m' WHERE id ='$id'";
        if(!mysqli_query($this->conn,$sql)){
            echo "Data Not Saved!";
        }else{
            echo"<script>window.location.href='../admin/home.php?page=all_user.php&n=updated'</script>";
        }
    }



    /*user login End*/

    public function post_adverts($ct,$t,$d,$c,$i,$a,$rc,$img1,$img2,$img3,$img4,$pd){
       // print_r($_POST);exit;
        $imagesource1 = $img1["tmp_name"];
        $img1 = $img1["name"];

        $imagesource2 = $img2["tmp_name"];
        $img2 = $img2["name"];

        $imagesource3 = $img3["tmp_name"];
        $img3 = $img3["name"];

        $imagesource4 = $img4["tmp_name"];
        $img4 = $img4["name"];

        $reg = "INSERT INTO ads_post (user_id,category,title,division,city,information,address,rentcost,image1,image2,image3,image4, post_date,status)
                            VALUES('1','$ct','$t','$d','$c','$i','$a','$rc','$img1','$img2','$img3','$img4','$pd','1')";
        if(!mysqli_query($this->conn,$reg)){
            echo'Data dose not save';
        }
        else{
            echo"<script>window.location.href='?page=add_adverts.php&v=success'</script>";
            move_uploaded_file($imagesource1, "ads_img_folder/" . $img1);
            move_uploaded_file($imagesource2, "ads_img_folder/" . $img2);
            move_uploaded_file($imagesource3, "ads_img_folder/" . $img3);
            move_uploaded_file($imagesource4, "ads_img_folder/" . $img4);
        }
    }
    public function ads_search($category){
        $show = "SELECT * FROM ads_post WHERE  category = '$category'";
        $ret = mysqli_query($this->conn,$show);
        return $ret;
    }

    public function show_home_page_ads(){
        $show = "SELECT * FROM ads_post";
        $ret = mysqli_query($this->conn,$show);
        return $ret;
    }
    public function recent_ads(){
        $show = "SELECT * FROM ads_post ORDER BY id DESC limit 6";
        $ret = mysqli_query($this->conn,$show);
        return $ret;
    }

                            /*Blog Post Section Start*/
    public function save_blog($t,$des,$img,$post_date){

        // $exname = time();
        //echo $exname;exit;

        $imagesource1 = $img["tmp_name"];
        $img = $img["name"];
        //echo $img;exit;




        /*if(!in_array($_FILES['image']['type'], $acceptable)) {*/
        $sql = "INSERT INTO blog_post (user_id,	title,description,image,post_date	) VALUES ('1','$t','$des','$img','$post_date')";
        if (!mysqli_query($this->conn,$sql)) {
            echo "Data does not save";
        } else {
            echo "Data has been save";
            move_uploaded_file($imagesource1, "blog_img/" . $img);
        }

        /*}else{
            echo"need jpg,png,gif,jpeg,pdf file";
        }*/
    }
    public function blog_show(){
        $sql = "SELECT * from blog_post order by id DESC LIMIT 3";
        $return_user_data = mysqli_query($this->conn,$sql);
        return $return_user_data;
    }
    public function recent_blog(){
        $sql = "SELECT * from blog_post order by id DESC LIMIT 6";
        $return_user_data = mysqli_query($this->conn,$sql);
        return $return_user_data;
    }
    public function all_blog_show(){
        $sql = "SELECT * from blog_post";
        $return_user_data = mysqli_query($this->conn,$sql);
        return $return_user_data;
    }

    /*Blog Post Section End*/


    /*  ads show*/
    public function ads_show(){
        $sql = "SELECT * from ads_post order by id DESC LIMIT 5";
        $return_user_data = mysqli_query($this->conn,$sql);
        return $return_user_data;
    }
    public function single_ad_show($id){
        $sql = "SELECT * from ads_post WHERE id='$id'";
        $return_user_data = mysqli_query($this->conn,$sql);
        return $return_user_data;
    }
    public function single_blog_show($id){
        $sql = "SELECT * from blog_post WHERE id='$id'";
        $return_user_data = mysqli_query($this->conn,$sql);
        return $return_user_data;
    }

    public function ads_delete($id){
        $sql="Delete from ads_post WHERE id='$id'";
        $return_user_data=mysqli_query($this->conn,$sql);
        return$return_user_data;
    }

    /* ads show end*/


//profile User start
    public function profile_image_save($id,$image){

        if(!empty($_FILES['image']['tmp_name'])) {
            $file_tmp = $_FILES['image']['tmp_name'];
            $size = filesize($file_tmp);
            $size_mb = ($size/1024)/1024;
            //echo $size_mb;exit;
            //echo $image;exit;
            if ($size_mb > 2) {
                echo "Max image size should not more then 2 mb";
            } else {
                $allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
                $detectedType = exif_imagetype($_FILES['image']['tmp_name']);
                $error = !in_array($detectedType, $allowedTypes);
                if ($error == true) {
                    echo "image is not JPEG or PNG or GIF";
                } else {
                    $exname = time();
                    $imagesource = $image["tmp_name"];
                    $image = $exname.$image["name"];

                    $check = "SELECT * from profile_pic where user_id = '$id'";
                    $return_profile_data = mysqli_query($this->conn,$check);
                    $row = mysqli_fetch_array($return_profile_data);
                    $row_id = $row['id'];
                    $old_image = $row['image'];
                    if(mysqli_num_rows($return_profile_data) > 0){
                        // echo $row_id;exit;
                        $var1 ="UPDATE profile_pic SET user_id = '$id',image= '$image' WHERE id= '$row_id'";
                        if (!mysqli_query($this->conn, $var1)) {
                            echo 'Data dose not save';
                        } else {
                            unlink('profile_image/'.$old_image);
                            move_uploaded_file($imagesource, "profile_image/" . $image);
                            // echo"Data has been save";
                            echo "<script> window.location.href='?page=user_profile.php&n=success'</script>";
                        }
                    }else{
                        $var1 ="INSERT INTO profile_pic(user_id,image) VALUES ('$id','$image')";
                        if (!mysqli_query($this->conn, $var1)) {
                            echo 'Data dose not save';
                        } else {
                            move_uploaded_file($imagesource, "profile_image/" . $image);
                            //echo"Data has been save";
                            echo "<script> window.location.href='?page=user_profile.php&n=success'</script>";
                        }
                    }
                }
            }
        }else{
            echo "Please Select an image or upload image max size 2 mb";
        }
    }
    public function profile_show($id){
        $sql = "SELECT * from profile_pic where user_id = '$id'";
        $return_user_data = mysqli_query($this->conn,$sql);
        return $return_user_data;
    }

    public function show_user_info($id){
        $sql = "SELECT * from users where id = '$id'";
        $return_user_data = mysqli_query($this->conn,$sql);
        return $return_user_data;
    }
    //profile user end
    /*user section end*/


    /*admin section*/

    /*admin login*/
    public function admin_login($e,$p){
        $sql = "SELECT * from users where email = '$e' AND password = '$p' AND roll ='user'";
        $return_user_data = mysqli_query($this->conn,$sql);
        return $return_user_data;
    }

    public function admins_login($e, $p)
    {
        $sql = "SELECT * from users WHERE email='$e' AND password ='$p'AND roll='admin'";
        $return_data = mysqli_query($this->conn, $sql);
        return $return_data;
    }
    function save_gallery($it,$image){
       // print_r($_POST);
        $imagesource = $image["tmp_name"];
        $image = $image["name"];

        $reg = "INSERT INTO gallery(img_title,image) VALUES('$it','$image')";
        if(!mysqli_query($this->conn,$reg)){
            echo'Data dose not save';
        }
        else{
            echo"Data Save Sucessfully";
            move_uploaded_file($imagesource, "gimage/" . $image);
        }
    }

//galllery
    public function show_gallery(){
        $sql = "SELECT * from gallery";
        $return_user_data = mysqli_query($this->conn,$sql);
        return $return_user_data;
    }

    public function gallery_update($id,$title,$old_image,$image){
        //print_r($_POST);

        if(!empty($_FILES['image']['tmp_name'])) {
            $file_tmp = $_FILES['image']['tmp_name'];
            $size = filesize($file_tmp);
            $size_mb = ($size/1024)/1024;
            //echo $size_mb;exit;
            if ($size_mb > 2) {
                echo "Max image size should not more then 2 mb";
            } else {

                $allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
                $detectedType = exif_imagetype($_FILES['image']['tmp_name']);
                $error = !in_array($detectedType, $allowedTypes);
                if ($error == true) {
                    echo "image is not JPEG or PNG or GIF";
                } else {
                    $exname = time();
                    $imagesource = $image["tmp_name"];
                    $image = $exname.$image["name"];
                    $var1 ="UPDATE gallery SET img_title='$title',image='$image' WHERE id ='$id'";
                    if (!mysqli_query($this->conn, $var1)) {
                        echo 'Data dose not save';
                    } else {
                        move_uploaded_file($imagesource, "gimage/" . $image);
                        echo 'Data save';
                        echo "<script> window.location.href='home.php?page=view_gallary.php&n=updated'</script>";
                        //echo "<script> window.location.href='?page=views/profile.php&user_pages=post_blog_by_user.php&bs=success'</script>";

                    }
                }
            }
        }else{

            $var1 ="UPDATE gallery SET img_title='$title',image='$old_image' WHERE id ='$id'";
            if(!mysqli_query($this->conn, $var1)) {
                echo 'Data dose not save';
            } else {
                echo "<script> window.location.href='home.php?page=gallery_edit.php&n=updated'</script>";
            }
        }


    }

    public function edit_gallery ($id){
        $sql="SELECT *from gallery WHERE id='$id'";
        $return_user_info=mysqli_query($this->conn,$sql);
        return$return_user_info;
    }


    public function delete_gallery($id){
        $sql="Delete from gallery WHERE id='$id'";
        $return_user_data=mysqli_query($this->conn,$sql);
        return$return_user_data;
    }
    /*  blog show section*/
    /*  blog show section*/
    public function blog_sho(){
        $sql = "SELECT * from blog_post order by id DESC LIMIT 5";
        $return_user_data = mysqli_query($this->conn,$sql);
        return $return_user_data;
    }

    public function blog_delete($id){
        $sql="Delete from blog_post WHERE id='$id'";
        $return_user_data=mysqli_query($this->conn,$sql);
        return$return_user_data;
    }


    public function blog_update($id,$title,$des,$old_image,$image,$pd){
        print_r($_POST);

        if(!empty($_FILES['image']['tmp_name'])) {
            $file_tmp = $_FILES['image']['tmp_name'];
            $size = filesize($file_tmp);
            $size_mb = ($size/1024)/1024;
            //echo $size_mb;exit;
            if ($size_mb > 2) {
                echo "Max image size should not more then 2 mb";
            } else {

                $allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
                $detectedType = exif_imagetype($_FILES['image']['tmp_name']);
                $error = !in_array($detectedType, $allowedTypes);
                if ($error == true) {
                    echo "image is not JPEG or PNG or GIF";
                } else {
                    $exname = time();
                    $imagesource = $image["tmp_name"];
                    $image = $exname.$image["name"];
                    $var1 ="UPDATE blog_post SET title='$title',description='$des',image='$image',post_date='$pd' WHERE id ='$id'";
                    if (!mysqli_query($this->conn, $var1)) {
                        echo 'Data dose not save';
                    } else {
                        move_uploaded_file($imagesource, "../blog_img/" . $image);
                        echo 'Data save';
                        echo "<script> window.location.href='../admin/home.php?page=view_blog_table.php&n=updated'</script>";
                        //echo "<script> window.location.href='?page=views/profile.php&user_pages=post_blog_by_user.php&bs=success'</script>";

                    }
                }
            }
        }else{

            $var1 ="UPDATE blog_post SET title='$title',description='$des',image='$old_image',post_date='$pd' WHERE id ='$id'";
            if(!mysqli_query($this->conn, $var1)) {
                echo 'Data dose not save';
            } else {
                echo "<script> window.location.href='../admin/home.php?page=view_blog_table.php&n=updated'</script>";
            }
        }


    }

    public function edit_blog_post($id){
        $sql="SELECT *from blog_post WHERE id='$id'";
        $return_user_info=mysqli_query($this->conn,$sql);
        return$return_user_info;
    }

    /* blog show end*/


    //adds edit
    public function adds_update ($id,$category,$title,$division,$city,$information,$address,$rentcost,
                                 $old_image1,$image1,$old_image2,$image2,$old_image3,$image3,$old_image4,$image4,$post_date){

        if(!empty($_FILES['image1']['tmp_name'])) {
            $imagesource1 = $image1["tmp_name"];
            $image1 = $image1["name"];
        }else{
            $image1 = $old_image1;
        }
        if(!empty($_FILES['image2']['tmp_name'])) {
            $imagesource2 = $image2["tmp_name"];
            $image2 = $image2["name"];
        }else{
            $image2 = $old_image2;
        }
        if(!empty($_FILES['image3']['tmp_name'])) {
            $imagesource3 = $image3["tmp_name"];
            $image3 = $image3["name"];
        }else{
            $image3 = $old_image3;
        }
        if(!empty($_FILES['image4']['tmp_name'])) {
            $imagesource4 = $image4["tmp_name"];
            $image4 = $image4["name"];
        }else{
            $image4 = $old_image4;
        }

        $sql = "UPDATE ads_post SET category='$category',title='$title',division='$division',city='$city',information='$information',address='$address',
              rentcost='$rentcost', image1='$image1', image2='$image2',image3='$image3',image4='$image4',post_date='$post_date' WHERE id='$id'";
        if (!mysqli_query($this->conn, $sql)) {
            echo 'Data dose not save';
        } else {
            move_uploaded_file($imagesource1, "../ads_img_folder/" . $image1);
            move_uploaded_file($imagesource2, "../ads_img_folder/" . $image2);
            move_uploaded_file($imagesource3, "../ads_img_folder/" . $image3);
            move_uploaded_file($imagesource4, "../ads_img_folder/" . $image4);
            echo "<script> window.location.href='../admin/home.php?page=ads_show.php&n=updated'</script>";
            //echo "<script> window.location.href='?page=views/profile.php&user_pages=post_blog_by_user.php&bs=success'</script>";

        }

    }



    public function edit_adds_post($id){
        $sql="SELECT *from ads_post WHERE id='$id'";
        $return_user_info=mysqli_query($this->conn,$sql);
        return$return_user_info;
    }




}