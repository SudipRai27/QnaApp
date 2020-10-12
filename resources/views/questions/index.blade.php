@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center w-100 justify-content-between">
                        <h2>All Questions</h2>
                        <div>
                        <a href="{{ route('questions.create') }}" class="btn btn-secondary">Ask a question</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @include('partials._session-message')
                    @foreach($questions as $question)
                        <div class="media d-flex flex-column flex-md-row">
                            <div class="d-flex flex-row flex-md-column justify-content-center align-items-center order-2 order-md-1 counters">
                                <div class="counters__vote m-1">
                                    <p class="counters__number">{{ $question->votes }}</p>
                                    <p class="counters__text">{{ Str::plural('vote',$question->votes )}}</p>
                                </div>
                                <div class="counters__status m-1 {{ $question->status }}">
                                    <p class="counters__number">{{ $question->answers }}</p>
                                    <p class="counters__text">{{ Str::plural('answer',$question->answers )}}</p>
                                </div>
                                <div class="counters__views m-1">
                                    <p class="counters__text">
                                        {{ $question->views ." ". Str::plural('view',$question->views ) }}
                                    </p>
                                </div>
                            </div>
                            <div class="media-body order-1 order-md-2">
                                <div class="d-flex align-items-center">
                                    <h3 class="mt-0"><a href="{{ $question->url }}">{{ $question->title }}</a></h3>
                                    <div class="ml-auto">
                                        <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-sm btn-outline-info">Edit</a>
                                    </div>
                                </div>
                                <p class="lead">
                                    Asked by:
                                    <a href="{{ $question->user->url }}">{{ $question->user->name }}</a>
                                    <small class="text-muted">{{ $question->created_date }}</small>
                                </p>
                                <p>{{ Str::limit($question->body, 250, '...') }}</p>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                    <div class="d-flex justify-content-center">
                        {{ $questions->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
