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
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
              "ajax": "http://localhost:8888/my-contacts/index.php/api/contact/all",
              "ordering": false,
              paging: false,
              columns: [
                { data: "f_name" },
                { data: "l_name" },
                { data: "contact" },
                { data: "email" }
            ]
            });
        } );
    </script>
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
</body>
</html>