<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">PPM MANAGEMENT SYSTEM</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <?php
        $id = 0;
        foreach ($reports as $report) :
        ?>
            <div class="col-lg-6">
                <!-- Bar Chart -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <a href="<?= base_url('Admin/Home') ?>/ppm_report/<?= $report['model_name'] ?>">
                            <h6 class="m-0 font-weight-bold text-primary"><?= $report['model_name'] ?></h6>
                        </a>
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

    const data = <?= json_encode($actuals) ?>;
    let number = {
        pc2000: {
            jan: {
                engine: 0,
                complete: 0
            },
            feb: {
                engine: 0,
                complete: 0
            },
            mar: {
                engine: 0,
                complete: 0
            },
            apr: {
                engine: 0,
                complete: 0
            },
            may: {
                engine: 0,
                complete: 0
            },
            jun: {
                engine: 0,
                complete: 0
            },
            jul: {
                engine: 0,
                complete: 0
            },
            aug: {
                engine: 0,
                complete: 0
            },
            sep: {
                engine: 0,
                complete: 0
            },
            oct: {
                engine: 0,
                complete: 0
            },
            nov: {
                engine: 0,
                complete: 0
            },
            dec: {
                engine: 0,
                complete: 0
            }
        },
        gd825: {
            jan: {
                engine: 0,
                complete: 0
            },
            feb: {
                engine: 0,
                complete: 0
            },
            mar: {
                engine: 0,
                complete: 0
            },
            apr: {
                engine: 0,
                complete: 0
            },
            may: {
                engine: 0,
                complete: 0
            },
            jun: {
                engine: 0,
                complete: 0
            },
            jul: {
                engine: 0,
                complete: 0
            },
            aug: {
                engine: 0,
                complete: 0
            },
            sep: {
                engine: 0,
                complete: 0
            },
            oct: {
                engine: 0,
                complete: 0
            },
            nov: {
                engine: 0,
                complete: 0
            },
            dec: {
                engine: 0,
                complete: 0
            }
        },
        hd787: {
            jan: {
                engine: 0,
                complete: 0
            },
            feb: {
                engine: 0,
                complete: 0
            },
            mar: {
                engine: 0,
                complete: 0
            },
            apr: {
                engine: 0,
                complete: 0
            },
            may: {
                engine: 0,
                complete: 0
            },
            jun: {
                engine: 0,
                complete: 0
            },
            jul: {
                engine: 0,
                complete: 0
            },
            aug: {
                engine: 0,
                complete: 0
            },
            sep: {
                engine: 0,
                complete: 0
            },
            oct: {
                engine: 0,
                complete: 0
            },
            nov: {
                engine: 0,
                complete: 0
            },
            dec: {
                engine: 0,
                complete: 0
            }
        },
        hd785: {
            jan: {
                engine: 0,
                complete: 0
            },
            feb: {
                engine: 0,
                complete: 0
            },
            mar: {
                engine: 0,
                complete: 0
            },
            apr: {
                engine: 0,
                complete: 0
            },
            may: {
                engine: 0,
                complete: 0
            },
            jun: {
                engine: 0,
                complete: 0
            },
            jul: {
                engine: 0,
                complete: 0
            },
            aug: {
                engine: 0,
                complete: 0
            },
            sep: {
                engine: 0,
                complete: 0
            },
            oct: {
                engine: 0,
                complete: 0
            },
            nov: {
                engine: 0,
                complete: 0
            },
            dec: {
                engine: 0,
                complete: 0
            }
        }
    }

    for (let i in data) {
        data[i].forEach(element => {
            let date = new Date(element.plan_date)
            switch (date.getMonth() + 1) {
                case 1:
                    if (element.ps_type == 'PS2') {
                        if (element.model_name == 'PC2000-8')
                            number.pc2000.jan.engine++
                        else if (element.model_name == 'GD825-2')
                            number.gd825.jan.engine++
                        else if (element.model_name == 'HD785-5')
                            number.hd785.jan.engine++
                        else if (element.model_name == 'HD785-7')
                            number.hd787.jan.engine++
                    } else {
                        if (element.model_name == 'PC2000-8')
                            number.pc2000.jan.complete++
                        else if (element.model_name == 'GD825-2')
                            number.gd825.jan.complete++
                        else if (element.model_name == 'HD785-5')
                            number.hd785.jan.complete++
                        else if (element.model_name == 'HD785-7')
                            number.hd787.jan.complete++
                    }
                    break;
                case 2:
                    if (element.ps_type == 'PS2') {
                        if (element.model_name == 'PC2000-8')
                            number.pc2000.feb.engine++
                        else if (element.model_name == 'GD825-2')
                            number.gd825.feb.engine++
                        else if (element.model_name == 'HD785-5')
                            number.hd785.feb.engine++
                        else if (element.model_name == 'HD785-7')
                            number.hd787.feb.engine++
                    } else {
                        if (element.model_name == 'PC2000-8')
                            number.pc2000.feb.complete++
                        else if (element.model_name == 'GD825-2')
                            number.gd825.feb.complete++
                        else if (element.model_name == 'HD785-5')
                            number.hd785.feb.complete++
                        else if (element.model_name == 'HD785-7')
                            number.hd787.feb.complete++
                    }
                    break;
                case 3:
                    if (element.ps_type == 'PS2') {
                        if (element.model_name == 'PC2000-8')
                            number.pc2000.mar.engine++
                        else if (element.model_name == 'GD825-2')
                            number.gd825.mar.engine++
                        else if (element.model_name == 'HD785-5')
                            number.hd785.mar.engine++
                        else if (element.model_name == 'HD785-7')
                            number.hd787.mar.engine++
                    } else {
                        if (element.model_name == 'PC2000-8')
                            number.pc2000.mar.complete++
                        else if (element.model_name == 'GD825-2')
                            number.gd825.mar.complete++
                        else if (element.model_name == 'HD785-5')
                            number.hd785.mar.complete++
                        else if (element.model_name == 'HD785-7')
                            number.hd787.mar.complete++
                    }
                    break;
                case 4:
                    if (element.ps_type == 'PS2') {
                        if (element.model_name == 'PC2000-8')
                            number.pc2000.apr.engine++
                        else if (element.model_name == 'GD825-2')
                            number.gd825.apr.engine++
                        else if (element.model_name == 'HD785-5')
                            number.hd785.apr.engine++
                        else if (element.model_name == 'HD785-7')
                            number.hd787.apr.engine++
                    } else {
                        if (element.model_name == 'PC2000-8')
                            number.pc2000.apr.complete++
                        else if (element.model_name == 'GD825-2')
                            number.gd825.apr.complete++
                        else if (element.model_name == 'HD785-5')
                            number.hd785.apr.complete++
                        else if (element.model_name == 'HD785-7')
                            number.hd787.apr.complete++
                    }
                    break;
                case 5:
                    if (element.ps_type == 'PS2') {
                        if (element.model_name == 'PC2000-8')
                            number.pc2000.may.engine++
                        else if (element.model_name == 'GD825-2')
                            number.gd825.may.engine++
                        else if (element.model_name == 'HD785-5')
                            number.hd785.may.engine++
                        else if (element.model_name == 'HD785-7')
                            number.hd787.may.engine++
                    } else {
                        if (element.model_name == 'PC2000-8')
                            number.pc2000.may.complete++
                        else if (element.model_name == 'GD825-2')
                            number.gd825.may.complete++
                        else if (element.model_name == 'HD785-5')
                            number.hd785.may.complete++
                        else if (element.model_name == 'HD785-7')
                            number.hd787.may.complete++
                    }
                    break;
                case 6:
                    if (element.ps_type == 'PS2') {
                        if (element.model_name == 'PC2000-8')
                            number.pc2000.jun.engine++
                        else if (element.model_name == 'GD825-2')
                            number.gd825.jun.engine++
                        else if (element.model_name == 'HD785-5')
                            number.hd785.jun.engine++
                        else if (element.model_name == 'HD785-7')
                            number.hd787.jun.engine++
                    } else {
                        if (element.model_name == 'PC2000-8')
                            number.pc2000.jun.complete++
                        else if (element.model_name == 'GD825-2')
                            number.gd825.jun.complete++
                        else if (element.model_name == 'HD785-5')
                            number.hd785.jun.complete++
                        else if (element.model_name == 'HD785-7')
                            number.hd787.jun.complete++
                    }
                    break;
                case 7:
                    if (element.ps_type == 'PS2') {
                        if (element.model_name == 'PC2000-8')
                            number.pc2000.jul.engine++
                        else if (element.model_name == 'GD825-2')
                            number.gd825.jul.engine++
                        else if (element.model_name == 'HD785-5')
                            number.hd785.jul.engine++
                        else if (element.model_name == 'HD785-7')
                            number.hd787.jul.engine++
                    } else {
                        if (element.model_name == 'PC2000-8')
                            number.pc2000.jul.complete++
                        else if (element.model_name == 'GD825-2')
                            number.gd825.jul.complete++
                        else if (element.model_name == 'HD785-5')
                            number.hd785.jul.complete++
                        else if (element.model_name == 'HD785-7')
                            number.hd787.jul.complete++
                    }
                    break;
                case 8:
                    if (element.ps_type == 'PS2') {
                        if (element.model_name == 'PC2000-8')
                            number.pc2000.aug.engine++
                        else if (element.model_name == 'GD825-2')
                            number.gd825.aug.engine++
                        else if (element.model_name == 'HD785-5')
                            number.hd785.aug.engine++
                        else if (element.model_name == 'HD785-7')
                            number.hd787.aug.engine++
                    } else {
                        if (element.model_name == 'PC2000-8')
                            number.pc2000.aug.complete++
                        else if (element.model_name == 'GD825-2')
                            number.gd825.aug.complete++
                        else if (element.model_name == 'HD785-5')
                            number.hd785.aug.complete++
                        else if (element.model_name == 'HD785-7')
                            number.hd787.aug.complete++
                    }
                    break;
                case 9:
                    if (element.ps_type == 'PS2') {
                        if (element.model_name == 'PC2000-8')
                            number.pc2000.sep.engine++
                        else if (element.model_name == 'GD825-2')
                            number.gd825.sep.engine++
                        else if (element.model_name == 'HD785-5')
                            number.hd785.sep.engine++
                        else if (element.model_name == 'HD785-7')
                            number.hd787.sep.engine++
                    } else {
                        if (element.model_name == 'PC2000-8')
                            number.pc2000.sep.complete++
                        else if (element.model_name == 'GD825-2')
                            number.gd825.sep.complete++
                        else if (element.model_name == 'HD785-5')
                            number.hd785.sep.complete++
                        else if (element.model_name == 'HD785-7')
                            number.hd787.sep.complete++
                    }
                    break;
                case 10:
                    if (element.ps_type == 'PS2') {
                        if (element.model_name == 'PC2000-8')
                            number.pc2000.oct.engine++
                        else if (element.model_name == 'GD825-2')
                            number.gd825.oct.engine++
                        else if (element.model_name == 'HD785-5')
                            number.hd785.oct.engine++
                        else if (element.model_name == 'HD785-7')
                            number.hd787.oct.engine++
                    } else {
                        if (element.model_name == 'PC2000-8')
                            number.pc2000.oct.complete++
                        else if (element.model_name == 'GD825-2')
                            number.gd825.oct.complete++
                        else if (element.model_name == 'HD785-5')
                            number.hd785.oct.complete++
                        else if (element.model_name == 'HD785-7')
                            number.hd787.oct.complete++
                    }
                    break;
                case 11:
                    if (element.ps_type == 'PS2') {
                        if (element.model_name == 'PC2000-8')
                            number.pc2000.nov.engine++
                        else if (element.model_name == 'GD825-2')
                            number.gd825.nov.engine++
                        else if (element.model_name == 'HD785-5')
                            number.hd785.nov.engine++
                        else if (element.model_name == 'HD785-7')
                            number.hd787.nov.engine++
                    } else {
                        if (element.model_name == 'PC2000-8')
                            number.pc2000.nov.complete++
                        else if (element.model_name == 'GD825-2')
                            number.gd825.nov.complete++
                        else if (element.model_name == 'HD785-5')
                            number.hd785.nov.complete++
                        else if (element.model_name == 'HD785-7')
                            number.hd787.nov.complete++
                    }
                    break;
                case 12:
                    if (element.ps_type == 'PS2') {
                        if (element.model_name == 'PC2000-8')
                            number.pc2000.dec.engine++
                        else if (element.model_name == 'GD825-2')
                            number.gd825.dec.engine++
                        else if (element.model_name == 'HD785-5')
                            number.hd785.dec.engine++
                        else if (element.model_name == 'HD785-7')
                            number.hd787.dec.engine++
                    } else {
                        if (element.model_name == 'PC2000-8')
                            number.pc2000.dec.complete++
                        else if (element.model_name == 'GD825-2')
                            number.gd825.dec.complete++
                        else if (element.model_name == 'HD785-5')
                            number.hd785.dec.complete++
                        else if (element.model_name == 'HD785-7')
                            number.hd787.dec.complete++
                    }
                    break;
            }
        })
    }

    let no = 0
    for (let i in number) {
        var ctx = document.getElementById(`myBarChart${no}`);
        var myBarChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                        label: "Engine",
                        backgroundColor: "#e74a3b",
                        hoverBackgroundColor: "#c23f32",
                        borderColor: "#4e73df",
                        data: [
                            number[i].jan.engine,
                            number[i].feb.engine,
                            number[i].mar.engine,
                            number[i].apr.engine,
                            number[i].may.engine,
                            number[i].jun.engine,
                            number[i].jul.engine,
                            number[i].aug.engine,
                            number[i].sep.engine,
                            number[i].oct.engine,
                            number[i].nov.engine,
                            number[i].dec.engine
                        ],
                    },
                    {
                        label: "Complete",
                        backgroundColor: "#1cc88a",
                        hoverBackgroundColor: "#19a875",
                        borderColor: "#4e73df",
                        data: [
                            number[i].jan.complete,
                            number[i].feb.complete,
                            number[i].mar.complete,
                            number[i].apr.complete,
                            number[i].may.complete,
                            number[i].jun.complete,
                            number[i].jul.complete,
                            number[i].aug.complete,
                            number[i].sep.complete,
                            number[i].oct.complete,
                            number[i].nov.complete,
                            number[i].dec.complete
                        ],
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
                            unit: "Unit",
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                            maxTicksLimit: 12,
                        },
                        maxBarThickness: 39,
                    }, ],
                    yAxes: [{
                        ticks: {
                            min: 0,
                            max: 10,
                            maxTicksLimit: 5,
                            padding: 3,
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2],
                        }
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
                    // callbacks: {
                    //     label: function(tooltipItem, chart) {
                    //         var datasetLabel =
                    //             chart.datasets[tooltipItem.datasetIndex].label || "";
                    //         return datasetLabel + ": $" + number_format(tooltipItem.yLabel);
                    //     },
                    // },
                },
            },
        });
        no++
    }
</script>