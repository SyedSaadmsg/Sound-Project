<?php
include 'config.php';
include 'admin_header.php';

?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <span class=" mb-5 text-white" style="font-size: 40px;">View Song</span>
                    <br><br>


                    <table class="table table-dark" id="myTable">
                        <thead>
                            <tr>
                                <th>Song Name</th>
                                <th>Song Image</th>
                                <th>Artist Name</th>
                                <th>Album Name</th>
                                <th>Genre</th>
                                <th>Language</th>
                                <th>Song Year</th>
                                <th>Audio</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

            $select=mysqli_query($con,"select * from tblsong");
            foreach($select as $data)            
            {
                echo
                "
                <tr>
                <td>$data[Songname]</td>
                <td><img src='simage/$data[Image]' width=50 height=50></td>
                <td>$data[Artistname]</td>
                <td>$data[Albumname]</td>
                <td>$data[Genre]</td>
                <td>$data[Language]</td>
                <td>$data[Year]</td>
                <td>$data[Audio]</td>

                
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
            
