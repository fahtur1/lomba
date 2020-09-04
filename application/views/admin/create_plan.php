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
                        <!-- <option value="PC2000-8">PC2000-8</option>
                        <option value="GD825A-2">GD825A-2</option>
                        <option value="HD785-7">HD785-7</option>
                        <option value="HD785-5">HD785-5</option> -->
                        <?php foreach ($models as $model) : ?>
                            <option value="<?= $model['model_id'] ?>"><?= $model['model_name'] ?></option>
                        <?php endforeach; ?>
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

<script>
    // Combo Box Components
    let unitModel = document.getElementById("unit_model");
    let unitCode = document.getElementById("unit_code");

    unitModel.addEventListener("change", (e) => {
        changeSelected(e.target.value);
    });

    let changeSelected = (selected) => {
        let data = <?= json_encode($product) ?>;
        let select = listUnitCode(selected, data).sort();
        unitCode.innerHTML = selectedUnit(select);
    };

    let selectedUnit = (list) => {
        let value = "";

        list.forEach(e => {
            value += `<option value="${e.product_id}">${e.product_code}</option>`
        });

        return value;
    };

    let listUnitCode = (model, data) => {
        let value = [];

        switch (model) {
            case "1":
                data.forEach(element => {
                    if (element.model_id == "1") {
                        value.push({
                            product_id: element.product_id,
                            product_code: element.product_code,
                        })
                    }
                });
                break;
            case "2":
                data.forEach(element => {
                    if (element.model_id == "2") {
                        value.push({
                            product_id: element.product_id,
                            product_code: element.product_code,
                        })
                    }
                });
                break;
            case "3":
                data.forEach(element => {
                    if (element.model_id == "3") {
                        value.push({
                            product_id: element.product_id,
                            product_code: element.product_code,
                        })
                    }
                });
                break;
            case "4":
                data.forEach(element => {
                    if (element.model_id == "4") {
                        value.push({
                            product_id: element.product_id,
                            product_code: element.product_code,
                        })
                    }
                });
                break;
        }
        return value;
    };
</script>