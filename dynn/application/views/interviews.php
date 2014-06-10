<?php foreach($records as $row): ?>
	<a class="chef-profile" href="/dynn/interviews/<?php echo str_replace(' ','-',$row->name); ?>">
		<img src="/dynn/img/chefs/profile/<?php echo str_replace(' ','-',$row->name) ;?>.png" >
		<h1><?php echo ucwords($row->name); ?></h1>
	</a>
<?php endforeach; ?>