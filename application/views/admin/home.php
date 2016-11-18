<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | GrezzoniForever</title>
    <?php $this->load->view('partials/admin/_head'); ?>
</head>

<body>

<div id="wrapper">

    <?php $this->load->view('partials/admin/_navigation'); ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">GrezzoniForever Admin - Home</h1>
            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="<?php echo $this->config->base_url(); ?>public/img/home/top.jpg" />
                </div>
            </div>
        </div>
    </div>



</body>

</html>