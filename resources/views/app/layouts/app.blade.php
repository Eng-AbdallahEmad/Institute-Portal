<!DOCTYPE html>
<html lang="en" dir="{{ __('index.dir') }}" data-version="{{ config('app.version') }}" data-copyright="© {{ now()->format('Y') }} {{ config('app.name') }}">
    <head>
        <!-- Meta Tags -->
        @include('app.components.meta')

        @include('app.components.links')

        @include('app.components.style')

        <!-- ========== Title ========== -->
        <title>{{ __('index.txtStudentPortal') }} | @yield('title', ' ')</title>

    </head>
    <body>

        <!-- ========== Start Background Pattern ========== -->
        <div class="bg-pattern"></div>
        <!-- ========== End Background Pattern ========== -->

        <!-- ========== Start Loading Screen ========== -->
        <div class="loader_class" id="loadingScreen">
            <div class="loader"></div>
        </div>
        <!-- ========== End Loading Screen ========== -->

        <!-- ========== Start Navbar ========== -->
        @include('app.components.navbar')
        <!-- ========== End Navbar ========== -->

        <!-- Popup Search -->
        <div class="popup" id="popupSearch">
            <i class='bx bx-x close' id="closePopup"></i>
            <div class="popup-content">
                <input id="search-bar" type="text" placeholder="بتدور علي أيه؟" />
            </div>
        </div>

        <!-- ========== Start Sidebar ========== -->
        @include('app.components.sidebar')
        <!-- ========== End Sidebar ========== -->

        <!-- ========== Start Content ========== -->
        <div class="content back">
            <div class="content-title">
                <p>@yield('main-title', __('index.txtStudentPortal')) <i class="bx bx-chevron-{{ __('index.lfrt') }} arrow-{{ __('index.lfrt') }}"></i> @yield('sub-title', __('index.txtHome'))</p>
            </div>
            @yield('content', 'مفيش محتوي حالياً')
            <!-- footer -->
            @include('app.components.footer')
        </div>
        <!-- ========== End Content ========== -->

        <!-- ========== Start Scripts ========== -->
            @include('app.components.scripts')
        <!-- ========== End Scripts ========== -->
    </body>
</html>
