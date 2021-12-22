<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet" />
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.2/jquery.min.js" integrity="sha512-TioVFI1HfPAFh7BGAsuCB76vIrmMroWB+yRNKnTan26OBCdpdH9DWYoTxZbjW8kCKH3QDItheAEVso5N7+w75g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Underscore -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.4.2/underscore-min.js" integrity="sha512-fUWG46/k5JrNjsIwQfNuxUJdXszE/xovm1MVeV6pZ0kvNo/uCi7ayVUAauGzqS/pcUEFRhX9uswruAjXYqArdQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Backbone -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/0.9.2/backbone-min.js" integrity="sha512-v7seAU/AOOqe4qwrsR+/B4oXJ/NoTF6Q+ClLGDHqAZrff86DmijO/sQq96QHte4H8xGzP4ZfeVeXzDXaKezuTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body class="bg-light">
<div class="container">
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url(); ?>">
      <img
        src="<?php echo base_url(); ?>assets/images/logo.png"
        class="me-2"
        height="50"
        alt="Logo"
        loading="lazy"
      />
      <span>Contacts</span>
    </a>
  </div>
</nav>

    <div class="row pt-4">
        <div class="col-sm-3"><?php $this->load->view('layouts/navbar'); ?></div>
        <div class="col-sm-9">
          <div class="page"></div>
        </div>
    </div>
</div>
    <?php $this->load->view('home_view'); ?>
    <?php $this->load->view('contacts/create_view'); ?>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>
    <!-- JS  -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/helpers/url_helper.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/helpers/form_helper.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/collections/Contacts.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/models/Contact.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/views/ContactList.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/views/CreateContact.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/routers/app.js"></script>
</body>
</html>