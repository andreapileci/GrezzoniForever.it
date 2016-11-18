<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo $this->config->base_url(); ?>public/css/eventi.css"/>
    <link rel="stylesheet" href="<?php echo $this->config->base_url(); ?>public/css/membri.css"/>
    <link rel="stylesheet" href="<?php echo $this->config->base_url(); ?>public/css/miti.css"/>
    <?php $this->load->view('partials/_head'); ?>
    <link rel="stylesheet" href="<?php echo $this->config->base_url(); ?>public/css/galleria.css"/>
    <link rel="stylesheet" href="<?php echo $this->config->base_url(); ?>public/css/home.css"/>
    <link rel="stylesheet" href="<?php echo $this->config->base_url(); ?>public/css/animate.css"/>


    <title>Home | GrezzoniForever</title>
</head>
<body>

<div>
    <?php $this->load->view('partials/_header'); ?>
     <div id="mainSection" data-section="home">
        <section class="img-top">
            <div class="container-fluid top">
                <div class="container">
                    <div class="text-left animated fadeInDown">
                        <h1>
                            Grezzone si nasce, non si diventa
                        </h1>
                        <h2>
                            Essere Grezzone è uno stile di vita
                        </h2>
                    </div>
                    <div class="social-share">
                        <a href="http://www.facebook.com/sharer.php?u=<?php echo $this->config->item('host_name').$this->config->base_url(); ?>" target="_blank">
                            <img src="<?php echo $this->config->base_url(); ?>public/img/home/ico-facebook-col.png" alt="Facebook">
                        </a>
                        <a href="https://twitter.com/share?url=<?php echo $this->config->item('host_name').$this->config->base_url(); ?>" target="_blank">
                            <img src="<?php echo $this->config->base_url(); ?>public/img/home/ico-twitter-col.png" alt="Twitter">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="hystory-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Storia</h2>
                        <?php echo $history; ?>
                    </div>
                    <div class="col-md-12 more-link-div-wrap">
                        <div class="more-link-wrap">
                            <a class="more-link" href="<?php echo $this->config->base_url()?>storia">
                                <span class="more-link-text">Scopri di più</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="events-section">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <h2 class="title">Ultimi Eventi</h2>
                    </div>

                    <?php foreach ($events as $record): ?>
                        <div class="col-md-4 portfolio-item events">
                            <a href="<?php echo $this->config->base_url()."eventi/".$record->EventID?>">
                                <img class="img-responsive events-img" src="<?php echo $this->config->base_url().$record->Logo; ?>" alt="<?php echo $record->Title; ?>">
                            </a>
                            <a href="<?php echo $this->config->base_url()."eventi/".$record->EventID?>">
                                <h3>
                                <?php echo $record->Title; ?>
                                </h3>
                            </a>
                            <p class="event-date">
                                <?php echo $record->Place; ?>
                            </p>
                            <p class="event-place">
                                <?php echo date_format(date_create($record->StartDate),'d/m/y'); ?>
                                <?php
                                if($record->StartDate != $record->EndDate){
                                    echo ' - ' .date_format(date_create($record->EndDate),'d/m/y');
                                }
                                ?>
                            </p>
                        </div>

                    <?php endforeach; ?>
                    <div class="clearfix"></div>
                    <div class="col-md-12 more-link-div-wrap">
                        <div class="more-link-wrap">
                            <a class="more-link" href="<?php echo $this->config->base_url()?>eventi">
                                <span class="more-link-text">Scopri di più</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="members-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Nuovi Membri</h2>
                    </div>
                    <?php foreach($members as $record):?>
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
                    <div class="clearfix"></div>
                    <div class="col-md-12 more-link-div-wrap">
                        <div class="more-link-wrap">
                            <a class="more-link" href="<?php echo $this->config->base_url()?>membri">
                                <span class="more-link-text">Scopri di più</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="myths-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Miti</h2>
                    </div>
                    <?php foreach ($myths as $record): ?>
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
                    <div class="col-md-12 more-link-div-wrap">
                        <div class="more-link-wrap">
                            <a class="more-link" href="<?php echo $this->config->base_url()?>miti">
                                <span class="more-link-text">Scopri di più</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="galleries-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Ultime Foto</h2>
                    </div>
                    <?php foreach($galleries as $record):?>
                        <div class="col-md-4 portfolio-item events">
                            <img class="thumbnail img-responsive" width="100%" src="<?php echo $record->PhotoBig; ?>">
                        </div>
                    <?php endforeach; ?>
                    <div class="col-md-12 more-link-div-wrap">
                        <div class="more-link-wrap">
                            <a class="more-link" href="<?php echo $this->config->base_url()?>galleria">
                                <span class="more-link-text">Scopri di più</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php $this->load->view('partials/_footer'); ?>
</div>

</body>
</html>