@extends('layouts.app')
@section('main')

<div class="container py-5 d-flex justify-content-center align-items-center" style="min-height: 90vh; background: linear-gradient(135deg, #f8fafc 0%, #e0e7ef 100%);">
  <div class="card shadow-lg border-0 rounded-4" style="max-width: 600px; width: 100%;">
    <div class="position-relative">
      <img src="/projects/{{$project->image}}" class="card-img-top rounded-top-4" alt="Project Image" style="height: 280px; object-fit: cover;">
      <span class="badge bg-primary position-absolute top-0 end-0 m-3 px-3 py-2 fs-6 shadow">Project</span>
    </div>
    <div class="card-body p-4">
      <h2 class="card-title text-dark fw-bold mb-2">{{ $project->name }}</h2>
      <!-- <p class="text-muted mb-3">
        The Currency Converter is a simple and responsive web application that allows users to convert amounts between different currencies in real-time. It fetches live exchange rates through an API and provides instant, accurate conversions.
      </p> -->
      <p class="card-text text-secondary mb-4">{{ $project->description }}</p>
      <div class="d-flex gap-3">
        <a href="{{$project->github_url}}" target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary d-flex align-items-center gap-2 px-4">
          <i class="bi bi-github fs-5"></i> Github
        </a>
        <!-- <a href="https://currency-convertion-rho.vercel.app/" target="_blank" rel="noopener noreferrer" class="btn btn-primary d-flex align-items-center gap-2 px-4">
          <i class="bi bi-box-arrow-up-right fs-5"></i> Live Demo
        </a> -->
      </div>
    </div>
    <div class="card-footer bg-white border-0 rounded-bottom-4 text-end small text-muted py-3">
      Last updated: {{ $project->updated_at->format('M d, Y') }}
    </div>
  </div>
</div>

@endsection