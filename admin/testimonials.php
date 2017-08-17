            <?php include_once 'main_header.php'; ?>
           
            <?php include_once 'side_navigation.php';?>

            <main class="mn-inner">
                <div class="row">
                   
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                                 <a href="add_testimonials.php" style="float:right">Add Testimonials</a>
                                <span class="card-title">Testimonials Pages</span>
                                <?php $getData = getAllDataWithActiveRecent('testimonials'); $i=1; ?>
                                <table id="example" class="display responsive-table datatable-example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Role</th>
                                            <th>Description </th>
                                            <th>Image</th>
                                            <th>Status </th>
                                            <th>Actions  </th>
                                        </tr>
                                    </thead>                                    
                                    <tbody>
                                        <?php while ($row = $getData->fetch_assoc()) { ?>
                                        <tr>
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $row['title'];?></td>
                                            <td><?php echo $row['role'];?></td> 
                                            <td><?php echo substr(strip_tags($row['description']), 0,150);?></td>
                                            <td><img src="<?php echo $base_url . 'uploads/testimonials_images/'.$row['image'] ?>" height="100" width="100"/></td> 
                                            <td><?php if ($row['status']==0) { echo "Active" ;} else{ echo "In Active" ;}?></td>
                                            <td><a href=" edit_testimonials.php?uid=<?php echo $row['id'];?>"><i class="material-icons dp48">edit</i></a><a href="delete_testimonials.php?bid=<?php echo $row['id']; ?>"><i class="material-icons dp48" onclick="return confirm('Are you sure you want to delete?')">delete</i></a>
                                            <div id="myModal_<?php echo $row['id']; ?>" class="modal fade" >
                                            <div id="myModal_<?php echo $row['id']; ?>" class="modal fade" >
                                            <div class="modal-dialog" Style="margin-top:10%;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h3 class="modal-title"><b>ContentPage Information</b></h3>
                                                    </div>
                                                    <div class="modal-body" >
                                                        <h5 class="modal-title-set"><b>Title :</b><?php echo $row['title'];?></h5>
                                                        <h5 class="modal-title-set"><b>Description :</b><?php echo strip_tags($row['description']);?></h5>
                                                   </div>
                                                    <div class="modal-footer" >
                                                          <button type="button" class="btn" data-dismiss="modal" style="background-color:#f00; color:#fff">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </tr>               
                                        <?php $i++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
         <?php include_once 'footer.php'; ?>
       