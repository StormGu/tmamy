<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Backpack Crud Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the CRUD interface.
    | You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    */

    // Forms
    'save_action_save_and_new' => 'حفظ وعنصر جديد',
    'save_action_save_and_edit' => 'حفظ وتعديل العنصر',
    'save_action_save_and_back' => 'حفظ ورجوع',
    'save_action_changed_notification' => 'تم تغيير السلوك الافتراضي بعد الحفظ',

    // Create form
    'add'                 => 'إضافة',
    'back_to_all'         => 'عودة إلى الكل ',
    'cancel'              => 'إلغاء',
    'add_a_new'           => 'إضافة جديد ',

    // Edit form
    'edit'                 => 'تعديل',
    'save'                 => 'حفظ',

    // Revisions
    'revisions'            => 'مراجعات',
    'no_revisions'         => 'لم يتم العثور على أية مراجعات',
    'created_this'          => 'تم الإنشاء',
    'changed_the'          => 'تغيير',
    'restore_this_value'   => 'استعادة القيمة',
    'from'                 => 'من',
    'to'                   => 'إلى',
    'undo'                 => 'تراجع',
    'revision_restored'    => 'تمت استعادة المراجعة بنجاح',

    // CRUD table view
    'all'                       => 'الكل ',
    'in_the_database'           => 'في قاعدة البيانات',
    'list'                      => 'قائمة',
    'actions'                   => 'أنشطة',
    'preview'                   => 'عرض',
    'delete'                    => 'حذف',
    'admin'                     => 'مسؤول',
    'details_row'               => 'هذا هو صف التفاصيل.. تعديل',
    'details_row_loading_error' => 'حدث خطأ أثناء تحميل التفاصيل. الرجاء اعادة المحاولة',

        // Confirmation messages and bubbles
        'delete_confirm'                              => 'هل أنت متأكد أنك تريد حذف هذا العنصر',
        'delete_confirmation_title'                   => 'تم حذف العنصر',
        'delete_confirmation_message'                 => 'تم حذف العنصر بنجاح',
        'delete_confirmation_not_title'               => 'لم يتم الحذف',
        'delete_confirmation_not_message'             => "حدث خطأ. ربما لم يتم حذف العنصر.",
        'delete_confirmation_not_deleted_title'       => 'لم يتم الحذف',
        'delete_confirmation_not_deleted_message'     => 'لم يحدث شيء. العنصر آمن.',

        // DataTables translation
        'emptyTable'     => 'لا يوجد بيانات في الجدول',
        'info'           => 'عرض بداية إلى نهاية الإدخالات',
        'infoEmpty'      => 'عرض 0 إلى 0 من 0 إدخالات',
        'infoFiltered'   => '(تمت تصفيتها من إجمالي الإدخالات القصوى)',
        'infoPostFix'    => '',
        'thousands'      => ',',
        'lengthMenu'     => 'سجلات القائمة في كل صفحة',
        'loadingRecords' => 'تحميل ...',
        'processing'     => 'معالجة ...',
        'search'         => 'بحث: ',
        'zeroRecords'    => 'لم يتم العثور على سجلات مطابقة',
        'paginate'       => [
            'first'    => 'أول',
            'last'     => 'أخير',
            'next'     => 'سابق',
            'previous' => 'لاحق',
        ],
        'aria' => [
            'sortAscending'  => 'تنشيط لفرز العمود تصاعدي:',
            'sortDescending' => 'تفعيل لفرز عمود تنازلي :',
        ],

    // global crud - errors
        'unauthorized_access' => 'الدخول غير المصرح به - ليس لديك الصلاحيات للاطلاع على هذه الصفحة.',
        'please_fix' => 'الرجاء إصلاح الأخطاء التالية',

    // global crud - success / error notification bubbles
        'insert_success' => 'تم إضافة العنصر بنجاح',
        'update_success' => 'تم تعديل العنصر بنجاح',

    // CRUD reorder view
        'reorder'                      => 'إعادة ترتيب',
        'reorder_text'                 => 'استخدم السحب والإفلات لإعادة الترتيب',
        'reorder_success_title'        => 'تم',
        'reorder_success_message'      => 'تم حفظ الترتيب',
        'reorder_error_title'          => 'خطأ',
        'reorder_error_message'        => 'لم يتم حفظ الترتيب',

    // CRUD yes/no
        'yes' => 'نعم',
        'no' => 'لا',

    // Fields
        'browse_uploads' => 'Browse uploads',
        'clear' => 'مسح',
        'page_link' => 'رابط  الصفحة',
        'page_link_placeholder' => 'http://example.com/your-desired-page',
        'internal_link' => 'الرابط الداخلي',
        'internal_link_placeholder' => 'Internal slug. Ex: \'admin/page\' (no quotes) for \':url\'',
        'external_link' => 'الرابط الخارجي',
        'choose_file' => 'اختر ملف',

    //Table field
        'table_cant_add' => 'لا يمكن إضافة جديد:entity',
        'table_max_reached' => 'الحد الأقصى لعدد :max reached',

    // File manager
    'file_manager' => 'مدير الملفات',
];
