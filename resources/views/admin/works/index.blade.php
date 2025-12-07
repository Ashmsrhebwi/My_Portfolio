{{-- resources/views/admin/works/index.blade.php --}}
@extends('admin.layouts.master')

@section('title', 'Our Works')

@section('content')
<div class="card">
    <h1>Our Works</h1>
    <p class="text-muted">Manage your portfolio projects and works</p>

    <a href="{{ route('admin.works.create') }}" class="btn btn-primary mb-4">
        <i class="fas fa-plus"></i> Add New Work
    </a>

    @if(session('success'))
        <div class="alert alert-success mb-4">
            <i class="fas fa-check-circle"></i> {{ session('success') }}
        </div>
    @endif

    @if($works->count() > 0)
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Link</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($works as $i => $work)
                <tr>
                    <td>{{ $i+1 }}</td>
                    <td>
                        <strong>{{ $work->title }}</strong>
                    </td>
                    <td>
                        <span class="text-muted">
                            {{ Str::limit($work->description, 50) }}
                        </span>
                    </td>
                    <td>
                        @if($work->image)
                        <img src="{{ $work->image }}" width="60" height="60" 
                             alt="{{ $work->title }}">
                        @else
                        <span class="text-muted">No image</span>
                        @endif
                    </td>
                    <td>
                        @if($work->link)
                        <a href="{{ $work->link }}" target="_blank" class="btn btn-sm btn-outline-primary">
                            <i class="fas fa-external-link-alt"></i> Visit
                        </a>
                        @else
                        <span class="text-muted">No link</span>
                        @endif
                    </td>
                    <td>
                        <div class="actions">
                            <a href="{{ route('admin.works.edit', $work) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('admin.works.destroy', $work) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" 
                                        onclick="return confirm('Are you sure you want to delete this work?')">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <div class="empty-state">
        <i class="fas fa-briefcase"></i>
        <h3>No Works Yet</h3>
        <p class="text-muted">Start by adding your first project</p>
        <a href="{{ route('admin.works.create') }}" class="btn btn-primary mt-3">
            <i class="fas fa-plus"></i> Add First Work
        </a>
    </div>
    @endif
</div>
@endsection

@push('styles')
@include('admin.works.styles')
@endpush