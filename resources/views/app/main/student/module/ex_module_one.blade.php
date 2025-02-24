@extends('app.layouts.app')

@section('title', 'كود برمجي')

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
<i class="bx bx-chevron-{{ __('index.lfrt') }} arrow-{{ __('index.lfrt') }}"></i> أكتب كود برمجي
@endsection

@section('content')
<div class="container container-exercise">
    <div class="question_head">
        <div class="main_title">حل السؤال التالي:</div>
        <div class="sub_title">قم بإنشاء ساعة رقمية بتنسيق HH:MM:SS باستخدام HTML و CSS فقط (بدون JavaScript).
            يجب أن يكون التصميم جذابًا ويشبه الساعات الرقمية الحديثة.
            المواصفات:
هيكل HTML:

استخدم عناصر div أو span لتمثيل الساعات، الدقائق، والثواني.
ضع الأرقام داخل مربعات أو إطار يشبه شاشات الساعات الرقمية.
تصميم CSS:

استخدم خط يشبه الشاشات الرقمية (مثل "Digital-7" أو "Courier New").
استخدم خلفية داكنة مع أرقام مضيئة، مثل الساعات الرقمية الحقيقية.
أضف تأثير نيون أو توهج (Glow Effect) لجعل الأرقام تبدو وكأنها مضاءة.
استخدم Flexbox أو Grid لترتيب الأرقام بشكل منظم.
حركة CSS (اختياري):

استخدم CSS Animations لجعل الأرقام تومض أو تتغير عند تحميل الصفحة.
يمكنك إضافة تأثير مثل اهتزاز طفيف أو تغيير لون الخلفية لمحاكاة تحديث الساعة.
        </div>
    </div>
</div>
@endsection
