
    <!-- Sidebar -->

    <!-- End of Sidebar -->


        <!-- Begin Page Content -->
          <div class="container-fluid">
                <?php $this->load->view('admin/inc/message'); ?>
               <h2>View Users</h2> 
               <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">S.N</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                    // echo "<pre>";
                                    //  echo  print_r($users[0]->id);
                                    //  echo "</pre>";
                                    $i = 1;
                                    foreach($users as $user):

                            ?>
                            <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo  $user->fullname ?></td>
                            <td><?php echo  $user->username ?></td>
                            <td><?php echo  $user->email ?></td>
                            <td><?php echo  $user->image ?></td>
                            <td>
                                <button class="btn btn-primary">
                                        <a href="edit/<?php echo $user->id; ?>" style = "color:#fff">
                                            view
                                        </a>
                                </button>
                                <button class="btn btn-primary">
                                    <a href="edit/<?php echo $user->id; ?>" style = "color:#fff">
                                            Edit
                                    </a>
                                </button>
                                <button class="btn btn-danger">
                                    <a href="delete/<?php echo $user->id; ?>">delete</a>
                                </button>
                            </td>
                            </tr>
                            <?php
                            $i++;
                                endforeach; 
                            ?>
                        </tbody>
                    </table>

               </div>
          </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  