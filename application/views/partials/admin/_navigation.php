<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo $this->config->base_url()?>admin">Amministrazione</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <?php echo $this->session->userdata('username') ?> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="<?php echo $this->config->base_url()?>admin/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
            </ul>
        </li>
    </ul>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">

                <li>
                    <a href="<?php echo $this->config->base_url()?>admin_storia"><i class="fa fa-file-text"></i> Storia</a>
                </li>
                <li>
                    <a href="<?php echo $this->config->base_url()?>admin_eventi"><i class="fa fa-calendar"></i> Eventi</a>
                </li>
                <li>
                    <a href="<?php echo $this->config->base_url()?>admin_membri"><i class="fa fa-users"></i> Membri</a>
                </li>
                <li>
                    <a href="<?php echo $this->config->base_url()?>admin_miti"><i class="fa fa-thumbs-o-up"></i> Miti</a>
                </li>
                <li>
                    <a href="<?php echo $this->config->base_url()?>admin_galleria"><i class="fa fa-camera"></i> Galleria</a>
                </li>
            </ul>
        </div>
    </div>
</nav>