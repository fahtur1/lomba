// Combo Box Components
let unitModel = document.getElementById("unit_model");
let unitCode = document.getElementById("unit_code");

unitModel.addEventListener("change", (e) => {
	changeSelected(e.target.value);
});

let changeSelected = (selected) => {
	let select = listUnitCode(selected).sort();
	unitCode.innerHTML = selectedUnit(select);
};

let selectedUnit = (list) => {
	let value = "";
	for (let i = 0; i < list.length; i++) {
		value += `<option value="${list[i]}">${list[i]}</option>`;
	}
	return value;
};

let listUnitCode = (model) => {
	let value = [];
	switch (model) {
		case "PC2000-8":
			value.push("EX275", "EX276", "EX277", "EX278");
			break;
		case "GD825A-2":
			value.push(
				"MG4003",
				"MG4004",
				"MG4005",
				"MG815",
				"MG816",
				"MG817",
				"MG818",
				"MG5301",
				"MG5302",
				"MG5303"
			);
			break;
		case "HD785-7":
			value.push(
				"HD616",
				"HD617",
				"HD618",
				"HD619",
				"HD620",
				"HD1114",
				"HD1115",
				"HD1116",
				"HD1117",
				"HD1118",
				"HD1119",
				"HD1120",
				"HD1121",
				"HD1122",
				"HD1123",
				"HD1124",
				"HD1125",
				"HD1130",
				"HD1131",
				"HD1132",
				"HD1133",
				"HD1134",
				"HD1135",
				"HD1136",
				"HD1137",
				"HD1138",
				"HD1139",
				"HD1140",
				"HD1141",
				"HD1142",
				"HD1143",
				"HD6601",
				"HD6602",
				"HD6603",
				"HD6604",
				"WT9012"
			);
			break;
		case "HD785-5":
			value.push(
				"HD1109",
				"HD1110",
				"HD1111",
				"HD1112",
				"HD1113",
				"HD601",
				"HD602",
				"HD603",
				"HD604",
				"HD605",
				"HD606",
				"HD607",
				"HD608",
				"HD609",
				"HD610",
				"HD611",
				"HD612",
				"HD613",
				"HD614",
				"HD615"
			);
			break;
	}
	return value;
};

// // Update Button Components
// let updateButton = document.getElementsByClassName("update_button");

// // Date Components
// let dateForm = document.getElementById("date");

// // Type ComboBox Components
// let typePs = document.getElementById("ps_type");

// // Remark Components
// let remark = document.getElementById("remark");
// let idHidden = document.getElementById("id");

// // Button Update Clicked
// for (let item of updateButton) {
// 	item.addEventListener("click", async (e) => {
// 		let id = e.target.dataset.productId;

// 		let result = await fetch(
// 			`http://localhost/lomba/admin/home/getProductById/${id}`,
// 			{
// 				method: "post",
// 			}
// 		);

// 		let dummy = await result.json();
// 		let product = dummy.data;

// 		idHidden.value = product.product_id;
// 		unitModel.value = product.product_model;
// 		changeSelected(product.product_model);
// 		unitCode.value = product.product_code;
// 		dateForm.value = product.product_plandate;
// 		typePs.value = product.product_type;
// 		remark.value = product.product_remark;
// 	});
// }

// Submit Update Click Button

// let formUpdate = document.getElementById("form_update");

// formUpdate.addEventListener("submit", async (e) => {
// 	e.preventDefault();

// 	let id = e.target.dataset.id;
// 	let data = {
// 		product_id: id,
// 		product_model: unitModel.value,
// 		product_code: unitCode.value,
// 		product_plandate: dateForm.value,
// 		product_type: typePs.value,
// 		product_remark: remark.value,
// 	};

// 	$.ajax({
// 		type: "POST",
// 		url: "http://localhost/lomba/admin/home/updateData",
// 		data: data,
// 		success: function (response) {
// 			console.log(JSON.parse(response));
// 		},
// 	});

// 	// console.log(await result.json());
// 	e.target.removeAttribute("data-id");
// });
