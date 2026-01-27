@props(['item'])

<div class="col-md-6 col-lg-4 mb-4">
    <div class="portfolio-card h-100">
        <div class="portfolio-image">
            <img src="{{ asset("assets/img/portfolio/" . $item->image) }}" alt="{{ $item->getTitle() }}" class="img-fluid">
        </div>
        <div class="portfolio-content">
            <span class="portfolio-year">{{ $item->year }}</span>
            <h3 class="portfolio-title">{{ $item->getTitle() }}</h3>
            <p class="portfolio-description">{!! $item->getDescription() !!}</p>
            @if($item->cta_url)
                <a href="{{ $item->cta_url }}" target="_blank" rel="noopener" class="btn btn-portfolio mt-3">
                    {{ __('messages.portfolio.cta_button') }} <i class="bi bi-box-arrow-up-right"></i>
                </a>
            @endif
            @if($item->partner)
                <p class="portfolio-partner">
                    <i class="bi bi-people-fill"></i> {{ __('messages.portfolio.partner') }}: {{ $item->partner }}
                </p>
            @endif
        </div>
    </div>
</div>
