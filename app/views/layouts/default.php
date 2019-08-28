<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $this->siteTitle(); ?></title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo PROOT; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo PROOT; ?>css/custom.css">
    <script src="<?php echo PROOT; ?>js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo PROOT; ?>js/popper.min.js"></script>
    <script src="<?php echo PROOT; ?>js/bootstrap.min.js"></script>
    
    <?php echo $this->content('head'); ?>
   
   
</head>

<body>    
    <?php echo $this->content('body'); ?>
</body>

</html>