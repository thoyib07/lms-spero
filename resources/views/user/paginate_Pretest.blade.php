<!-- <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav> -->
<style>
    #next{
    padding: 5px 15px;
    background-color: #0169EE;
    border-radius: 20px;
    color: white;
    }
    #next:active{
        color: white;
    }

    #previous{
    padding: 5px 15px;
    background-color: #0169EE;
    border-radius: 20px;
    color: white;
    }
    #previous:active{
        color: white;
    }

    #selesai{
    padding: 5px 15px;
    background-color: #0169EE;
    border-radius: 20px;
    color: white;
    }
    #selesai:active{
        color: white;
    }

    #next a img{
    width: 17px;
    height: 17px;
    }
    #next a p{
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-size: 15px;
    }
    #previous a img{
    width: 17px;
    height: 17px;
    }
    #previous a p{
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-size: 15px;
    }
    #selesai  a img{
    width: 17px;
    height: 17px;
    }
    #selesai  a p{
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-size: 15px;
    }
.rotasigambar {
    -webkit-transform: rotate(60deg);
    -moz-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    -o-transform: rotate(60deg);
    transform: rotate(60deg);
  }
</style>
@if ($paginator->hasPages())
    <top class="col-md-12 d-flex justify-content-end">
        <ul class="pagination text-white">
            {{-- Previous Page Link --}}    
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true"></span>
                </li>
            @else
                <li id="previous">
                    <a class="text-white text-decoration-none d-flex align-items-center gap-2" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                        <img class="rotasigambar" src="{{asset('../img/play-icon.png')}} " alt="">
                        <p class="mb-0">Kembali</p>
                    </a>
                </li>
            @endif
        </ul>
        <ul class="pagination text-white">
            @if ($paginator->hasMorePages())
                <li id="next">
                    <a class="text-white text-decoration-none d-flex align-items-center gap-2" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                        <img src="{{asset('../img/play-icon.png')}} " alt="">
                        <p class="mb-0">Selanjutnya</p>
                    </a>
                </li>
            @else
                <li onclick="selesai()" id="selesai" class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <a href="{{ route('nilaiUlanganPreById', 3) }}" class="text-white text-decoration-none d-flex align-items-center gap-2" aria-hidden="true">
                        <img src="{{asset('../img/play-icon.png')}} " alt="">
                        <p class="mb-0">Selesai</p>
                    </a>
                </li>
            @endif
        </ul>
    </top>
@endif
