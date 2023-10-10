<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li class="active-bre"><a href="#"> Ads Table</a></li>
        </ul>
    </div>
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <?php
                                if(!empty($_GET['n'])){
                                    echo "<h2 style='color: green;'>Ads Updated Successfully!</h2>";
                                }

                            ?>
                            <?php
                            if(!empty($_GET['id'])){
                                $id=$_GET['id'];
                                echo $id;
                                $confirm = $obj->ads_delete($id);
                                if($confirm){
                                    echo"Yes Deleted!";
                                }else{
                                    echo"Not Deleted!";
                                }
                            }
                            ?>

                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>category</th>
                                        <th>title</th>
                                        <th>division</th>
                                        <th>city</th>
                                        <th>information</th>
                                        <th>address</th>
                                        <th>rentcoast</th>
                                        <th>image1</th>
                                        <th>image2</th>
                                        <th>image3</th>
                                        <th>image4</th>
                                        <th>post_date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $all_info = $obj->ads_show();
                                    $i=1;
                                    while($row = mysqli_fetch_array($all_info)){
                                        ?>
                                        <tr>
                                            <td><?php echo $i?></td>
                                            <td><?php echo $row['category'];?></td>
                                            <td><?php echo $row['title'];?></td>
                                            <td><?php echo $row['division'];?></td>
                                            <td><?php echo $row['city'];?></td>
                                            <td><?php echo $row['information'];?></td>
                                            <td><?php echo $row['address'];?></td>
                                            <td><?php echo $row['rentcost'];?></td>
                                            <td><img src="../ads_img_folder/<?php echo $row['image1'];?>" width="200" height="100"></td>
                                            <td><img src="../ads_img_folder/<?php echo $row['image2'];?>" width="200" height="100"></td>
                                            <td><img src="../ads_img_folder/<?php echo $row['image3'];?>" width="200" height="100"></td>
                                            <td><img src="../ads_img_folder/<?php echo $row['image4'];?>" width="200" height="100"></td>
                                            <td><?php echo $row['post_date'];?></td>
                                            <td>
                                                <a class="btn btn-success btn-xs" href="?page=adds_edit.php&id=<?php echo $row['id']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <br><br>
                                                <a class="btn btn-danger btn-xs" href="?page=ads_show.php&id=<?php echo $row['id']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <?php $i++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>