<div class="recipes_lander">
	<ul class="recipes">
	<li>Breakfast</li>
		<ul>
		<?php foreach($records as $row): ?>
			<?php if ($row->id <= 3) { ?>
				<li><a href="/dynn/recipes/<?php echo strtolower( str_replace(' ','-',$row->recipes)) ?>"><?php echo ucwords($row->recipes); ?></a></li>
			<?php } ?>
		<?php endforeach; ?>
		</ul>
	<li>Lunch</li>
		<ul>
		<?php foreach($records as $row): ?>
			<?php if ($row->id > 3 && $row->id <= 6) { ?>
				<li><a href="/dynn/recipes/<?php echo strtolower( str_replace(' ','-',$row->recipes)) ?>"><?php echo ucwords($row->recipes); ?></a></li>
			<?php } ?>
		<?php endforeach; ?>
		</ul>
	<li>Dinner</li>
		<ul>
		<?php foreach($records as $row): ?>
			<?php if ($row->id > 6 && $row->id <= 9) { ?>
				<li><a href="/dynn/recipes/<?php echo strtolower( str_replace(' ','-',$row->recipes)) ?>"><?php echo ucwords($row->recipes); ?></a></li>
			<?php } ?>
		<?php endforeach; ?>
		</ul>
	<li>Snacks</li>
		<ul>
		<?php foreach($records as $row): ?>
			<?php if ($row->id > 9 && $row->id <= 11) { ?>
				<li><a href="/dynn/recipes/<?php echo strtolower( str_replace(' ','-',$row->recipes)) ?>"><?php echo ucwords($row->recipes); ?></a></li>
			<?php } ?>
		<?php endforeach; ?>
		</ul>
	</ul>
</div>