
    <!-- Sidebar -->

    <!-- End of Sidebar -->


        <!-- Begin Page Content -->
          <div class="container-fluid">
               <h2>Create Users</h2> 
               <?php 
                 print_r(validation_errors());
                echo form_open('admin/users/create');
               ?>
                    <div class="form-group">
                       <label for="email">Email</label>
                        <input type="email"  name="email" value = "<?php echo set_value('email'); ?>" class = "form-control" id="">
                   </div>
                   <div class="form-group">
                       <label for="fullname">Fullname</label>
                        <input type="text"  name="fullname" value = "<?php echo set_value('fullname'); ?>" class = "form-control" id="">
                   </div>
                   <div class="form-group">
                       <label for="title">Username</label>
                        <input type="text" name="username" value = "<?php echo set_value('username'); ?>" class = "form-control" id="">
                   </div>
                   <div class="form-group">
                       <label for="title">Password</label>
                        <input type="password" name="password" value = "<?php echo set_value('password'); ?>" class = "form-control" id="">
                   </div>
                   <div class="form-group">
                       <label for="">Featured Image</label>
                       <input type="file" name="image" id="">
                   </div>
                   <div class="form-group">
                       <label for="detail">Detail</label>
                       <textarea name="detail" class = "form-control" id="" cols="30" rows="10">
                       <?php echo set_value('detail'); ?>
                       </textarea>
                   </div>
                   <button class="btn btn-primary" name = "submit" value = "submit">
                       submit
                   </button>
               </form>

          </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


  