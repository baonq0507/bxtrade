<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- highr chart cdn -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://code.highcharts.com/modules/stock.js"></script>
    <!-- hight chart -->
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        #container {
            height: 100vh;
            width: 100%;
        }
    </style>
</head>

<body>
    <div id="container"></div>
    <script>
        const chartOptions = {
            width: 500,
            height: 500,
            layout: {
                backgroundColor: "#253248",
                textColor: "#83A869"
            },
            grid: {
                vertLines: {
                    color: "#334158"
                },
                horzLines: {
                    color: "#334158"
                }
            },
            crosshair: {
                mode: CrosshairMode.Magnet
            },
            priceScale: {
                autoScale: true,
                borderColor: "#485c7b"
            },
            timeScale: {
                borderColor: "#485c7b"
            }
        }
    </script>
</body>

</html>