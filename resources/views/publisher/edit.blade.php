

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
      <h2>Edit Penerbit</h2>
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
        <form class="needs-validation" action="{{ route('admin.publisher.update', $publisher->id) }}" method="POST" novalidate>
        @csrf
        @method('PUT')
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="idpenerbit" class="form-label">ID Penerbit</label>
              <input name="idpenerbit" type="text" class="form-control" id="idpenerbit" placeholder="" value="{{ $publisher->idpenerbit }}" readonly>
              <div class="invalid-feedback">
                ID Penerbit is required.
              </div>
            </div>
            <div class="col-sm-6">
              <label for="nama" class="form-label">Nama</label>
              <input name="nama" type="text" class="form-control" id="nama" placeholder="" value="{{ $publisher->nama }}" required>
              <div class="invalid-feedback">
                Nama is required.
              </div>
            </div>

            <div class="col-12">
              <label for="alamat" class="form-label">Alamat</label>
              <div class="input-group has-validation">
                <input name="alamat" type="text" class="form-control" id="alamat" value="{{ $publisher->alamat }}" required>
              <div class="invalid-feedback">
                  Alamat is required.
                </div>
              </div>
            </div>

            <div class="col-12">
                <label for="kota" class="form-label">Kota</label>
                <div class="input-group has-validation">
                  <input type="text" name="kota" class="form-control" id="kota" value="{{ $publisher->kota}}" placeholder="" required>
                <div class="invalid-feedback">
                    Kota is required.
                  </div>
                </div>
              </div>

            <div class="col-12">
              <label for="telepon" class="form-label">Telepon</label>
              <input name="telepon" type="number" class="form-control" id="telepon" value="{{ $publisher->telepon }}" required>
              <div class="invalid-feedback">
                Telepon is required.
              </div>
            </div>
          <hr class="my-4">
          <button class="w-100 btn btn-primary btn-lg" type="submit">Save</button>
        </form>
      </div>
    </div>
  </main>

</div>
<script src="{{ asset('public/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="dist/js/bootstrap.bundle.min.js"></script>

    <script src="form.js"></script></body>
</html>
