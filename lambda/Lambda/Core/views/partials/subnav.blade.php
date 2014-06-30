<ul>
	@foreach ($menu_items as $nav)
		<li>{{ HTML::link($nav->submenu_link,$nav->submenu_text) }}</li>
    @endforeach
</ul>