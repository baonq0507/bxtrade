
var tt = "#01b58c", et = "#f81057";
const at = window.innerWidth <= 768 ? "mobile" : "pc";
const maxPoints = at == "mobile" ? 20 : 30;
const colorTemplate = '{#ge point.open point.close}#ff6e6e{else}#51af7b{/ge}';
 const chartOptions = {
    chart: {
        type: 'candlestick',
        styledMode: true,
        panning: !1,
        time: {
            timezone: 'Asia/Ho_Chi_Minh',
        },
        events: {
            load: function () {
                const series = this.series;

            }
        },
    },
    rangeSelector: {
        enabled: false,
        selected: 4,
        inputEnabled: false
    },
    scrollbar: {
        enabled: false
    },
    navigator: {
        enabled: false
    },
    plotOptions: {
        candlestick: {
            lineColor: et,
            upLineColor: tt,
            pointWidth: (at == "pc") ? 12 : 7,
            maxPointWidth: (at == "pc") ? 12 : 7,
        },
        column: {
            minPointLength: 2,
            pointWidth: "pc" !== at ? 7 : 12,
            maxPointWidth: "pc" !== at ? 7 : 12,
            borderWidth: 0,
            pointPadding: 0,
            groupPadding: 0,
            height: '5%'
        },
        line: {
            lineWidth: 100,
            dashStyle: 'LongDash',
            lineColor: '#666666',
            marker: {
                enabled: false,
            },
            color: '#fff',
        },
        series: {
            zIndex: 2,
            states: {
                inactive: {
                    opacity: 1
                }
            },
            allowPointSelect: !1,
            point: {
                events: {
                    click: function () { }
                }
            },
        },
        sma: {
            lineWidth: 5,
        }
    },
    xAxis: {
        overscroll: 0,
        gridLineWidth: 0,
        crosshair: {
            className: 'highcharts-crosshair-custom',
            enabled: true
        },
        lineWidth: 0,
        minorGridLineWidth: 0,
        lineColor: "transparent",
        minorTickLength: 0,
        tickLength: 0,
    },
    yAxis: [
        {
            crosshair: {
                snap: false,
                label: {
                    className: 'highcharts-crosshair-custom-labelss',
                    enabled: true,
                    format: '{value:.2f}'
                },
                enabled: true
            },
            labels: {
                align: 'left'
            },
            gridLineWidth: 0,
            height: '10%',
        },
        {
            crosshair: {
                className: 'highcharts-crosshair-customs',
                snap: false,
                enabled: false,
                label: {
                    format:
                        '{#if value ge 1000000} {(divide value 1000000):.2f} ' +
                        'M {else} {value} {/if}',
                    className: 'highcharts-crosshair-custom-label',
                    enabled: false
                }
            },
            labels: {
                align: 'left',
                enabled: true,
            },
            top: '80%',
            height: '20%',
            offset: 0,
        }
    ],
    tooltip: {
        shape: 'square',
        split: false,
        shared: true,
        headerShape: 'callout',
        shadow: false,
        format: `<span style="font-size: 1.4em; color: #fff;">{point.series.name}</span>
                <span style="font-size: 1.4em; color: #fff;">O</span>
                <span style="color:${colorTemplate}";>{point.open}</span>
                <span style="font-size: 1.4em; color: #fff;">H</span>
                <span style="color:${colorTemplate}";>{point.high}</span>
                <span style="font-size: 1.4em; color: #fff;">L</span>
                <span style="color:${colorTemplate}";>{point.low}</span>
                <span style="font-size: 1.4em; color: #fff;">C</span>
                <span style="color:${colorTemplate}";>{point.close}
                <span style="font-size: 1.4em; color: #fff;">{(subtract point.open point.close):.2f}</span>
                <span style="font-size: 1.4em; color: #fff;">{(multiply (divide (subtract point.open point.close) point.close) 100):.2f}%</span>
                </span>
                <span style="font-size: 1.4em; color: #fff;">Volume</span>
                <span style="color:${colorTemplate}";>{points.1.y}</span>`,
        positioner: () => ({ x: 0, y: 0 })
    },
    series: [
        {
            type: 'candlestick',
            id: 'aapl',
            name: ' Price',
            color: et,
            upColor: tt,
            // lastPrice: {
            //     text: 'Last',
            //     id: 'last-price-line',
            //     enabled: true,
            //     label: {
            //         enabled: true,
            //         align: 'left',
            //         format: '{value}',
            //         x: -100,
            //         style: {
            //             color: '#fff',
            //         }
            //     }
            // },
            lastVisiblePrice: {
                enabled: true,
                id: 'last-visible-price-line',
                dashStyle: 'Solid',
                width: 2,
                label: {
                    enabled: true,
                    align: 'left',
                    style: {
                        color: '#fff', // Label text color
                        backgroundColor: '#333', // Label background color
                        padding: '5px',
                        fontWeight: 'bold',
                        fontSize: '12px'
                    }

                }
            },
            data: []
        },
        {
            type: 'column',
            keys: ['x', 'y', 'className'],
            id: 'volume',
            name: 'Volume',
            data: [
                [1, 100, 'highcharts-point-up'],
                [2, 100, 'highcharts-point-down'],
                [3, 100, 'highcharts-point-up'],
                [4, 100, 'highcharts-point-down'],
                [5, 100, 'highcharts-point-up'],
            ],
            yAxis: 1,
        },
        {
            name: "sma1",
            id: "sma1",
            type: "sma",
            linkedTo: "ohlc",
            color: "#000",
            lineWidth: 5,
            marker: !1,
            zIndex: 3,
            visible: !0,
            enableMouseTracking: !1,
            params: {
                index: "0",
                period: 10
            },
            allowPointSelect: !1,
            point: {
                events: {},
                tooltip: {
                    enabled: !1
                }
            }
        },
        {
            name: "sma2",
            id: "sma2",
            type: "sma",
            linkedTo: "ohlc",
            marker: !1,
            zIndex: 3,
            visible: true,
            lineWidth: 5,

            enableMouseTracking: !1,
            params: {
                index: "1",
                period: 5
            },
            allowPointSelect: !1,
            point: {
                events: {},
                tooltip: {
                    enabled: !1
                }
            }
        },
    ],
    responsive: {
        rules: [
            {
                condition: {
                    maxWidth: 800,
                },
                chartOptions: {
                    xAxis: {
                        overscroll: 0,
                    },
                    yAxis: [{
                        labels: {
                            align: 'left',
                            enabled: true,
                        },
                        height: '50%', // Adjust height for mobile
                    }, {
                        top: '50%',
                        height: '5%', // Adjust height for mobile
                    }]
                }
            },
            {
                condition: {
                    minWidth: 1024,
                },
                chartOptions: {
                    yAxis: [{
                        labels: {
                            align: 'left',
                            enabled: true,
                        },
                        height: '80%',
                    }, {
                        top: '90%',
                        height: '10%',
                    }]
                }
            }
        ]
    }
};
$(document).ready(function () {
    Highcharts.getJSON('https://demo-live-data.highcharts.com/aapl-ohlc.json', function (data) {

        Highcharts.stockChart('container', {

            rangeSelector: {
                selected: 2
            },

            title: {
                text: 'AAPL Stock Price'
            },

            series: [{
                type: 'candlestick',
                id: 'aapl',
                name: 'AAPL Stock Price',
                data: data,
                lastVisiblePrice: {
                    enabled: true,
                    color: data[data.length - 1].close >= data[data.length - 1].open ? '#01b58c' : '#f81057',
                    label: {
                        enabled: true,
                        style: {
                            color: data[data.length - 1].close >= data[data.length - 1].open ? '#01b58c' : '#f81057',
                            backgroundColor: data[data.length - 1].close >= data[data.length - 1].open ? '#01b58c' : '#f81057',
                            fill: data[data.length - 1].close >= data[data.length - 1].open ? '#01b58c' : '#f81057',
                        }
                    },
                    id: 'last-visible-price-line',
                },
                lastPrice: {
                    enabled: true,
                    color: data[data.length-1].close >= data[data.length-1].open ? '#01b58c' : '#f81057',
                    align: 'left',
                    x: -100,
                    lable: {
                        enabled: true,
                        style: {
                            color: data[data.length - 1].close >= data[data.length - 1].open ? '#01b58c' : '#f81057',
                            backgroundColor: data[data.length - 1].close >= data[data.length - 1].open ? '#01b58c' : '#f81057',
                            fill: data[data.length - 1].close >= data[data.length - 1].open ? '#01b58c' : '#f81057',
                        },
                        x: -100,
                    }

                }

            }]
        });
    });

});
