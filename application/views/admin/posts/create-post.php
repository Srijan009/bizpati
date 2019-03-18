<div class="container">
<h2><?php echo $title; ?></h2>
<p>
<?php 
    echo validation_errors();
?>
</p>

<?php echo form_open_multipart('admin/specialposts/create'); ?>
    <div class="form-group">
        <label for="">Post Title</label>
        <input type="text" placeholder = "Enter The Post title" value="" name="article_post_title" class = "form-control" id="">
    </div>
    <div class="form-group">
        <label for="">Sub Title</label>
        <input type="text" placeholder = "Enter The Sub title" value="" name="article_sub_title" class = "form-control" id="">
    </div>
    <div class="form-group">
        <label for="">Facebook Title</label>
        <input type="text" name="facebook_title" value="" placeholder = "Enter The Facebook Title" class = "form-control" id="">
    </div>
    <div class="form-group">
    <label for="">Specail News Category</label>
        <select name="parent_id" class = "form-control" id="">
            <option value="0">Business</option>
            <option value="1">Technology</option>
            <option value="2">Politics</option>
            <option value="3">Economics</option>
            <option value="4">International</option>
            <option value="5">Entertainment</option>
            <option value="6">Education</option>
        </select>
    </div>
    <div class="form-group">
        <input type="file" name = "userfile">
    </div>
    <div class="form-group">
        <label for="">Summary</label>
        <textarea name="summary"  class = "form-control" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
    <label for="">Detail</label>
        <textarea name="detail"  class = "form-control" id="detail" cols="30" rows="10"></textarea>
    </div>
    <div class = "form-group">
    <label for="">Source</label>
        <input type="text" name="source" placeholder = "Enter The Source of News" class = "form-control" id="">
    </div>
    <div class="form-group">
        <label for="">Status</label>
        <select name="status" class = "form-control" id="">
            <option value="1">Active</option>
            <option value="0">In active</option>
        </select>
    </div>
    <button class="btn btn-primary">
        submit
    </button>
</form>
</div>
<p></p>
<p></p>
<p></p>