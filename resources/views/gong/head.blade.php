
<div class="nav">
	<ul>
			<div class="logo"><a href="/"><img src="/images/tj.png" alt="" /></a></div>	
		<li><a href="/" class="home">首页</a></li>
		@foreach($fenlei as $v)
		<li><a href='/fenlei/{{$v['id']}}'>{{$v['fenlei_name']}}</a></li>
		@endforeach

	</ul>
</div>