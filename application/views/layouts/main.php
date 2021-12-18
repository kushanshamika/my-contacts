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
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- Underscore -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.13.2/underscore-min.js" integrity="sha512-anTuWy6G+usqNI0z/BduDtGWMZLGieuJffU89wUU7zwY/JhmDzFrfIZFA3PY7CEX4qxmn3QXRoXysk6NBh5muQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Backbone -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.4.0/backbone-min.js" integrity="sha512-9EgQDzuYx8wJBppM4hcxK8iXc5a1rFLp/Chug4kIcSWRDEgjMiClF8Y3Ja9/0t8RDDg19IfY5rs6zaPS9eaEBw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body class="bg-light">
<div class="container">
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
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
        <div class="col-sm-9"><?php $this->load->view('home_view'); ?></div>
    </div>
</div>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>
    <!-- JS  -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/helpers/url_helper.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/collections/Contacts.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/views/ContactList.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/routers/app.js"></script>
</body>
</html>