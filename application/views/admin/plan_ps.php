<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">PLAN PS</h1>
        <a href="<?= base_url('admin/home/create_plan') ?>" class="btn btn-primary float-right text-white">Add Data</a>
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
                    <tfoot>
                        <tr>
                            <th>Unit Model</th>
                            <th>Unit Code</th>
                            <th>Plan Date</th>
                            <th>PS Type</th>
                            <th>Remark</th>
                            <th>PPM Sheet</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($plans as $plan) : ?>
                            <tr>
                                <td><?= $plan['model_name'] ?></td>
                                <td><?= $plan['product_code'] ?></td>
                                <td><?= $plan['plan_date'] ?></td>
                                <td><?= $plan['ps_type'] ?></td>
                                <td><?= $plan['remark'] ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url("admin/home/update_plan/") . $plan['model_name']  ?>" class="btn btn-warning btn-icon-split px-3 py-2 update_button">
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

<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="<?= base_url('admin') ?>/home/update_plan">
                <div class="modal-body">
                    <input type="text" name="id" id="id" hidden>
                    <div class="form-group">
                        <label for="inputState">Unit Model</label>
                        <select id="unit_model" class="form-control" name="unit_model">
                            <option hidden>Choose</option>
                            <option value="PC2000-8">PC2000-8</option>
                            <option value="GD825A-2">GD825A-2</option>
                            <option value="HD785-7">HD785-7</option>
                            <option value="HD785-5">HD785-5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputState">Unit Code</label>
                        <select id="unit_code" class="form-control" name="unit_code">
                            <option selected>Choose</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Plan Date</label>
                        <input type="date" id="date" name="date" max="2050-12-31" min="<?= date('Y-m-d') ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputState">PS Type</label>
                        <select id="ps_type" class="form-control" name="ps_type">
                            <option hidden>Choose</option>
                            <option value="PS2">PS2</option>
                            <option value="PS3">PS3</option>
                            <option value="PS4">PS4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="remark">Remark</label>
                        <input type="text" class="form-control" id="remark" name="remark">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>