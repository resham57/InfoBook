<section class="breadcrumbs">
    <nav aria-label="breadcrumb" class="breadcrumbs__nav">
        <h3 class="breadcrumbs__title m-0">{{ $title }}</h3>
        <ol class="breadcrumb m-0 p-0 bg-light">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            {{ $slot }}
        </ol>
    </nav>
</section>