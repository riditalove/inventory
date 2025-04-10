
<!-- Footer -->
<div class="navbar navbar-expand-lg navbar-light">
    <div class="text-center d-lg-none w-100">
        <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
            <i class="icon-unfold mr-2"></i>
            Footer
        </button>
    </div>

    <div class="navbar-collapse collapse" id="navbar-footer">
        <span class="navbar-text">
            &copy; <?php echo date('Y'); ?>. 
            <?php echo $this->Html->link(COMPANY_NAME, COMPANY_WEB, array('escape' => false)); ?>
            by
            <?php echo $this->Html->link('Software End', 'http://softwareend.com/', array('escape' => false, 'style' => 'display:none')); ?>
            <?php echo $this->Html->link('Indesore', 'http://indesore.com/', array('escape' => false, 'target' => '_blank')); ?>
        </span>

        <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item"><a href="javascript:;" class="navbar-nav-link"><span class="text-pink-400"><i class="icon-lifebuoy mr-2"></i> Support</span></a></li>
            <li class="nav-item"><a href="javascript:;" class="navbar-nav-link"><span class="text-pink-400"><i class="icon-file-text2 mr-2"></i> Docs</span></a></li>
            <li class="nav-item"><a href="javascript:;" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-map mr-2"></i> Map</span></a></li>
        </ul>
    </div>
</div>
<!-- /footer -->
