<h2><?= $title ?></h2>

<?php echo validation_errors(); ?>
<form action="<?php echo base_url('admin/post_manager/update/').$post['id']?>" method="post">
  <input type="hidden" name="id" value="<?=$post['id']?>">
  <div class="form-group mb-3">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo $post['title'];?>">
  </div>
  <div class="form-group mb-3">
    <label for="exampleInputPassword1">Body</label>
    <textarea value="" type="text" class="form-control" name="body" placeholder="body"><?php echo $post['body'];?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>