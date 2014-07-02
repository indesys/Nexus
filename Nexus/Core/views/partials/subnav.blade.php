<ul>
	@foreach ($menu_items as $nav)
		<li>{{ HTML::link($nav->url,$nav->text) }}</li>
    @endforeach
</ul>