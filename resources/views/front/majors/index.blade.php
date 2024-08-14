@extends('front.inc.master')

@section('title')
 Clinics
@endsection

@section('content')

<div
        class="filteration d-flex gap-3 mb-3 flex-wrap justify-content-center justify-content-lg-start justify-content-md-start">
        <div class="dropdown">
            <button class="btn bg-blue btn-primary align-items-center d-flex gap-2 dropdown-toggle"
                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Filter by
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Alphabetical A-Z</a></li>
                <li><a class="dropdown-item" href="#">Alphabetical Z-A</a></li>
                <li><a class="dropdown-item" href="#">Rating</a></li>
                <li><a class="dropdown-item" href="#">Recent</a></li>
                <li><a class="dropdown-item" href="#">Distance</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <button class="btn bg-blue btn-primary align-items-center d-flex gap-2 dropdown-toggle"
                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                City
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Alphabetical A-Z</a></li>
                <li><a class="dropdown-item" href="#">Alphabetical Z-A</a></li>
                <li><a class="dropdown-item" href="#">Rating</a></li>
                <li><a class="dropdown-item" href="#">Recent</a></li>
                <li><a class="dropdown-item" href="#">Distance</a></li>
            </ul>
        </div>
            
        <div class="input-group">
            <select id="ddFilter" class="btn bg-blue btn-primary align-items-center d-flex gap-2 dropdown-toggle"
            style="margin-right: 20px" name="dropdown">
                <form method="post" action="?">  
                    <option disabled selected="select">Filter by:</option>
                    <option value="1">Alphabetical A-Z</option>
                    <option value="2">Alphabetical Z-A</option>
                    <option value="3">Rating</option>
                    <option value="4">Recent</option>
                    <option value="5">Distance</option>
            </select>
            <select id="ddCity" class="btn bg-blue btn-primary align-items-center d-flex gap-2 dropdown-toggle" name="dropdown">
                <form method="post" action="?">  
                    <option disabled selected="select">City</option>
                    <option value="1">Alphabetical A-Z</option>
                    <option value="2">Alphabetical Z-A</option>
                    <option value="3">Rating</option>
                    <option value="4">Recent</option>
                    <option value="5">Distance</option>
            </select>

            <input type="text" class="form-controller align-items-center d-flex gap-2" id="search" name="search">
            </input>
        </div>
    </div>

    

    <div class="majors-grid">

        @foreach ( $majors as $major )
        <div class="card p-2" style="width: 18rem;">
            <img src="{{ asset('images/majors/' . $major->image) }}" class="card-img-top rounded-circle card-image-circle"
                alt="major">
            <div class="card-body d-flex flex-column gap-1 justify-content-center">
                <h4 class="card-title fw-bold text-center">{{ $major->title }}</h4>
                <a href="{{ route('front.majors.show', $major) }}" class="btn btn-outline-primary card-button">Browse Doctors</a>
            </div>
        </div>           
        @endforeach

    </div>

    <nav class="mt-5" aria-label="navigation">
        <ul class="pagination justify-content-center">
            {{-- <li class="page-item">
                <a class="page-link page-prev" href="#" aria-label="Previous">
                    <span aria-hidden="true">
                        < </span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link page-next" href="#" aria-label="Next">
                    <span aria-hidden="true"> > </span>
                </a>
            </li> --}}

            {{ $majors->links() }}
        </ul>
    </nav>

@endsection