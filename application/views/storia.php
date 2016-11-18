<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('partials/_head'); ?>
    <link rel="stylesheet" href="<?php echo $this->config->base_url(); ?>/public/css/storia.css"/>


    <title>Storia | GrezzoniForever</title>
</head>
<body>

<div>
    <?php $this->load->view('partials/_header'); ?>
    <div id="mainSection" data-section="history">
        <section class="img-top">
            <div class="container-fluid top">
                <div class="container">
                    <div class="text-left">
                        <h1>
                            STORIA
                        </h1>

                    </div>
                </div>
            </div>
        </section>
        <section class="hystory-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 history">
                        <?php echo $query[0]->LongDescription;?>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php $this->load->view('partials/_footer'); ?>
</div>

</body>
</html>