@extends('layouts.app')

@section('page-title', $book->title)

@section('main-content')
<h1>
    {{ $book->title }}
</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3>
                    {{ $book->title }}
                </h3>

                <p>
                    {{ $book->author }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
