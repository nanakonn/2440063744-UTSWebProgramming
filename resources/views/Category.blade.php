{{-- @dd($book_categorys_con) --}}

@extends('Index')

@section('container')


<style>
    .content{
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 15px
    }

    .booklist{
        background-color: rgb(127, 125, 125);
        justify-content: center;
        align-items: center;
        padding: 2px 2px;
        margin-bottom: 40px;
    }

    .img{
        height: 440px;
    }

</style>
</head>
<body>

<div class="booklist">
<h1 style="color : white">Book Categories</h1>
</div>

<div class="content">
  {{-- BOOK --}}

  @foreach ($book_categorys_con as $bookcat )
  @foreach ($books as $book)
  @if ($bookcat->Book_id === $book->id)
  <div class="card" style="width: 18rem;, height: 23rem;">
    <img src ={{$book->Image}} class="card-img-top" alt="...">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{$book->Title}}</li>
        <li class="list-group-item">{{$book->Author}}</li>
    </ul>
    <a class="btn btn-primary" href="/Detail/{{$book->id}}" role="button">Detail</a>
</div>
    @endif
    @endforeach
    @endforeach
</div>

</body>

@endsection

