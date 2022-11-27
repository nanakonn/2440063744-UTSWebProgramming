@extends('Index')

@section('container')

<style>

    .booklist{
        background-color: rgb(127, 125, 125);
        justify-content: center;
        align-items: center;
        padding: 2px 2px;
        margin-bottom: 40px;
    }

    .content{
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px
        }


    .img{
            height: 440px;
    }


</style>

<div class="book Detail">
    <h1 style="color : white">Book list</h1>
</div>

<div class="content">

    {{-- BOOK --}}
    @foreach ($detail as $books)

    <div class="card" style="width: 30rem;, height: 27rem;">
      <img src ={{$books->Image}} class="card-img-top" alt="...">
      <ul class="list-group list-group-flush">
          <li class="list-group-item">Title : {{$books->Title}}</li>
          <li class="list-group-item">by : {{$books->Author}}</li>
          @foreach ($publishers as $publish)
            @if ($books->Publisher_id === $publish->id)
            <li class="list-group-item">Publisher : {{$publish->Name}}</li>
            @endif
          @endforeach
          <li class="list-group-item">Year : {{$books->Year}}</li>
          <li class="list-group-item">Sinopsis : <br> {{$books->Synopsis}}</li>
      </ul>
  </div>
  @endforeach

</div>






@endsection
