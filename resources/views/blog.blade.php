@extends('layout')

@section('content')
<ul>
@foreach ($posts as $post)
    <p>
        <strong>
            {{$post->id}}
        </strong>
        <a href="{{route('blog.show',$post->slug)}}">
            {{$post->title}}
        </a><br>
        <strong>
            {{$post->user->name}}
        </strong>
    </p>
@endforeach
</ul>

{{$posts->links()}}


@endsection