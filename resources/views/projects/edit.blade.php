@extends('layouts.app')
@section('main')

  @if($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ $message }}
    </div>
  @endif
  <style>
    body{
      background-color:#EAEAEA;
    }
  </style>
  
  <div class="container pt-4">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <div class="card shadow-sm">
          <div class="card-header text-center">
            <h1 class="mb-0 fs-4">Edit Project</h1>
          </div>
          <div class="card-body">
            <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="mb-3">
                <label for="title" class="form-label">Project Title</label>
                <input type="text" class="form-control" id="title" name="name" value="{{ old('name', $project->name) }}" required>
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Project Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $project->description) }}</textarea>
              </div>
              <div class="mb-3">
                <label for="url" class="form-label">Project URL</label>
                <input type="url" class="form-control" id="url" name="github_url" value="{{ old('github_url', $project->github_url) }}" required>
              </div>
              <div class="mb-3">
                <label for="image" class="form-label">Project Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @if($project->image)
                <div class="mt-2">
                  <small class="text-muted">Current image: {{ basename($project->image) }}</small>
                </div>
                @endif
              </div>
              <div class="mb-3">
                <label for="category" class="form-label">Project Status</label>
                <select class="form-select" id="category" name="status" required>
                  <option value="" disabled>Select status</option>
                  <option value="draft" {{ old('status', $project->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                  <option value="published" {{ old('status', $project->status) == 'published' ? 'selected' : '' }}>Published</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary w-100">Update Project</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection