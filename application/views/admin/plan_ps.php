<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">PLAN PS</h1>
        <?php if ($this->session->userdata('role') == 1) : ?>
            <a href="<?= base_url('Admin/Home/create_plan') ?>" class="btn btn-primary float-right text-white">Add Data</a>
        <?php endif; ?>
    </div>
    <?= $this->session->flashdata('message'); ?>
    <div class="card shadow mb-4">
        <!-- <div class="card-header py-3">
            <h6 class="card-title m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div> -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Unit Model</th>
                            <th>Unit Code</th>
                            <th>Plan Date</th>
                            <th>PS Type</th>
                            <th>Remark</th>
                            <th>PPM Sheet</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($plans as $plan) : ?>
                            <tr>
                                <td><?= $plan['model_name'] ?></td>
                                <td><?= $plan['product_code'] ?></td>
                                <td><?= $plan['plan_date'] ?></td>
                                <td><?= $plan['ps_type'] ?></td>
                                <td><?= $plan['remark'] ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url("Admin/Home/update_plan/") . $plan['model_name'] . "/" . $plan['ps_type'] . "/" . $plan['plan_id'] . "/" . $plan['product_code']  ?>" class="btn btn-warning btn-icon-split px-3 py-2 update_button">
                                        Update
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>