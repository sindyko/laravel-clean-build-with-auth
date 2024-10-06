<x-app-layout>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}

                    <div class="d-flex flex-column gap-2">
                        <div class="d-flex flex-row gap-2">
                            <x-button color="primary">Кнопка</x-button>
                            <x-link color="indigo" href="{{ route('secret') }}">Ссылка</x-link>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
