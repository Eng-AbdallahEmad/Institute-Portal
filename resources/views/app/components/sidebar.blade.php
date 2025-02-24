@if (isset($thirdEndPoint))
<nav class="sidebar">
    <div class="menu_content">
        <ul class="menu_items">
            <div class="menu_title menu_info"></div>
            <!-- start -->
            <li class="item">
                <a class="nav_link">
                    <span class="navlink_icon"><i class='bx bx-user'></i></span>
                    <span class="navlink">عبدالله مصطفي</span>
                </a>
            </li>
            <!-- end -->

            <!-- start -->
            <li class="item">
                <a class="nav_link">
                    <span class="navlink_icon"><i class='bx bx-collection'></i></span>
                    <span class="navlink">MIS</span>
                </a>
            </li>
            <!-- end -->

            <!-- start -->
            <li class="item">
                <a class="nav_link">
                    <span class="navlink_icon"><i class='bx bxs-graduation'></i></span>
                    <span class="navlink">الثالثة - الثاني</span>
                </a>
            </li>
            <!-- end -->

            <!-- start -->
            <li class="item">
                <a class="nav_link">
                    <span class="navlink_icon"><i class='bx bx-bookmark-alt-minus'></i></span>
                    <span class="navlink">95132</span>
                </a>
            </li>
            <!-- end -->
        </ul>
        <ul class="menu_items">
            <div class="menu_title menu_info_ex"></div>

            <!-- start -->
            <li class="item">
                <a class="nav_link">
                    <span class="navlink_icon"><i class='bx bx-book'></i></span>
                    <span class="navlink">برمجة هيكلية</span>
                </a>
            </li>
            <!-- end -->

            <!-- start -->
            <li class="item">
                <a class="nav_link">
                    <span class="navlink_icon"><i class='bx bx-barcode'></i></span>
                    <span class="navlink">125_YOU</span>
                </a>
            </li>
            <!-- end -->

            <!-- start -->
            <li class="item">
                <a class="nav_link">
                    <span class="navlink_icon"><i class='bx bx-message-square-dots'></i></span>
                    <span class="navlink">مقالي</span>
                </a>
            </li>
            <!-- end -->

            <!-- start -->
            <li class="item">
                <a class="nav_link">
                    <span class="navlink_icon"><i class='bx bx-book-content'></i></span>
                    <span class="navlink">1س</span>
                </a>
            </li>
            <!-- end -->

            <!-- Sidebar Open / Close -->
            <div class="bottom_content">
                <div class="bottom expand_sidebar">
                    <span> {{ __('index.txtExpand') }}</span>
                    <i class='bx bx-log-in'></i>
                </div>
                <div class="bottom collapse_sidebar">
                    <span> {{ __('index.txtCollapse') }}</span>
                    <i class='bx bx-log-out'></i>
                </div>
            </div>
        </ul>
    </div>
