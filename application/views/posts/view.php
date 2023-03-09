<h4><?php echo $post['title'];?></h4>
<div class="post-body">
    <?php echo $post['body'];?>
</div>
<hr>
<div class="operation" style="display:flex">
<button class="btn btn-primary">
<a class="text-light" href="<?php echo base_url('admin/Post_manager/edit/').$post['slug']; ?>">
Edit
</a>
</button>
<?php echo form_open('admin/Post_manager/delete/'.$post['id']);?>
    <input type="submit" value="delete" class="btn btn-primary">
</div>
</form>
