<section>
    <div class="table-responsive">
        <div class="container">
            <div class="row">
                <div class="col-sm-11">


                    <canvas id="myChart3" width="800" height="600"></canvas>
                    <script src="/template/js/Chart.min.js"></script>
                    <script>
                        var ctx = document.getElementById("myChart3");
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: <?= $productsStr; ?>,
                                datasets: [{
                                    data: <?= $productsViewsStr; ?>,
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(255, 159, 64, 0.2)'
                                    ],
                                    borderColor: [
                                        'rgba(255,99,132,1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(153, 102, 255, 1)',
                                        'rgba(255, 159, 64, 1)'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: false,
                                legend: {
                                    display: false
                                },
                                title: {
                                    display: true,
                                    text: '3. Посещаемость конкретного товара',
                                    fontSize: 16,
                                    fontColor: 'rgba(255,0,0,0.9)',
                                },
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        },
                                        scaleLabel: {
                                            display: true,
                                            labelString: 'Посещения',
                                            fontSize: 16,
                                            fontColor: 'rgba(255,0,0,0.9)',
                                        },
                                    }],
                                    xAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        },
                                        scaleLabel: {
                                            display: true,
                                            labelString: 'id товара',
                                            fontSize: 16,
                                            fontColor: 'rgba(255,0,0,0.9)',
                                        },
                                    }],

                                },
                                // legend: {
                                //     text: 'id',
                                //     display: true,
                                //     labels: {
                                //         fontColor: 'rgb(255, 99, 132)'
                                //     }
                                // }
                            }
                        });
                    </script>

                </div>
            </div>
        </div>
    </div>
</section>

<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive-sm">
                <table class="table table-hover table-bordered table-sm">
                    <thead>
                    <tr>
                        <th>Id товара</th>
                        <th>Наименование</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    foreach ($products as $product): ?>

                        <tr class="bg-primary">
                            <td><?= $product; ?></td>
                            <td><?= Statistic::getProductNameById($product); ?></td>
                        </tr>

                    <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>