</nav>
@else
<nav class="sidebar">
    <div class="menu_content">
        <ul class="menu_items">
            <div class="menu_title menu_dahsboard"></div>
            <!-- start -->
            <li class="item">
                <a href="{{ route('index', ['locale' => 'ar']) }}" class="nav_link">
                    <span class="navlink_icon"><i class="bx bx-home-alt"></i></span>
                    <span class="navlink">{{ __('index.txtHome') }}</span>
                </a>
            </li>
            <!-- end -->
        </ul>
        <ul class="menu_items">
            <div class="menu_title menu_tools"></div>
            <!-- start -->
            <li class="item">
                <div class="nav_link submenu_item">
                    <span class="navlink_icon"><i class='bx bx-file'></i></span>
                    <span class="navlink">{{ __('index.txtExams') }}</span>
                    <i class="bx bx-chevron-right arrow-left"></i>
                </div>
                <ul class="menu_items submenu">
                    <a href="#" class="nav_link sublink" title="{{ __('books.MISbooks') }}"><p>{{ __('books.MISbooks') }}</p></a>
                    <a href="#" class="nav_link sublink" title="إمتحان تطبيقات الانترنت"><p>إمتحان تطبيقات الانترنت</p></a>
                    <a href="#" class="nav_link sublink" title="إمتحان التسويق"><p>إمتحان التسويق</p></a>
                    <a href="#" class="nav_link sublink" title="إمتحان رياضيات التمويل"><p>إمتحان رياضيات التمويل</p></a>
                    <a href="#" class="nav_link sublink" title="إمتحان مبادئ الإحصاء"><p>إمتحان مبادئ الإحصاء</p></a>
                    <a href="#" class="nav_link sublink" title="إمتحان دراسات إقتصادية باللغة الانجليزية"><p>إمتحان دراسات إقتصادية باللغة الانجليزية</p></a>
                </ul>
            </li>
            <!-- end -->
            <!-- start -->
            <li class="item">
                <div class="nav_link submenu_item">
                    <span class="navlink_icon"><i class='bx bx-book'></i></span>
                    <span class="navlink">{{ __('index.txtBooks') }}</span>
                    <i class="bx bx-chevron-right arrow-left"></i>
                </div>
                <ul class="menu_items submenu">
                    <a href="#" class="nav_link sublink" title="نظم المعلومات الادارية"><p>نظم المعلومات الادارية</p></a>
                    <a href="#" class="nav_link sublink" title="تطبيقات الأنترنت"><p>تطبيقات الأنترنت</p></a>
                    <a href="#" class="nav_link sublink" title="التسويق"><p>التسويق</p></a>
                    <a href="#" class="nav_link sublink" title="إمتحان رياضيات التمويل"><p>إمتحان رياضيات التمويل</p></a>
                    <a href="#" class="nav_link sublink" title="إمتحان مبادئ الإحصاء"><p>إمتحان مبادئ الإحصاء</p></a>
                    <a href="#" class="nav_link sublink" title="إمتحان دراسات إقتصادية باللغة الانجليزية"><p>إمتحان دراسات إقتصادية باللغة الانجليزية</p></a>
                </ul>
            </li>
            <!-- end -->
            <!-- start -->
            <li class="item">
                <div class="nav_link submenu_item">
                    <span class="navlink_icon"><i class='bx bx-test-tube'></i></span>
                    <span class="navlink">{{ __('index.txtExercises') }}</span>
                    <i class="bx bx-chevron-right arrow-left"></i>
                </div>
                <ul class="menu_items submenu">
                    <a href="#" class="nav_link sublink" title="نظم المعلومات الادارية"><p>نظم المعلومات الادارية</p></a>
                    <a href="#" class="nav_link sublink" title="تطبيقات الأنترنت"><p>تطبيقات الأنترنت</p></a>
                    <a href="#" class="nav_link sublink" title="التسويق"><p>التسويق</p></a>
                    <a href="#" class="nav_link sublink" title="إمتحان رياضيات التمويل"><p>إمتحان رياضيات التمويل</p></a>
                    <a href="#" class="nav_link sublink" title="إمتحان مبادئ الإحصاء"><p>إمتحان مبادئ الإحصاء</p></a>
                    <a href="#" class="nav_link sublink" title="إمتحان دراسات إقتصادية باللغة الانجليزية"><p>إمتحان دراسات إقتصادية باللغة الانجليزية</p></a>
                </ul>
            </li>
            <!-- end -->
            <!-- start -->
            <li class="item">
                <div class="nav_link submenu_item">
                    <span class="navlink_icon"><i class='bx bx-news'></i></span>
                    <span class="navlink">{{ __('index.txtNews') }}</span>
                    <i class="bx bx-chevron-right arrow-left"></i>
                </div>
                <ul class="menu_items submenu">
                    <a href="#" class="nav_link sublink" title="نظم المعلومات الادارية"><p>نظم المعلومات الادارية</p></a>
                    <a href="#" class="nav_link sublink" title="تطبيقات الأنترنت"><p>تطبيقات الأنترنت</p></a>
                    <a href="#" class="nav_link sublink" title="التسويق"><p>التسويق</p></a>
                    <a href="#" class="nav_link sublink" title="إمتحان رياضيات التمويل"><p>إمتحان رياضيات التمويل</p></a>
                    <a href="#" class="nav_link sublink" title="إمتحان مبادئ الإحصاء"><p>إمتحان مبادئ الإحصاء</p></a>
                    <a href="#" class="nav_link sublink" title="إمتحان دراسات إقتصادية باللغة الانجليزية"><p>إمتحان دراسات إقتصادية باللغة الانجليزية</p></a>
                </ul>
            </li>
            <!-- end -->
            <!-- start -->
            <li class="item">
                <div class="nav_link submenu_item">
                    <span class="navlink_icon"><i class='bx bx-help-circle'></i></span>
                    <span class="navlink">{{ __('index.txtHelper') }}</span>
                    <i class="bx bx-chevron-right arrow-left"></i>
                </div>
                <ul class="menu_items submenu">
                    <a href="#" class="nav_link sublink" title="المساعد الذكي"><p>المساعد الذكي</p></a>
                    <a href="#" class="nav_link sublink" title="تحويلات نظم الاعداد"><p>تحويلات نظم الاعداد</p></a>
                    <a href="#" class="nav_link sublink" title="الالة الحاسبة"><p>الالة الحاسبة</p></a>
                    <a href="#" class="nav_link sublink" title="أشهر القوانين"><p>أشهر القوانين</p></a>
                </ul>
            </li>
            <!-- end -->
            <ul class="menu_items">
                <div class="menu_title menu_setting"></div>
                <li class="item">
                    <a href="#" class="nav_link">
                        <span class="navlink_icon"><i class="bx bx-cog"></i></span>
                        <span class="navlink">{{ __('index.txtAccountSettings') }}</span>
                    </a>
                </li>
                <li class="item">
                    <a href="#" class="nav_link">
                        <span class="navlink_icon"><i class="bx bx-layer"></i></span>
                        <span class="navlink">{{ __('index.txtAppSettings') }}</span>
                    </a>
                </li>
            </ul>
            <!-- Sidebar Open / Close -->
            <div class="bottom_content">
                <div class="bottom expand_sidebar">
                    <span> {{ __('index.txtExpand') }}</span>
                    <i class='bx bx-log-in'></i>
                </div>
                <div class="bottom collapse_sidebar">
                    <span> {{ __('index.txtCollapse') }}</span>
                    <i class='bx bx-log-out'></i>
                </div>
            </div>
        </ul>
    </div>
</nav>
@endif
