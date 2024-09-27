@extends('layout')
@section('title', 'Educational Materials | GestoCom-Admin')
@section('content')

<!-- <head>
    <link rel="stylesheet" href="{{ URL::to('/assets/css/style.css') }}">
</head> -->

<div class="main-content">
    <h2 class="mt-5 mb-3 fw-semibold">Educational Materials</h2>
    <button class="btn btn-primary me-5" data-bs-toggle="modal" data-bs-target="#createMaterialModal">+ Create New</button>

    <!-- Beginner Modules Section -->
    <div class="mt-3 p-4 bm-5 shadow">
        <table>
            <thead>
                <tr>
                    <th class="fw-semibold" scope="col">Category Title</th>
                    <th class="fw-semibold" scope="col">Expertise Level</th>
                    <th class="fw-semibold" scope="col">Video</th>
                    <th class="fw-semibold" scope="col">Actions</th>
                </tr>
            </thead>
            <tbody id="data-table">
                <!-- Beginner modules data will be inserted here dynamically -->
            </tbody>
        </table>
    </div>

    @endsection