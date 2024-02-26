@extends('layouts.app')

@section('page-title', 'Tutti i libri')

@section('main-content')
<h1>
    Libri
</h1>

<div class="row">
    @foreach ($books as $index => $book)
        <div class="col-12 col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h3>
                        {{ $book->title }}
                    </h3>

                    <a href="{{ route('books.show', ['id' => $book->id]) }}" class="btn btn-primary">
                        Vai al libro
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
