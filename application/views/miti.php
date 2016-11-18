<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('partials/_head'); ?>
    <link rel="stylesheet" href="<?php echo $this->config->base_url(); ?>/public/css/miti.css"/>


    <title>Miti | GrezzoniForever</title>
</head>
<body>

<div>
    <?php $this->load->view('partials/_header'); ?>
    <div id="mainSection" data-section="myths">
        <section class="img-top">
            <div class="container-fluid top">
                <div class="container">
                    <div class="text-left">
                        <h1>
                            MITI
                        </h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="myths-section">
            <div class="container">
                <div class="row">
                    <?php foreach ($query as $record): ?>
                        <div class="col-md-4 portfolio-item myths">
                            <img class="img-responsive myths-img" src="<?php echo $this->config->base_url().$record->Photo; ?>" alt="<?php echo $record->Name." ".$record->Surname; ?>">

                            <h3>
                                <?php echo $record->Name." ".$record->Surname; ?>
                            </h3>
                            <p class="myth-phrase">
                                <?php echo $record->Phrase; ?>
                            </p>

                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>
    <?php $this->load->view('partials/_footer'); ?>


</body>
</html>