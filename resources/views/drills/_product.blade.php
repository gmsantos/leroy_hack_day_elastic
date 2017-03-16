<?php $drill = $drill['_source']; ?>
<div class="box">
    <article class="media">
        <div class="media-left">
            <figure class="image is-64x64">
                <img src="{{ $drill['images'][0] }}" alt="Image">
            </figure>
        </div>
        <div class="media-content">
            <div class="content">
                <p><strong>{{ $drill['name'] }}</strong>
                <br>
                {{ $drill['description']}}
                </p>
            </div>
            <a href="#" class="button is-primary">Comprar!</a>
        </div>
    </article>
</div>