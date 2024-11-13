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
            background-color: #222222 !important;
        }
    </style>

</head>

<body>
    <div id="tv_chart_container" style="width: 100%; height: 100vh;"></div>
    <script>
        TradingView.onready(function() {
            var widget = window.tvWidget = new TradingView.widget({
                autosize: true,
                theme: 'dark',
                symbol: "BTCUSDT",
                interval: '1',
                container_id: "tv_chart_container",
                datafeed: new Datafeeds.UDFCompatibleDatafeed("http://bxtrade.test"),
                // datafeed: new Datafeeds.UDFCompatibleDatafeed("https://demo_feed.tradingview.com"),
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
                // Không cần custom_timezones vì TradingView đã hỗ trợ sẵn các timezone
                // Chỉ cần set timezone trực tiếp ở trên
                drawings_access: {
                    type: 'black',
                    tools: [{
                        name: "Regression Trend"
                    }]
                },
                charts_storage_url: "https://saveload.tradingview.com",
                enabled_study_templates: true,
                enabled_features: ["study_templates"],
            });

            widget.onChartReady(() => {
                console.log("Chart is ready");
                // Không cần set lại timezone ở đây vì đã set ở config
                // widget.setTimezone("Asia/Ho_Chi_Minh");

                // Thêm đường ngang khi người dùng giao dịch
                function addHorizontalLine(price) {
                    widget.chart().createShape({
                        price: price,
                        lock: true,
                        text: `Giao dịch tại ${price}`,
                        showLabel: true
                    }, {
                        shape: 'horizontal_line',
                        title: `Giao dịch tại ${price}`,
                        override: true,
                        zOrder: 'top',
                        color: 'red',
                        linewidth: 5,
                        linestyle: 1,
                        showLabel: true
                    });
                }

                // Sự kiện giao dịch của người dùng
                function onUserTrade(price) {
                    addHorizontalLine(price);
                }

                // Ví dụ: gọi khi người dùng thực hiện giao dịch tại giá 45000
                onUserTrade(45000);
            });
        });
    </script>

</body>

</html>

<!-- TradingView Widget END -->
