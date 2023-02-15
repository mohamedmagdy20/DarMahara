@extends('layouts/app')
@section('content')
    <div class="container">
	    <a class="btn btn-primary mb-2" href="{{ route('admin.articles.add') }}">Add New Article</a>
        <table class="table">
            <tr class="table-header">
                <th class="header__item">Name</a></th>
                <th class="header__item">URL</a></th>
                <th class="header__item">Actions</a></th>
            </tr>
            <tbody class="table-content">
                @foreach ($articles as $article)
                    <tr class="table-row">
                        <td class="table-data">{{ $article->name }}</td>
                        <td class="table-data"><a
                                href="{{ env('APP_URL') . 'articles/' . $article->url }}">{{ asset('') . $article->url }}</a>
                        </td>
                        <td class="table-dvata">
                            <a href="{{ route('admin.articles.edit', $article->id) }}">Edit</a>
                            <a href="{{ route('admin.articles.delete', $article->id) }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
