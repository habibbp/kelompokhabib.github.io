<?php 
$page_id = null;
$comp_model = new SharedController;
$current_page = $this->set_current_page_link();
?>
<div>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <div class="">    <style>
                        body
                        {
                        background-image:no-repeat;
                        background-size:cover;
                        }
                    </style>
                <div><center><h1></h1>GRAFIK PENJUALAN MOTOR</center></h1></div>
            </div><h4 ></h4>
        </div>
        <div class="col-md-4 comp-grid">
            <?php $rec_count = $comp_model->getcount_motor();  ?>
            <a class="animated jello record-count alert alert-dark"  href="<?php print_link("motor/") ?>">
                <div class="row">
                    <div class="col-2">
                        <i class="fa fa-motorcycle fa-3x"></i>
                    </div>
                    <div class="col-10">
                        <div class="flex-column justify-content align-center">
                            <div class="title">Motor</div>
                            <small class=""></small>
                        </div>
                    </div>
                    <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                </div>
            </a>
        </div>
        <div class="col-md-4 comp-grid">
            <?php $rec_count = $comp_model->getcount_transaksi();  ?>
            <a class="animated jello record-count card bg-success text-white"  href="<?php print_link("transaksi/") ?>">
                <div class="row">
                    <div class="col-2">
                        <i class="fa fa-th fa-3x"></i>
                    </div>
                    <div class="col-10">
                        <div class="flex-column justify-content align-center">
                            <div class="title">Transaksi</div>
                            <small class=""></small>
                        </div>
                    </div>
                    <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                </div>
            </a>
        </div>
        <div class="col-md-4 comp-grid">
            <?php $rec_count = $comp_model->getcount_transaksidetail();  ?>
            <a class="animated jello record-count card bg-danger text-white"  href="<?php print_link("transaksi_detail/") ?>">
                <div class="row">
                    <div class="col-2">
                        <i class="fa fa-star-o fa-3x"></i>
                    </div>
                    <div class="col-10">
                        <div class="flex-column justify-content align-center">
                            <div class="title">Transaksi Detail</div>
                            <small class=""></small>
                        </div>
                    </div>
                    <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                </div>
            </a>
        </div>
    </div>
</div>
</div>
<div  class="">
    <div class="container">
        <div class="row ">
            <div class="col-md-6 comp-grid">
                <div class="card card-body">
                    <?php 
                    $chartdata = $comp_model->barchart_transaksi();
                    ?>
                    <div>
                        <h4>transaksi</h4>
                        <small class="text-muted"></small>
                    </div>
                    <hr />
                    <canvas id="barchart_transaksi"></canvas>
                    <script>
                        $(function (){
                        var chartData = {
                        labels : <?php echo json_encode($chartdata['labels']); ?>,
                        datasets : [
                        {
                        label: 'transaksi',
                        backgroundColor:'rgba(255 , 0 , 0, 0.5)',
                        type:'bar',
                        borderWidth:3,
                        data : <?php echo json_encode($chartdata['datasets'][0]); ?>,
                        }
                        ]
                        }
                        var ctx = document.getElementById('barchart_transaksi');
                        var chart = new Chart(ctx, {
                        type:'bar',
                        data: chartData,
                        options: {
                        scaleStartValue: 0,
                        responsive: true,
                        scales: {
                        xAxes: [{
                        ticks:{display: true},
                        gridLines:{display: true},
                        categoryPercentage: 1.0,
                        barPercentage: 0.8,
                        scaleLabel: {
                        display: true,
                        labelString: ""
                        },
                        }],
                        yAxes: [{
                        ticks: {
                        beginAtZero: true,
                        display: true
                        },
                        scaleLabel: {
                        display: true,
                        labelString: ""
                        }
                        }]
                        },
                        }
                        ,
                        })});
                    </script>
                </div>
            </div>
            <div class="col-md-6 comp-grid">
                <div class="card card-body">
                    <?php 
                    $chartdata = $comp_model->barchart_datatransaksipenjualmotor();
                    ?>
                    <div>
                        <h4>Data Transaksi penjual motor</h4>
                        <small class="text-muted"></small>
                    </div>
                    <hr />
                    <canvas id="barchart_datatransaksipenjualmotor"></canvas>
                    <script>
                        $(function (){
                        var chartData = {
                        labels : <?php echo json_encode($chartdata['labels']); ?>,
                        datasets : [
                        {
                        label: 'Jumlah motor',
                        backgroundColor:'rgba(255 , 128 , 0, 0.5)',
                        type:'bar',
                        borderWidth:3,
                        data : <?php echo json_encode($chartdata['datasets'][0]); ?>,
                        }
                        ]
                        }
                        var ctx = document.getElementById('barchart_datatransaksipenjualmotor');
                        var chart = new Chart(ctx, {
                        type:'bar',
                        data: chartData,
                        options: {
                        scaleStartValue: 0,
                        responsive: true,
                        scales: {
                        xAxes: [{
                        ticks:{display: true},
                        gridLines:{display: true},
                        categoryPercentage: 1.0,
                        barPercentage: 0.8,
                        scaleLabel: {
                        display: true,
                        labelString: ""
                        },
                        }],
                        yAxes: [{
                        ticks: {
                        beginAtZero: true,
                        display: true
                        },
                        scaleLabel: {
                        display: true,
                        labelString: ""
                        }
                        }]
                        },
                        }
                        ,
                        })});
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
