<div class="card shadow-sm h-100">
    <img src="{{ asset('storage/.$listing->images()->image_path' ?? 'placeholder.jpg') }}" class="card-img"
        style="object-fit: cover">
    <div class="card-body">
        <h6 class="card-title">
            {{ Str::limit($listing->title, 40) }}
        </h6>
        <p class="fw-bold mb-0"> {{ $listing->price }}</p>
    </div>
</div>
