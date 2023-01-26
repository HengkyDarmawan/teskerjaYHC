<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Dashboard</h1>
    <?= $this->session->flashdata('message'); ?>
   
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2">Project Mentoring</h6>
                <a href="<?= base_url(); ?>dashboard/addProject" class="btn btn-outline-primary p-2"><i class="fas fa-plus"></i> Tambah</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="font-size:12px; text-transform: uppercase;">
                            <th>No</th>
                            <th>Project Name</th>
                            <th>Client</th>
                            <th>Project Leader</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Progress</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr style="font-size:12px; text-transform: uppercase;">
                            <th>No</th>
                            <th>Project Name</th>
                            <th>Client</th>
                            <th>Project Leader</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Progress</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($project as $p) : ?>
                            <tr  style="font-size:12px; text-transform: capitalize;">
                                <td><?= $i++; ?></td>
                                <td><?= $p['name'];?></td>
                                <td><?= $p['client'];?></td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-3" style="max-width:100px;">
                                            <img class="img-profile rounded-circle w-100 h-90"  src="<?= base_url('assets/img/profile/') . $p['image_lead'];?>" alt="images" /> 
                                        </div>
                                        <div class="col-md-9" >
                                            <strong><?= $p['project_lead'];?></strong>
                                            <br>
                                            <?= $p['email_lead'];?>
                                        </div>
                                    </div>
                                </td>
                                <td><?= mediumdate_indo($p['start_date']);?></td>
                                <td><?= mediumdate_indo($p['end_date']);?></td>
                                <td>
                                    <?php
                                    if ($p['progress'] <= "50") { ?>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: <?= $p['progress'];?>%" aria-valuenow="<?= $p['progress'];?>" aria-valuemin="0" aria-valuemax="100"><?= $p['progress'];?>%</div>
                                        </div>
                                    <?php } else if ($p['progress'] <= "90") { ?>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: <?= $p['progress'];?>%" aria-valuenow="<?= $p['progress'];?>" aria-valuemin="0" aria-valuemax="100"><?= $p['progress'];?>%</div>
                                        </div>
                                    <?php } else if($p['progress'] == "100") { ?>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: <?= $p['progress'];?>%" aria-valuenow="<?= $p['progress'];?>" aria-valuemin="0" aria-valuemax="100"><?= $p['progress'];?>%</div>
                                        </div>
                                    <?php } ?>
                                </td>
                                <td>
                                    <a href="<?= base_url(); ?>dashboard/editproject/<?= $p['id_project']; ?>" class="btn btn-outline-success btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="<?= base_url(); ?>dashboard/hapusproject/<?= $p['id_project']; ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('yakin?');"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->