<x-guest-layout>
    <div class="mb-6 text-center">
        <p class="text-xs font-semibold uppercase tracking-widest text-tax-teal">INN Group</p>
        <h1 class="mt-2 text-2xl font-bold text-inn-navy">Admin sign in</h1>
    </div>
    @include('components.alert')
    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf
        <p><label class="text-sm font-medium">Email</label><input type="email" name="email" value="{{ old('email') }}" required autofocus class="mt-1 block w-full rounded-lg border px-3 py-2"></p>
        <p><label class="text-sm font-medium">Password</label><input type="password" name="password" required class="mt-1 block w-full rounded-lg border px-3 py-2"></p>
        <label class="flex items-center gap-2 text-sm"><input type="checkbox" name="remember"> Remember me</label>
        <button type="submit" class="btn-primary w-full bg-inn-navy text-white hover:bg-inn-slate">Sign in</button>
    </form>
</x-guest-layout>
