@if ($paginator->hasPages())
    <div class="demo-inline-spacing mt-3">
        <nav aria-label="Page navigation">
            <ul class="pagination">

                {{-- Link to First Page --}}
                <li class="page-item {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
                    <a class="page-link ling text-black fw-bold" href="javascript:void(0);"
                        @if (!$paginator->onFirstPage()) onclick="loadPaginate(1)" @endif>
                        &laquo;
                    </a>
                </li>

                {{-- Previous Page --}}
                <li class="page-item {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
                    <a class="page-link ling fw-bold text-black" href="javascript:void(0);"
                        @if (!$paginator->onFirstPage()) onclick="loadPaginate({{ $paginator->currentPage() - 1 }})" @endif>
                        &lsaquo;
                    </a>
                </li>

                {{-- Dynamic Window Page Numbers --}}
                @php
                    $current = $paginator->currentPage();
                    $last = $paginator->lastPage();
                    $window = 4; // jumlah maksimum halaman yang ditampilkan

                    $start = max($current - 1, 1);
                    $end = min($start + $window - 1, $last);
                    $start = max($end - $window + 1, 1);
                @endphp

                @for ($i = $start; $i <= $end; $i++)
                    <li class="page-item {{ $i == $current ? 'active' : '' }}">
                        <a class="page-link" href="javascript:void(0);" onclick="loadPaginate({{ $i }})">{{ $i }}</a>
                    </li>
                @endfor

                {{-- Next Page --}}
                <li class="page-item {{ $paginator->hasMorePages() ? '' : 'disabled' }}">
                    <a class="page-link ling fw-bold text-black" href="javascript:void(0);"
                        @if ($paginator->hasMorePages()) onclick="loadPaginate({{ $paginator->currentPage() + 1 }})" @endif>
                        &rsaquo;
                    </a>
                </li>

                {{-- Link to Last Page --}}
                <li class="page-item {{ $current == $last ? 'disabled' : '' }}">
                    <a class="page-link ling text-black fw-bold" href="javascript:void(0);"
                        @if ($current < $last) onclick="loadPaginate({{ $last }})" @endif>
                        &raquo;
                    </a>
                </li>

            </ul>
        </nav>
    </div>
@endif
