<style>
    .font-light .fa {
        margin-top: -14px;
        font-size: 45px;
    }
    .round.big {font-size:130%}
    .round.big a{
        color: #fff;
    }
</style>
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-6 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
        <div class="col-md-6 col-6 text-right">
            <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10"><i class="fa fa-spin fa-cog text-white"></i></button>
            <?php echo $this->Html->link('<button class="btn btn-success"><i class="fa fa-bolt"></i> My Attendance Report</button>', array('controller' => 'attendances', 'action' => 'my_attendance', $this->request->data['Src']['date']), array('escape' => false, 'data-toggle' => 'tooltip', 'title' => 'Attendance statistics of last 1 month', 'class' => 'pull-right')); ?>
        </div>
    </div>

    <?php echo $this->Form->create('Src', array('class' => 'form-horizontal')); ?>
    <div class="row">
        <div class="col-lg-1 col-md-1">Month</div>
        <div class="col-lg-3 col-md-3"><?php echo $this->Form->input('date', array('label' => false, 'autocomplete' => 'off')); ?></div>
        <div class="col-lg-4 col-md-4"><?php echo $this->Form->button('Search', array('class' => 'btn btn-sm btn-info', 'name' => 'btnsrc')); ?></div>
    </div>
    <?php echo $this->Form->end(); ?>

    <!-- .right-sidebar -->
    <div class="right-sidebar">
        <div class="slimscrollright">
            <div class="rpanel-title"> Service Panel <span><i class="fa fa-times-circle right-side-toggle"></i></span> </div>
            <div class="r-panel-body">
                <ul id="themecolors" class="m-t-20">
                    <li><b>With Light sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                    <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                    <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                    <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                    <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                    <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                </ul>

            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#SrcDate').datepicker({
            format: "yyyy-mm",
            viewMode: "months",
            minViewMode: "months",
            autoclose: true
        });
    });
    $.toast({
        heading: 'Welcome to <?php echo COMPANY_NAME; ?>',
        text: 'Surf left panel and go to desired pages.',
        position: 'top-center',
        loaderBg: '#ff6849',
        icon: 'success',
        hideAfter: 5000,
        stack: 6
    });
</script>
