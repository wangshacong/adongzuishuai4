<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>资讯_（带手机版数据同步）地方门户新闻文章资讯网源码 大型新闻资讯门户织梦网站模板下载 - Www.AdminBuy.Cn</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="mobile-agent" content="format=xhtml;url=/m/list.php?tid=1">
    <script type="text/javascript">
        if (window.location.toString().indexOf('pref=padindex') != -1) {} else {
            if (/AppleWebKit.*Mobile/i.test(navigator.userAgent) || (
                    /MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/
                    .test(navigator.userAgent))) {
                if (window.location.href.indexOf("?mobile") < 0) {
                    try {
                        if (/Android|Windows Phone|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
                            window.location.href = "/m/list.php?tid=1";
                        } else if (/iPad/i.test(navigator.userAgent)) {} else {}
                    } catch (e) {}
                }
            }
        }
    </script>
    <link rel="stylesheet" href="/css/style.css" type="text/css" />
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/js/gotop.js"></script>
</head>

<body>
    @include('gong.head')
    <div class="weizhi"> 您的当前位置：<a href='http://127.0.0.4/'>天津实创</a> > <a href='/a/news/'>{{$dangqian_fenlei['fenlei_name']}}</a></div>
    <div class="main1">
        <div class="left_1">
            <div class="g_list">
                <div class="t_4">
                    <h3>{{$dangqian_fenlei['fenlei_name']}}</h3>
                </div>
                <ul class="list2">
                    @foreach($article as $v)
                    <li> <a href="/article/{{$v['id']}}"><img class="" src="{{$v['news_pic']}}" alt="{{$v['title']}}"></a>
                        <h3><a href="/article/{{$v['id']}}">{{$v['title']}}</a></h3>
                        <p><?php echo preg_replace('/<.*?>/','',$v->content); ?></p>
                        <span>2017-11-29</span>
                    </li>
                    @endforeach
                </ul>
                <div class="pagess">
                    <ul>
                        <li><span class="pageinfo">{{$article->appends(request()->all())->links()}}</span></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="right_1">
            <div class="g_box2 u_2">
                <?php 
                    $new_article = \DB::Table('article4s')->orderBy('id','desc')->where('fenlei_id',$dangqian_fenlei['id'])->limit(10)->get();
                ?>
                <div class="t_1"> 最新资讯 </div>
                <ul class="b_box3 u_1">
                    @foreach($new_article as $v)
                    <li><a href="/article/{{$v->id}}">{{$v->title}}</a></li>
                    @endforeach

                </ul>
            </div>
                <?php 
                    $hot_article = \DB::Table('article4s')->orderBy('dianji','desc')->limit(10)->get();
                ?>
            <div class="g_box2 u_2">
                <div class="t_1"> 热门排行 </div>
                <ul class="b_box1">
                    @foreach($hot_article as $v)
                    <li><a href="/article/{{$v->id}}">{{$v->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="clear"> </div>
    </div>
    @include('gong.footer')
    <div class="foot"> Copyright &copy; Www.AdminBuy.Cn AB模板网 版权所有<br />
        本站所有资讯来源于网络 如有侵权请联系QQ：9490489 <b>技术支持</b>：<a href="http://www.adminbuy.cn" target="_blank">织梦模板</a></div>
    <a href="#0" class="cd-top">Top</a>
</body>

</html>