<?php
include 'config.php';
include 'admin_header.php';

?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <span class=" mb-5 text-white" style="font-size: 40px;">User Records</span>

                    <table class="table table-dark" id="myTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th> Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

            $select=mysqli_query($con,"select * from tbluserrecord");
            foreach($select as $data)            
            {
                echo
                "
                <tr>
                <td>$data[Name]</td>
                <td>$data[Email]</td>
                <td>$data[Password]</td>
                <td><img src='image/$data[Image]' width=50 height=50></td>


                
                <td>
                <a href='delsong.php?A=$data[Id]' class='btn btn-danger'>Delete</a>
                </td>
                </tr>
                ";
            }

                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            
            
            <?php
