<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('partials/_head'); ?>
    <link rel="stylesheet" href="<?php echo $this->config->base_url(); ?>/public/css/membri.css"/>
    <link rel="stylesheet" href="<?php echo $this->config->base_url(); ?>/public/css/galleria.css"/>
    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>public/js/lightbox.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.thumbnail').click(function () {
                $('.modal-body').empty();
                var title = $(this).parent('a').attr("title");
                $('.modal-title').html(title);
                $($(this).parents('div').html()).appendTo('.modal-body');
                $('#myModal').modal({ show: true });
            });
        });
    </script>
    <link rel="stylesheet" href="<?php echo $this->config->base_url(); ?>/public/css/eventi.css"/>


    <title>Eventi | GrezzoniForever</title>
</head>
<body>

<div>
    <?php $this->load->view('partials/_header'); ?>
    <div id="mainSection" data-section="events">
        <section class="img-top">
            <div class="container-fluid top">
                <div class="container">
                    <div class="text-left">
                        <h1>
                            Eventi
                        </h1>

                    </div>
                </div>
            </div>
        </section>
        <section class="events-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 portfolio-item text-center events">
                        <img class="img-responsive events-img" src="<?php echo $this->config->base_url().$query[0]->Logo; ?>" alt="<?php echo $query[0]->Title; ?>">
                        <h3>
                            <?php echo $query[0]->Title; ?>
                        </h3>
                        <p class="event-place">
                            <?php echo $query[0]->Place; ?>
                        </p>
                        <p class="event-date">
                            <?php echo date_format(date_create($query[0]->StartDate),'d/m/y'); ?>
                            <?php
                                if($query[0]->StartDate != $query[0]->EndDate){
                                    echo ' - ' .date_format(date_create($query[0]->EndDate),'d/m/y');
                                }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="members-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Partecipanti</h2>
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


                </div>
            </div>
        </section>
        <section class="galleries-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Foto</h2>
                    </div>
                    <?php foreach($gallery as $record):?>
                        <div class="col-md-4 portfolio-item events">
                            <a title="<?php echo $record->Description; ?>" href="<?php echo $this->config->base_url().$record->PhotoBig; ?>" rel="lightbox[plants]">
                                <img class="thumbnail img-responsive" width="100%" src="<?php echo $this->config->base_url().$record->PhotoBig; ?>">
                            </a>
                        </div>
                    <?php endforeach; ?>
                    <div tabindex="-1" class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close" type="button" data-dismiss="modal">×</button>
                                    <h3 class="modal-title">Heading</h3>
                                </div>
                                <div class="modal-body">

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
    <?php $this->load->view('partials/_footer'); ?>


</body>
</html>