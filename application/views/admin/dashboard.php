<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">PPM MANAGEMENT SYSTEM</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->
  <?php
  $id = 0;
  $nama = [
    'PC2000-8',
    'GD825A-2',
    'HD785-7',
    'HD785-5'
  ];
  for ($i = 0; $i < 2; $i++) :
  ?>
    <div class="row">
      <div class="col-lg-6">
        <!-- Bar Chart -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $nama[$i] ?></h6>
          </div>
          <div class="card-body">
            <div class="chart-bar">
              <canvas id="myBarChart<?= $id++ ?>"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <!-- Bar Chart -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $nama[$i + 1] ?></h6>
          </div>
          <div class="card-body">
            <div class="chart-bar">
              <canvas id="myBarChart<?= $id + 1 ?>"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php
  endfor;
  ?>
</div>
<!-- /.container-fluid -->