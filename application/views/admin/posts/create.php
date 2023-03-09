<h2><?= $title ?></h2>

<?php echo validation_errors(); ?>
<form action="<?php echo base_url('admin/Post_manager/create') ?>" method="post">
  <div class="form-group mb-3">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Title">
  </div>
  <div class="form-group mb-3">
    <label for="exampleInputPassword1">Body</label>
    <textarea type="text" class="form-control" name="body" placeholder="body"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>