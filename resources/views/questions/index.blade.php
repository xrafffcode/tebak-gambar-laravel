@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h4>Questions</h4>
                    <a href="{{ route('questions.create') }}" class="btn btn-primary">Create</a>
                </div>
                <table class="table table-bordered table-striped mt-3">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Level</th>
                            <th>Image</th>
                            <th>Answer</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($questions as $question)
                            <tr>
                                <th>{{ $question->id }}</th>
                                <td>{{ $question->level }}</td>
                                <td><img src="{{ asset($question->image) }}" alt="{{ $question->answer }}"
                                        class="img-thumbnail" width="200"></td>
                                <td>{{ $question->answer }}</td>
                                <td>
                                    <form style="display: inline-block" method="POST"
                                        action="{{ route('questions.destroy', $question->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
