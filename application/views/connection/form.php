<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">    

    <title>Lapgas</title>

    <!-- Icon -->
    <link rel="shortcut icon" type="image/icon-x" href="<?php echo base_url()."assets/";?>img/logo.png">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()."assets/";?>bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url()."assets/";?>bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()."assets/";?>dist/css/sb-admin-2.css" rel="stylesheet">    

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()."assets/";?>bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Date Picker -->
    <link href="<?php echo base_url()."assets/"; ?>date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">    
    <link href="<?php echo base_url()."assets/";?>jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />

    <!-- Date Picker Year Only -->
    <style type='text/css'>
      /* Style to hide Dates / Months */
      .ui-datepicker-calendar,.ui-datepicker-month { display: none; }​
    </style>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body></body>
    
    <!-- jQuery -->
    <script src="<?php echo base_url()."assets/";?>bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url()."assets/";?>jquery-ui/jquery-ui.min.js"></script>          

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()."assets/";?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url()."assets/";?>bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()."assets/";?>dist/js/sb-admin-2.js"></script>

    <!-- Date Picker -->
    <script type="text/javascript" src="<?php echo base_url()."assets/"; ?>date_picker_bootstrap/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."assets/"; ?>date_picker_bootstrap/js/locales/bootstrap-datetimepicker.id.js"></script>

    <!-- Date Picker Year Only -->
    <script type='text/javascript'>
      $(function(){
        $('.datepicker').datepicker({            
            changeMonth: false,
            changeYear: true,
            showButtonPanel: true,
            yearRange: '2010:2020', // Optional Year Range
            dateFormat: 'yy',
            onClose: function(dateText, inst) { 
                var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                $(this).datepicker('setDate', new Date(year, 0, 1));
            }});
        });
    </script>

</html>