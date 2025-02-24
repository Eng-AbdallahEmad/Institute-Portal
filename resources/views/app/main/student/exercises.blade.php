@extends('app.layouts.app')

@section('title', __('index.txtTestsAndQuizzes'))

@section('main-title', __('index.txtTools'))
@section('sub-title', __('index.txtExercises'))

@section('content')
<div class="container-card">
    <div class="row">
        <a href="{{ route('exercise', ['locale' => $language, 'exercise' => 'MIS']) }}" title="نظم المعلومات الأدارية">
            <article class="article-wrapper">
            <div class="rounded-lg container-project">
                <img src="{{ asset('assets/images/logo/logo.svg') }}">
            </div>
            <div class="project-info">
                <div class="flex-pr">
                    <div class="project-title text-nowrap">نظم المعلومات الأدارية</div>
                    <div class="project-hover">
                        <svg 
                            style="color: black;" 
                            xmlns="http://www.w3.org/2000/svg" 
                            width="2em" 
                            height="2em" 
                            color="black" 
                            stroke-linejoin="round" 
                            stroke-linecap="round" 
                            viewBox="0 0 24 24" 
                            stroke-width="2" 
                            fill="none" 
                            stroke="currentColor">
                            <line y2="12" x2="19" y1="12" x1="5"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </div>
                </div>
                <div class="types">
                    <span 
                        style="background-color: rgba(165, 96, 247, 0.43); color: rgb(85, 27, 177);" 
                        class="project-type">
                        • فرقة ثانية
                    </span>
                    <span class="project-type">• نظم معلومات إدارية</span>
                </div>
            </div>
            </article>
        </a>

        <a href="{{ route('exercise', ['locale' => $language, 'exercise' => 'AppNet']) }}" title="تطبيقات الأنترنت">
            <article class="article-wrapper">
            <div class="rounded-lg container-project">
                <img src="{{ asset('assets/images/logo/logo.svg') }}">
            </div>
            <div class="project-info">
                <div class="flex-pr">
                    <div class="project-title text-nowrap">تطبيقات الأنترنت</div>
                    <div class="project-hover">
                        <svg 
                            style="color: black;" 
                            xmlns="http://www.w3.org/2000/svg" 
                            width="2em" 
                            height="2em" 
                            color="black" 
                            stroke-linejoin="round" 
                            stroke-linecap="round" 
                            viewBox="0 0 24 24" 
                            stroke-width="2" 
                            fill="none" 
                            stroke="currentColor">
                            <line y2="12" x2="19" y1="12" x1="5"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </div>
                </div>
                <div class="types">
                    <span 
                        style="background-color: rgba(165, 96, 247, 0.43); color: rgb(85, 27, 177);" 
                        class="project-type">
                        • فرقة ثانية
                    </span>
                    <span class="project-type">• نظم معلومات إدارية</span>
                </div>
            </div>
            </article>
        </a>

        <a href="" title="التسويق">
            <article class="article-wrapper">
            <div class="rounded-lg container-project">
                <img src="{{ asset('assets/images/logo/logo.svg') }}">
            </div>
            <div class="project-info">
                <div class="flex-pr">
                    <div class="project-title text-nowrap">التسويق</div>
                    <div class="project-hover">
                        <svg 
                            style="color: black;" 
                            xmlns="http://www.w3.org/2000/svg" 
                            width="2em" 
                            height="2em" 
                            color="black" 
                            stroke-linejoin="round" 
                            stroke-linecap="round" 
                            viewBox="0 0 24 24" 
                            stroke-width="2" 
                            fill="none" 
                            stroke="currentColor">
                            <line y2="12" x2="19" y1="12" x1="5"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </div>
                </div>
                <div class="types">
                    <span 
                        style="background-color: rgba(165, 96, 247, 0.43); color: rgb(85, 27, 177);" 
                        class="project-type">
                        • فرقة ثانية
                    </span>
                    <span class="project-type">• نظم معلومات إدارية</span>
                </div>
            </div>
            </article>
        </a>

        <a href="" title="الأستثمار والتمويل">
            <article class="article-wrapper">
            <div class="rounded-lg container-project">
                <img src="{{ asset('assets/images/logo/logo.svg') }}">
            </div>
            <div class="project-info">
                <div class="flex-pr">
                    <div class="project-title text-nowrap">الأستثمار والتمويل</div>
                    <div class="project-hover">
                        <svg 
                            style="color: black;" 
                            xmlns="http://www.w3.org/2000/svg" 
                            width="2em" 
                            height="2em" 
                            color="black" 
                            stroke-linejoin="round" 
                            stroke-linecap="round" 
                            viewBox="0 0 24 24" 
                            stroke-width="2" 
                            fill="none" 
                            stroke="currentColor">
                            <line y2="12" x2="19" y1="12" x1="5"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </div>
                </div>
                <div class="types">
                    <span 
                        style="background-color: rgba(165, 96, 247, 0.43); color: rgb(85, 27, 177);" 
                        class="project-type">
                        • فرقة ثانية
                    </span>
                    <span class="project-type">• نظم معلومات إدارية</span>
                </div>
            </div>
            </article>
        </a>

        <a href="" title="مبادئ الأحصاء">
            <article class="article-wrapper">
            <div class="rounded-lg container-project">
                <img src="{{ asset('assets/images/logo/logo.svg') }}">
            </div>
            <div class="project-info">
                <div class="flex-pr">
                    <div class="project-title text-nowrap">مبادئ الأحصاء</div>
                    <div class="project-hover">
                        <svg 
                            style="color: black;" 
                            xmlns="http://www.w3.org/2000/svg" 
                            width="2em" 
                            height="2em" 
                            color="black" 
                            stroke-linejoin="round" 
                            stroke-linecap="round" 
                            viewBox="0 0 24 24" 
                            stroke-width="2" 
                            fill="none" 
                            stroke="currentColor">
                            <line y2="12" x2="19" y1="12" x1="5"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </div>
                </div>
                <div class="types">
                    <span 
                        style="background-color: rgba(165, 96, 247, 0.43); color: rgb(85, 27, 177);" 
                        class="project-type">
                        • فرقة ثانية
                    </span>
                    <span class="project-type">• نظم معلومات إدارية</span>
                </div>
            </div>
            </article>
        </a>

        <a href="" title="دراسات إقتصادية بالانجليزية">
            <article class="article-wrapper">
            <div class="rounded-lg container-project">
                <img src="{{ asset('assets/images/logo/logo.svg') }}">
            </div>
            <div class="project-info">
                <div class="flex-pr">
                    <div class="project-title text-nowrap">دراسات إقتصادية بالانجليزية</div>
                    <div class="project-hover">
                        <svg 
                            style="color: black;" 
                            xmlns="http://www.w3.org/2000/svg" 
                            width="2em" 
                            height="2em" 
                            color="black" 
                            stroke-linejoin="round" 
                            stroke-linecap="round" 
                            viewBox="0 0 24 24" 
                            stroke-width="2" 
                            fill="none" 
                            stroke="currentColor">
                            <line y2="12" x2="19" y1="12" x1="5"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </div>
                </div>
                <div class="types">
                    <span 
                        style="background-color: rgba(165, 96, 247, 0.43); color: rgb(85, 27, 177);" 
                        class="project-type">
                        • فرقة ثانية
                    </span>
                    <span class="project-type">• نظم معلومات إدارية</span>
                </div>
            </div>
            </article>
        </a>


    </div>
</div>

@endsection

@section('sub-script')
    <script src="{{ asset('assets/js/Subscript.exercises.js') }}"></script>
@endsection
