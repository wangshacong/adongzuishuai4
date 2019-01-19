<div class="head">
		<div class="logo"><a href="/"><img src="" alt="" /></a></div>
	<div class="share"> </div>
</div>
<div class="nav">
	<ul>
			
		<li><a href="/" class="home">首页</a></li>
		@foreach($fenlei as $v)
		<li><a href='/fenlei/{{$v['id']}}'>{{$v['fenlei_name']}}</a></li>
		@endforeach

	</ul>
</div>