<!-- Reviews -->
<div class="row mb-4">
    <div class="col">
        <h3 class="fw-bold fs-4">What people are saying about us</h3>

        <div class="reviews-wrapper">

            @foreach ($users as $name => $image)
            <div class="card review-card">
                <div class="card-body">
                    <div class="card-info">
                        <span class="d-flex flex-row">
                            <img src="{{ asset($image) }}" alt="{{ $name }}">

                            <div class="review-info ms-3">
                                <h5 class="card-title">{{ $name }}</h5>
                                <p class="card-subtitle">November 12, 2024</p>
                            </div>
                        </span>
                    </div>

                    <p class="card-text">
                        @for ($i = 0; $i < 5; $i++)
                            <i class="fa-solid fa-star"></i>
                            @endfor
                            <p>
                                I used DeclaraYa to figure out how to report my freelance income. The tutorial was easy to tollow and helped me understand the process. I'm grateful for this resource!
                            </p>
                            <span>
                                <span class="ms-3">
                                    <i class="fa-regular fa-thumbs-up"></i>
                                    3
                                </span>
                                <span class="ms-3">
                                    <i class="fa-regular fa-thumbs-down"></i>
                                    0
                                </span>
                            </span>
                    </p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>