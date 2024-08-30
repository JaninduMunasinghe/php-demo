<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Products</title>
    <link
      href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css"
      rel="stylesheet" />
    <link href="{{asset('admin/css/styles.css')}}" rel="stylesheet" />
    <script
      src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
      crossorigin="anonymous"></script>
      <style>
      .action-buttons {
        display: flex;
        gap: 5px;
      }
      .form-delete {
        display: inline-block;
      }
    </style>
  </head>
  <body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Apps Technologies</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
          <div class="sb-sidenav-menu">
            <div class="nav">
              <div class="sb-sidenav-menu-heading">Core</div>
              <a class="nav-link" href="{{ url('/dashboard') }}">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-tachometer-alt"></i>
                </div>
                Dashboard
              </a>
              <div class="sb-sidenav-menu-heading">Interface</div>
              <div
                class="collapse"
                id="collapsePages"
                aria-labelledby="headingTwo"
                data-bs-parent="#sidenavAccordion">
              </div>
              <div class="sb-sidenav-menu-heading">Addons</div>
              <a class="nav-link"  href="{{ route('product.create') }}">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-chart-area"></i>
                </div>
                Add Products
              </a>
              <a class="nav-link" href="tables.html">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Tables
              </a>
            </div>
          </div>
        </nav>
      </div>
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Products</h1>
            <div class="card mb-4">

              <div class="card-body">
                <table id="datatablesSimple">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Description</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->qty}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->description}}</td>
                        <td class="action-buttons">
                            
                            <a href="{{route('product.edit', $product->id)}}"
                            class="btn btn-warning btn-sm">Edit</a>
                            <form method="post" action="{{ route('product.delete', ['product' => $product]) }}" class="form-delete">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"></script>
    <script src="{{asset('admin/js/scripts.js')}}"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
      crossorigin="anonymous"></script>
    <script src="{{asset('admin/js/datatables-simple-demo.js')}}"></script>
  </body>
</html>
