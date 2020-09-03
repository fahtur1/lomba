<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">ACTUAL PLAN PS</h1>
    </div>
    <?= $this->session->flashdata('message'); ?>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Unit Model</th>
                            <th>Unit Code</th>
                            <th>Plan Date</th>
                            <th>Actual Date</th>
                            <th>PS Type</th>
                            <th>Leader Name</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Unit Model</th>
                            <th>Unit Code</th>
                            <th>Plan Date</th>
                            <th>Actual Date</th>
                            <th>PS Type</th>
                            <th>Leader Name</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($gd825 as $gd) : ?>
                            <tr>
                                <td><?= $gd['model_name'] ?></td>
                                <td><?= $gd['product_code'] ?></td>
                                <td><?= $gd['plan_date'] ?></td>
                                <td><?= $gd['actual_date'] ?></td>
                                <td><?= $gd['ps_type'] ?></td>
                                <td><?= $gd['leader_name'] ?></td>
                            </tr>
                        <?php endforeach ?>
                        <?php foreach ($hd785 as $hd5) : ?>
                            <tr>
                                <td><?= $hd5['model_name'] ?></td>
                                <td><?= $hd5['product_code'] ?></td>
                                <td><?= $hd5['plan_date'] ?></td>
                                <td><?= $hd5['actual_date'] ?></td>
                                <td><?= $hd5['ps_type'] ?></td>
                                <td><?= $hd5['leader_name'] ?></td>
                            </tr>
                        <?php endforeach ?>
                        <?php foreach ($hd787 as $hd7) : ?>
                            <tr>
                                <td><?= $hd7['model_name'] ?></td>
                                <td><?= $hd7['product_code'] ?></td>
                                <td><?= $hd7['plan_date'] ?></td>
                                <td><?= $hd7['actual_date'] ?></td>
                                <td><?= $hd7['ps_type'] ?></td>
                                <td><?= $hd7['leader_name'] ?></td>
                            </tr>
                        <?php endforeach ?>
                        <?php foreach ($pc2000 as $pc) : ?>
                            <tr>
                                <td><?= $pc['model_name'] ?></td>
                                <td><?= $pc['product_code'] ?></td>
                                <td><?= $pc['plan_date'] ?></td>
                                <td><?= $pc['actual_date'] ?></td>
                                <td><?= $pc['ps_type'] ?></td>
                                <td><?= $pc['leader_name'] ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>