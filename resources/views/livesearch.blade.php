@if ($request == '')

    <li>
        <span class="dropdown-item disabled">

            Masukkan Kata Kunci

        </span>
    </li>

@elseif ( count($pengarang) < 1 && count($judul) < 1 )

    <li>
        <span class="dropdown-item disabled">

            Data Tidak Ditemukan

        </span>
    </li>

@else

    @foreach ($pengarang as $result)

        <li>
            <a class="dropdown-item" href="/product?search-products={{ $result->pengarang }}">

                {{ $result->pengarang }}

            </a>
        </li>
        
    @endforeach

    @foreach ($judul as $result)

        <li>
            <a class="dropdown-item" href="/product/{{ $result->id }}">

                {{ $result->judul }}

            </a>
        </li>

    @endforeach

@endif