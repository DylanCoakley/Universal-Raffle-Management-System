<h2><?php echo $raffle['Name']; ?></h2>

<small><?php echo 'From '.$raffle['StartDate']. ' til '.$raffle['EndDate'] ; ?></small>

<p><?php echo $raffle['Description']; ?></p>

<a href="<?php echo site_url('/requests/join/'.$raffle['RaffleID']);?>">Request Join</a>