<div class="container">
    <?php 
        // echo "<pre>";
        // print_r($all_res);
        // exit;
    foreach($all_res as $res):
    ?>
    <div class="post-content">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-4">
                <img src="<?php echo base_url('images/'.$res['article_image']); ?>" height = "255" width = "250" alt="">
            </div>
            <div class="col-md-9 col-lg-9 col-sm-8 pd-20">
            <h3><?php echo $res['article_post_title']; ?></h3>
            <p></p>
            <small style = "margin-left:5px;"><strong><?php echo $res['source']; ?></strong>  <i><?php echo $res['created_at']; ?></i></small>
            <p></p>
            <p></p>
            <p><?php echo $res['summary']; ?></p> 
            </div>  
            <button class="btn btn-primary bt-mar">Read More</button>  
        </div>
    </div>
    <?php 
    endforeach;
    ?>

        
    </div>
</div>