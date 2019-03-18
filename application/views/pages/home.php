<?php 
    // echo "<pre>";
    // print_r($similar_res);
    // exit;

?>
<section id="hero">
        <div class="overlay"></div>
            <div id ="hero-image">
                <div class="container">
                    <div class="row padding-145">
                        <div class="col-lg-6 col-md-6">
                            <a href = "<?php echo site_url(); ?>bizpatispecial" id ="hero-btn">Bizpati special</a>
                            <h1 class="hero-heading"><a href="<?php echo $results[0]['id']; ?>"><?php echo $results[0]['article_post_title']; ?></a></h1>
                            <p class="hero-desc"><a href="<?php echo $results[0]['id']; ?>"><?php echo word_limiter($results[0]['summary'],20); ?></p>
                        </div>
                        <div class="col lg-6 col-md-6"></div>
                    </div>
                    <div class="row">
                    <?php 
                        $inc = '';
                        $i = 1;
                        foreach($similar_res as $res):
                            if($i == 1){
                                $inc = 'col-lg-4 col-md-4 cat-news';
                            }else{
                                $inc = 'col-lg-4 col-md-4 hr-left';
                            }
                    ?>
                        <div class="<?php echo $inc; ?>">
                                <h2 class="hero-cat">
                                    <a href="<?php  echo $res['id']; ?>"><?php echo  word_limiter($res['article_post_title'],5); ?></a> </h2>
                                    <p></p>
                                <a href="<?php  echo $res['id']; ?>" class = "btn btn-danger">Read More</a>
                        </div>
                        <?php 
                        $i++;
                        endforeach;
                        ?>
                        <!-- <div class="col-lg-4 col-md-4 hr-left">
                            <h2 class="hero-cat"><a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, animi.</a> </h2>
                            <p></p>
                            <button class="btn btn-danger">Read More</button>
                        </div>
                        <div class="col-lg-4 col-md-4 hr-left">
                            <h2 class="hero-cat"><a href="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident, dolore?</a>
                            </h2>                        
                            <p></p>
                            <button class="btn btn-danger">Read More</button></div>
                        </div> -->
                    </div>
                 </div>
            </div>
        </section>
