@extends('layouts.main')
@section('content')
    <div>
        <table class="table">
            <tbody>
            <tr>
                <th scope="row">id</th>
                <td>{{$post->id}}</td>
            </tr>
            <tr>
                <th scope="row">title</th>
                <td>{{$post->title}}</td>
            </tr>
            <tr>
                <th scope="row">content</th>
                <td>
                    <div>{!! $post->content !!}</div>
                </td>
            </tr>
            <tr>
                <th scope="row">image</th>
                <td><img src="{{$post->photo}}" alt="Post's image" class="w-25"/></td>
            </tr>
            <tr>
                <th scope="row">category</th>
                <td>{{$post->category->name}}</td>
            </tr>
            <tr>
                <th scope="row">actions</th>
                <td>
                    <div class="col-md-1">
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success">Edit</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
