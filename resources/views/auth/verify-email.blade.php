<x-guest-layout>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('auth-lang.Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('auth-lang.A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('auth-lang.Before proceeding, please check your email for a verification link.') }}
                    {{ __('auth-lang.If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('auth-lang.click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-guest-layout>
