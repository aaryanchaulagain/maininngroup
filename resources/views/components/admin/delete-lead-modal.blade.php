{{-- Include once per page. Trigger with: $dispatch('open-delete-lead', { url, name }) --}}
<div
    x-data="{ open: false, action: '', name: '' }"
    x-on:open-delete-lead.window="open = true; action = $event.detail.url; name = $event.detail.name"
    x-on:keydown.escape.window="open = false"
    x-cloak
>
    <template x-teleport="body">
        <section
            x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-[100] flex items-center justify-center p-4"
            style="display: none;"
        >
            <button type="button" class="absolute inset-0 bg-slate-900/50 backdrop-blur-sm" @click="open = false" aria-label="Close"></button>

            <article class="relative w-full max-w-md rounded-2xl border border-white/20 bg-white/95 p-6 shadow-2xl backdrop-blur-xl">
                <h3 class="text-lg font-semibold text-inn-navy">Delete lead</h3>
                <p class="mt-3 text-sm text-slate-600">
                    Are you sure you want to delete this lead?
                </p>
                <p class="mt-2 text-sm font-medium text-slate-800" x-text="name"></p>
                <p class="mt-1 text-xs text-red-600">This action cannot be undone.</p>

                <form :action="action" method="POST" class="mt-6 flex flex-wrap justify-end gap-3">
                    @csrf
                    @method('DELETE')
                    <button type="button" @click="open = false" class="rounded-xl border border-slate-200 px-4 py-2 text-sm font-medium text-slate-600 transition hover:bg-slate-50">
                        Cancel
                    </button>
                    <button type="submit" class="rounded-xl bg-red-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-red-700">
                        Delete lead
                    </button>
                </form>
            </article>
        </section>
    </template>
</div>
