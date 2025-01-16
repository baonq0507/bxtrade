<!DOCTYPE html>
<html lang="en" class="theme-dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="{{ asset('charting_library/charting_library.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('datafeeds/udf/dist/polyfills.js') }}"></script>
    <script type="text/javascript" src="{{ asset('datafeeds/udf/dist/bundle.js') }}"></script>
    <style>
        iframe .layout__area--left div {
            background-color: #131722 !important;
        }

        iframe .chart-controls-bar {
            display: none !important;
        }
    </style>
</head>

<body>
    <div id="tv_chart_container" style="width: 100%; height: 90vh;"></div>
    <script>
        TradingView.onready(function() {
            var widget = window.tvWidget = new TradingView.widget({
                autosize: true,
                theme: 'dark',
                symbol: "BTCUSDT",
                interval: '1',
                timezone: "{{ env('APP_TIMEZONE') }}",
                container_id: "tv_chart_container",
                datafeed: new Datafeeds.UDFCompatibleDatafeed("{{ env('APP_URL') }}"),
                library_path: "/charting_library/",
                locale: "vi",
                colorTheme: 'dark',
                overrides: {
                    "paneProperties.background": "#131722",
                    "paneProperties.vertGridProperties.color": "#454545",
                    "paneProperties.horzGridProperties.color": "#454545",
                    "symbolWatermarkProperties.transparency": 90,
                    "scalesProperties.textColor": "#AAA",
                    "paneProperties.left.background": "#131722",
                },
                disabled_features: [
                    "header_widget",
                    "left_toolbar",
                    "footer_widget",
                    "timeframes_toolbar",
                    "volume_force_overlay", // Tắt volume mặc định
                    "context_menus", // Tắt menu chuột phải và dấu +
                    "control_bar", // Tắt thanh công cụ hover
                    "show_hide_button_in_legend", // Tắt nút hiển thị/ẩn trong legend
                    //disable copy chart
                    "copy_chart",
                    //disable save chart
                    "save_chart",
                ],
            });

            // widget.onChartReady(() => {
            //     // Tạo volume mới và tách riêng xuống dưới
            //     widget.chart().createStudy('Volume', false, false, [true], null, {
            //         "volumePaneSize": "small", // Tách volume
            //         "plot.color.0": "#00ff00", // Màu sắc tăng
            //         "plot.color.1": "#ff0000", // Màu sắc giảm
            //     });
            // });
        });
    </script>

</body>

</html>

<!-- TradingView Widget END -->