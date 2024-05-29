<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <!-- NAVBAR -->
    @include('layouts.navbar')
    <!-- /NAVBAR -->


    <!-- /CONTENT -->
    <!-- BAGIAN KONTEN -->
    <style>
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            flex-direction: column;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba();
        }

        .card img {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            height: 200px;
            object-fit: cover;
        }

        .card body {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 20px;
        }

        .section {
            padding: 60px 0;
        }

        .card title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #333;
        }

        .card text {
            font-size: 1.5rem;
            color: #666;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .navbar {
            margin-bottom: 20px;
        }

        footer {
            background-color: #343a40;
            /* Warna latar belakang footer */
            color: #ffffff;
            /* Warna teks footer */
            padding: 20px 0;
            /* Padding atas dan bawah */
        }

        footer p {
            margin-bottom: 0;
            /* Menghilangkan margin bawah untuk paragraf dalam footer */
        }
        
    </style>
    <div class="section">
        <div class="container">
            <!-- ROW 1 -->
            <div class="col-12 mb-4 text-center">
                <h2>Sekolah</h2>
            </div>
            <div class="row">
                @foreach ( $artikel as $data)
                <div class="col-4">
                    <div class="card " style="width: 18rem;">
                        <img src="{{asset ('/storage/artikels/' . $data->image )}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$data ->judul}}</h5>
                            <p class="card-title">{{$data ->deskripsi}}</p>
                            <p class="card-title">{{$data ->tanggal}}</p>

                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    @include('layouts.footer')
    <!-- /FOOTER -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>