@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="pagination-link disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                &laquo; Попередня
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="pagination-link">
                &laquo; Попередня
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="pagination-link">
                Наступна &raquo;
            </a>
        @else
            <span class="pagination-link disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                Наступна &raquo;
            </span>
        @endif
    </nav>
@endif
