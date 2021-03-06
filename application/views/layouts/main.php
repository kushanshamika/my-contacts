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
    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Sweetalert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-material-ui@5.0.8/material-ui.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.4/dist/sweetalert2.all.min.js"></script>
</head>
<body class="bg-light">
<div class="container">
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#/">
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

    <!-- Template -->
    <?php $this->load->view('home_view'); ?>
    <?php $this->load->view('contacts/create_view'); ?>
    <?php $this->load->view('labels/label_view.php'); ?>
    <?php $this->load->view('labels/create_view.php'); ?>
    

    <!-- Backbone Validation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.validation/0.11.5/backbone-validation-min.js" integrity="sha512-C1hfT7OF4lLztKjFERWG3+ZqtjJUTPymzurSQSViGfQcTY1MMEyGNnz4PxpyzM/e4JqDp6HflPH+R5xq+MWB5A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>

    <!-- Helper JS  -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/helpers/url_helper.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/helpers/form_helper.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/helpers/validation_helper.js"></script>
    

    <!-- Contact JS -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/collections/Contacts.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/models/Contact.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/views/ContactList.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/views/CreateContact.js"></script>

    <!-- Label JS -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/views/LabelList.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/views/CreateLabel.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/collections/Labels.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/models/Label.js"></script>

    <!-- Router JS -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/routers/app.js"></script>
</body>
</html>