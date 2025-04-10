<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active">Edit Company Type</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link("<i class='fa fa-list-ul'></i> Company Type List", array('action' => 'index'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <h3 class="box-title m-b-0">Edit Company Type</h3>
                <p class="text-muted m-b-30 font-13"> </p>
                <?php echo $this->Form->create('Companytype',array('class'=>'form-horizontal'));?>
               
                    <div class="form-group row">
                        <label class="col-sm-3 text-right control-label col-form-label">Name</label>
                        <div class="col-sm-9">
                            <?php 
                            echo $this->Form->input('id');
                            echo $this->Form->input('name',array('label'=>false));
                            ?>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-3 text-right control-label col-form-label">Description</label>
                        <div class="col-sm-9">
                            <?php echo $this->Form->input('description', array('placeholder' => 'Place some text here', 'rows' => 5, 'div' => FALSE,'label'=>false));?>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-3 text-right control-label col-form-label"></label>
                        <div class="col-sm-9">
                             <?php echo $this->Form->input('status'); ?>
                        </div>
                    </div>
                    
                    <div class="form-group m-b-0">
                        <div class="offset-sm-3 col-sm-9">
                            <?php echo $this->Form->end(__('Submit'));?>
                            
                        </div>
                    </div>
               
            </div>
        </div>

    </div> 

</div>

