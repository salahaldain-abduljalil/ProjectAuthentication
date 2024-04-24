<!DOCTYPE html>


<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{asset('assets-front')}}/"
  data-template="vertical-menu-template-free"
>

@include('back.partials.head')


  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        @include('back.partials.aside')



        <!-- Layout container -->
        <div class="layout-page">

            @include('back.partials.header')



          <!-- Content wrapper -->
          <div class="content-wrapper">
                        @yield('content')
             @include('back.partials.footer')


            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->



        @include('back.partials.scripts')

  </body>
</html>
