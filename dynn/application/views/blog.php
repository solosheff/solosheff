<?php foreach($records as $row): ?>
	<div class="blog_post">
	    <a href="/dynn/checkout"><?php echo $row->title; ?></a>
	    <p>By <?php echo $row->author; ?>, April 16, 2014</p>
	    <div class="blog_preview">
	    	<img src="<?php echo $row->img; ?>">
	    	<p><?php echo $row->content; ?></p>
	    </div>
	    <?php $this->load->view('/includes/soc_btns'); ?>
	</div>
<?php endforeach; ?>