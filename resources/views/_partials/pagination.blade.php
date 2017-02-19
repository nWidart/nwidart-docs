@if($previousUrl || $nextUrl)
    <nav aria-label="...">
        <ul class="pager">
            @if($previousUrl)
                <a class="pagination_button -previous" href="{{ url($previousUrl) }}"></a>
                <li class="previous"><a href="{{ url($previousUrl) }}">
                        <span aria-hidden="true">&larr;</span>
                        {{ guess_title_from_url($previousUrl) }}</a>
                </li>
            @endif
            @if($nextUrl)
                <li class="next"><a href="{{ url($nextUrl) }}">
                    {{ guess_title_from_url($nextUrl) }} <span aria-hidden="true">&rarr;</span></a>
                </li>
            @endif
        </ul>
    </nav>
    <div class="pagination">
        <div class="pagination_buttons">
            @if($previousUrl)
                <a class="pagination_button -previous" href="{{ url($previousUrl) }}"></a>
            @endif

            @if($nextUrl)
                <a class="pagination_button -next" href="{{ url($nextUrl) }}"></a>
            @endif
        </div>
    </div>
@endif
