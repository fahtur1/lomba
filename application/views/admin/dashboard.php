<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">PPM MANAGEMENT SYSTEM</h1>
  </div>

  <!-- Content Row -->
  <div class="row">
    <?php $id = 0;
    foreach ($reports as $report) : ?>
      <div class="col-lg-6">
        <!-- Bar Chart -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $report['name'] ?></h6>
          </div>
          <div class="card-body">
            <div class="chart-bar">
              <canvas id="myBarChart<?= $id++ ?>"></canvas>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<!-- /.container-fluid -->
<script>
  (Chart.defaults.global.defaultFontFamily = "Nunito"),
  '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
  Chart.defaults.global.defaultFontColor = "#858796";

  function number_format(number, decimals, dec_point, thousands_sep) {
    // *     example: number_format(1234.56, 2, ',', ' ');
    // *     return: '1 234,56'
    number = (number + "").replace(",", "").replace(" ", "");
    var n = !isFinite(+number) ? 0 : +number,
      prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
      sep = typeof thousands_sep === "undefined" ? "," : thousands_sep,
      dec = typeof dec_point === "undefined" ? "." : dec_point,
      s = "",
      toFixedFix = function(n, prec) {
        var k = Math.pow(10, prec);
        return "" + Math.round(n * k) / k;
      };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : "" + Math.round(n)).split(".");
    if (s[0].length > 3) {
      s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || "").length < prec) {
      s[1] = s[1] || "";
      s[1] += new Array(prec - s[1].length + 1).join("0");
    }
    return s.join(dec);
  }

  for (let i = 0; i < 4; i++) {
    var ctx = document.getElementById(`myBarChart${i}`);
    var myBarChart = new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["PS2", "PS3", "PS4"],
        datasets: [{
            label: "Actual",
            backgroundColor: "#e74a3b",
            hoverBackgroundColor: "#c23f32",
            borderColor: "#4e73df",
            data: [4215, 5312, 6251],
          },
          {
            label: "Plan",
            backgroundColor: "#1cc88a",
            hoverBackgroundColor: "#19a875",
            borderColor: "#4e73df",
            data: [4215, 5312, 6251],
          },
        ],
      },
      options: {
        maintainAspectRatio: false,
        layout: {
          padding: {
            left: 10,
            right: 25,
            top: 25,
            bottom: 0,
          },
        },
        scales: {
          xAxes: [{
            time: {
              unit: "PS",
            },
            gridLines: {
              display: false,
              drawBorder: false,
            },
            ticks: {
              maxTicksLimit: 6,
            },
            maxBarThickness: 39,
          }, ],
          yAxes: [{
            ticks: {
              min: 2000,
              max: 8000,
              maxTicksLimit: 5,
              padding: 3,
              // Include a dollar sign in the ticks
              callback: function(value, index, values) {
                return "$" + number_format(value);
              },
            },
            gridLines: {
              color: "rgb(234, 236, 244)",
              zeroLineColor: "rgb(234, 236, 244)",
              drawBorder: false,
              borderDash: [2],
              zeroLineBorderDash: [2],
            },
          }, ],
        },
        legend: {
          display: true,
        },
        tooltips: {
          titleMarginBottom: 10,
          titleFontColor: "#6e707e",
          titleFontSize: 14,
          backgroundColor: "rgb(255,255,255)",
          bodyFontColor: "#858796",
          borderColor: "#dddfeb",
          borderWidth: 1,
          xPadding: 15,
          yPadding: 15,
          displayColors: false,
          caretPadding: 10,
          callbacks: {
            label: function(tooltipItem, chart) {
              var datasetLabel =
                chart.datasets[tooltipItem.datasetIndex].label || "";
              return datasetLabel + ": $" + number_format(tooltipItem.yLabel);
            },
          },
        },
      },
    });
  }
</script>