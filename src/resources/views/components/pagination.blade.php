@if ($paginator->hasPages())
<div class="nc-pagination-wrapper">

    {{-- Info --}}
    <div class="nc-pagination-info">
        Showing {{ $paginator->firstItem() }} to {{ $paginator->lastItem() }}
        of {{ $paginator->total() }} results
    </div>

    {{-- Pagination --}}
    <div class="nc-pagination">

        {{-- Previous --}}
        @if ($paginator->onFirstPage())
            <span class="nc-page disabled">«</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="nc-page">«</a>
        @endif

        {{-- Page Numbers --}}
        @php
            $start = max($paginator->currentPage() - 2, 1);
            $end = min($paginator->currentPage() + 2, $paginator->lastPage());
        @endphp

        @for ($i = $start; $i <= $end; $i++)
            @if ($i == $paginator->currentPage())
                <span class="nc-page active">{{ $i }}</span>
            @else
                <a href="{{ $paginator->url($i) }}" class="nc-page">{{ $i }}</a>
            @endif
        @endfor

        {{-- Next --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="nc-page">»</a>
        @else
            <span class="nc-page disabled">»</span>
        @endif

    </div>
</div>
<style>
    .nc-pagination-wrapper {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 10px;
    }
    .nc-pagination-info {
        font-size: 14px;
        color: #555;
    }
    .nc-pagination {
        display: flex;
        gap: 5px;
    }
    .nc-page {
        padding: 8px 12px;
        border: 1px solid #ddd;
        color: #333;
        text-decoration: none;
        border-radius: 4px;
    }
    .nc-page:hover:not(.disabled):not(.active) {
        background-color: #f0f0f0;
    }
    .nc-page.active {
        background-color: #007bff;
        color: white;
        border-color: #007bff;
    }
    .nc-page.disabled {
        color: #ccc;
        cursor: not-allowed;
    }
</style>
@endif