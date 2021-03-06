<html>
  <head>
    <title href="<?php echo base_url(); ?>">Raffleet</title>
    <!--<link rel="stylesheet" href="https://bootswatch.com/3/cosmo/bootstrap.min.css">-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
  <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">Raffleet</a>
      </div>
      <div id="navbar">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url(); ?>">Home</a></li>
          <li><a href="<?php echo base_url(); ?>">About</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php if(!$this->session->userdata('logged_in')) : ?>
            <li><a href="<?php echo base_url(); ?>users/login">Login</a></li>
            <li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
          <?php endif; ?>
          <?php if($this->session->userdata('logged_in')) : ?>
            
            <?php if($this->session->userdata('role') === 'Admin') : ?>
              <li><a href="<?php echo base_url(); ?>raffles/sellers">My Sellers</a></li>
              <li><a href="<?php echo base_url(); ?>requests/raffle_requests">Raffle Requests</a></li>
              <li><a href="<?php echo base_url(); ?>raffles/settings">Raffle Settings</a></li>
            <?php endif; ?>
            
            <?php if($this->session->userdata('role') === 'Visitor') : ?>
              <li><a href="<?php echo base_url(); ?>raffles/view">Request Join</a></li>
            <?php endif; ?>

            <li><a href="<?php echo base_url(); ?>requests/user_list">My Requests</a></li>

            <?php if($this->session->userdata('role') === 'Admin' or $this->session->userdata('role') === 'Seller') : ?>
              <li><a href="<?php echo base_url(); ?>tickets/sell_tickets">Sell Tickets</a></li>
              <li><a href="<?php echo base_url(); ?>requests/request_tickets">Request Tickets</a></li>
              <?php if($this->session->userdata('role') === 'Seller') : ?>
                <li><a href="<?php echo base_url(); ?>users/reduce_my_tickets">Reduce Tickets</a></li>
              <?php endif; ?>
              <li><a href="<?php echo base_url(); ?>users/statistics">Statistics</a></li>
            <?php endif; ?>

            <li><a href="<?php echo base_url(); ?>users/edit">Account</a></li>
            <li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>

          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>



  <div class="container">
    <!-- Flash message -->
    <?php if($this->session->flashdata('user_registered')) : ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('login_failed')) : ?>
      <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('user_logged_in')) : ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_logged_in').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('user_loggedout')) : ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('raffle_created')) : ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('raffle_created').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('account_updated')) : ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('account_updated').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('join_requested')) : ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('join_requested').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('duplicate_join_request')) : ?>
      <?php echo '<p class="alert alert-warning">'.$this->session->flashdata('duplicate_join_request').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('tickets_requested')) : ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('tickets_requested').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('ticket_sale')) : ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('ticket_sale').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('invalid_sale')) : ?>
      <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('invalid_sale').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('insufficient_raffle_tickets')) : ?>
      <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('insufficient_raffle_tickets').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('increased_tickets')) : ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('increased_tickets').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('invalid_confirm_message')) : ?>
      <?php echo '<p class="alert alert-warning">'.$this->session->flashdata('invalid_confirm_message').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('closed_raffle')) : ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('closed_raffle').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('raffle_info_edited')) : ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('raffle_info_edited').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('invalid_upgrade_confirm_message')) : ?>
      <?php echo '<p class="alert alert-warning">'.$this->session->flashdata('invalid_upgrade_confirm_message').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('upgraded_seller')) : ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('upgraded_seller').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('tickets_deallocated')) : ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('tickets_deallocated').'</p>'; ?>
    <?php endif; ?>
