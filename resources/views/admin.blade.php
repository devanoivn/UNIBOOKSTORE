
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <script src="../assets/js/color-modes.js"></script>
    <script src="{{ asset('assets/js/color-modes.js') }}"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>UNIBOOKSTORE</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>  
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    @include('menu')
    <div class="container-fluid">
    <div class="row">
    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif
    <h2>Data Buku</h2>
        <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Kategori</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Harga</th>
                <th scope="col">Stock</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($books as $book)
            <tr>
                <td>{{ $book->idbuku }}</td>
                <td>{{ $book->kategori }}</td>
                <td>{{ $book->judul }}</td>
                <td>{{ $book->harga }}</td>
                <td>{{ $book->stok }}</td>
                <td>{{ $book->publisher->nama }}</td>
                <td>
                    <a href="{{ route('admin.book.edit', $book->id) }}">Edit</a> | 
                    <a href="{{ route('admin.book.destroy', $book->id) }}" onclick="return confirm('Yakin hapus?')">Delete</a>
                </td>
            </tr>
            @endforeach

          </tbody>
        </table>
        </div>
    </div>
    <h2>Data Penerbit</h2>
        <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Penerbit</th>
                <th scope="col">Alamat</th>
                <th scope="col">Kota</th>
                <th scope="col">Telepon</th>
                <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($publishers as $publisher)
        <tr>
            <td>{{ $publisher->idpenerbit }}</td>
            <td>{{ $publisher->nama }}</td>
            <td>{{ $publisher->alamat }}</td>
            <td>{{ $publisher->kota }}</td>
            <td>{{ $publisher->telepon }}</td>
            <td>
                <a href="{{ route('admin.publisher.edit', $publisher->id) }}">Edit</a> | 
                <a href="{{ route('admin.publisher.destroy', $publisher->id) }}" onclick="return confirm('Yakin hapus?')">Delete</a>
            </td>
        </tr>
        @endforeach

          </tbody>
        </table>
        </div>

</div>
    <script src="dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>
</html>
