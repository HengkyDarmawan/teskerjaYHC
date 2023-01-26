<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2"><?= $title; ?></h6>
            </div>
        </div>
        <div class="card-body" style="color: #000;">
            <form action="" method="post">
                <div class="form-group">
                    <label>Project Name</label>
                    <input type="text" name="name" class="form-control">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Client</label>
                    <input type="text" name="client" class="form-control">
                    <?= form_error('client', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Project Leader</label>
                    <input type="text" name="project_lead" class="form-control">
                    <?= form_error('project_lead', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Email Leader</label>
                    <input type="text" name="email_lead" class="form-control">
                    <?= form_error('email_lead', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Start Date</label>
                    <input type="date" name="start_date" class="form-control">
                    <?= form_error('start_date', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>End Date</label>
                    <input type="date" name="end_date" class="form-control">
                    <?= form_error('end_date', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Progress</label>
                    <input type="text" name="progress" class="form-control">
                    <?= form_error('progress', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <button type="submit" class="btn btn-primary">add</button>
                <a href="<?= base_url('dashboard'); ?>" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>