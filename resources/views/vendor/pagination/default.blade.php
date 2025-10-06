@if ($paginator->hasPages())
    <div class="row">
        <div class="col-12">
            <div class="it-pagination text-center mt-25">
                <nav>
                    <ul>
                        {{-- Previous Page Link --}}
                        @if ($paginator->onFirstPage())
                            <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                                <a href="#" class="disabled">
                                    <i class="fa-regular fa-arrow-left"></i>
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                                    <i class="fa-regular fa-arrow-left"></i>
                                </a>
                            </li>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($elements as $element)
                            {{-- "Three Dots" Separator --}}
                            @if (is_string($element))
                                <li class="disabled" aria-disabled="true">
                                    <span>{{ $element }}</span>
                                </li>
                            @endif

                            {{-- Array Of Links --}}
                            @if (is_array($element))
                                @foreach ($element as $page => $url)
                                    @if ($page == $paginator->currentPage())
                                        <li class="current">
                                            <a href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach

                        {{-- Next Page Link --}}
                        @if ($paginator->hasMorePages())
                            <li>
                                <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </li>
                        @else
                            <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                                <a href="#" class="disabled">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endif
