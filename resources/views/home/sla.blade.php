@extends('home.layouts')
@section('main_content')

    <div class="page-banner page-banner-subpage p-b-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-sm-6">
                    <div class="banner-slogan banner-slogan-hero">
                        <h1 class="slogan-title">我们的正常运行时间保证</h1>
                        <h2 class="slogan-desc">{{$app_config['website_name']}}在其云服务平台的核心架构中提供多重冗余机制和智能分流 -
                            负载均衡机制来保证服务的稳定运行。提供企业级的安全与稳定性。</h2>
                        <div class="actions"><a class="btn btn-lg btn-primary-light" href="{{url('/home/sla_full')}}">阅读完整协议<i
                                        class="zmdi zmdi-long-arrow-right"></i></a></div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-6">
                    <div class="banner-image ">
                        <div class="image image-network-uptime" >
                            <div class="globe animate" style="width: 398px;height: 390px;margin-left: -100px;margin-top: -20px;"></div>
                            <div class="circle circle-xlg circle-orange service-icon-xlg image-shadow" data-animation-delay="0.3s"
                            style="margin-bottom: -120px;"
                            >
                                <span>100%<small>在线率</small></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-tabs tabs-responsive">
                @include('home.subpage.feas_sub')
            </div>
        </div>
        <!-- /.banner-tabs -->
    </div>
    <!-- /.page-banner -->

    <div class="page-section">
        <div class="container">
            <div class="section-row row">
                <div class="col-sm-6 col-sm-push-6">
                    <div class="section-image">
                        <div class="image image-node-uptime">
                            <div class="server server-md animate fadeInLeft"></div>
                            <div class="circle circle-xlg circle-orange animate zoomIn" data-animation-delay="0.3s">
                                <span>100%<small>在线率</small></span></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 col-sm-pull-6">
                    <h2 class="section-title">100%服务器在线保证</h2>
                    <p class="section-desc">
                        {{$app_config['website_name']}}提供的主机托管服务是为了最大稳定性而设计的，我们通过一套主动监测机制来发现问题并处理问题，使用{{$app_config['website_name']}}的主机服务，阁下将无需担心线路的维护问题，所有环境问题和传输数据机制将由{{$app_config['website_name']}}解决，通过多级灾难防止措施，最大程度地减少意外情况所带来的问题。</p>
                </div>
            </div>
            <div class="section-row row">
                <div class="col-sm-6 ">
                    <div class="section-image">
                        <div class="image image-network-uptime">
                            <div class="globe animate fadeInLeft"></div>
                            <div class="circle circle-xlg circle-orange animate zoomIn" data-animation-delay="0.3s">
                                <span>100%<small>在线率</small></span></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6">
                    <h2 class="section-title">100%加速网络在线保证</h2>
                    <p class="section-desc">通过连接点冗余机制，和{{$app_config['website_name']}}提供的智能分流 -
                        负载均衡配置，将能够提供稳定的连接点在线时间保证。同时，通知边界网关协议，{{$app_config['website_name']}}将能够通过{{$app_config['website_name']}}™优化网络为阁下提供到户的最佳连接体验。</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page-section -->

    <div class="page-section section-center section-dark">
        <div class="container">
            <h2 class="section-title">中断补偿</h2>
            <p class="section-desc m-b-60">当因为意外情况导致SLA中断时，所有受到影响的用户将能够通过工单获取使用时间补偿，具体如下：</p>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="panel panel-block">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>大致有效可用性</th>
                                <th>中断时长</th>
                                <th>补偿时间</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>99.9%</td>
                                <td>低于60分钟</td>
                                <td><b>1天</b></td>
                            </tr>
                            <tr>
                                <td>99.8%</td>
                                <td>60-120分钟</td>
                                <td><b>3天</b></td>
                            </tr>
                            <tr>
                                <td>99.6%</td>
                                <td>120-360分钟</td>
                                <td><b>5天</b></td>
                            </tr>
                            <tr>
                                <td>99.2%</td>
                                <td> 360-720分钟</td>
                                <td><b>10天</b></td>
                            </tr>
                            <tr>
                                <td>98.6%</td>
                                <td>超过720分钟</td>
                                <td><b>15天</b></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection