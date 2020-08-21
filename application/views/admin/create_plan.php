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
        // for (let i = 0; i < list.length; i++) {
        //     value += `<option value="${list[i]}">${list[i]}</option>`;
        // }
        return value;
    };

    let listUnitCode = (model, data) => {
        let value = [];

        switch (model) {
            case "1":
                // value.push("EX275", "EX276", "EX277", "EX278");
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
                // value.push(
                //     "MG4003",
                //     "MG4004",
                //     "MG4005",
                //     "MG815",
                //     "MG816",
                //     "MG817",
                //     "MG818",
                //     "MG5301",
                //     "MG5302",
                //     "MG5303"
                // );
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
                // value.push(
                //     "HD616",
                //     "HD617",
                //     "HD618",
                //     "HD619",
                //     "HD620",
                //     "HD1114",
                //     "HD1115",
                //     "HD1116",
                //     "HD1117",
                //     "HD1118",
                //     "HD1119",
                //     "HD1120",
                //     "HD1121",
                //     "HD1122",
                //     "HD1123",
                //     "HD1124",
                //     "HD1125",
                //     "HD1130",
                //     "HD1131",
                //     "HD1132",
                //     "HD1133",
                //     "HD1134",
                //     "HD1135",
                //     "HD1136",
                //     "HD1137",
                //     "HD1138",
                //     "HD1139",
                //     "HD1140",
                //     "HD1141",
                //     "HD1142",
                //     "HD1143",
                //     "HD6601",
                //     "HD6602",
                //     "HD6603",
                //     "HD6604",
                //     "WT9012"
                // );
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
                // value.push(
                //     "HD1109",
                //     "HD1110",
                //     "HD1111",
                //     "HD1112",
                //     "HD1113",
                //     "HD601",
                //     "HD602",
                //     "HD603",
                //     "HD604",
                //     "HD605",
                //     "HD606",
                //     "HD607",
                //     "HD608",
                //     "HD609",
                //     "HD610",
                //     "HD611",
                //     "HD612",
                //     "HD613",
                //     "HD614",
                //     "HD615"
                // );
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