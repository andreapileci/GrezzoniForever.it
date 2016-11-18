<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('partials/_head'); ?>
    <link rel="stylesheet" href="<?php echo $this->config->base_url(); ?>public/css/galleria.css"/>
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

    <title>Galleria | GrezzoniForever</title>
</head>
<body>

<div>
    <?php $this->load->view('partials/_header'); ?>
    <div id="mainSection" data-section="galleries">
        <section class="img-top">
            <div class="container-fluid top">
                <div class="container">
                    <div class="text-left">
                        <h1>
                            GALLERIA
                        </h1>

                    </div>
                </div>
            </div>
        </section>
        <section class="galleries-section">
            <div class="container">
                <div class="row">
                    <?php foreach($query as $record):?>
                        <div class="col-md-4 portfolio-item events">
                            <a title="<?php echo $record->Description; ?>" href="<?php echo$this->config->base_url(). $record->PhotoBig; ?>" rel="lightbox[plants]">
                                <img class="thumbnail img-responsive" width="100%" src="<?php echo $this->config->base_url().$record->PhotoBig; ?>">
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
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
        </section>
    </div>
    <?php $this->load->view('partials/_footer'); ?>


</body>
</html>