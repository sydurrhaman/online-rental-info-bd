<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Users Form</a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <?php
                            if(!empty($_GET['id'])){
                                $id=$_GET['id'];
                                echo $id;
                                $confirm = $obj->delete_gallery($id);
                                if($confirm){
                                    echo"Yes Deleted!";
                                }else{
                                    echo"Not Deleted!";
                                }
                            }
                            ?>

                            <?php
                            if(!empty($_GET['n'])=='updated'){
                                echo "<h4 style='color: green'>User Info Successfully Updated</h4>";
                            }

                            ?>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>img_title</th>
                                        <th>image</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $all_info = $obj->show_gallery();
                                    $i=1;
                                    while($row = mysqli_fetch_array($all_info)){
                                        ?>
                                        <tr>
                                            <td><?php echo $i?></td>
                                            <td><?php echo $row['img_title'];?></td>
                                            <td><img src="gimage/<?php echo $row['image'];?>" width="200" height="100"></td>

                                            <td>
                                                <a class="btn btn-success " href="?page=gallery_edit.php&id=<?php echo $row['id']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <a class="btn btn-danger " href=?page=view_gallary.php&id=<?php echo $row['id']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i> </a>
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