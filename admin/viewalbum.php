<?php
include 'config.php';
include 'admin_header.php';

?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <span class=" mb-5 text-white" style="font-size: 40px;">View Album</span>
                    <br><br>


                    <table class="table table-dark" id="myTable">
                        <thead>
                            <tr>
                                <th>Album Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

            $select=mysqli_query($con,"select * from tblalbum");
            foreach($select as $data)            
            {
                echo
                "
                <tr>
                <td>$data[Albumname]</td>

                <td>
                <a href='delalbum.php?A=$data[Id]' class='btn btn-danger'>Delete</a>
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
            
 