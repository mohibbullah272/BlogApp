<x-guest-layout>
    <div class="w-full rounded-2xl bg-red-500">
        <div class="mb-6 space-y-1">
            <h1 class="text-2xl font-semibold tracking-tight text-slate-900 dark:text-slate-100">{{ __('Welcome back') }}</h1>
            <p class="text-sm text-slate-600 dark:text-slate-400">{{ __('Sign in to continue to your dashboard.') }}</p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <!-- Email Address -->
            <div class="space-y-2">
                <x-input-label for="email" class="text-sm font-medium text-red-700 dark:text-slate-300" :value="__('Email')" />
                <x-text-input id="email" class="block w-full rounded-lg border-slate-300 bg-white px-3 py-2 text-slate-900 placeholder:text-slate-400 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100 dark:placeholder:text-slate-500 dark:focus:border-indigo-400 dark:focus:ring-indigo-400" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="text-sm text-rose-600 dark:text-rose-400" />
            </div>

            <!-- Password -->
            <div class="space-y-2">
                <div class="flex items-center justify-between gap-4 ">
                    <x-input-label for="password" class="text-sm font-medium text-slate-700 dark:text-slate-300" :value="__('Password')" />
                    @if (Route::has('password.request'))
                        <a class="text-xs font-medium text-indigo-600 transition hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:text-indigo-400 dark:hover:text-indigo-300 dark:focus:ring-offset-slate-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>

                <x-text-input id="password" class="block w-full rounded-lg border-slate-300 bg-white px-3 py-2 text-slate-900 placeholder:text-slate-400 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100 dark:placeholder:text-slate-500 dark:focus:border-indigo-400 dark:focus:ring-indigo-400"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="text-sm text-rose-600 dark:text-rose-400" />
            </div>

            <!-- Remember Me -->
            <label for="remember_me" class="inline-flex items-center gap-2 text-sm text-slate-600 dark:text-slate-400">
                <input id="remember_me" type="checkbox" class="rounded border-slate-300 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:border-slate-700 dark:bg-slate-900 dark:text-indigo-400 dark:focus:ring-indigo-400 dark:focus:ring-offset-slate-900" name="remember">
                <span>{{ __('Remember me') }}</span>
            </label>

            <x-primary-button class="w-full justify-center rounded-lg py-2.5 text-sm font-semibold">
                {{ __('Log in') }}
            </x-primary-button>
        </form>
    </div>
</x-guest-layout>
