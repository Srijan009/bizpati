
<?php 
    //  print_r(validation_errors());
    //  exit;
?>
<div class="container-fluid">
    <h1><?php //echo $title;  ?></h1>
    <?php// if(validation_errors()): ?>
        <div class="alert alert-danger">
            <?php //echo validation_errors(); ?>
        </div>
    <?php //endif; ?>
  
    <?php //echo form_open('news/create'); ?>
        <div class="form-group">
            <label for="Headline">Headline</label>
            <textarea name="headline" class = "form-control" id="" cols="20" rows="2"></textarea>
        </div>
        <div class="form-group">
            <label for="Headline">Summary</label>
            <textarea name="extract" class = "form-control" id="" cols="30" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="Detail">Detail</label>
            <textarea name="text" class = "form-control" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="image">image</label>
            <input type="file" name = "imageURL" >
        </div>
        <div class="form-group">
            <input type="date" name="createdDate" class = "form-control" class = "form-control"  id="">
        </div>
        <div class="from-group">
            <label for="Author">Author</label>
            <input type="text" class = "form-control" name = "byLine">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" style = "margin-top:10px;">submit</button>
        </div>
        
    </form>
</div>