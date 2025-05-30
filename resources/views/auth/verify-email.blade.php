<x-guest-layout>
    {{-- This div assumes your guest layout provides the card/box structure --}}

    <div class="alert alert-info mb-4" role="alert">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="alert alert-success mb-4" role="alert">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mt-4">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button> {{ __('Resend Verification Email') }} </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="btn btn-link text-decoration-none text-muted"> {{-- btn-link for styling, text-decoration-none to remove underline, text-muted for gray color --}}
                {{ __('Log Out') }}
            </button>
        </form>
    </div>

</x-guest-layout>
