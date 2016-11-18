<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('partials/_head'); ?>
    <link rel="stylesheet" href="<?php echo $this->config->base_url(); ?>/public/css/membri.css"/>


    <title>Membri | GrezzoniForever</title>
</head>
<body>

<div>
    <?php $this->load->view('partials/_header'); ?>
    <div id="mainSection" data-section="members">
        <section class="img-top">
            <div class="container-fluid top">
                <div class="container">
                    <div class="text-left">
                        <h1>
                            MEMBRI
                        </h1>

                    </div>
                </div>
            </div>
        </section>
        <section class="members-section">
            <div class="container">
                <div class="row">
                    <?php foreach($query as $record):?>
                    <div class="col-lg-4 text-center members">
                        <a href="<?php echo $this->config->base_url()."membri/".$record->MemberID?>">
                            <img class="img-circle img-responsive img-center" src="<?php echo $this->config->base_url().$record->Photo; ?>" alt="<?php echo $record->Name." ".$record->Surname; ?>">
                        </a>
                        <a href="<?php echo $this->config->base_url()."membri/".$record->MemberID?>">
                            <h3>
                                <?php echo $record->Name." ".$record->Surname; ?>
                            </h3>
                        </a>
                        <p class="member-date">Grezzone dal: <?php echo date_format(date_create($record->MemberFrom),'d/m/y'); ?></p>
                    </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>
<?php $this->load->view('partials/_footer'); ?>


</body>
</html>