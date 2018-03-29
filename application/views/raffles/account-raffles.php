<h2><?= $title ?></h2>

<a href="<?php echo site_url('/raffles/create'); ?>">Create Raffle</a>

<ul class="list-group">
	<?php foreach ($raffles as $raffle) : ?>
		<li class="list-group-item">
			<a href="<?php echo site_url('/raffles/home/'.$raffle['RaffleID']); ?>">
				<?php echo $raffle['RaffleName']; ?>
			</a>
		</li>

	<?php endforeach; ?>
</ul>