
    <!-- Sidebar -->

    <!-- End of Sidebar -->


        <!-- Begin Page Content -->
          <div class="container-fluid">
               <h2>Create Users</h2> 
               <?php 
                echo form_open('admin/users/update');
                //print_r($user[0]['fullname']);
               ?>
                    <div class="form-group">
                       <label for="email">Email</label>
                        <input type="email"  value = "<?php echo $user[0]['email']; ?>" name="email" class = "form-control" id="">
                   </div>
                   <div class="form-group">
                       <label for="fullname">Fullname</label>
                        <input type="text"  name="fullname" value = "<?php echo $user[0]['fullname']; ?>" class = "form-control" id="">
                   </div>
                   <div class="form-group">
                       <label for="title">Username</label>
                        <input type="text" name="username" value = "<?php echo $user[0]['username']; ?>" class = "form-control" id="">
                   </div>
                   <div class="form-group">
                       <label for="title">Password</label>
                        <input type="password" name="password" value = "<?php echo $user[0]['password']; ?>" class = "form-control" id="">
                   </div>
                   <div class="form-group">
                       <label for="">Featured Image</label>
                       <input type="file" name="image" id="">
                   </div>
                   <div class="form-group">
                       <label for="detail">Detail</label>
                       <textarea name="detail" class = "form-control" id="" cols="30" rows="10">
                        <?php 
                            echo $user[0]['detail'];
                        ?>
                       </textarea>
                   </div>
                   <input type="hidden" name="user_id" value = "<?php echo $user[0]['id']; ?>">
                   <button class="btn btn-primary" name = "submit" value = "submit">
                       submit
                   </button>
               </form>

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

  