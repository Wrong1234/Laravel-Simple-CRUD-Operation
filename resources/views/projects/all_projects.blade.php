@extends('layouts.app')
@section('main')

  <style>
    .card.h-100 {
      transition: transform 0.3s cubic-bezier(.4,2,.6,1);
      cursor: pointer;
    }
    .card.h-100:hover {
      transform: translateY(-5px);
    }
    body{
      background-color: #EAEAEA;
    }
  </style>
  <div class="container py-4">
    <div class="d-flex justify-content-between align-items-center ">
      <h2 class="fw-bold text-primary mb-0">My Projects</h2>
      <a href="/projects/create" class="btn btn-lg btn-primary shadow-sm">
        <i class="bi bi-plus-circle me-2"></i>Add Project
      </a>
    </div>
    <hr class="mb-5">
    <div class="row g-4 mb-3">
      @forelse($projects as $project)
        <div class="col-12 col-md-6 col-lg-4">
          <div class=" card h-100 border-0 shadow-md rounded-2">
            @if($project->image)
              <img src="{{ asset('projects/'.$project->image) }}" class="card-img-top rounded-top-3 " alt="Project Image" style="height: 220px; object-fit: cover;">
            @else
              <div class="bg-secondary d-flex align-items-center justify-content-center rounded-top-4" style="height: 220px;">
                <span class="text-white-50 fs-1"><i class="bi bi-image"></i></span>
              </div>
            @endif
            <div class="card-body d-flex flex-column">
              <h5 class="card-title fw-semibold text-dark mb-2">{{ $project->name }}</h5>
              <!-- <p class="card-text mb-2">
                <span class="badge bg-{{ $project->status === 'Completed' ? 'success' : 'warning' }}">
                  {{ $project->status }}
                </span>
              </p> -->
              <div class="mt-auto d-flex justify-content-between align-items-center">
                <div>
                  <a href="{{ url('projects/'.$project->id.'/edit') }}" class="btn btn-outline-success btn-sm me-2">
                    <i class="bi bi-pencil"></i> Edit
                  </a>
                  <form action="{{ url('projects/'.$project->id.'/delete') }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger btn-sm">
                      <i class="bi bi-trash"></i> Delete
                    </button>
                  </form>
                </div>
                <a href="{{ url('projects/'.$project->id.'/show') }}" class="btn btn-outline-primary btn-sm">
                  <i class="bi bi-eye"></i> View
                </a>
              </div>
            </div>
          </div>
        </div>
      @empty
        <div class="col-12">
          <div class="alert alert-info text-center py-5 rounded-4 shadow-sm">
            <h4 class="mb-3"><i class="bi bi-folder-x"></i> No Projects Found</h4>
            <p>Start by adding your first project!</p>
          </div>
        </div>
      @endforelse
    </div>
  </div>
  <!-- Bootstrap Icons CDN (add to your layout if not already included) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
@endsection