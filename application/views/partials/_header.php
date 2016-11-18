<nav class="navbar navbar-inverse navbar-fixed-top main-top-navbar ">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $this->config->base_url()?>home">
                <div id="name">
                    <span class="azzurro">Grezzoni</span><span class="green">FOREVER</span>
                </div>
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse ">

            <ul class="nav navbar-nav navbar-right">
                <li data-section="home"><a href="<?php echo $this->config->base_url()?>home">Home</a></li>
                <li data-section="history"><a href="<?php echo $this->config->base_url()?>storia">Storia</a></li>
                <li data-section="events"><a href="<?php echo $this->config->base_url()?>eventi">Eventi</a></li>
                <li data-section="members"><a href="<?php echo $this->config->base_url()?>membri">Membri</a></li>
                <li data-section="myths"><a href="<?php echo $this->config->base_url()?>miti">Miti</a></li>
                <li data-section="galleries"><a href="<?php echo $this->config->base_url()?>galleria">Galleria</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>
