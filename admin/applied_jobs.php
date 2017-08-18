            <?php include_once 'main_header.php'; ?>
           
            <?php include_once 'side_navigation.php';?>

            <main class="mn-inner">
                <div class="row">
                   
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                                 <a href="add_services.php" style="float:right">Add Services</a>
                                <span class="card-title">Applied jobs Pages</span>
                                <?php $getData = getAllDataWithActiveRecent('apply_jobs'); $i=1; ?>
                                <table id="example" class="display responsive-table datatable-example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>customer name</th>
                                            <th>customer email</th>
                                            <th>customer mobile </th>
                                            <th>resume</th>
                                        </tr>
                                    </thead>                                    
                                    <tbody>
                                        <?php while ($row = $getData->fetch_assoc()) { ?>
                                        <tr>
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $row['customer_name'];?></td>
                                            <td><?php echo $row['customer_email'];?></td>
                                            <td><?php echo $row['customer_mobile'];?></td>
                                            <td><a href="<?php echo $base_url . 'uploads/resumes/'.$row['resume'] ?>"><?php echo $row['resume'];?></a></td>

                                            
                                            
                                        

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
       