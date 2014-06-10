<form action="" method="post">
	<fieldset>
		<select name="sortBy" onchange='this.form.submit()'>
			<option value="">sort by</option>
			<option value="brand">brand</option>
			<option value="price">price</option>
			<option value="series">series</option>
		</select>
	</fieldset>
</form>
<?php foreach($records as $row): ?>
	<a class="store-item" href="/dynn/checkout">
		<img src="<?php echo '/dynn/img/cookware/' . $row->image . '.png'; ?>" >
		<h1><?php echo $row->brand; ?></h1>
		<h2><?php echo $row->series; ?> Series</h2>
		<h3>$<?php echo $row->price; ?></h3>
	</a>
<?php endforeach; ?>