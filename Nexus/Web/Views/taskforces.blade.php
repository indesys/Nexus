@foreach ($taskforces as $tf)
    <h2>{{ $tf->name }}</h2>

    <dl>
    @foreach ($tf->taskgroups as $tg)
        <dt>{{ $tg->name }}</dt>
        @foreach ($tg->ships as $ship)
            <dd>{{ $ship->name }}</dd>
        @endforeach
    @endforeach
    </dl>
@endforeach
