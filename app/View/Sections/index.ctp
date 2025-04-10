<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><?php echo $this->Html->link('Home', array('controller' => 'users', 'action' => 'dashboard'), array('escape' => false)); ?></li>
                <li class="breadcrumb-item active">Section List</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <?php echo $this->Html->link("<i class='fa fa-plus-circle'></i> Add New", array('action' => 'add'), array('class' => 'btn pull-right btn-success', 'escape' => false)); ?>

        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#SrcCompanyId').change(function () {
                ajax_getdepartment_by_company($('#SrcCompanyId').val());
            });
<?php if (!empty($this->request->data['Src']['company_id'])) { ?>
                ajax_getdepartment_by_company(<?php echo $this->request->data['Src']['company_id']; ?>, <?php echo $this->request->data['Src']['department_id']; ?>);
<?php } ?>
        });
        function ajax_getdepartment_by_company(cid, uid) {
            if (cid !== '') {
                $.ajax({
                    type: "POST",
                    url: '<?php echo $this->Html->url(array('controller' => 'departments', 'action' => 'ajax_getdepartments')); ?>',
                    data: {model: 'Src', company_id: cid, department_id: uid},
                    success: function (data) {
                        $("#div_department_id").html(data);
                    }
                });
            }
        }
    </script>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <?php echo $this->Form->create('Src', array('class' => 'form-horizontal')); ?>
                            <table class="table table-condensed table-bordered table-hover contact-list no-wrap">
                                <tr>
                                    <td><?php echo $this->Form->input('company_id', array('empty' => 'Please Select')); ?></td>
                                    <td id="div_department_id"><?php echo $this->Form->input('department_id', array('empty' => 'Please Select')); ?></td>
                                    <td><?php echo $this->Form->input('name', array('style' => 'width:90%')); ?></td>
                                    <td><?php echo $this->Form->button('Search', array('class' => 'btn btn-info', 'name' => 'btnsrc')); ?></td>
                                </tr>
                            </table>

                            <p class="paginginfo float-left">
                                <?php
                                echo $this->Paginator->counter(array(
                                    'format' => __('Showing {:start} to {:end} of {:count} records')
                                ));
                                ?>                    
                            </p>
                            <ul class="pagination float-right">
                                <?php
                                echo $this->Paginator->first();
                                echo $this->Paginator->prev();
                                echo $this->Paginator->numbers();
                                echo $this->Paginator->next();
                                echo $this->Paginator->last();
                                ?>
                            </ul> 
                            <div class="clear clearfix"></div>

                            <?php echo $this->Form->end(); ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <!-- column -->

        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Section List</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="table-responsive">
                        <table class="table table-condensed table-bordered table-hover contact-list no-wrap">
                            <thead>
                                <tr>
                                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('company_id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('department_id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('name'); ?></th>
                                    <th><?php echo $this->Paginator->sort('description'); ?></th>
                                    <th><?php echo $this->Paginator->sort('status'); ?></th>
                                    <th class="actions"><?php echo __('Actions'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($sections as $section): ?>
                                    <tr>
                                        <td><?php echo h($section['Section']['id']); ?></td>
                                        <td>
                                            <?php echo $this->Html->link($companies[$section['Department']['company_id']], array('controller' => 'companies', 'action' => 'view', $section['Department']['company_id'])); ?></span>
                                        </td>
                                        <td>
                                            <span class="label" style="background:<?php echo $section['Department']['color_code']; ?>"><?php echo $this->Html->link($section['Department']['name'], array('controller' => 'departments', 'action' => 'view', $section['Department']['id'])); ?></span>
                                        </td>
                                        <td><?php echo h($section['Section']['name']); ?></td>
                                        <td><?php echo h($section['Section']['description']); ?></td>
                                        <td><?php echo $status[$section['Section']['status']]; ?></td>
                                        <td class="actions">
                                            <?php echo $this->Html->link(__('<i class="icon-eye" title="View"></i>'), array('action' => 'view', $section['Section']['id']), array('escape' => false)); ?>
                                            <?php echo $this->Html->link(__('<i class="icon-pencil7 text-success" title="Edit"></i>'), array('action' => 'edit', $section['Section']['id']), array('escape' => false)); ?>
                                            <?php echo $this->Form->postLink(__('<i class="icon-trash text-danger" title="Delete"></i>'), array('action' => 'delete', $section['Section']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $section['Section']['id']), 'escape' => false)); ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- column -->

    </div>

</div>