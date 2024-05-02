@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h4>Create Question</h4>
                    <a href="{{ route('questions.index') }}" class="btn btn-primary">Back</a>
                </div>
                <form action="{{ route('questions.store') }}" method="POST" class="mt-3" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="answer" class="form-label">Answer</label>
                        <input type="text" class="form-control" id="answer" name="answer"
                            oninput="this.value = this.value.toUpperCase()">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
