@extends ('layouts.front')

@section ('content')
    <?php $drill = $drill['_source']; ?>
    <div class="container" style="margin-top: 20px">
        <div class="card">
            <div class="card-image">
            </div>
            <div class="card-content">
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-128x128">
                            <img src="{{ $drill['images'][0] }}" alt="Image">
                        </figure>
                    </div>
                    <div class="media-content">
                        <p class="title is-4">{{ $drill['name'] }}</p>
                        <p class="subtitle is-6">{{ $drill['description'] }} </p>
                    </div>
                </div>
        </div>
    </div>
</div>

@stop