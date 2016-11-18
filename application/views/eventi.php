<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('partials/_head'); ?>
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
                            EVENTI
                        </h1>

                    </div>
                </div>
            </div>
        </section>
        <section class="events-section">
            <div class="container">
                <div class="row">
                    <?php foreach ($query as $record): ?>
                    <div class="col-md-4 portfolio-item events">
                        <a href="<?php echo $this->config->base_url()."eventi/".$record->EventID?>">
                            <img class="img-responsive events-img" src="<?php echo $this->config->base_url().$record->Logo; ?>" alt="<?php echo $record->Title; ?>">
                        </a>
                        <a href="<?php echo $this->config->base_url()."eventi/".$record->EventID?>">
                            <h3>
                                <?php echo $record->Title; ?>
                            </h3>
                        </a>
                        <p class="event-place">
                            <?php echo $record->Place; ?>
                        </p>
                        <p class="event-date">
                            <?php echo date_format(date_create($record->StartDate),'d/m/y'); ?>
                           <?php
                            if($record->StartDate != $record->EndDate){
                                echo ' - ' .date_format(date_create($record->EndDate),'d/m/y');
                            }
                            ?>
                        </p>
                    </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>
<?php $this->load->view('partials/_footer'); ?>
</div>

</body>
</html>