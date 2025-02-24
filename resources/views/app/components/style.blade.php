<style>
.search_bar button {
    {{ __('index.lfrt') }}: 15px;
}
.dropdown__wrapper {
    {{ __('index.lfrt') }}: 16px;
}
.sidebar {
    {{ __('index.rtlf') }}: 0;
}
.bottom_content {
    {{ __('index.rtlf') }}: 0;
}
.sidebar.close .bottom_content {
    {{ __('index.rtlf') }}: 15px;
}
.nav_link.sublink p {
    padding-{{ __('index.lfrt') }}: 100%;
}
.menu_dahsboard::before {
    content: "{{ __('index.txtStudentPortal') }}";
}
.menu_info::before {
    content: "بيانات الطالب";
}
.menu_info_ex::before {
    content: "بيانات الماده";
}
.menu_tools::before {
    content: "{{ __('index.txtTools') }}";
}
.menu_setting::before {
    content: "{{ __('index.txtSettings') }}";
}
.content {
    margin-{{ __('index.rtlf') }}: 90px;
    margin-{{ __('index.lfrt') }}: 10px;
}
.content.back {
    margin-{{ __('index.rtlf') }}: 275px;
}
table.normal_table thead tr th {
    text-align: {{ __('index.rtlf') }};
}
</style>
