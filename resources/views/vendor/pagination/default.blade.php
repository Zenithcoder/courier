@if ($paginator->hasPages())

    <div class="right">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <button class="btn btn-mini btn-info disabled">&laquo;</button>
        @else
            <button class="btn btn-mini btn-info" rel="prev" onclick='location.href="{{ $paginator->previousPageUrl() }}"'>&laquo;</button>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <button class="btn btn-mini btn-info disabled" >{{ $element }}</button>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <button class="btn btn-mini btn-info active">{{ $page }}</button>
                    @else
                        <button class="btn btn-mini btn-info" onclick='location.href="{{ $url }}"'>{{ $page }}</button>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <button class="btn btn-mini btn-info" rel="next" onclick='location.href="{{ $paginator->nextPageUrl() }}"'>&raquo;</button>
        @else
            <button class="btn btn-mini btn-info disabled" rel="prev">&raquo;</button>
        @endif

    </div>
@endif
