@extends('layouts.app')
@section('content')
    <h1>Posts</h1>

    <div class="grey_area card card-body bg-info">
        <div class="container wysiwig" >
            <div class="content_wrapper ">
                <h3 class="title_wcag text-dark">Our commitment towards Sri Lanka</h3>
                <p class="text-muted">Banking is our business. Making it the most people oriented, technologically advanced organization, providing up to the minute products and services, with superlative financial management have enabled Commercial Bank, to be Sri Lanka’s leading bank year after year. And beyond financial responsibilities, Commercial Bank has chartered new territories by identifying needs and providing just the right kind of service when required. The Commercial Bank Social Responsibility Trust, founded for this purpose, has reached out to the core to uplift creatively, socially, culturally and ethically in an outstanding manner.</p>
                <h3 class="title_wcag text-dark">Our commitment for the planet</h3>
                <p class="text-muted">Extending beyond the borders of its financial domain, Commercial Bank is involved as a participating financial institution in the E Friends loan scheme. Partnered with the Japan bank for international corporation who supplied the funds, loans were granted at concessionary rates to motivate companies to be more environment conscious. Projects such as reducing emission, improving worker safety etc.... were financially assisted with easy pay loan schemes. The technical transfer assistance scheme also contributed in controlling emission in plants, water treatment, waste minimization etc....</p>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div><hr>

    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="card card-body bg-light">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_image/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small><br>
                        <div class="container text-muted">
                            {!!$post->body!!}
                        </div>
                    </div>
                </div>
            </div><br>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No Posts Found!</p>
    @endif
@endsection