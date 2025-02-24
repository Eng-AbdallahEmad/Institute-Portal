@extends('app.layouts.app')

@section('title', __('index.txtHome'))

@section('content')
                <!-- Top Content -->
                <div class="top_content">
                    <div class="title_welcome">
                        <h2><span class="hello"></span> <span class="the_name">
                        @if(app()->getLocale() === 'ar')
                            {{ $firstNameAR }} {{ $secondNameAR }}
                        @else
                            {{ $firstNameEN }} {{ $secondNameEN }}
                        @endif</span>, {{ __('index.txtHelloMSG') }} . . .</h2>
                    </div>
                    <div class="time-date">
                        <div class="flex-row-center">
                            <i class='bx bxs-calendar'></i>
                            <h4 id="current-date"></h4>
                        </div>
                        <div class="flex-row-center">
                            <i class='bx bxs-time'></i>
                            <h4 id="current-time"></h4>
                        </div>
                    </div>
                </div>
                <!-- Icons Control -->
                <div class="icons_control">
                    <div class="row">
                        <!-- E-exam - Start -->
                        <a href="{{ route('exams', ['locale' => 'ar']) }}" class="icon">
                            <img src="{{ asset('assets/images/icons/exam-2.webp') }}" alt="">
                            <h4>{{ __('index.txtExamsName') }}</h4>
                        </a>
                        <!-- E-exam - End -->
                        <!-- E-books - Start -->
                        <a href="{{ route('books', ['locale' => 'ar']) }}" class="icon">
                            <img src="{{ asset('assets/images/icons/books.webp') }}" alt="">
                            <h4>{{ __('index.txtTextbooks') }}</h4>
                        </a>
                        <!-- E-books - End -->
                        <!-- Exercise - Start -->
                        <a href="{{ route('exercises', ['locale' => 'ar']) }}" class="icon">
                            <img src="{{ asset('assets/images/icons/exercise.webp') }}" alt="">
                            <h4>{{ __('index.txtTestsAndQuizzes') }}</h4>
                        </a>
                        <!-- Exercise - End -->
                        <!-- News - Start -->
                        <a href="#" class="icon">
                            <img src="{{ asset('assets/images/icons/news-2.webp') }}" alt="">
                            <h4>{{ __('index.txtLastNews') }}</h4>
                        </a>
                        <!-- News - End -->
                        <!-- Tools - Start -->
                        <a href="#" class="icon">
                            <img src="{{ asset('assets/images/icons/tools.webp') }}" alt="">
                            <h4>{{ __('index.txtToolsHelper') }}</h4>
                        </a>
                        <!-- Tools - End -->
                        <!--  - Start -->
                        <a href="#" class="icon">
                            <img src="{{ asset('assets/images/icons/Coming_Soon.webp') }}" alt="">
                            <h4>{{ __('index.txtComingSoon') }}</h4>
                        </a>
                        <!--  - End -->
                    </div>
                </div>
@endsection

@section('sub-script')
    @if ($language == 'en')
        <script src="{{ asset('assets/js/en/Subscript.index.js') }}"></script>
    @else
        <script src="{{ asset('assets/js/ar/Subscript.index.js') }}"></script>
    @endif
@endsection