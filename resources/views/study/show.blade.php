@extends('layouts.default')
@section('content')


    @foreach ($contents as $content)
    <div class="bs-example col-lg-6" data-example-id="panel-with-list-group">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">{{ $content->title }}</div>
            <div class="panel-body">
                <p>{{ $content->desc }}</p>
            </div>
            <!-- List group -->
            <ul class="list-group">
                <li class="list-group-item"> <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> Cras justo odio<a href="{{ Route('study.show') }}"  class="pull-right">阅读</a></li>
                <li class="list-group-item"> <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> Cras justo odio<a href="{{ Route('study.show') }}"  class="pull-right">阅读</a></li>
                <li class="list-group-item"> <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> Cras justo odio<a href="{{ Route('study.show') }}"  class="pull-right">阅读</a></li>
                <li class="list-group-item"> <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> Cras justo odio<a href="{{ Route('study.show') }}"  class="pull-right">阅读</a></li>
                <li class="list-group-item"> <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> Cras justo odio<a href="{{ Route('study.show') }}"  class="pull-right">阅读</a></li>
                <li class="list-group-item"> <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> Cras justo odio<a href="{{ Route('study.show') }}"  class="pull-right">阅读</a></li>
            </ul>
        </div>
    </div>
    @endforeach



@stop