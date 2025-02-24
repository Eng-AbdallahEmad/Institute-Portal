var table;

// تحويل الجدول إلى DataTable مع التخصيصات
$(document).ready(function () {
    table = $("#exam_list").DataTable({
        language: {
            search: "بحث عن إمتحان:",
            lengthMenu: "عرض _MENU_ 'إمتحان'",
            info: "عرض _START_ إلى _END_ من إجمالي _TOTAL_ إمتحان",
            paginate: {
                paging_simple_numbers: "أرقام صفحات بسيطة",
                previous: "السابق",
                next: "التالي",
            },
        },
        oLanguage: {
            sEmptyTable: "لا يوجد سجلات حتى الأن!",
        },
        lengthChange: false, // إلغاء عرض خيارات تغيير عدد العناصر المعروضة
        searching: false, // إلغاء مربع البحث
        info: false, // إلغاء عرض معلومات الجدول (عدد العناصر المعروضة والمجموع)
        paging: false, // إلغاء الترقيم (الصفحات)
    });

    // التحقق من عرض الشاشة عند تحميل الصفحة
    checkScreenWidth();

    // التحقق من عرض الشاشة عند تغيير حجم النافذة
    $(window).resize(function () {
        checkScreenWidth();
    });
});

function checkScreenWidth() {
    if (window.innerWidth <= 426) {
        // إخفاء الأعمدة الثلاث الأولى وإظهار العمود الأخير
        table.columns([2, 3, 4, 5]).visible(false);
        table.columns(-1).visible(true);
    } else {
        // عندما تكون الشاشة أكبر من 426 بكسل، قم بإظهار جميع الأعمدة
        table.columns().visible(true);
    }
    if (window.innerWidth <= 768) {
        // إخفاء الأعمدة الثلاث الأولى وإظهار العمود الأخير
        table.columns([3, 4, 5]).visible(false);
        table.columns(-1).visible(true);
    } else {
        // عندما تكون الشاشة أكبر من 426 بكسل، قم بإظهار جميع الأعمدة
        table.columns().visible(true);
    }

    if (window.innerWidth <= 1024) {
        // إخفاء الأعمدة الثلاث الأولى وإظهار العمود الأخير
        table.columns([3]).visible(false);
        table.columns(-1).visible(true);
    } else {
        // عندما تكون الشاشة أكبر من 426 بكسل، قم بإظهار جميع الأعمدة
        table.columns().visible(true);
    }
}
