<?php if($query): foreach($query as $user): ?>
	<h2>
		<?php echo $user->user_username; ?>
	</h2>
<?php endforeach ?>
<?php endif; ?>