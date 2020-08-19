<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">CREATE PLAN PS</h1>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <form method="post" action="<?= base_url('admin') ?>/home/create_plan">
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
                <button type="submit" class="btn btn-primary btn-icon-split">
                    <span class="text">Submit</span>
                </button>
            </form>
        </div>
    </div>
</div>