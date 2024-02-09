//main theme
<!doctype html>
<html lang="en">
@include('admin.head')

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
  @include('admin.navigation')
    <!--  Main wrapper -->

        @include('admin.header')

      <div class="container-fluid">
        
      @yield('content')
      </div>
    </div>
   
  @section('admin.footer')
  </div>
  <script src="{{asset('admin/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin/js/sidebarmenu.js')}}"></script>
  <script src="{{asset('admin/js/app.min.js')}}"></script>
  <script src="{{asset('admin/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="{{asset('admin/libs/simplebar/dist/simplebar.js')}}"></script>
  <script src="{{asset('admin/js/dashboard.js')}}"></script>

</body>

</html>

