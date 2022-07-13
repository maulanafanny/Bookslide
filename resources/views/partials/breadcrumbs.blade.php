@unless($breadcrumbs->isEmpty())
    <ol class="breadcrumb">
        @foreach($breadcrumbs as $breadcrumb)
 
            @if(!is_null($breadcrumb->url) && !$loop->last)
                <li class="breadcrumb-item"><a style="text-decoration: none; color:black" href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
            @else
                <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
            @endif
 
        @endforeach
    </ol>
@endunless