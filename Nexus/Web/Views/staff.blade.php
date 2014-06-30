@foreach ($depts as $dept)
    <h2>{{ $dept->name }}</h2>

    <dl>
    @foreach ($dept->positions as $position)
        <dt>{{ $position->name }}</dt>
        @foreach ($position->characters as $character)
            <dd>{{ $character->printName() }}</dd>
        @endforeach
    @endforeach
    </dl>
@endforeach
