@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination" class="flex flex-col items-center gap-3 sm:flex-row sm:justify-between">
        <p class="text-sm text-slate-500">
            Showing
            <span class="font-medium text-slate-700">{{ $paginator->firstItem() }}</span>
            to
            <span class="font-medium text-slate-700">{{ $paginator->lastItem() }}</span>
            of
            <span class="font-medium text-slate-700">{{ $paginator->total() }}</span>
            leads
        </p>

        <ul class="inline-flex items-center gap-1 rounded-xl border border-slate-200/80 bg-white/80 p-1 shadow-sm backdrop-blur-sm">
            @if ($paginator->onFirstPage())
                <li><span class="cursor-not-allowed rounded-lg px-3 py-2 text-sm text-slate-300">&laquo;</span></li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}" class="rounded-lg px-3 py-2 text-sm text-slate-600 transition hover:bg-slate-100">&laquo;</a></li>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li><span class="px-2 text-slate-400">{{ $element }}</span></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><span class="rounded-lg bg-inn-navy px-3 py-2 text-sm font-medium text-white">{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}" class="rounded-lg px-3 py-2 text-sm text-slate-600 transition hover:bg-slate-100">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" class="rounded-lg px-3 py-2 text-sm text-slate-600 transition hover:bg-slate-100">&raquo;</a></li>
            @else
                <li><span class="cursor-not-allowed rounded-lg px-3 py-2 text-sm text-slate-300">&raquo;</span></li>
            @endif
        </ul>
    </nav>
@endif
