<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <script src="js/color-modes.js"></script>
    <link href="{{ asset('assets/js/bootstrap.min.css') }}" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>UNIBOOK</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">

    

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
    <link href="form.css" rel="stylesheet">
  </head>
  <body class="bg-body-tertiary">
    @include('menu')
<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>Edit Buku</h2>
    </div>
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
      <div class="col-md col-lg">
        <form class="needs-validation" action="{{ route('admin.book.update', $book->id) }}" method="POST" novalidate>
            @csrf
            @method('PUT')
            <div class="row g-3">
            <div class="col-sm-6">
              <label for="idbuku" class="form-label">ID Buku</label>
              <input name="idbuku" type="text" class="form-control" id="idbuku" value="{{ $book->idbuku }}" readonly>
              <div class="invalid-feedback">
                ID Buku is required.
              </div>  
            </div>
            <div class="col-sm-6">
              <label for="kategori" class="form-label">Kategori</label>
              <input name="kategori" type="text" class="form-control" id="kategori" placeholder="" value="{{ $book->kategori }}" required>
              <div class="invalid-feedback">
                Kategori is required.
              </div>
            </div>

            <div class="col-12">
              <label for="judul" class="form-label">Judul</label>
              <div class="input-group has-validation">
                <input name="judul" type="text" class="form-control" id="judul" value="{{ $book->judul }}" placeholder="Judul" required>
              <div class="invalid-feedback">
                  Judul is required.
                </div>
              </div>
            </div>

            <div class="col-12">
                <label for="harga" class="form-label">Harga</label>
                <div class="input-group has-validation">
                  <input type="number" name="harga" class="form-control" id="harga" value="{{ $book->harga }}" placeholder="10000" required>
                <div class="invalid-feedback">
                    Judul is required.
                  </div>
                </div>
              </div>

            <div class="col-12">
              <label for="stok" class="form-label">Stock</label>
              <input name="stok" type="number" class="form-control" id="judul" placeholder="10" value="{{ $book->stok }}" required>
              <div class="invalid-feedback">
                Stock is required.
              </div>
            </div>
            <div class="col-md-5">
              <label for="penerbit_id" class="form-label">Publisher</label>
              <select name="penerbit_id" class="form-select" id="penerbit_id" required> 
                @foreach ($publishers as $publisher)
                <option value="{{ $publisher->id }}" {{ $book->penerbit_id == $publisher->id ? 'selected' : '' }}>
                    {{ $publisher->nama }}
                </option>
                 @endforeach
              </select>
              <div class="invalid-feedback">
                Please select a valid publisher.
              </div>
            </div>
          <hr class="my-4">
          <button class="w-100 btn btn-primary btn-lg" type="submit">Save</button>
        </form>
        <a href="{{ route('admin.index') }}">Kembali ke Admin Panel</a>
      </div>
    </div>
  </main>

</div>
<script src="{{ asset('public/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="dist/js/bootstrap.bundle.min.js"></script>

    <script src="form.js"></script></body>
</html>
