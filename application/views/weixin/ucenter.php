<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: henbf
 * Date: 2017/5/21
 * Time: 13:37
 * 微信用户个人中心
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title></title>

    <link href="/static/css/mui.min.css" rel="stylesheet"/>
    <style>
        html,
        body {
            background-color: #efeff4;
        }
        .mui-views,
        .mui-view,
        .mui-pages,
        .mui-page,
        .mui-page-content {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            background-color: #efeff4;
        }
        .mui-pages {
            top: 46px;
            height: auto;
        }
        .mui-scroll-wrapper,
        .mui-scroll {
            background-color: #efeff4;
        }
        .mui-page.mui-transitioning {
            -webkit-transition: -webkit-transform 300ms ease;
            transition: transform 300ms ease;
        }
        .mui-page-left {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
        .mui-ios .mui-page-left {
            -webkit-transform: translate3d(-20%, 0, 0);
            transform: translate3d(-20%, 0, 0);
        }
        .mui-navbar {
            position: fixed;
            right: 0;
            left: 0;
            z-index: 10;
            height: 44px;
            background-color: #f7f7f8;
        }
        .mui-navbar .mui-bar {
            position: absolute;
            background: transparent;
            text-align: center;
        }
        .mui-android .mui-navbar-inner.mui-navbar-left {
            opacity: 0;
        }
        .mui-ios .mui-navbar-left .mui-left,
        .mui-ios .mui-navbar-left .mui-center,
        .mui-ios .mui-navbar-left .mui-right {
            opacity: 0;
        }
        .mui-navbar .mui-btn-nav {
            -webkit-transition: none;
            transition: none;
            -webkit-transition-duration: .0s;
            transition-duration: .0s;
        }
        .mui-navbar .mui-bar .mui-title {
            display: inline-block;
            width: auto;
        }
        .mui-page-shadow {
            position: absolute;
            right: 100%;
            top: 0;
            width: 16px;
            height: 100%;
            z-index: -1;
            content: '';
        }
        .mui-page-shadow {
            background: -webkit-linear-gradient(left, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 10%, rgba(0, 0, 0, .01) 50%, rgba(0, 0, 0, .2) 100%);
            background: linear-gradient(to right, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 10%, rgba(0, 0, 0, .01) 50%, rgba(0, 0, 0, .2) 100%);
        }
        .mui-navbar-inner.mui-transitioning,
        .mui-navbar-inner .mui-transitioning {
            -webkit-transition: opacity 300ms ease, -webkit-transform 300ms ease;
            transition: opacity 300ms ease, transform 300ms ease;
        }
        .mui-page {
            display: none;
        }
        .mui-pages .mui-page {
            display: block;
        }
        .mui-page .mui-table-view:first-child {
            margin-top: 15px;
        }
        .mui-page .mui-table-view:last-child {
            margin-bottom: 30px;
        }
        .mui-table-view {
            margin-top: 20px;
        }

        .mui-table-view span.mui-pull-right {
            color: #999;
        }
        .mui-table-view-divider {
            background-color: #efeff4;
            font-size: 14px;
        }
        .mui-table-view-divider:before,
        .mui-table-view-divider:after {
            height: 0;
        }
        .head {
            height: 40px;
        }
        #head {
            line-height: 40px;
        }
        .head-img {
            width: 40px;
            height: 40px;
        }
        #head-img1 {
            position: absolute;
            bottom: 10px;
            right: 40px;
            width: 40px;
            height: 40px;
        }
        .update {
            font-style: normal;
            color: #999999;
            margin-right: -25px;
            font-size: 15px
        }
        .mui-fullscreen {
            position: fixed;
            z-index: 20;
            background-color: #000;
        }
        .mui-ios .mui-navbar .mui-bar .mui-title {
            position: static;
        }
    </style>

</head>

<body class="mui-fullscreen">
<!--页面主结构开始-->
<div id="app" class="mui-views">
    <div class="mui-view">
        <div class="mui-navbar">
        </div>
        <div class="mui-pages">
        </div>
    </div>
