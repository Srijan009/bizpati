<div class="container">
    <h2><?php echo $title; ?></h2>
    <?php  $this->load->view('admin/inc/message.php'); ?>
    <div class="table-responsive">
        <table class="table">
        <thead>
            <tr>
            <th scope="col">S.N</th>
            <th scope="col">Post Data</th>
            <th scope="col">Post Title</th>
            <th scope="col">Summary</th>
            <th scope="col">Source</th>
            <th scope= "col">Status</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        // echo "<pre>";
        // print_r($articles);
        // echo "</pre>";
        // exit;
        if($articles != false  ):
        $i = 1; 
            foreach($articles as $article):
        ?>
            <tr>
            <th scope="row"><?php echo $i;  ?></th>
            <td><?php echo $article['created_at'];  ?></td>
            <td><?php echo $article['article_post_title'];  ?></td>
            <td><?php echo word_limiter($article['summary'],50);  ?></td>
            <td><?php echo $article['source'];  ?></td>
            <td><?php echo ($article['status'])? "Active":"Inactive";?></td>
            <td>
            <a class = "btn btn-primary mb-1" style = "border-radius:50%;" href="<?php echo site_url(); ?>admin/specialposts/edit/<?php echo $article['id']; ?>"><i class="fas fa-edit" style = "color:#fff;"></i></a>
            <a class = "btn btn-primary" style = "border-radius:50%;" href="<?php echo site_url(); ?>admin/specialposts/delete/<?php echo $article['id']; ?>" onclick = "return confirm('Are You Sure Want To Delete')"><i  class="fas fa-trash-alt" style = "color:#fff;"></i></a>
            </td>
            </tr>
            <?php
            $i++;
            endforeach;
        else:
            ?>
            <td>No Record Found</td>
            <?php
            endif;
            ?>
        </tbody>
        </table>
    </div>
</div>