<div class="row">
    <div class="col-lg-12">
        <h3 class="text-center">
            {{ HTML::link($ship->url, $ship->name) }} <small>{{ $ship->registry }}</small>
        </h3>

        <div class="row">
            <div class="col-lg-7">
                <p class="text-center">{{ HTML::image('assets/uploads/ships/'.$ship->image) }}</p>
            </div>
            <div class="col-lg-5 text-small">
                <div class="row">
                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-12">
                        <div><strong>Task Force:</strong> {{ $ship->taskforce->name }}</div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-12">
                        <div><strong>Task Group:</strong> {{ $ship->taskgroup->alias }}</div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-12">
                        <div><strong>Status:</strong> {{ $ship->shipstatus->name }}</div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-12">
                        <div><strong>Class:</strong> {{ $ship->shipclass->name }}</div>
                    </div>

                    @if ($ship->commanding_officer !== null)
                        <div class="col-xs-6 col-sm-4 col-md-6 col-lg-12">
                            <div><strong>Crew Count:</strong> {{ $ship->crew->count() }}</div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-6 col-lg-12">
                            <div><strong>Format:</strong> {{ $ship->format }}</div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6 text-center">
            <h4>Commanding Officer</h4>

            @if ($ship->commanding_officer !== null)
                <p>{{ HTML::image('assets/uploads/ranks/ds9/'.$ship->co->rank->image) }}</p>
                <p>{{ $ship->co->rank->name ." ". $ship->co->name }}</p>
            @else
                <p>{{ HTML::image('assets/uploads/ranks/ds9/b-blank1.png') }}</p>
                <p class="warning">Open Command</p>
            @endif
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 text-center">
            @if ($ship->commanding_officer !== null and $ship->executive_officer !== null)
                <h4>Executive Officer</h4>
                <p>{{ HTML::image('assets/uploads/ranks/ds9/'.$ship->xo->rank->image) }}</p>
                <p>{{ $ship->xo->rank->name ." ". $ship->xo->name }}</p>
            @elseif ($ship->commanding_officer !== null and $ship->executive_officer === null)
                <h4>Executive Officer</h4>
                <p>{{ HTML::image('assets/uploads/ranks/ds9/b-blank1.png') }}</p>
                <p>No XO assigned</p>
            @else
                <h4>&nbsp;</h4>
                <p class="lead text-warning">Open Command</p>
            @endif
        </div>

        <div class="col-lg-12"><p>{{ $ship->intro }}</p></div>
    </div>
</div>
