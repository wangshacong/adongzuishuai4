<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>（带手机版数据同步）地方门户新闻文章资讯网源码 大型新闻资讯门户织梦网站模板下载 - Www.AdminBuy.Cn</title>
    <meta name="description" content="（带手机版数据同步）地方门户新闻文章资讯网源码 大型新闻资讯门户织梦网站模板下载 - Www.AdminBuy.Cn" />
    <meta name="keywords" content="地方门户网站模板,新闻资讯网站源码" />
    <link rel="stylesheet" href="/css/style.css" type="text/css" />
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/js/gotop.js"></script>
    <meta http-equiv="mobile-agent" content="format=xhtml;url=/m/index.php">
    <script type="text/javascript">
        if (window.location.toString().indexOf('pref=padindex') != -1) {} else {
            if (/AppleWebKit.*Mobile/i.test(navigator.userAgent) || (
                    /MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/
                    .test(navigator.userAgent))) {
                if (window.location.href.indexOf("?mobile") < 0) {
                    try {
                        if (/Android|Windows Phone|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
                            window.location.href = "/m/index.php";
                        } else if (/iPad/i.test(navigator.userAgent)) {} else {}
                    } catch (e) {}
                }
            }
        }
    </script>
    <style>
        .home {
	background: #c00000;
}
</style>
</head>

