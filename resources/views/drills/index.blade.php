@extends('layouts.front')

@section('content')
    <div class="columns">
        <div class="column is-one-quarter">
            <aside class="menu">
                <p class="menu-label">Filtros</p>
                <ul class="menu-list">
                    <li><a>Alguns</a></li>
                    <li><a>Filtros</a></li>
                </ul>
                <p class="menu-label">
                    Outros Filtros
                </p>
                <ul class="menu-list">
                    <li><a>Mais alguns</a></li>
                    <li><a class="is-active">Filtro Selecionado</a></li>
                    <li><a>Para então</a></li>
                    <li><a>Testarmos</a></li>
                </ul>
        </div>
        <div class="column">
            <div class="tile is-ancestor">
                <div class="tile is-parent">
                    @for ($i = 0 ; $i < sizeof($drills['hits']['hits']) ; $i++)
                        <div class="tile">
                            @include('drills._product')
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@stop