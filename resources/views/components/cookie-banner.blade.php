{{-- Cookie Banner --}}
<div id="cookie-banner" class="cookie-banner" style="display: none;">
    <div class="cookie-banner-content">
        <div class="cookie-banner-text">
            <h4>{{ __('messages.cookie_banner.title') }}</h4>
            <p>{{ __('messages.cookie_banner.message') }}</p>
            <div class="cookie-banner-links">
                <a href="{{ route('privacy-policy', app()->getLocale()) }}">{{ __('messages.cookie_banner.privacy_link') }}</a>
                <span class="separator">|</span>
                <a href="{{ route('cookie-policy', app()->getLocale()) }}">{{ __('messages.cookie_banner.cookie_link') }}</a>
            </div>
        </div>
        <div class="cookie-banner-actions">
            <button type="button" class="btn btn-outline-light btn-sm" id="cookie-settings-btn">
                {{ __('messages.cookie_banner.settings_button') }}
            </button>
            <button type="button" class="btn btn-outline-light btn-sm" id="cookie-reject-btn">
                {{ __('messages.cookie_banner.reject_all') }}
            </button>
            <button type="button" class="btn btn-primary btn-sm" id="cookie-accept-btn">
                {{ __('messages.cookie_banner.accept_all') }}
            </button>
        </div>
    </div>
</div>

{{-- Cookie Preferences Modal --}}
<div class="modal fade" id="cookie-preferences-modal" tabindex="-1" aria-labelledby="cookiePreferencesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cookiePreferencesModalLabel">{{ __('messages.cookie_banner.preferences_title') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="{{ __('messages.cookie_banner.close') }}"></button>
            </div>
            <div class="modal-body">
                <p class="mb-4">{{ __('messages.cookie_banner.preferences_intro') }}</p>

                {{-- Cookie Tecnici (sempre attivi) --}}
                <div class="cookie-category mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="cookie-category-info">
                            <h6 class="mb-1">{{ __('messages.cookie_banner.categories.necessary.title') }}</h6>
                            <p class="small text-muted mb-0">{{ __('messages.cookie_banner.categories.necessary.description') }}</p>
                        </div>
                        <div class="cookie-category-toggle">
                            <span class="badge bg-success">{{ __('messages.cookie_banner.always_active') }}</span>
                        </div>
                    </div>
                </div>

                <hr>

                {{-- Cookie Analitici --}}
                <div class="cookie-category mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="cookie-category-info">
                            <h6 class="mb-1">{{ __('messages.cookie_banner.categories.analytics.title') }}</h6>
                            <p class="small text-muted mb-0">{{ __('messages.cookie_banner.categories.analytics.description') }}</p>
                        </div>
                        <div class="cookie-category-toggle">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="cookie-analytics" data-cookie-type="analytics">
                                <label class="form-check-label visually-hidden" for="cookie-analytics">Analytics</label>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                {{-- Cookie Marketing --}}
                <div class="cookie-category mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="cookie-category-info">
                            <h6 class="mb-1">{{ __('messages.cookie_banner.categories.marketing.title') }}</h6>
                            <p class="small text-muted mb-0">{{ __('messages.cookie_banner.categories.marketing.description') }}</p>
                        </div>
                        <div class="cookie-category-toggle">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="cookie-marketing" data-cookie-type="marketing">
                                <label class="form-check-label visually-hidden" for="cookie-marketing">Marketing</label>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="cookie-category-links mt-3">
                    <a href="{{ route('privacy-policy', app()->getLocale()) }}" class="text-primary">{{ __('messages.cookie_banner.privacy_link') }}</a>
                    <span class="mx-2">|</span>
                    <a href="{{ route('cookie-policy', app()->getLocale()) }}" class="text-primary">{{ __('messages.cookie_banner.cookie_link') }}</a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" id="cookie-reject-modal-btn">
                    {{ __('messages.cookie_banner.reject_all') }}
                </button>
                <button type="button" class="btn btn-outline-primary" id="cookie-accept-modal-btn">
                    {{ __('messages.cookie_banner.accept_all') }}
                </button>
                <button type="button" class="btn btn-primary" id="cookie-save-preferences-btn">
                    {{ __('messages.cookie_banner.save_preferences') }}
                </button>
            </div>
        </div>
    </div>
</div>
