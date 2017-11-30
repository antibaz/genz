@extends('layout.template')
@section('pageTitle',' Отзывы - '. LAConfigs::getByKey("sitename"))
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 container-comments">
                <div class="comments">
                    <div class="page-header">
                        <h1>{{--<small class="pull-right">45 comments</small>--}} Отзывы наших клиентов </h1>
                    </div>
                    <div class="comments-list">
                        @foreach(\App\Models\Comment::all()->sortBy('sort_top')->reverse() as $comment)
                            <div class="media" style="margin: 40px 0;">
                            <p class="pull-right"><small>{{ date('d.m.Y H:i', strtotime( $comment->created_at)) }}</small></p>
                            <div class="media-body">

                                <h4 class="media-heading user_name">{{ $comment->name }}</h4>
                                {{ $comment->text }}

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
