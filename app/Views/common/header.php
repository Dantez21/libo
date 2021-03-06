<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/css/style.css">

    <!-- Toastr style -->
	<!-- <link href="<?=base_url(); ?>/../css/toastr/toastr.min.css" rel="stylesheet"></link> -->

    <link href="<?=base_url(); ?>/css/bootstrap.min.css" rel="stylesheet"></link>
    <!-- <link href="<?=base_url(); ?>/../css/jquery.dropdown.css" rel="stylesheet"></link>
    <link href="<?=base_url(); ?>/../fonts/featherIcons/feather.css" rel="stylesheet"></link> -->

    <!-- <link rel="stylesheet" type="text/css" href="/fonts/linearicons/linearicons.css"> -->

    <!-- <link href="<?=base_url(); ?>/../css/animate.css" rel="stylesheet"></link>
    <link href="<?=base_url(); ?>/../css/style.css" rel="stylesheet"></link>
    <link href="<?=base_url(); ?>/../css/admin_portal.css" rel="stylesheet"></link>
    <link href="<?=base_url(); ?>/../css/alertify.min.css" rel="stylesheet"></link> -->

    <!-- Data Tables -->
    <link href="<?=base_url(); ?>/css/dataTables/dataTables.material.css" rel="stylesheet"></link>
    <link href="<?=base_url(); ?>/css/dataTables/fixedHeader.dataTables.min.css" rel="stylesheet"></link>

    <!-- Mainly scripts -->
    <script src="<?=base_url(); ?>/js/jquery-2.1.1.js"></script>
    <script src="<?=base_url(); ?>/js/bootstrap.min.js"></script>
    <script src="<?=base_url(); ?>/js/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Data Tables -->
    <script src="<?=base_url(); ?>/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?=base_url(); ?>/js/dataTables/dataTables.bootstrap.js"></script>
    <script src="<?=base_url(); ?>/js/dataTables/dataTables.responsive.js"></script>
    <script src="<?=base_url(); ?>/js/dataTables/dataTables.tableTools.min.js"></script>        
    <script src="<?=base_url(); ?>/js/dataTables/dataTables.fixedHeader.min.js"></script>       
    <script src="<?=base_url(); ?>/js/dataTables/fixedHeader.bootstrap.min.js"></script>

    <script src="<?=base_url(); ?>/js/manage_tables.js"></script>
    <script src="<?=base_url(); ?>/js/jquery.form.min.js"></script>
    <script src="<?=base_url(); ?>/js/alertify.js"></script>

    <!-- Jquery Validate -->
    <!-- <script src="<?=base_url(); ?>/../js/validate/jquery.validate.min.js"></script> -->

    <!-- Toastr script -->
    <!-- <script src="<?=base_url(); ?>/../js/toastr/toastr.min.js"></script> -->

    <title>Libo</title>
    <style> 

    .navv-bar h1, p{
        color: #fff;
        padding: 0px;
        margin-left: 40px;
    }
    .navv-bar h1{
        font-weight: bold;
        font-size: 25px;
    }
    .navv-bar p{
        font-size: 16px;
        font-weight: lighter;
    }
    .data-reportts{
        margin-top: 250px;
        margin-left: 30px;
    }
    
     .meddia{
        padding-top: 50px;
        margin-left: 30px;
    }
    
    .cads p{
        margin-left: 0px;
        margin-top: 20px;
        color: #707070;
        font-size: 11px;
        font-weight: bold;
    }
    
    .btn{
        border-radius: 10px;
        font-size: 10px;
        color: #FFFFFF;
        border: none;
        height: 15px;
        cursor: pointer;
    }
    
    .cad-info h2{
        font-size: 17px;
        font-weight: bold;
        color: #BF78DD;
        margin-left: 20px;
    } 
    </style> 
   
</head>
<body>
   <div class="jumbotron jumbotron-fluid">
   <div class="container-fluid">
    <div class="dashboard">
        <div class="logo">
            <img src="<?=base_url()?>/images/logo.png" alt="">
        </div>
        <div class="links">
        <a href="<?=base_url()?>/home"><img src="<?=base_url()?>/images/menubar1.png" alt=""></a>
        </div>
        <div class="links">
            <a href="<?=base_url()?>/books"><img src="<?=base_url()?>/images/books.png" alt=""></a>
        </div>
        <div class="links">
        <a href="<?=base_url()?>/tutorials"><img src="<?=base_url()?>/images/tutorial.png" alt=""></a>
        </div>
        <div class="links">
        <a href="<?=base_url()?>/user"><img src="<?=base_url()?>/images/user.png" alt=""></a>
        </div>
        <div class="links">
        <a href="<?=base_url()?>/help"><img src="<?=base_url()?>/images/help.png" alt=""></a>
        </div>
        <div class="links">
        <a href="<?=base_url()?>/home/logout"><img src="<?=base_url()?>/images/logout.png" alt=""></a>
        </div>
    </div>
  

    
    