<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>天津实创新闻</title>
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
                            <div class="tit"><a href="/article/{{$v->id}}">{{$v->title}}</a></div>
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
            <?php 
                $article = \DB::Table('article4s')->orderBy('dianji','desc')->skip(2)->limit(8)->get();
            ?>
            <ul>
                @foreach($article as $v)
                <li><a href="/article/{{$v->id}}">{{$v->title}}</a></li>
                @endforeach

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
                $hot_article = \DB::Table('article4s')->orderBy('dianji','desc')->where('fenlei_id',$v['id'])->limit(1)->get();
                dump($hot_article);
                $pic_article= \DB::Table('article4s')->orderBy('id','desc')->where('fenlei_id',$v['id'])->where('news_pic','<>','')->limit(2)->get();
                $hot2_article= \DB::Table('article4s')->orderBy('dianji','desc')->where('fenlei_id',$v['id'])->limit(8)->get();
            ?>
            <ul class="b_box2">
                @foreach($article2 as $val)
                <li> <a href="/article/{{$val->id}}">{{$val->title}}</a><?php echo preg_replace('/<.*?>/','',$val->content); ?></li>
                @endforeach
            </ul>
            <ul class="b_box3">
                @foreach($article4 as $val)
                <li><a href="/article/{{$val->id}}">{{$val->title}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="g_box4 fl">
            <h3><a href="/article/{{$hot_article['id']}}">{{$hot_article['title']}}</a></h3>
            <p><?php echo preg_replace('/<.*?>/','',$hot_article['content']); ?></p>

            <ul class="b_box8">
                    @foreach($pic_article as $val)
                <li> <a href="/article/{{$val->id}}"><img src="{{$val->news_pic}}" alt="{{$val->title}}" /></a>
                    <h4><a href="/article/{{$val->id}}">{{$val->title}}</a></h4>
                    <p><?php echo preg_replace('/<.*?>/','',$val->content); ?></p>
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

    <div class="foot"> Copyright &copy; www.tjscxw.com 版权所有<br /></div>

</body>

</html>