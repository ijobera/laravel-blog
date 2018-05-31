@extends('layouts.app')

@section('content')
<div class="card">
    <table class="table table-hover">
        <thead>
            <th>
                Image
            </th>

            <th>
                Title
            </th>

            <th>
                Edit
            </th>

            <th>
                Trash
            </th>
        </thead>

        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="50px" height="50px"></td>

                    <td>
                        {{ $post->title }}
                    </td>

                    <td>
                        <a href="{{ route('post.edit', ['id' => $post->id])}}" class="btn btn-success btn-sm">Edit</a>
                    </td>

                    <td>
                        <a href="{{ route('post.delete', ['id' => $post->id])}}" class="btn btn-danger btn-sm">Trash</a>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>
@endsection