</div>
<!--页面主结构结束-->
<!--单页面开始-->
<div id="setting" class="mui-page">
    <!--页面标题栏开始-->
    <div class="mui-navbar-inner mui-bar mui-bar-nav">
        <h1 class="mui-center mui-title">个人中心</h1>
    </div>
    <!--页面标题栏结束-->
    <!--页面主内容区开始-->
    <div class="mui-page-content">
        <div class="mui-scroll-wrapper">
            <div class="mui-scroll">
                <ul class="mui-table-view mui-table-view-chevron">
                    <li class="mui-table-view-cell mui-media">
                        <img class="mui-media-object mui-pull-left head-img" id="head-img" src="">
                        <div class="mui-media-body">
                            <?php echo $userinfo['U_name'];?>
                            <p class='mui-ellipsis'>学号:<?php echo $userinfo['U_number'];?></p>
                        </div>
                    </li>
                </ul>
                <ul class="mui-table-view mui-table-view-chevron">
                    <li class="mui-table-view-cell">
                        <a href="#account" class="mui-navigate-right">个人信息</a>
                    </li>
                </ul>
                <ul class="mui-table-view mui-table-view-chevron">
                    <li class="mui-table-view-cell">
                        <a href="#joinnet" class="mui-navigate-right">入网信息</a>
                    </li>
                </ul>
                <ul class="mui-table-view mui-table-view-chevron">
                    <li class="mui-table-view-cell">
                        <a href="#about" class="mui-navigate-right">网络中心</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--页面主内容区结束-->
</div>
<!--单页面结束-->
<div id="account" class="mui-page">
    <div class="mui-navbar-inner mui-bar mui-bar-nav">
        <button type="button" class="mui-left mui-action-back mui-btn  mui-btn-link mui-btn-nav mui-pull-left">
            <span class="mui-icon mui-icon-left-nav"></span>个人中心
        </button>
        <h1 class="mui-center mui-title">个人信息</h1>
    </div>
    <div class="mui-page-content">
        <div class="mui-scroll-wrapper">
            <div class="mui-scroll">
                <ul class="mui-table-view">
                    <li class="mui-table-view-cell">
                        <a>姓名<span class="mui-pull-right"><?php echo $userinfo['U_name'];?></span></a>
                    </li>
                    <li class="mui-table-view-cell">
                        <a>性别<span class="mui-pull-right"><?php echo $userinfo['U_sex'];?></span></a>
                    </li>
                    <li class="mui-table-view-cell">
                        <a>学号<span class="mui-pull-right"><?php echo $userinfo['U_number'];?></span></a>
                    </li>
                    <li class="mui-table-view-cell">
                        <a>专业<span class="mui-pull-right"><?php echo $userinfo['U_profession'];?></span></a>
                    </li>
                    <li class="mui-table-view-cell">
                        <a>班级<span class="mui-pull-right"><?php echo $userinfo['U_class'];?></span></a>
                    </li>
                    <li class="mui-table-view-cell">
                        <a>辅导员<span class="mui-pull-right"><?php echo $userinfo['U_instructor'];?></span></a>
                    </li>
                </ul>
                <ul class="mui-table-view">
                    <li class="mui-table-view-cell">
                        <a><span class="mui-icon mui-icon-phone"></span><span class="mui-pull-right"><?php echo $userinfo['U_phone'];?></span></a>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="joinnet" class="mui-page">
    <div class="mui-navbar-inner mui-bar mui-bar-nav">
        <button type="button" class="mui-left mui-action-back mui-btn  mui-btn-link mui-btn-nav mui-pull-left">
            <span class="mui-icon mui-icon-left-nav"></span>个人中心
        </button>
        <h1 class="mui-center mui-title">个人信息</h1>
    </div>
    <div class="mui-page-content">
        <div class="mui-scroll-wrapper">
            <div class="mui-scroll">
                <ul class="mui-table-view">
                    <li class="mui-table-view-cell">
                        <a>宿舍<span class="mui-pull-right"><?php echo $userinfo['U_dormitory'];?></span></a>
                    </li>
                    <li class="mui-table-view-cell">
                        <a>网号状态<span class="mui-pull-right"><?php
                                switch ($netinfo['N_state']){
                                    case 4:
                                        echo '已提交申请';
                                        break;
                                    case 2:
                                        echo '已开通';
                                        break;
                                    case 3:
                                        echo '冻结';
                                        break;
                                    default:
                                        echo '未申请开通';
                                        break;

                                }

                                ?></span></a>
                    </li>
                </ul>
                <ul class="mui-table-view">
                    <li class="mui-table-view-cell">
                        <p class='mui-ellipsis'>用户名为你的学号，初始密码为你的身份证后12位</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="about" class="mui-page">
    <div class="mui-navbar-inner mui-bar mui-bar-nav">
        <button type="button" class="mui-left mui-action-back mui-btn  mui-btn-link mui-btn-nav mui-pull-left">
            <span class="mui-icon mui-icon-left-nav"></span>个人中心
        </button>
        <h1 class="mui-center mui-title">网络中心</h1>
    </div>
    <div class="mui-page-content">
        <div class="mui-scroll-wrapper">
            <div class="mui-scroll">
                <ul class="mui-table-view">
                    <li class="mui-table-view-cell">
                        <a id="tel" class="mui-navigate-right">办公电话</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

