@extends('app.layouts.app')

@section('title', __('index.txtTestsAndQuizzes'))

@section('main-title', __('index.txtTools'))

@section('sub-title')
{{ __('index.txtExercises') }} <i class="bx bx-chevron-{{ __('index.lfrt') }} arrow-{{ __('index.lfrt') }}"></i>

@if ($exercise == "MIS")
    نظم المعلومات الإدارية
@elseif ($exercise == "AppNet")
    تطبيقات الإنترنت
@elseif ($exercise == "Marketing")
    التسويق
@elseif ($exercise == "Investment")
    الإستثمار والتمويل
@elseif ($exercise == "BeMIS")
    مبادئ الأحصاء
@else
    غير معروف
@endif
@endsection

@section('content')
<div class="container-card">
  <div class="row">
    <article class="card">
      <section class="card__hero">
        <header class="card__hero-header">
          <span>تمارين كتابية</span>
          <div class="card__icon">
            <svg viewBox="0 0 24 24" width="27px" height="27px" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000">
              <g id="SVGRepo_bgCarrier" stroke-width="2"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <path d="M15.5 9L15.6716 9.17157C17.0049 10.5049 17.6716 11.1716 17.6716 12C17.6716 12.8284 17.0049 13.4951 15.6716 14.8284L15.5 15" stroke="#000000" stroke-width="1.5" stroke-linecap="round"></path>
                <path d="M13.2942 7.17041L12.0001 12L10.706 16.8297" stroke="#000000" stroke-width="1.5" stroke-linecap="round"></path>
                <path d="M8.49994 9L8.32837 9.17157C6.99504 10.5049 6.32837 11.1716 6.32837 12C6.32837 12.8284 6.99504 13.4951 8.32837 14.8284L8.49994 15" stroke="#000000" stroke-width="1.5" stroke-linecap="round"></path>
                <path d="M22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C21.5093 4.43821 21.8356 5.80655 21.9449 8" stroke="#000000" stroke-width="1.5" stroke-linecap="round"></path>
              </g>
            </svg>
          </div>
        </header>
        <p class="card__exercise-title">أكتب كود برمجي</p>
      </section>

      <div class="card__footer">
        <div class="card__exercise-summary">
          <div class="card__exercise-icon">
            <img src="{{ asset('assets/images/logo/logo.svg') }}" alt="">
          </div>
          <div class="card__exercise">
            <p class="card__exercise-title">
              من مما تعلمت <br />
              أكتب كود للبرنامج التالي
            </p>
          </div>
        </div>
        <button class="card__btn">حل</button>
      </div>
    </article>

    <article class="card">
      <section class="card__hero">
        <header class="card__hero-header">
          <span>تمارين كتابية</span>
          <div class="card__icon">
            <svg fill="#000000" width="27px" height="27px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 491.598 491.598" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g transform="translate(0 -1)"> <g> <g> <path d="M245.76,410.651c45.246,0,81.92-36.674,81.92-81.92s-36.674-81.92-81.92-81.92c-45.246,0-81.92,36.674-81.92,81.92 S200.514,410.651,245.76,410.651z M245.76,287.772c22.625,0,40.96,18.335,40.96,40.96s-18.335,40.96-40.96,40.96 s-40.96-18.335-40.96-40.96S223.135,287.772,245.76,287.772z"></path> <path d="M489.12,175.321c-0.041-0.077-0.084-0.152-0.125-0.228c-0.143-0.248-0.288-0.494-0.444-0.737 c-2.114-3.47-5.379-6.344-9.859-8.018L131.6,3.001c-13.583-6.392-29.2,3.519-29.2,18.531v69.226l-36.944-7.389 c-12.673-2.535-24.496,7.159-24.496,20.082v61.44H20.48c-11.311,0-20.48,9.169-20.48,20.48v286.72 c0,11.311,9.169,20.48,20.48,20.48h450.56c11.311,0,20.48-9.169,20.48-20.48V186.717 C491.844,182.82,491.093,178.847,489.12,175.321z M143.36,53.803l166.845,78.516L143.36,98.95V53.803z M81.92,128.433 l36.943,7.389c0,0,0,0,0,0l105.884,21.177l39.465,7.893H81.92V128.433z M450.56,451.611H40.96v-245.76h20.48h389.12V451.611z"></path> <path d="M102.4,267.291c11.305,0,20.48-9.175,20.48-20.48s-9.175-20.48-20.48-20.48c-11.305,0-20.48,9.175-20.48,20.48 S91.095,267.291,102.4,267.291z"></path> <path d="M389.12,267.291c11.305,0,20.48-9.175,20.48-20.48s-9.175-20.48-20.48-20.48c-11.305,0-20.48,9.175-20.48,20.48 S377.815,267.291,389.12,267.291z"></path> <path d="M102.4,431.132c11.305,0,20.48-9.175,20.48-20.48c0-11.305-9.175-20.48-20.48-20.48c-11.305,0-20.48,9.175-20.48,20.48 C81.92,421.956,91.095,431.132,102.4,431.132z"></path> <path d="M389.12,431.132c11.305,0,20.48-9.175,20.48-20.48c0-11.305-9.175-20.48-20.48-20.48c-11.305,0-20.48,9.175-20.48,20.48 C368.64,421.956,377.815,431.132,389.12,431.132z"></path> </g> </g> </g> </g></svg>
          </div>
        </header>
        <p class="card__exercise-title">حل مسائل محاسبية</p>
      </section>

      <div class="card__footer">
        <div class="card__exercise-summary">
          <div class="card__exercise-icon">
            <img src="{{ asset('assets/images/logo/logo.svg') }}" alt="">
          </div>
          <div class="card__exercise">
            <p class="card__exercise-title">
              من مما تعلمت <br />
              حل مسئلة المحاسبة التالي
            </p>
          </div>
        </div>
        <button class="card__btn">حل</button>
      </div>
    </article>

    <article class="card">
      <section class="card__hero">
        <header class="card__hero-header">
          <span>تمارين كتابية</span>
          <div class="card__icon">
            <svg fill="#000000" width="27px" height="27px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 486.1 486.1" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="2"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M445.5,0H40.7C18.3,0,0,18.3,0,40.7v404.7c0,22.4,18.3,40.7,40.7,40.7h404.7c22.4,0,40.7-18.3,40.7-40.7V40.7 C486.2,18.3,467.9,0,445.5,0z M462.2,445.5c0,9.2-7.5,16.7-16.7,16.7H40.7c-9.2,0-16.7-7.5-16.7-16.7V40.7 C24,31.5,31.5,24,40.7,24h404.7c9.2,0,16.7,7.5,16.7,16.7v404.8H462.2z"></path> <path d="M193,300.6c-4.7-4.7-12.3-4.7-17,0l-36.1,36.1l-36.1-36.1c-4.7-4.7-12.3-4.7-17,0s-4.7,12.3,0,17l36.1,36.1l-36.1,36.1 c-4.7,4.7-4.7,12.3,0,17c2.3,2.3,5.4,3.5,8.5,3.5c3.1,0,6.1-1.2,8.5-3.5l36.1-36.1l36.1,36.1c2.3,2.3,5.4,3.5,8.5,3.5 s6.1-1.2,8.5-3.5c4.7-4.7,4.7-12.3,0-17l-36.1-36.1l36.1-36.1C197.7,312.9,197.7,305.3,193,300.6z"></path> <path d="M203,131.7h-51v-51c0-6.6-5.4-12-12-12s-12,5.4-12,12v51H77c-6.6,0-12,5.4-12,12s5.4,12,12,12h51v51c0,6.6,5.4,12,12,12 s12-5.4,12-12v-51h51c6.6,0,12-5.4,12-12S209.6,131.7,203,131.7z"></path> <path d="M403.9,371.1H296.4c-6.6,0-12,5.4-12,12s5.4,12,12,12h107.4c6.6,0,12-5.4,12-12S410.5,371.1,403.9,371.1z"></path> <path d="M403.9,312.2H296.4c-6.6,0-12,5.4-12,12s5.4,12,12,12h107.4c6.6,0,12-5.4,12-12S410.5,312.2,403.9,312.2z"></path> <path d="M394.6,155.7c6.6,0,12-5.4,12-12s-5.4-12-12-12H287.1c-6.6,0-12,5.4-12,12s5.4,12,12,12H394.6z"></path> </g> </g> </g></svg>
          </div>
        </header>
        <p class="card__exercise-title">حل مسائل رياضية</p>
      </section>

      <div class="card__footer">
        <div class="card__exercise-summary">
          <div class="card__exercise-icon">
            <img src="{{ asset('assets/images/logo/logo.svg') }}" alt="">
          </div>
          <div class="card__exercise">
            <p class="card__exercise-title">
              من مما تعلمت <br />
              حل المسئلة الرياضيه التالي
            </p>
          </div>
        </div>
        <button class="card__btn">حل</button>
      </div>
    </article>

    <article class="card">
      <section class="card__hero">
        <header class="card__hero-header">
          <span>تمارين كتابية</span>
          <div class="card__icon">
            <svg viewBox="0 0 24 24" width="27px" height="27px" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 18V6" stroke="#000000" stroke-width="1.5" stroke-linecap="round"></path> <path d="M20 6V18" stroke="#000000" stroke-width="1.5" stroke-linecap="round"></path> <path d="M12 10C16.4183 10 20 8.20914 20 6C20 3.79086 16.4183 2 12 2C7.58172 2 4 3.79086 4 6C4 8.20914 7.58172 10 12 10Z" stroke="#000000" stroke-width="1.5"></path> <path d="M20 12C20 14.2091 16.4183 16 12 16C7.58172 16 4 14.2091 4 12" stroke="#000000" stroke-width="1.5"></path> <path d="M20 18C20 20.2091 16.4183 22 12 22C7.58172 22 4 20.2091 4 18" stroke="#000000" stroke-width="1.5"></path></g></svg>
          </div>
        </header>
        <p class="card__exercise-title">أكتب كود SQL-DB</p>
      </section>

      <div class="card__footer">
        <div class="card__exercise-summary">
          <div class="card__exercise-icon">
            <img src="{{ asset('assets/images/logo/logo.svg') }}" alt="">
          </div>
          <div class="card__exercise">
            <p class="card__exercise-title">
              من مما تعلمت <br />
              أكتب كود SQL التالي
            </p>
          </div>
        </div>
        <button class="card__btn">حل</button>
      </div>
    </article>

    <article class="card">
      <section class="card__hero">
        <header class="card__hero-header">
          <span>تمارين كتابية</span>
          <div class="card__icon">
            <svg viewBox="0 0 24 24" width="27px" height="27px" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.a,.b{fill:none;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5px;}.a{fill-rule:evenodd;}</style></defs><path class="a" d="M2,2V20a2,2,0,0,0,2,2H22"></path><rect class="b" height="6" rx="1.5" width="3" x="6" y="12"></rect><rect class="b" height="6" rx="1.5" width="3" x="12" y="7"></rect><rect class="b" height="6" rx="1.5" width="3" x="18" y="3"></rect></g></svg>
          </div>
        </header>
        <p class="card__exercise-title">حل مسائل إحصائية</p>
      </section>

      <div class="card__footer">
        <div class="card__exercise-summary">
          <div class="card__exercise-icon">
            <img src="{{ asset('assets/images/logo/logo.svg') }}" alt="">
          </div>
          <div class="card__exercise">
            <p class="card__exercise-title">
              من مما تعلمت <br />
              حل المسئلة الأحصائي التالي
            </p>
          </div>
        </div>
        <button class="card__btn">حل</button>
      </div>
    </article>

    <article class="card">
      <section class="card__hero">
        <header class="card__hero-header">
          <span>تمارين كتابية</span>
          <div class="card__icon">
            <svg viewBox="0 0 24 24" width="27px" height="27px" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M2 6C2 4.34315 3.34315 3 5 3H19C20.6569 3 22 4.34315 22 6V15C22 16.6569 20.6569 18 19 18H13V19H15C15.5523 19 16 19.4477 16 20C16 20.5523 15.5523 21 15 21H9C8.44772 21 8 20.5523 8 20C8 19.4477 8.44772 19 9 19H11V18H5C3.34315 18 2 16.6569 2 15V6ZM5 5C4.44772 5 4 5.44772 4 6V15C4 15.5523 4.44772 16 5 16H19C19.5523 16 20 15.5523 20 15V6C20 5.44772 19.5523 5 19 5H5Z" fill="#000000"></path> </g></svg>
          </div>
        </header>
        <p class="card__exercise-title">حل مقالي حاسب</p>
      </section>

      <div class="card__footer">
        <div class="card__exercise-summary">
          <div class="card__exercise-icon">
            <img src="{{ asset('assets/images/logo/logo.svg') }}" alt="">
          </div>
          <div class="card__exercise">
            <p class="card__exercise-title">
              من مما تعلمت <br />
              حل مقالي حاسب التالي
            </p>
          </div>
        </div>
        <button class="card__btn">حل</button>
      </div>
    </article>

    <article class="card">
      <section class="card__hero">
        <header class="card__hero-header">
          <span>تمارين كتابية</span>
          <div class="card__icon">
            <svg viewBox="0 0 24 24" width="27px" height="27px" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 6C7 6.55228 6.55228 7 6 7C5.44772 7 5 6.55228 5 6C5 5.44772 5.44772 5 6 5C6.55228 5 7 5.44772 7 6Z" fill="#000000"></path> <path d="M10 6C10 6.55228 9.55228 7 9 7C8.44772 7 8 6.55228 8 6C8 5.44772 8.44772 5 9 5C9.55228 5 10 5.44772 10 6Z" fill="#000000"></path> <path d="M13 6C13 6.55228 12.5523 7 12 7C11.4477 7 11 6.55228 11 6C11 5.44772 11.4477 5 12 5C12.5523 5 13 5.44772 13 6Z" fill="#000000"></path> <path d="M2 9.5H22" stroke="#000000" stroke-width="1.5" stroke-linecap="round"></path> <path d="M9 21L9 10" stroke="#000000" stroke-width="1.5" stroke-linecap="round"></path> <path d="M2 12C2 7.28596 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28596 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2.49073 19.5618 2.16444 18.1934 2.0551 16" stroke="#000000" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
          </div>
        </header>
        <p class="card__exercise-title">حل مقالي إداري</p>
      </section>

      <div class="card__footer">
        <div class="card__exercise-summary">
          <div class="card__exercise-icon">
            <img src="{{ asset('assets/images/logo/logo.svg') }}" alt="">
          </div>
          <div class="card__exercise">
            <p class="card__exercise-title">
              من مما تعلمت <br />
              حل مقالي إداري التالي
            </p>
          </div>
        </div>
        <button class="card__btn">حل</button>
      </div>
    </article>
  </div>
</div>
@endsection

@section('sub-script')
    <script src="{{ asset('assets/js/Subscript.exercises.js') }}"></script>
@endsection
