<nav class="nav-main">
    <ul>
        <li{{ (Request::is('main*') or Request::is('/') or Request::is('credits')) ? ' class="current"' : '' }}><a href="{{ route('home') }}">Home</a></li>
        <li{{ (Request::is('fleet*')) ? ' class="current"' : '' }}><a href="{{ route('fleet') }}">Fleet Command</a></li>
        <li{{ (Request::is('wiki*')) ? ' class="current"' : '' }}><a href="{{ route('wiki.home') }}">LCARS Database</a></li>
    </ul>
</nav>
