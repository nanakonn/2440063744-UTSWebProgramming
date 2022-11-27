
@extends('Index')
@section('container')

    <style>
        .info{
            background-color: rgb(127, 125, 125);
            justify-content: center;
            align-items: center;
            padding: 2px 2px;
            margin-bottom: 40px;
        }

        .info_contact{
            margin-left: 30px;
        }
    </style>
</head>
<body>

<div class="info">
    <h1 style="color : white">Contact</h1>
</div>

<div class="info_contact">
    <h2> Store Address : </h2>
    <p> Jalan Pembangunan Baru Jaya </p>
    <p> Kompleks Pertokoan Emerald Blok III/12</p>
    <p> Bintaro, Tangerang Selatan </p>
    <p> Indonesia </p>
    <h2> Open Daily : </h2>
    <p> 08.00 - 20.00 </p>
    <h2> Contact : </h2>
    <p> Phone : 021 - 08899776655</p>
    <p> Email : happybookstore@happy.com </p>
</div>

</body>

@endsection
