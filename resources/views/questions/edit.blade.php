@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center w-100 justify-content-between">
                        <h2>Edit Question</h2>
                        <div>
                        <a href="{{ route('questions.index') }}" class="btn btn-danger">Go Back</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @include('partials._session-message')
                    <form action="{{ route('questions.update', $question->id )}}" method="POST" autocomplete="off">
                        {{ method_field('PUT') }}
                        @include('questions._form',['buttonText' => 'Update your question'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
