@extends('home.layouts')
@section('main_content')

    <div class="page-banner page-banner-subpage p-b-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-sm-6">
                    <div class="banner-slogan banner-slogan-hero">
                        <h1 class="slogan-title">科研网络加速平台<br>为您的科研注入全新力量</h1>
                        <h2 class="slogan-desc">
                            {{$app_config['website_name']}}拥有分布在全球九大国家的10+个数据中心，为科学研究者提供多方位需求。无论是谷歌学术，还是ScienceDirect，使用{{$app_config['website_name']}}加速服务，均可完美支持！</h2>
                        <div class="actions"><a class="btn btn-lg btn-primary-light"
                                                href="{{url('/home/features')}}">查看{{$app_config['website_name']}}产品特性<i
                                        class="zmdi zmdi-long-arrow-right"></i></a></div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-6">
                    <div class="banner-image"><span class="image image-bird-location image-shadow"></span></div>
                </div>
            </div>
            <div style="padding-bottom: 20px;"></div>
        </div>
    </div>
    <div class="page-section section-center" style="padding-top: 20px;">
        <div class="container">
            <h3>我们是全球首家（且目前唯一）使用GeoTrust EV SSL证书的{{$app_config['website_name']}}概念加速服务商，从最大限度上确保网站的安全性。</h3><br><br>
            <div class="services">
                <div class="row">

                    <div class="col-sm-4">
                        <a class="service">
                            <i class="service-icon service-icon-compute image-shadow-sm animate zoomIn"></i>
                            <div class="service-body">
                                <h3>按月计费</h3>
                                <p>国际知名顶级数据中心接入，保证高速浏览与稳定体验 </p>
                                <span class="btn btn-lg btn-link">按月计费，12元/10GB起</span>
                            </div>
                        </a>
                        <!--/ .service -->
                    </div>
                    <div class="col-sm-4">
                        <a class="service">
                            <i class="service-icon service-icon-storage image-shadow-sm animate zoomIn"></i>
                            <div class="service-body">
                                <h3>按量计费</h3>
                                <p>提供单线路高达1Gbps的节点，为您快速访问网络的提供有力保障。</p>
                                <span class="btn btn-lg btn-link">按量计费，30元/20GB起</span>
                            </div>
                        </a>
                        <!--/ .service -->
                    </div>
                    <div class="col-sm-4">
                        <a class="service">
                            <i class="service-icon service-icon-dedicated image-shadow-sm animate zoomIn"></i>
                            <div class="service-body">
                                <h3>定制服务</h3>
                                <p>提供专有线路，为您的需求量身定制，您可以任意选择服务器性能及位置</p>
                                <span class="btn btn-lg btn-link">大客户专用</span>
                            </div>
                        </a>
                        <!--/ .service -->
                    </div>
                    <h3>全节点使用aes-256-cfb高强度流加密算法，支持auth_sha1协议，支持http_simple以及http_post流量混淆。</h3>
                </div>
            </div>
            <!--/ .services -->
        </div>
    </div>
    <div class="page-section section-dark section-center ">
        <div class="container">
            <h2 class="section-title">我们的连接点分布图</h2>
            <div class="location-map location-map-lg">
                <div class="location-container">
                    <div class="location location-seattle animate zoomIn">
                        <span class="location-name"><span>西雅图</span></span><span class="location-pin"></span>
                    </div>
                    <div class="location location-los-angeles animate zoomIn"><span class="location-name">
						<span>洛杉矶</span></span><span class="location-pin"></span>
                    </div>
                    <div class="location location-dallas animate zoomIn"><span class="location-name">
					    <span>达拉斯</span></span><span class="location-pin"></span>
                    </div>
                    <div class="location location-paris animate zoomIn">
                            <span class="location-name">
						<span>法国</span></span><span class="location-pin"></span></div>
                    <div class="location location-kr animate zoomIn">
                            <span class="location-name">
						<span>韩国</span></span><span class="location-pin"></span>
                    </div>
                    <div class="location location-london animate zoomIn"><span class="location-name">
					    <span>英国</span></span><span class="location-pin"></span>
                    </div>
                    <div class="location location-shenzhen animate zoomIn"><span class="location-name">
					    <span>深圳</span></span><span class="location-pin"></span>
                    </div>
                    <div class="location location-taiwan animate zoomIn"><span class="location-name">
					    <span>台湾</span></span><span class="location-pin"></span>
                    </div>
                    <div class="location location-hongkong animate zoomIn"><span class="location-name">
					    <span>香港</span></span><span class="location-pin"></span>
                    </div>
                    <div class="location location-sgp animate zoomIn"><span class="location-name">
						<span>新加坡</span></span><span class="location-pin"></span>
                    </div>
                    <div class="location location-tokyo animate zoomIn"><span class="location-name">
						<span>日本</span></span><span class="location-pin"></span>
                    </div>
                    <div class="map"></div>
                </div>
                <div class="actions text-center">
                    <a class="btn btn-lg btn-light btn-outline" href="{{url('/home/datacenter')}}">数据中心及线路更多信息<i
                                class="zmdi zmdi-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="page-section section-center">
        <div class="container">
            <h2 class="section-title">全平台支持</h2>
            <p class="section-desc">{{$app_config['website_name']}}概念加速服务在多平台均可使用，完美支持iOS9、安卓、Windows、macOS等操作系统，甚至可以在极路由（搭配SS插件）、Openwrt、支持梅林固件的路由器上面直接配置使用。</p>
            <div class="blocks row">
                <div class="col-sm-4">
                    <a class="panel panel-block panel-block-icon"
                       href="https://itunes.apple.com/cn/app/potatso-qiang-da-wang-luo/id1070901416">
                        <div class="panel-icon animate zoomIn"><img src="/home/img/clients/potatso.svg"></div>
                        <div class="panel-body">
                            <h3 class="panel-title h4">Potatso for iOS</h3>
                            <span class="link">App Store购买下载</span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a class="panel panel-block panel-block-icon"
                       href="https://itunes.apple.com/cn/app/shadowrocket-for-shadowsocks/id932747118">
                        <div class="panel-icon animate zoomIn"><img src="/home/img/clients/shadowrocket.svg"></div>
                        <div class="panel-body">
                            <h3 class="panel-title h4">Shadowrocket for iOS</h3>
                            <span class="link">App Store购买下载</span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a class="panel panel-block panel-block-icon"
                       href="https://itunes.apple.com/cn/app/surge-web-developer-tool-proxy/id1040100637">
                        <div class="panel-icon animate zoomIn"><img src="/home/img/clients/surge.svg"></div>
                        <div class="panel-body">
                            <h3 class="panel-title h4">Surge for iOS</h3>
                            <span class="link">App Store购买下载</span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a class="panel panel-block panel-block-icon" href="{{url('/downloads/ssr-win.7z')}}">
                        <div class="panel-icon animate zoomIn"><img src="/home/img/clients/ss-windows.svg"></div>
                        <div class="panel-body">
                            <h3 class="panel-title h4">{{$app_config['website_name']}} for Windows</h3>
                            <span class="link">立即下载</span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a class="panel panel-block panel-block-icon"
                       href="{{url('/downloads/ssr-android.apk')}}">
                        <div class="panel-icon animate zoomIn"><img src="/home/img/clients/ss-android.png"></div>
                        <div class="panel-body">
                            <h3 class="panel-title h4">{{$app_config['website_name']}} for Android</h3>
                            <span class="link">立即下载</span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a class="panel panel-block panel-block-icon" href="{{url('/downloads/ssr-mac.dmg')}}">
                        <div class="panel-icon animate zoomIn"><img src="/home/img/clients/ss-mac.svg"></div>
                        <div class="panel-body">
                            <h3 class="panel-title h4">{{$app_config['website_name']}} for MacOS</h3>
                            <span class="link">立即下载</span>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>


    <div class="page-section section-center  section-blue" style="color:white;">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <h2 class="title-head" style="color:white;">适合哪些人群？在校研究生、硕士及以上学历的人员！</h2>
                    <p class="desc">{{$app_config['website_name']}}提供分布全球的加速服务，使得您可以在谷歌学术、ScienceDirect、BASE Search、Amazon A9等网站上快速搜索学术论文资料，开展国际学术交流。
                        <b style="color: #FFFFFF;">请注意，我们只提供给在校研究生或具有硕士及以上学历的人员使用，任何不符合此身份的人员我们有清除其账号的权利，并且没有通知义务。</b></p>
                </div>
            </div>
            <div class="empty_space" style="height: 30px"></div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="main wow fadeInLeft">
                        <h4 class="title-head" style="color:white;">海外业务关系人</h4>
                        <p>越过互联网服务提供商和国家防火墙的限制，与其它国家的任何企业自由地沟通合作、在线协作和无障碍交易，而不用担心网络连接时不时地被重置。</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="main wow fadeInRight">
                        <h4 class="title-head" style="color:white;">海淘客、代购客</h4>
                        <p>在亚马逊、易贝、樂天市场、沃尔格林、健安喜、百思买、第五大道、诺德斯特龙、丝芙兰、巴塔哥尼亚、6PM、Drugstore、Diapers 等网站上快捷购物。</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="main wow fadeInLeft">
                        <h4 class="title-head" style="color:white;">游戏党、影视党</h4>
                        <p>在索尼PS4，微软Xbox Live、Steam、Battle.net和其它游戏私服比如魔兽世界和英雄联盟上享受低延迟的畅玩体验</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="main wow fadeInRight">
                        <h4 class="title-head" style="color:white;">国外友人</h4>
                        <p>在谷歌、Youtube、脸书、推特、Gmail、Instagram、Pinterest、Flickr、Netflix、Reddit、Wordpress blogs
                            等网站上的访问连接将被保护并提升访问速度。</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="main wow fadeInLeft">
                        <h4 class="title-head" style="color:white;">设计师、攻城狮</h4>
                        <p>在Smashing Magazine、Flickr、DeviantArt 等网站上轻松获得设计素材。加入Github、Stack OverFlow、Reddit、Android.com
                            等编程社区自由交谈。</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="main wow fadeInRight">
                        <h4 class="title-head" style="color:white;">留学党、科研党</h4>
                        <p>在谷歌学术、ScienceDirect、BASE Search、Amazon A9等网站上快速搜索学术论文资料。在手机上使用WhatsApp、LINE、Skype、脸书和推特。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page-section -->

    <div class="page-section section-center">
        <div class="container">
            <h2 class="section-title">为什么选择我们？</h2>
            <div class="features features-icon-top features-center">
                <div class="row">
                    <div class="col-sm-3 col-xs-6">
                        <div class="feature"><i class="icon icon-lg icon-realtime-protection animate zoomIn"></i>
                            <h4>极致的网速，给您节省更多的时间</h4>
                        </div>
                    </div>
                    <!-- /.feature -->
                    <div class="col-sm-3 col-xs-6">
                        <div class="feature"><i class="icon icon-lg icon-globe animate zoomIn"></i>
                            <h4>全球数10个加速网络连接服务点</h4>
                        </div>
                    </div>
                    <!-- /.feature -->
                    <div class="clear-xs"></div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="feature"><i class="icon icon-lg icon-helping-hand animate zoomIn"></i>
                            <h4>全节点SLA保证，随时畅通的高效加速</h4>
                        </div>
                    </div>
                    <!-- /.feature -->
                    <div class="col-sm-3 col-xs-6">
                        <div class="feature"><i class="icon icon-lg icon-electronics animate zoomIn"></i>
                            <h4>安全稳定的流加密算法，安全与速度兼得</h4>
                        </div>
                    </div>
                    <!-- /.feature -->
                </div>
                <div class="row">
                    <div class="col-sm-3 col-xs-6">
                        <div class="feature"><i class="icon icon-lg icon-broadcasting animate zoomIn"></i>
                            <h4>连接点多重负载均衡机制，智能分流加速</h4>
                        </div>
                    </div>
                    <!-- /.feature -->
                    <div class="col-sm-3 col-xs-6">
                        <div class="feature"><i class="icon icon-lg icon-multiple-devices animate zoomIn"></i>
                            <h4>全平台支持，一个帐号畅通你的所有设备</h4>
                        </div>
                    </div>
                    <!-- /.feature -->
                    <div class="clear-xs"></div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="feature"><i class="icon icon-lg icon-admin-tools animate zoomIn"></i>
                            <h4>简单易用的控制面板，无需任何学习成本</h4>
                        </div>
                    </div>
                    <!-- /.feature -->
                    <div class="col-sm-3 col-xs-6">
                        <div class="feature"><i class="icon icon-lg icon-last-hour animate zoomIn"></i>
                            <h4>支付后秒级自动开通服务，无需等待</h4>
                        </div>
                    </div>
                    <!-- /.feature -->
                </div>
            </div>
            <!-- /.features -->


        </div>
    </div>

@endsection