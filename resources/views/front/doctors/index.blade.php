@extends('front.inc.master')

@section('title')
Doctors
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
    </div>

    <div class="doctors-grid">

        @foreach ($doctors as $doctor)

        <div class="card p-2" style="width: 18rem;">
            <img src="{{ asset('images/doctors/' . $doctor->image)  }}" class="card-img-top rounded-circle card-image-circle"
            alt="major">
            <div class="card-body d-flex flex-column gap-1 justify-content-center">
                <h4 class="card-title fw-bold text-center">{{ $doctor->name }}</h4>
                <h6 class="card-title fw-bold text-center">{{ $doctor->major->title }}</h6>
                <a href="{{ route('front.booking', $doctor) }}" class="btn btn-outline-primary card-button">Book an appointment</a>
            </div>
        </div>
            
        @endforeach
        
    </div>
    <nav class="mt-5" aria-label="navigation">
        {{-- <ul class="pagination justify-content-center">
            <li class="page-item">
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
            </li>
        </ul> --}}
        {{ $doctors->links() }}
    </nav>



@endsection