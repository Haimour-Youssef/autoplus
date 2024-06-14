@if ($paginator->hasPages())

<div class="container" style="padding: 50px 0px" >

	<div class="row">







		<div class="col-12 text-center position-relative wow fadeInUp">
			<div class="pagination text-small text-uppercase text-extra-dark-gray">
				<ul class="mx-auto">
					


			@if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a aria-hidden="true"><i class="fas fa-long-arrow-alt-left margin-5px-right d-none d-md-inline-block"></i></a>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="fas fa-long-arrow-alt-left margin-5px-right d-none d-md-inline-block"></i></a>
                </li>
            @endif






					{{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><a>{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active" aria-current="page"><a>{{ $page }}</a></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach








					
					@if ($paginator->hasMorePages())
					<li>
						<a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="fas fa-long-arrow-alt-right margin-5px-left d-none d-md-inline-block"></i></a>
					</li>
					@else
					<li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
						<a aria-hidden="true"><i class="fas fa-long-arrow-alt-right margin-5px-left d-none d-md-inline-block"></i></a>
					</li>
					@endif





				</ul>
			</div>
		</div>


	</div>
</div>

@endif