</body>
<script src="/static/js/mui.min.js "></script>
<script src="/static/js/mui.view.js "></script>
<script src='/static/js/jquery-1.11.1.js'></script>
<script src='/static/js/strophe-custom-2.0.0.js'></script>
<script src='/static/js/json2.js'></script>
<script src="/static/js/easemob.im-1.0.5.js"></script>
<script src='/static/js/feedback.js'></script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
    wx.config({
        debug: false,
        appId: '',
        timestamp: '',
        nonceStr: '',
        signature: '',
        jsApiList: [
            'hideOptionMenu'
        ]
    });
    wx.ready(function(){
        wx.hideOptionMenu();
    });
</script>
<script>
    mui.init({
        gestureConfig:{
            tap: true, //默认为true
            doubletap: true, //默认为false
            longtap: true, //默认为false
            swipe: true, //默认为true
            drag: true, //默认为true
            hold:false,//默认为false，不监听
            release:false//默认为false，不监听
        }
    });

    //初始化单页view
    var viewApi = mui('#app').view({
        defaultPage: '#setting'
    });
    //初始化单页的区域滚动
    mui('.mui-scroll-wrapper').scroll();
    //分享操作
    var shares = {};

    mui.plusReady(function() {
        plus.share.getServices(function(s) {
            if (s && s.length > 0) {
                for (var i = 0; i < s.length; i++) {
                    var t = s[i];
                    shares[t.id] = t;
                }
            }
        }, function() {
            console.log("获取分享服务列表失败");
        });
    });

    setTimeout(function () {
        defaultImg();
        setTimeout(function() {
            initImgPreview();
        }, 300);
    },500);


    //客服电话
    document.getElementById("tel").addEventListener('tap', function() {
        if(mui.os.plus){
            plus.device.dial("022-22410719");
        }else{
            location.href = 'tel:022-22410719';
        }

    });
    var view = viewApi.view;
    (function($) {
        //处理view的后退与webview后退
        var oldBack = $.back;
        $.back = function() {
            if (viewApi.canBack()) { //如果view可以后退，则执行view的后退
                viewApi.back();
            } else { //执行webview后退
                oldBack();
            }
        };
        //监听页面切换事件方案1,通过view元素监听所有页面切换事件，目前提供pageBeforeShow|pageShow|pageBeforeBack|pageBack四种事件(before事件为动画开始前触发)
        //第一个参数为事件名称，第二个参数为事件回调，其中e.detail.page为当前页面的html对象
        view.addEventListener('pageBeforeShow', function(e) {
            //				console.log(e.detail.page.id + ' beforeShow');
        });
        view.addEventListener('pageShow', function(e) {
            //				console.log(e.detail.page.id + ' show');
        });
        view.addEventListener('pageBeforeBack', function(e) {
            //				console.log(e.detail.page.id + ' beforeBack');
        });
        view.addEventListener('pageBack', function(e) {
            //				console.log(e.detail.page.id + ' back');
        });
    })(mui);
    function getImage() {
        var c = plus.camera.getCamera();
        c.captureImage(function(e) {
            plus.io.resolveLocalFileSystemURL(e, function(entry) {
                var s = entry.toLocalURL() + "?version=" + new Date().getTime();
                console.log(s);
                document.getElementById("head-img").src = s;
                //变更大图预览的src
                //目前仅有一张图片，暂时如此处理，后续需要通过标准组件实现
                document.querySelector("#__mui-imageview__group .mui-slider-item img").src = s + "?version=" + new Date().getTime();;;
            }, function(e) {
                console.log("读取拍照文件错误：" + e.message);
            });
        }, function(s) {
            console.log("error" + s);
        }, {
            filename: "_doc/head.jpg"
        })
    }

    function galleryImg() {
        plus.gallery.pick(function(a) {
            plus.io.resolveLocalFileSystemURL(a, function(entry) {
                plus.io.resolveLocalFileSystemURL("_doc/", function(root) {
                    root.getFile("head.jpg", {}, function(file) {
                        //文件已存在
                        file.remove(function() {
                            console.log("file remove success");
                            entry.copyTo(root, 'head.jpg', function(e) {
                                    var e = e.fullPath + "?version=" + new Date().getTime();
                                    document.getElementById("head-img").src = e;
                                    document.getElementById("head-img1").src = e;
                                    //变更大图预览的src
                                    //目前仅有一张图片，暂时如此处理，后续需要通过标准组件实现
                                    document.querySelector("#__mui-imageview__group .mui-slider-item img").src = e + "?version=" + new Date().getTime();;
                                },
                                function(e) {
                                    console.log('copy image fail:' + e.message);
                                });
                        }, function() {
                            console.log("delete image fail:" + e.message);
                        });
                    }, function() {
                        //文件不存在
                        entry.copyTo(root, 'head.jpg', function(e) {
                                var path = e.fullPath + "?version=" + new Date().getTime();
                                document.getElementById("head-img").src = path;
                                document.getElementById("head-img1").src = path;
                                //变更大图预览的src
                                //目前仅有一张图片，暂时如此处理，后续需要通过标准组件实现
                                document.querySelector("#__mui-imageview__group .mui-slider-item img").src = path;
                            },
                            function(e) {
                                console.log('copy image fail:' + e.message);
                            });
                    });
                }, function(e) {
                    console.log("get _www folder fail");
                })
            }, function(e) {
                console.log("读取拍照文件错误：" + e.message);
            });
        }, function(a) {}, {
            filter: "image"
        })
    }

    function defaultImg() {
        if(mui.os.plus){
            plus.io.resolveLocalFileSystemURL("_doc/head.jpg", function(entry) {
                var s = entry.fullPath + "?version=" + new Date().getTime();
                document.getElementById("head-img").src = s;
            }, function(e) {
                document.getElementById("head-img").src = '<?php echo $url;?>';
            })
        }else{
            document.getElementById("head-img").src = '<?php echo $url;?>';
        }
    }

    function initImgPreview() {
        var imgs = document.querySelectorAll("img.mui-action-preview");
        imgs = mui.slice.call(imgs);
        if (imgs && imgs.length > 0) {
            var slider = document.createElement("div");
            slider.setAttribute("id", "__mui-imageview__");
            slider.classList.add("mui-slider");
            slider.classList.add("mui-fullscreen");
            slider.style.display = "none";
            slider.addEventListener("tap", function() {
                slider.style.display = "none";
            });
            slider.addEventListener("touchmove", function(event) {
                event.preventDefault();
            });
            var slider_group = document.createElement("div");
            slider_group.setAttribute("id", "__mui-imageview__group");
            slider_group.classList.add("mui-slider-group");
            imgs.forEach(function(value, index, array) {
                //给图片添加点击事件，触发预览显示；
                value.addEventListener('tap', function() {
                    slider.style.display = "block";
                    _slider.refresh();
                    _slider.gotoItem(index, 0);
                })
                var item = document.createElement("div");
                item.classList.add("mui-slider-item");
                var a = document.createElement("a");
                var img = document.createElement("img");
                img.setAttribute("src", value.src);
                a.appendChild(img)
                item.appendChild(a);
                slider_group.appendChild(item);
            });
            slider.appendChild(slider_group);
            document.body.appendChild(slider);
            var _slider = mui(slider).slider();
        }
    }
</script>
</html>
