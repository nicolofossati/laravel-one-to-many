<!-- qui ci metto il form -->

@extends('layouts.admin')

@section('content')
    <h1 class="text-center">Edit a  project</h1>    

    <div class="">
        <form action="{{route('admin.projects.update', ['project'=>$project->slug])}}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group my-4">
                <label for="title">Title</label>
                <input id="title" class="form-control form-control-lg @error('title') is-invalid @enderror" type="text" name="title" value="{{old('title', $project->title)}}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group my-4">
              <label for="description">Description</label>
              <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="3" name="description">{{old('description', $project->description)}}</textarea>
              @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group my-4">
                <label class="form-check-label @error('category') is-invalid @enderror" for="category">Category</label>
                <input id="category" class="form-control" type="text" name="category" value="{{old('category', $project->category)}}">
                @error('category')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group my-4">
                <label class="form-check-label" for="client">Client</label>
                <input id="client" class="form-control @error('client') is-invalid @enderror" type="text" name="client" value="{{old('client', $project->client)}}">
                @error('client')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row mb-4">
                <div class="form-group col-6">
                    <label class="form-check-label" for="creation_date">Creation date</label>
                    <input id="creation_date" class="form-control form-control-sm @error('creation_date') is-invalid @enderror" type="text" name="creation_date" value="{{old('creation_date', $project->creation_date)}}">
                    @error('creation_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group col-6">
                    <label class="form-check-label" for="completion_date">Completion date</label>
                    <input id="completion_date" class="form-control form-control-sm @error('completion_date') is-invalid @enderror" type="text" name="completion_date" value="{{old('completion_date', $project->completion_date)}}">
                    @error('completion_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection