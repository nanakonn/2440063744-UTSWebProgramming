
{{-- Publish Page --}}

@extends('Index')
@section('container')

    <style>
        .content1{
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
            margin-bottom: 40px;

        }

        .content2{
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;

        }

        .info_publisher{
            background-color: rgb(127, 125, 125);
            justify-content: space-between;
            align-items: center;
            padding: 2px 2px;
            margin-bottom: 40px;
            display: flex;
        }

        .logo_publisher img{
            width: 33vh;
        }

        .info_publisher2{
            background-color: rgb(127, 125, 125);
            justify-content: space-between;
            align-items: center;
            padding: 2px 2px;
            margin-top: 40px;
            margin-bottom: 40px;
            display: flex
        }
    </style>
</head>
<body>

    {{-- publisher --}}

    @foreach ($publishers as $publishers)
    <div class="info_publisher">
        <div class="info_detail">
            <h3 style="color : white">Name : {{$publishers->Name}}</h3>
            <p style="color : white">Address : {{$publishers->Address}}</p>
        <p style="color : white">Phone : {{$publishers->Phone}}</p>
        <p style="color : white">Email : {{$publishers->Email}}</p>

        {{-- Jika menggunakan nama di migration seperti "E-mail" maka php akan error dan web tidak
        dapat berjalan, saya rasa ada missconcepcation dibagian pemanggilan E-mail yang
        dikira sebuah function . Saya solve dengan me-rename table kolom "E-mail" dengan "Email"
        demi menghindari error yang sebelumnya terjadi --}}
    </div>
    <div class="logo_publisher">
        <img src={{$publishers->Image}} alt="">
    </div>
</div>


{{-- Book --}}
<div class="content1">

    @foreach ($publishers->books as $publish)
    <div class="card" style="width: 18rem;">
        <img src={{$publish->Image}} class="card-img-top" alt="...">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"></li>
                <li class="list-group-item">Title : {{$publish->Title}}</li>
                <li class="list-group-item">By : {{$publish->Author}}</li>
            </ul>
            <a class="btn btn-primary" href="/Detail/{{$publish->id}}" role="button">Detail</a>
        </div>
        @endforeach
    </div>
    @endforeach

</body>

@endsection