<body>
    @include('gong.head')
    <div class="clear"></div>
    <div class="jrtt">
        <div class="toutiao"></div>
        <?php 
            $last_article = \DB::Table('article4s')->orderBy('id','desc')->limit(1)->first();
            $last3_article = \DB::Table('article4s')->orderBy('id','desc')->skip(1)->limit(3)->get();
        ?>
        <h2><a href="/article/{{$last_article->id}}" title="{{$last_article->title}}">{{$last_article->title}}</a></h2>

        <ul>
            @foreach($last3_article as $v)
            <li><a href="/article/{{$v->id}}" title="{{$v->title}}">{{$v->title}}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="main1">
        <div class="g_box6 fl">
            <div id="slideBox" class="slideBox">
                <div class="hd">
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <div class="bd">
                    <ul>
                        <?php 
                            $article = \DB::Table('article4s')->orderBy('id','desc')->where('news_pic','<>','')->limit(5)->get();
                        ?>
                        @foreach($article as $v)
                        <li>
                            <div class="pic"><a href="/article{{$v->id}}"><img src="{{$v->news_pic}}" alt="{{$v->title}}"/></a></div>
                            <div class="tit"><a href="/articl/{{$v->id}}">{{$v->title}}</a></div>
                            <div class="bg"></div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
                jQuery("#slideBox").slide({
                    mainCell: ".bd ul",
                    autoPlay: true,
                    effect: "left",

                    endFun: function (i, c) {

                        jQuery("#slideBox .tit").css({
                            "bottom": -40
                        }).eq(i).animate({
                            "bottom": 0
                        });

                        jQuery("#slideBox .bg").css({
                            "bottom": -40
                        }).eq(i).animate({
                            "bottom": 0
                        });

                    }

                });
            </script>
            <div class="g_box2">
                <div class="t_1">本周推荐</div>
                <?php 
                    $article = \DB::Table('article4s')->orderBy('id','desc')->limit(9)->get();
                ?>
                <ul class="b_box3">
                    @foreach ($article as $v)
                    <li><a href="/article/{{$v->id}}">{{$v->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="g_box1 fl">
            <?php 
                $article = \DB::Table('article4s')->orderBy('dianji','desc')->limit(2)->get();
            ?>
            <div class="t_1 jrfb">今日焦点 / Focus</div>
            @foreach($article as $v)
            <h1><a href="/article/{{$v->id}}">{{$v->title}}</a></h1>
            <p><?php echo preg_replace('/<.*?>/','',$v->content); ?></p>
            @endforeach
            <ul>
                <li><a href="/a/chengshi/nb/84.html">申鑫官宣：原主帅胡安卸任 继任者人选下周</a></li>
                <li><a href="/a/chengshi/hz/83.html">DOTA2完美大师赛中国战队夺冠 全新赛事体系</a></li>
                <li><a href="/a/chengshi/hz/82.html">J联赛出现神操作 可爱小猴子任开球嘉宾引发</a></li>
                <li><a href="/a/shishang/xingzuo/81.html">2272天后，鲁尼再演帽子戏法！埃弗顿4比0大</a></li>
                <li><a href="/a/shishang/dianying/80.html">昔日中超金靴转投中甲？埃尔克森是走是留引</a></li>
                <li><a href="/a/shishang/dianying/79.html">创纪录联赛12连胜，曼城有“绝杀先生”斯特</a></li>
                <li><a href="/a/shishang/dianying/78.html">秋季到 巧喝茶解秋燥</a></li>
                <li><a href="/a/shishang/mingxing/77.html">女子确诊患癌 准备未来17年礼物陪伴女儿</a></li>

                <div class="clear"></div>
            </ul>
        </div>
        <div class="right_1 fr">
            <div class="g_box2">
                <div class="t_1">最新电影</div>
                <?php 
                    $article = \DB::Table('article4s')->orderBy('id','desc')->where('fenlei_id',4)->limit(16)->get();
                ?>
                <ul class="ib_box1">
                    @foreach($article as $v)
                    <li><a href="/article/{{$v->id}}">{{$v->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    @foreach($fenlei as $v)
    <div class="main2">
        <div class="t_2"> <span>
                <a href="/fenlei/{{$v['id']}}">更多>></a>
            </span>
            <h3><a href="/fenlei/{{$v['id']}}">{{$v['fenlei_name']}}</a></h3>
        </div>
        <div class="g_box3 fl">
            <?php 
                $article2 = \DB::Table('article4s')->orderBy('id','desc')->where('fenlei_id',$v['id'])->limit(2)->get();
                $article4 = \DB::Table('article4s')->orderBy('id','desc')->where('fenlei_id',$v['id'])->skip(2)->limit(4)->get();
                $hot_article = \DB::Table('article4s')->orderBy('dianji','desc')->where('fenlei_id',$v['id'])->limit(1)->first();
                $pic_article= \DB::Table('article4s')->orderBy('id','desc')->where('fenlei_id',$v['id'])->where('news_pic','<>','')->limit(2)->get();
                $hot2_article= \DB::Table('article4s')->orderBy('dianji','desc')->where('fenlei_id',$v['id'])->limit(8)->get();
            ?>
            <ul class="b_box2">
                @foreach($article2 as $val)
                <li> <a href="/article/{{$val->id}}">{{$val->title}}</a>央广网武汉10月4日消息（记者张毛清 通讯员田昊 周慧）连日来，武汉火车站...</li>
                @endforeach
            </ul>
            <ul class="b_box3">
                @foreach($article4 as $val)
                <li><a href="/article/{{$val->id}}">{{$val->title}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="g_box4 fl">
            <h3><a href="/article/{{$hot_article->id}}">{{$hot_article->title}}</a></h3>
            <p>大洋网讯 今天是中秋佳节，家家户户都盼望着团圆，而一名六旬老人在走失了9年后，昨日在顺德公安和省救助站...</p>

            <ul class="b_box8">
                    @foreach($pic_article as $val)
                <li> <a href="/article/{{$val->id}}"><img src="{{$val->news_pic}}" alt="{{$val->title}}" /></a>
                    <h4><a href="/article/{{$val->id}}">{{$val->title}}</a></h4>
                    <p>10月2日，武汉开发区（汉南区）一个9岁女孩离家出走，抱着一袋衣服欲投奔同学，被民警街头巡逻发现。在一堆零食的攻心下，民警套...</p>
                </li>
                    @endforeach
            </ul>
        </div>
        <div class="g_box3 fl">
            <div class="t_3">热门文章</div>
            <ul class="b_box4">
                @foreach($hot2_article as $val)
                <li><a href="/article/{{$val->id}}">{{$val->title}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    @endforeach
    @include('gong.footer')

    <div class="foot"> Copyright &copy; Www.AdminBuy.Cn AB模板网 版权所有<br />
        本站所有资讯来源于网络 如有侵权请联系QQ：9490489 <b>技术支持</b>：<a href="http://www.adminbuy.cn" target="_blank">织梦模板</a></div>
    <a href="#0" class="cd-top">Top</a>
</body>

</html>