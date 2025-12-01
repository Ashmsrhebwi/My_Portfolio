@include('frontend.layouts.header')

<body>
@include('frontend.layouts.nav')

<main class="container py-5">

    {{-- HERO SECTION --}}
    <div class="hero row align-items-center mb-5">
        <div class="col-lg-6">
            <h1 class="fw-bold">{{ $hero->name }}</h1>
            <h3 class="text-primary">{{ $hero->job_title }}</h3>

            @if($hero->open_to_work)
                <span class="badge bg-success mt-2">
                    <i class="fa-solid fa-user-check"></i> Open To Work
                </span>
            @endif

            @if($hero->cv)
                <a href="{{ asset('storage/' . $hero->cv) }}" class="btn btn-primary mt-3" download>
                    <i class="fa-solid fa-download me-1"></i> Download CV
                </a>
            @endif
        </div>

        <div class="col-lg-6">
            <img src="{{ asset('storage/' . $hero->profile_image) }}" class="img-fluid rounded shadow" alt="">
        </div>
    </div>

    {{-- STATISTICS --}}
    <div class="row">
        @foreach($statistics as $stat)
            <div class="col-6 col-md-3 mb-4">
                <div class="p-3 bg-dark rounded text-center shadow">
                    <h2 class="fw-bold text-primary">{{ $stat->value }}%</h2>
                    <p class="text-white-50 m-0">{{ $stat->title }}</p>
                </div>
            </div>
        @endforeach
    </div>

</main>

@include('frontend.layouts.footer')
</body>
</html>
