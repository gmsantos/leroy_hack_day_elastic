@extends('layouts.front')

@section('content')
    <div class="columns">
        <div class="column is-one-quarter">
            <aside class="menu" style="margin-top:20px">
                @if ($queryString)
                    <a class="button is-danger" href="{{ url('/') }}">
                        <i class="fa fa-trash">&nbsp;</i> Clean Filters</a>
                @endif
                @foreach ($drills['aggregations'] as $facetName => $facets)
                    <p class="menu-label">{{ $facetName }}</p>
                    <ul class="menu-list">
                        @foreach($facets['buckets'] as $bucket)
                            <li>
                                <a href="{{ url('/?'.http_build_query(array_merge($queryString, [$facetName => $bucket['key']]))) }}">{{ $bucket['key'] . ' ( ' . $bucket['doc_count'] . ' )'}}</a>
                            </li>
                        @endforeach
                    </ul>
                @endforeach
            </aside>
        </div>
        <div class="column" style="margin-top: 20px">
            <?php $hits = $drills['hits']['hits']; ?>
            <div>
                @foreach ($hits as $drill)
                    @include('drills._product')
                @endforeach
            </div>
        </div>
    </div>
@stop