<div class="container-fluid" id="content">
    <div class="row">
        <div class="col-lg-3">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800 "><?= $detail['name'] ?></h1>
            </div>
        </div>
        <div class="col-lg-3 offset-lg-6">
            <div class="text-center align-middle">
                <img src="<?= base_url('assets/img') ?>/teruk.jpeg" class="img-fluid" alt="..." width="500">
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Unit Model</th>
                                    <th>Actual Date</th>
                                    <th>PS Type</th>
                                    <th>PPM Document</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Unit Model</th>
                                    <th>Actual Date</th>
                                    <th>PS Type</th>
                                    <th>PPM Document</th>
                                </tr>
                            </tfoot>
                            <tbody>`
                                <?php foreach ($detail['actual'] as $actual) : ?>
                                    <tr>
                                        <td><?= $actual['model_name'] ?></td>
                                        <td><?= $actual['plan_date'] ?></td>
                                        <td><?= $actual['ps_type'] ?></td>
                                        <td class="text-center">
                                            <a href="<?= base_url("Admin/Home/export/$actual[model_name]/$actual[actual_id]/$actual[ps_type]")   ?>" class="btn btn-warning btn-icon-split px-3 py-2 update_button">
                                                PDF
                                            </a>
                                    </tr> <?php endforeach; ?> </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>