@extends('layouts.app')

@section('title', 'Trade')

@section('content')
<!-- <div id="tv_chart_container" style="width: 100%; height: 100vh;"></div> -->
<header class="py-1 container-fluid">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <img src="{{$config->logo ? asset('storage/' . $config->logo) : asset('assets/icon/bx-logo-full.png')}}"
                        alt="logo" class="img-fluid">
                </div>
                <div class="col-md-2">
                    <!-- load symbol -->
                    <select name="symbol" id="symbol" class="form-control select-symbol">
                        @foreach ($symbols as $symbol)
                            <option value="{{ $symbol->id }}" {{ $symbol->id == $config->default_symbol_id ? 'selected' : '' }}>{{ $symbol->symbol }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row align-items-center justify-content-end">
                <div class="col-md-1">
                    <a href="{{route('profile')}}" class="avatar-user">
                        <img src="{{auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar) : asset('assets/images/man.png')}}"
                            class="img-fluid avatar-user">
                    </a>
                </div>
                <div class="col-md-2">
                    <div class="dropdown">
                        <div class="dropdown-toggle p-2" id="dropdown-account" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="text-white ">Demo Account</span>
                            <br>
                            <span class="text-warning">${{number_format($user->balance_demo, 2, '.', ',')}}</span>
                        </div>
                        <ul class="dropdown-menu w-100" aria-labelledby="dropdown-account">
                            <li>
                                <a class="dropdown-item active" href="#">
                                    <div class="row align-items-center">
                                        <div class="col-md-9">
                                            <span class="text-white">Demo Account</span>
                                            <br>
                                            <span class="text-warning">${{number_format($user->balance_demo, 2, '.', ',')}}</span>
                                        </div>
                                        <div class="col-md-3 text-end">
                                            <button class="btn btn-sm btn-success">
                                                <i class="bi bi-arrow-left-right"></i>
                                            </button>
                                        </div>
                                    </div>

                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="row align-items-center">
                                        <div class="col-md-9">
                                            <span class="fs-14">Real Account</span>
                                            <br>
                                            <span
                                                class="fs-14 text-warning">${{number_format($user->balance, 2, '.', ',')}}</span>
                                        </div>
                                        <div class="col-md-3 text-end">
                                            <button class="btn btn-sm btn-primary">
                                                <i class="bi bi-arrow-clockwise text-white"></i>
                                            </button>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- icon setting -->
                <div class="col-md-1">
                    <a class="text-white">
                        <i class="bi bi-gear" style="font-size: 30px;"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>



@endsection
@push('css')
    <style>
        .avatar-user {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 1px solid #0e2438;
            padding: 2px;
        }

        #dropdown-account {
            background-color: #2b2b2b;
            color: #fff;
            border: none;
            min-width: 100px;
            border-radius: 5px;
        }
    </style>
@endpush
@push('js')
    <script type="text/javascript" src="{{ asset('charting_library/charting_library.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('datafeeds/udf/dist/polyfills.js') }}"></script>
    <script type="text/javascript" src="{{ asset('datafeeds/udf/dist/bundle.js') }}"></script>
    <script>
        TradingView.onready(function () {
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
                theme: 'dark',
                overrides: {
                    "paneProperties.background": "#0e2438",
                    "paneProperties.vertGridProperties.color": "#454545",
                    "paneProperties.horzGridProperties.color": "#454545",
                    "symbolWatermarkProperties.transparency": 90,
                    "scalesProperties.textColor": "#AAA",
                    "paneProperties.left.background": "#0e2438",
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

@endpush