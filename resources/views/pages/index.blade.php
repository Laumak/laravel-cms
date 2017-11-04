@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pages</div>

                <div class="panel-body">
                    <ul>
                        @foreach($pages as $page)
                            <li>
                                <a href="/pages/{{$page->id}}">
                                    {{ $page->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
