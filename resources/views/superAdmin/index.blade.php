@extends('layouts.superAdmin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div id="crypto-stats-3" class="row">
                    <div class="col-xl-3 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="cc BTC warning font-large-2" title="BTC"></i></h1>
                                        </div>
                                        <div class="col-5 pl-2">
                                            <h4>المتاجر</h4>
                                            <h6 class="text-muted"></h6>
                                        </div>
                                        <div class="col-5 text-right">
                                            <h4>{{\App\Models\Vendor::count()}}</h4>
                                            <h6 class="success darken-4"></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="btc-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="cc ETH blue-grey lighten-1 font-large-2" title="ETH"></i></h1>
                                        </div>
                                        <div class="col-6 pl-2">
                                            <h4>المشتركين</h4>
                                            <h6 class="text-muted"></h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <h4>{{\App\Models\Vendor::where('subscription', 'مشترك')->count()}}</h4>
                                            <h6 class="success darken-4"></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="eth-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Candlestick Multi Level Control Chart -->

                <!-- Sell Orders & Buy Order -->
                <!--/ Sell Orders & Buy Order -->
                <!-- Active Orders -->

                <!-- Active Orders -->
            </div>
        </div>
    </div>
@endsection
