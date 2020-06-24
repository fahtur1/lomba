<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">PLAN PS</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
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
                        <?php foreach ($products as $product) : ?>
                            <tr>
                                <td><?= $product['product_model'] ?></td>
                                <td><?= $product['product_code'] ?></td>
                                <td><?= $product['product_plandate'] ?></td>
                                <td><?= $product['product_type'] ?></td>
                                <td><?= $product['product_remark'] ?></td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-success btn-icon-split">
                                        <span class="text">Update</span>
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