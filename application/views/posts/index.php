<?php 
    if($this->session->userdata('success_updated')){
        $success_message = $this->session->userdata('success_updated');
        echo $success_message;
        $this->session->unset_userdata('success_updated');
    }
?>
<div class="list">
<?php foreach($posts as $post):?>
    <h3><?php echo $post['title']?></h3>
    <small class="post-date">Post on : <?php echo $post['create_at']?></small><br>
    <?php echo $post['body']?><br>
    <p><a class="btn btn-secondary" href="<?php echo site_url('posts/view/'.$post['slug']) ?>">Readmore</a></p>
<?php endforeach;?>
</div>
<div class="pagination text-center">
    <p><?php echo isset($links)?$links:""; ?></p>
</div>