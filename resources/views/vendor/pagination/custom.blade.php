<style>
    .btn-tp {
        color: #fff;
        background-color: #225675;
        border-color: #225675;
    }
    .btn-tp-orange {
        color: #fff;
        background-color: #E6873C;
        border-color: #E6873C;
    }
    .btn-tp-border {
    color: #fff;
    border-color:#225675;
    }
    .bg-tp {
        background-color: #225675;
    }
    .text-tp{
        color:#225675;
    }
</style>

@if ($paginator->hasPages())
<ul class="pager">
   
    @if ($paginator->onFirstPage())
        <li class="btn btn-tp-border disabled text-decoration none text-dark"><span>← Sebelumnya</span></li>
    @else
        <li class="btn btn-tp-border"><a href="{{ $paginator->previousPageUrl() }}" rel="prev" class=" text-tp text-decoration-none">← Previous</a></li>
    @endif


  
    @foreach ($elements as $element)
       
        @if (is_string($element))
            <li class="disabled"><span>{{ $element }}</span></li>
        @endif


       
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="active my-active btn btn-tp text-decoration none"><span>{{ $page }}</span></li>
                @else
                    <li class="btn btn-tp-border"><a href="{{ $url }}" class="text-tp text-decoration-none">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach


    
    @if ($paginator->hasMorePages())
        <li class="btn btn-tp-border"><a href="{{ $paginator->nextPageUrl() }}" rel="next" class=" text-tp text-decoration-none">Selanjutnya →</a></li>
    @else
        <li class="btn btn-tp-border disabled text-dark"><span>Next →</span></li>
    @endif
</ul>
@endif 