@extends('app.layouts.app')

@section('title', __('index.txtExamsName'))

@section('main-title', __('index.txtTools'))
@section('sub-title', __('index.txtExams'))

@section('content')
<div class="table_content">
    <table id="exam_list" class="display exam_list normal_table" style="width:100%">
        <thead>
            <tr>
                <th>التسلسل</th>
                <th>كود الأمتحان</th>
                <th class="mobile-hidden">إسم المادة</th>
                <th class="mobile-hidden">مدة الأمتحان</th>
                <th class="mobile-hidden">عدد الأسئلة</th>
                <th class="mobile-hidden">مدة الأنتهاء</th>
                <th class="display_hidden">تاريخ البدء</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td class="code_exam">212-FGH <span class="tooltipText">نظم المعلومات الأدارية</span></td>
                <td class="mobile-hidden">نظم المعلومات الأدارية</td>
                <td class="mobile-hidden">15 د</td>
                <td class="mobile-hidden">15 س</td>
                <td class="countdown mobile-hidden">0 ساعات و 0 دقائق و 0 ثواني</td>
                <td class="display_hidden date_value">29/12/{{ now()->format('Y') }}</td>
                <td><button class="show_btn" data-url="exam?subCode=150YuI&examCode=101-MRK">المشاركة الأن</button></td>
            </tr>
            <tr>
                <td>2</td>
                <td class="code_exam">951-AXC <span class="tooltipText">تطيبقات الأنترنت</span></td>
                <td class="mobile-hidden">تطيبقات الأنترنت</td>
                <td class="mobile-hidden">10 د</td>
                <td class="mobile-hidden">25 س</td>
                <td class="countdown mobile-hidden">0 ساعات و 0 دقائق و 0 ثواني</td>
                <td class="display_hidden date_value">29/12/{{ now()->format('Y') }}</td>
                <td><button class="show_btn" data-url="exam?subCode=150YuI&examCode=101-MRK">المشاركة الأن</button></td>
            </tr>
            <tr>
                <td>3</td>
                <td class="code_exam">910-CVT <span class="tooltipText">التسويق</span></td>
                <td class="mobile-hidden">التسويق</td>
                <td class="mobile-hidden">25 د</td>
                <td class="mobile-hidden">30 س</td>
                <td class="countdown mobile-hidden">0 ساعات و 0 دقائق و 0 ثواني</td>
                <td class="display_hidden date_value">29/12/{{ now()->format('Y') }}</td>
                <td><button class="show_btn" data-url="exam?subCode=150YuI&examCode=101-MRK">المشاركة الأن</button></td>
            </tr>
            <tr>
                <td>4</td>
                <td class="code_exam">223-LPO <span class="tooltipText">رياضيات التمويل</span></td>
                <td class="mobile-hidden">رياضيات التمويل</td>
                <td class="mobile-hidden">25 د</td>
                <td class="mobile-hidden">20 س</td>
                <td class="countdown mobile-hidden">0 ساعات و 0 دقائق و 0 ثواني</td>
                <td class="display_hidden date_value">29/12/{{ now()->format('Y') }}</td>
                <td><button class="show_btn" data-url="exam?subCode=150YuI&examCode=101-MRK">المشاركة الأن</button></td>
            </tr>
            <tr>
                <td>5</td>
                <td class="code_exam">714-ZQA <span class="tooltipText">مبادئ الأحصاء</span></td>
                <td class="mobile-hidden">مبادئ الأحصاء</td>
                <td class="mobile-hidden">25 د</td>
                <td class="mobile-hidden">20 س</td>
                <td class="countdown mobile-hidden">0 ساعات و 0 دقائق و 0 ثواني</td>
                <td class="display_hidden date_value">29/12/{{ now()->format('Y') }}</td>
                <td><button class="show_btn" data-url="exam?subCode=200YxI&examCode=714-ZQA">المشاركة الأن</button></td>
            </tr>
            <tr>
                <td>6</td>
                <td class="code_exam">101-MRK <span class="tooltipText">دراسات إقتصادية بالانجليزية</span></td>
                <td class="mobile-hidden">دراسات إقتصادية بالانجليزية</td>
                <td class="mobile-hidden">25 د</td>
                <td class="mobile-hidden">25 س</td>
                <td class="countdown mobile-hidden">0 ساعات و 0 دقائق و 0 ثواني</td>
                <td class="display_hidden date_value">29/12/{{ now()->format('Y') }}</td>
                <td><button class="show_btn" data-url="exam?subCode=150YuI&examCode=101-MRK">المشاركة الأن</button></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection

@section('sub-script')
    <script src="{{ asset('assets/js/Subscript.exams.js') }}"></script>
@endsection
