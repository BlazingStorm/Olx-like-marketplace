@extends('layouts.app')

@section('content')
    <div class="row g-4">
        @forelse ($listings as $listing)
            <div class="col-lg-3 col-md-4 col-sm-6">
                @include('listing.card' , ['listing' => $listing])
            </div>
        @empty
            <p class="text-muted">No listings found</p>
        @endforelse
    </div>

    <div class="mt-4">
        {{ $listings->links()}}
    </div>
@endsection
