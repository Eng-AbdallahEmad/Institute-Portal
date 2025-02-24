@extends('app.layouts.app')

@section('title', __('index.txtTextbooks'))

@section('main-title', __('index.txtTools'))
@section('sub-title', __('index.txtBooks'))

@section('content')
<div class="table_content">
    <table id="book_list" class="display books_list normal_table" style="width:100%">
        <thead>
            <tr>
                <th>التسلسل</th>
                <th>كود الكتاب</th>
                <th class="mobile-hidden">إسم الكتاب</th>
                <th class="mobile-hidden">الشعبة</th>
                <th class="mobile-hidden">الفرقة</th>
                <th class="mobile-hidden">الفصل الدراسي</th>
                <th></th>
            </tr>
        </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td class="code_book">212-FGH <span class="tooltipText">نظم المعلومات الأدارية</span></td>
            <td class="mobile-hidden">نظم المعلومات الأدارية</td>
            <td class="mobile-hidden">MIS</td>
            <td class="mobile-hidden">الثانية</td>
            <td class="mobile-hidden">الثاني</td>
            <td><button class="show_btn" data-url="{{ asset('assets/docs/نظم_المعلومات_الإداريه.pdf') }}">تحميل الكتاب</button></td>
        </tr>
        <tr>
            <td>2</td>
            <td class="code_book">951-AXC <span class="tooltipText">تطيبقات الأنترنت</span></td>
            <td class="mobile-hidden">تطيبقات الأنترنت</td>
            <td class="mobile-hidden">MIS</td>
            <td class="mobile-hidden">الثانية</td>
            <td class="mobile-hidden">الثاني</td>
            <td><button class="show_btn" data-url="{{ asset('assets/docs/تطبيقات_الانترنت.pdf') }}">تحميل الكتاب</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td class="code_book">910-CVT <span class="tooltipText">التسويق</span></td>
            <td class="mobile-hidden">التسويق</td>
            <td class="mobile-hidden">MIS</td>
            <td class="mobile-hidden">الثانية</td>
            <td class="mobile-hidden">الثاني</td>
            <td><button class="show_btn" data-url="{{ asset('assets/docs/ادارة_التسويق.pdf') }}">تحميل الكتاب</button></td>
        </tr>
        <tr>
            <td>4</td>
            <td class="code_book">223-LPO <span class="tooltipText">الأستثمار والتمويل</span></td>
            <td class="mobile-hidden">الأستثمار والتمويل</td>
            <td class="mobile-hidden">MIS</td>
            <td class="mobile-hidden">الثانية</td>
            <td class="mobile-hidden">الثاني</td>
            <td><button class="show_btn" data-url="{{ asset('assets/docs/الاستثمار_و_التمويل.pdf') }}">تحميل الكتاب</button></td>
        </tr>
        <tr>
            <td>5</td>
            <td class="code_book">714-ZQA <span class="tooltipText">مبادئ الأحصاء</span></td>
            <td class="mobile-hidden">مبادئ الأحصاء</td>
            <td class="mobile-hidden">MIS</td>
            <td class="mobile-hidden">الثانية</td>
            <td class="mobile-hidden">الثاني</td>
            <td><button class="show_btn" data-url="{{ asset('assets/docs/كتاب_الاساليب_الاحصائية.pdf') }}">تحميل الكتاب</button></td>
        </tr>
        <tr>
            <td>6</td>
            <td class="code_book">101-MRK <span class="tooltipText">دراسات إقتصادية بالانجليزية</span></td>
            <td class="mobile-hidden">دراسات إقتصادية بالانجليزية</td>
            <td class="mobile-hidden">MIS</td>
            <td class="mobile-hidden">الثانية</td>
            <td class="mobile-hidden">الثاني</td>
            <td><button class="show_btn" data-url="{{ asset('assets/docs/دراسات_اقتصاديه_باللغه_الانجليزيه.pdf') }}">تحميل الكتاب</button></td>
        </tr>
    </tbody>
    </table>
</div>
@endsection

@section('sub-script')
    <script src="{{ asset('assets/js/Subscript.books.js') }}"></script>
@endsection
