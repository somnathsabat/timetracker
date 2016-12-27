<?php
// +----------------------------------------------------------------------+
// | Anuko Time Tracker
// +----------------------------------------------------------------------+
// | Copyright (c) Anuko International Ltd. (https://www.anuko.com)
// +----------------------------------------------------------------------+
// | LIBERAL FREEWARE LICENSE: This source code document may be used
// | by anyone for any purpose, and freely redistributed alone or in
// | combination with other software, provided that the license is obeyed.
// |
// | There are only two ways to violate the license:
// |
// | 1. To redistribute this code in source form, with the copyright
// |    notice or license removed or altered. (Distributing in compiled
// |    forms without embedded copyright notices is permitted).
// |
// | 2. To redistribute modified versions of this code in *any* form
// |    that bears insufficient indications that the modifications are
// |    not the work of the original author(s).
// |
// | This license applies to this document only, not any other software
// | that it may be combined with.
// |
// +----------------------------------------------------------------------+
// | Contributors:
// | https://www.anuko.com/time_tracker/credits.htm
// +----------------------------------------------------------------------+

// Note: escape apostrophes with THREE backslashes, like here:  choisir l\\\'option.
// Other characters (such as double-quotes in http links, etc.) do not have to be escaped.

$i18n_language = 'فارسی';
$i18n_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
$i18n_weekdays = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$i18n_weekdays_short = array('Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa');
// format mm/dd
$i18n_holidays = array('01/01', '01/16', '02/20', '05/28', '07/04', '09/03', '10/10', '11/11', '11/24', '12/25');

$i18n_key_words = array(
'language.rtl' => 'true', // Right-to-left language. Do not remove this line from RTL language files. This is the only string that is not found in the master English file.

// Menus - short selection strings that are displayed on the top of application web pages.
// Example: https://timetracker.anuko.com (black menu on top).
'menu.login' => 'ورود',
'menu.logout' => 'خروج',
'menu.forum' => 'فروم',
'menu.help' => 'راهنما',
'menu.create_team' => 'ایجاد گروه',
'menu.profile' => 'پروفايل',
'menu.time' => 'زمان',
'menu.expenses' => 'هزينه ها',
'menu.reports' => 'گزارشات',
'menu.charts' => 'نمودارها',
'menu.projects' => 'پروژه ها',
'menu.tasks' => 'وظايف',
'menu.users' => 'کاربران',
'menu.teams' => 'گروه ها',
'menu.export' => 'پشتیبانی',
'menu.clients' => 'مشتری ها',
'menu.options' => 'تنظیمات',

// Footer - strings on the bottom of most pages.
// TODO: translate the following strings.
// 'footer.contribute_msg' => 'You can contribute to Time Tracker in different ways.',
// 'footer.credits' => 'Credits',
// 'footer.license' => 'License',
// 'footer.improve' => 'Contribute', // Translators: this could mean "Improve", if it makes better sense in your language.
                                     // This is a link to a webpage that describes how to contribute to the project.

// Error messages.
// TODO: translate the following string.
// 'error.access_denied' => 'Access denied.',
'error.sys' => 'خطا در سیستم.',
'error.db' => 'خطا در پایگاه داده.',
'error.field' => 'داده اشتباه در "{0}".',
'error.empty' => 'فیلد "{0}" خالیست.',
'error.not_equal' => 'فیلد "{0}" با فیلد "{1}" برابر نیست.',
// TODO: translate error.interval.
'error.interval' => 'Field "{0}" must be greater than "{1}".',
'error.project' => 'انتخاب پروژه.',
'error.task' => 'انتخاب وظیفه.',
'error.client' => 'انتخاب مشتری.',
// TODO: translate the following string.
// 'error.report' => 'Select report.',
'error.auth' => 'نام کاربری یا رمز عبور اشتباه است.',
'error.user_exists' => 'کاربری با این نام کاربری موجود است.',
'error.project_exists' => 'پروژه ای با این نام موجود است.',
'error.task_exists' => 'وظیفه ای با این نام هم اکنون وجود دارد.',
'error.client_exists' => 'مشتری با این نام هم اکنون وجود دارد.',
'error.invoice_exists' => 'فاکتوری با این شماره هم اکنون موجود است.',
'error.no_invoiceable_items' => 'آیتمی جهت فاکتور کردن وجود ندارد.',
'error.no_login' => 'کاربری با این نام کاربری موجود نیست.',
'error.no_teams' => 'پایگاه داده شما خالی است با کاربر admin وارد شوید و تیم ایجاد کنید.',
'error.upload' => 'خطا در آپلود فایل.',
// TODO: Translate the following:
// 'error.range_locked' => 'Date range is locked.',
'error.mail_send' => 'خطا در ارسال ایمیل.',
'error.no_email' => 'ایمیل مرتبط با این نام کاربری موجود نیست.',
// TODO: check translation and punctuation of error.uncompleted_exists. Is the sentence ending dot in the right place?
'error.uncompleted_exists' => 'قسمت ناتمامی موجود است. آن را تمام یا حذف کنید.',
'error.goto_uncompleted' => 'مراجعه به قسمت ناتمام.',
'error.overlap' => 'بازه زمانی با سوابق موجود هم پوشانی دارد.',
// TODO: translate the following string.
// 'error.future_date' => 'Date is in future.',

// Labels for buttons.
'button.login' => 'ورود',
'button.now' => 'هم اکنون',
'button.save' => 'ذخیره',
'button.copy' => 'کپی',
'button.cancel' => 'لغو',
'button.submit' => 'ثبت',
'button.add_user' => 'درج کاربر',
'button.add_project' => 'درج پروژه',
'button.add_task' => 'درج وظیفه',
'button.add_client' => 'درج مشتری',
'button.add_invoice' => 'درج فاکتور',
'button.add_option' => 'درج گزینه',
'button.add' => 'درج',
'button.generate' => 'تولید',
'button.reset_password' => 'بازسازی رمزعبور',
'button.send' => 'ارسال',
'button.send_by_email' => 'ارسال به ایمیل',
'button.create_team' => 'ایجاد تیم',
'button.export' => 'ایجاد پشتیبان از تیم',
'button.import' => 'وارد کردن تیم',
'button.close' => 'بستن',
'button.stop' => 'توقف',

// Labels for controls on forms. Labels in this section are used on multiple forms.
'label.team_name' => 'نام تیم',
'label.address' => 'آدرس',
'label.currency' => 'واحد پول',
'label.manager_name' => 'نام مدیر',
'label.manager_login' => 'نام کاربری مدیر',
'label.person_name' => 'نام',
'label.thing_name' => 'نام',
'label.login' => 'نام کاربری',
'label.password' => 'رمز عبور',
'label.confirm_password' => 'تکرار رمزعبور',
'label.email' => 'ایمیل',
'label.date' => 'تاریخ',
'label.start_date' => 'تاریخ شروع',
'label.end_date' => 'تاریخ اتمام',
'label.user' => 'کاربر',
'label.users' => 'کاربران',
'label.client' => 'مشتری',
'label.clients' => 'مشتریان',
// TODO: translate the following string.
// 'label.option' => 'Option',
'label.invoice' => 'فاکتور',
'label.project' => 'پروژه',
'label.projects' => 'پروژه ها',
'label.task' => 'وظیفه',
'label.tasks' => 'وظیفه ها',
'label.description' => 'شرح',
'label.start' => 'شروع',
'label.finish' => 'اتمام',
'label.duration' => 'مدت زمان',
'label.note' => 'توضیح',
'label.item' => 'آیتم',
'label.cost' => 'هزینه',
'label.day_total' => 'کل روز',
'label.week_total' => 'کل هفته',
// TODO: translate the following.
// 'label.month_total' => 'Month total',
'label.today' => 'امروز',
'label.total_hours' => 'مجموع ساعت',
'label.total_cost' => 'مجموع هزینه ها',
'label.view' => 'نمایش',
'label.edit' => 'ویرایش',
'label.delete' => 'حذف',
'label.configure' => 'پیکربندی',
'label.select_all' => 'انتخاب همه',
'label.select_none' => 'لغو انتخاب همه',
'label.id' => 'شناسه',
'label.language' => 'زبان',
// TODO: translate the following string.
// 'label.decimal_mark' => 'Decimal mark',
'label.date_format' => 'قالب تاریخ',
'label.time_format' => 'قالب زمان',
'label.week_start' => 'روز اول هفته',
'label.comment' => 'توضیح',
'label.status' => 'وضعیت',
'label.tax' => 'مالیات',
'label.subtotal' => 'جمع جز',
'label.total' => 'کل',
'label.client_name' => 'نام مشتری',
'label.client_address' => 'آدرس مشتری',
'label.or' => 'یا',
'label.error' => 'خطا',
'label.ldap_hint' => '<b>نام کاربری ویندوز</b>و <b>رمزعبور</b>خود را در فیلدهای زیر وارد کنید',
'label.required_fields' => '* - فیلد های اجباری',
'label.on_behalf' => 'از دیدگاه',
'label.role_manager' => '(مدیر)',
'label.role_comanager' => '(دستیار مدیر)',
'label.role_admin' => '(مدیر ارشد)',
// Translate the following string.
// 'label.page' => 'Page',
// Labels for plugins (extensions to Time Tracker that provide additional features).
'label.custom_fields' => 'فیلدهای سفارشی',
// Translate the following.
// 'label.monthly_quotas' => 'Monthly quotas',
'label.type' => 'نوع',
'label.type_dropdown' => 'منو کشویی',
'label.type_text' => 'متن',
'label.required' => 'اجباری',
'label.fav_report' => 'گزارش های برگزیده',
// TODO: translate the following strings.
// 'label.cron_schedule' => 'Cron schedule',
// 'label.what_is_it' => 'What is it?',

// Form titles.
'title.login' => 'ورود',
'title.teams' => 'تیم ها',
'title.create_team' => 'ایجاد تیم',
// TODO: translate the following string.
// 'title.edit_team' => 'Editing Team',
'title.delete_team' => 'حذف تیم',
'title.reset_password' => 'بازیابی رمزعبور',
'title.change_password' => 'تغییر رمزعبور',
'title.time' => 'زمان',
'title.edit_time_record' => 'ویرایش رکورد زمان',
'title.delete_time_record' => 'حذف رکورد زمان',
'title.expenses' => 'هزینه ها',
'title.edit_expense' => 'ویرایش آیتم هزینه ها',
'title.delete_expense' => 'حذف آیتم هزینه ها',
'title.reports' => 'گزارشات',
'title.report' => 'گزارش',
'title.send_report' => 'ارسال گزارش',
'title.invoice' => 'فاکتور',
'title.send_invoice' => 'ارسال فاکتور',
'title.charts' => 'نمودارها',
'title.projects' => 'پروژه ها',
'title.add_project' => 'درج پروژه',
'title.edit_project' => 'ویرایش پروژه',
'title.delete_project' => 'حذف پروژه',
'title.tasks' => 'وظایف',
'title.add_task' => 'درج وظیفه',
'title.edit_task' => 'ویرایش وظیفه',
'title.delete_task' => 'حذف وظیفه',
'title.users' => 'کاربران',
'title.add_user' => 'درج کاربر',
'title.edit_user' => 'ویرایش کاربر',
'title.delete_user' => 'حذف کاربر',
'title.clients' => 'مشتریان',
'title.add_client' => 'درج مشتری',
'title.edit_client' => 'ویرایش مشتری',
'title.delete_client' => 'حذف مشتری',
'title.invoices' => 'فاکتورها',
'title.add_invoice' => 'درج فاکتور',
'title.view_invoice' => 'نمایش فاکتور',
'title.delete_invoice' => 'حذف فاکتور',
// TODO: translate the following strings.
// 'title.notifications' => 'Notifications',
// 'title.add_notification' => 'Adding Notification',
// 'title.edit_notification' => 'Editing Notification',
// 'title.delete_notification' => 'Deleting Notification',
// 'title.monthly_quotas' => 'Monthly Quotas',
'title.export' => 'پشتیانی گرفتن از اطلاعات تیم',
'title.import' => 'وارد کردن اطلاعات تیم',
'title.options' => 'گزینه ها',
'title.profile' => 'پروفایل',
'title.cf_custom_fields' => 'فیلدهای سفارشی',
'title.cf_add_custom_field' => 'درج فیلد سفارشی',
'title.cf_edit_custom_field' => 'ویرایش فیلد سفارشی',
'title.cf_delete_custom_field' => 'حذف فیلد سفارشی',
'title.cf_dropdown_options' => 'گزینه های منو کشویی',
'title.cf_add_dropdown_option' => 'درج گزینه',
'title.cf_edit_dropdown_option' => 'ویرایش گزینه',
'title.cf_delete_dropdown_option' => 'حذف گزینه',
// NOTE TO TRANSLATORS: Locking is a feature to lock records from modifications (ex: weekly on Mondays we lock all previous weeks).
// It is also a name for the Locking plugin on the Team profile page.
// TODO: Translate the following:
// 'title.locking' => 'Locking',

// Section for common strings inside combo boxes on forms. Strings shared between forms shall be placed here.
// Strings that are used in a single form must go to the specific form section.
'dropdown.all' => '--- همه ---',
'dropdown.no' => '--- هیچکدام ---',
// TODO: check translation of dropdown.this_day. It does not necessarily means "today". It means a specific ("this") day selected on calendar. See charts.php.
// 'dropdown.this_day' => 'امروز',
'dropdown.this_week' => 'هفته جاری',
'dropdown.last_week' => 'هفته آخر',
'dropdown.this_month' => 'ماه جاری',
'dropdown.last_month' => 'ماه آخر',
'dropdown.this_year' => 'سال جاری',
'dropdown.all_time' => 'همه زمان ها',
'dropdown.projects' => 'پروژه ها',
'dropdown.tasks' => 'وظایف',
'dropdown.clients' => 'مشتریان',
// TODO: translate the following string.
// 'dropdown.select' => '--- select ---',
'dropdown.select_invoice' => '--- انتخاب فاکتور ---',
'dropdown.status_active' => 'فعال',
'dropdown.status_inactive' => 'غیرفعال',
// TODO: translate the following strings.
// 'dropdown.delete'=>'delete',
// 'dropdown.do_not_delete'=>'do not delete',

// Below is a section for strings that are used on individual forms. When a string is used only on one form it should be placed here.
// One exception is for closely related forms such as "Time" and "Editing Time Record" with similar controls. In such cases
// a string can be defined on the main form and used on related forms. The reasoning for this is to make translation effort easier.
// Strings that are used on multiple unrelated forms should be placed in shared sections such as label.<stringname>, etc.

// Login form. See example at https://timetracker.anuko.com/login.php.
'form.login.forgot_password' => 'بازیابی رمز عبور؟',
// TODO: translate form.login.about.
'form.login.about' =>'Anuko <a href="https://www.anuko.com/lp/tt_2.htm" target="_blank">Time Tracker</a> is a simple, easy to use, open source time tracking system.',

// Resetting Password form. See example at https://timetracker.anuko.com/password_reset.php.
'form.reset_password.message' => 'درخواست بازیابی رمزعبور به ایمیل فرستاده شد.',
// TODO: check translation of form.reset_password.email_subject. This is the subject for email message for password reset. Below is the English original.
// 'form.reset_password.email_subject' => 'Anuko Time Tracker password reset request',
'form.reset_password.email_subject' => 'درخواست بازیابی رمزعبور فرستاده شد',
'form.reset_password.email_body' => "کاربران گرامی\n\n یک نفر، شاید خودتان، درخواست بازیابی رمزعبور نرم افزار رهگیری زمان شما را داشته است.لطفا برای تغییر رمزعبور روی لینک زیر کلیک کنید: \n\n%s\n\n",

// Changing Password form. See example at https://timetracker.anuko.com/password_change.php?ref=1.
'form.change_password.tip' => 'رمز عبور جدید را وارد کنید سپس روی ذخیره کلیک کنید',

// Time form. See example at https://timetracker.anuko.com/time.php.
'form.time.duration_format' => '(hh:mm یا 0.0h)',
'form.time.billable' => 'قابل پرداخت',
'form.time.uncompleted' => 'ناتمام',
// TODO: translate the following.
// 'form.time.remaining_quota' => 'Remaining quota',
// 'form.time.over_quota' => 'Over quota',

// Editing Time Record form. See example at https://timetracker.anuko.com/time_edit.php (get there by editing an uncompleted time record).
// TODO: translate form.time_edit.uncompleted. 
'form.time_edit.uncompleted' => 'This record was saved with only start time. It is not an error.',

// Reports form. See example at https://timetracker.anuko.com/reports.php
'form.reports.save_as_favorite' => 'ذخیره به عنوان برگزیده',
'form.reports.confirm_delete' => 'آیا می خواهید گزارش برگزیده حذف شود؟',
'form.reports.include_records' => 'شامل رکوردهای',
'form.reports.include_billable' => 'قابل پرداخت',
'form.reports.include_not_billable' => 'غیرقابل پرداخت',
'form.reports.select_period' => 'انتخاب بازه زمانی',
'form.reports.set_period' => 'یا تعیین تاریخ',
'form.reports.show_fields' => 'نمایش فیلدها',
'form.reports.group_by' => 'گروه بندی شده با',
'form.reports.group_by_no' => '--- بدون گروه ---',
'form.reports.group_by_date' => 'تاریخ',
'form.reports.group_by_user' => 'کاربر',
'form.reports.group_by_client' => 'مشتری',
'form.reports.group_by_project' => 'پروژه',
'form.reports.group_by_task' => 'وظیفه',
// TODO: translate form.reports.totals_only. Selecting this option means to print subtotals only for a "grouped by" report.
// In other words, items are not printed, only subtotals for grouped items are printed.  
'form.reports.totals_only' => 'Totals only',

// Report form. See example at https://timetracker.anuko.com/report.php
// (after generating a report at https://timetracker.anuko.com/reports.php).
'form.report.export' => 'پشتیبانی',

// Invoice form. See example at https://timetracker.anuko.com/invoice.php
// (you can get to this form after generating a report).
'form.invoice.number' => 'شماره فاکتور',
'form.invoice.person' => 'شخص',
// TODO: translate the following stings.
// 'form.invoice.invoice_to_delete' => 'Invoice to delete',
// 'form.invoice.invoice_entries' => 'Invoice entries',

// Charts form. See example at https://timetracker.anuko.com/charts.php
'form.charts.interval' => 'بازه',
'form.charts.chart' => 'نمودار',

// Projects form. See example at https://timetracker.anuko.com/projects.php
'form.projects.active_projects' => 'پروژه های فعال',
'form.projects.inactive_projects' => 'پروژه های غیرفعال',

// Tasks form. See example at https://timetracker.anuko.com/tasks.php
'form.tasks.active_tasks' => 'وظایف فعال',
'form.tasks.inactive_tasks' => 'وظایف غیرفعال',

// Users form. See example at https://timetracker.anuko.com/users.php
'form.users.active_users' => 'کاربران فعال',
'form.users.inactive_users' => 'کاربران غیرفعال',
'form.users.role' => 'سمت',
'form.users.manager' => 'مدیر',
'form.users.comanager' => 'دستیار مدیر',
'form.users.rate' => 'نرخ',
'form.users.default_rate' => 'نرخ ساعتی پیش فرض',

// Client delete form. See example at https://timetracker.anuko.com/client_delete.php
// TODO: translate the following strings.
// 'form.client.client_to_delete' => 'Client to delete',
// 'form.client.client_entries' => 'Client entries',

// Clients form. See example at https://timetracker.anuko.com/clients.php
'form.clients.active_clients' => 'مشتری های فعال',
'form.clients.inactive_clients' => 'مشتری های غیرفعال',

// Strings for Exporting Team Data form. See example at https://timetracker.anuko.com/export.php
'form.export.hint' => 'می توانید از همه اطلاعات تیم یک پشتیبان به فرمت xml تهیه کنید. اگر میخواهید داده ها را به سرور خودتان منتقل کنید این قسمت می تواند مفید باشد.',
'form.export.compression' => 'فشرده سازی',
'form.export.compression_none' => 'هیچ کدام',
'form.export.compression_bzip' => 'bzip',

// Strings for Importing Team Data form. See example at https://timetracker.anuko.com/imort.php (login as admin first).
'form.import.hint' => 'وارد کردن اطلاعات تیم از یک فایل xml',
'form.import.file' => 'انتخاب فایل',
'form.import.success' => 'وارد کردن اطلاعات با موفقیت انجام شد',

// Teams form. See example at https://timetracker.anuko.com/admin_teams.php (login as admin first).
// TODO: translate form.teams.hint.
'form.teams.hint' =>  'Create a new team by creating a new team manager account.<br>You can also import team data from an xml file from another Anuko Time Tracker server (no login collisions are allowed).',

// Profile form. See example at https://timetracker.anuko.com/profile_edit.php.
'form.profile.12_hours' => '12 ساعت',
'form.profile.24_hours' => '24 ساعت',
'form.profile.tracking_mode' => 'حالت رهگیری',
'form.profile.mode_time' => 'زمان',
'form.profile.mode_projects' => 'پروژه ها',
'form.profile.mode_projects_and_tasks' => 'پروژه ها و وظایف',
'form.profile.record_type' => 'نوع رکورد',
'form.profile.type_all' => 'همه',
'form.profile.type_start_finish' => 'شروع و اتمام',
'form.profile.type_duration' => 'مدت زمان',
'form.profile.plugins' => 'پلاگین ها',

// Mail form. See example at https://timetracker.anuko.com/report_send.php when emailing a report.
'form.mail.from' => 'از',
'form.mail.to' => 'به',
'form.mail.cc' => 'کپی',
'form.mail.subject' => 'موضوع',
'form.mail.report_subject' => 'گزارش تایم شیت',
// TODO: translate form.mail.footer.
// 'form.mail.footer' => 'Anuko Time Tracker is a simple, easy to use, open source<br>time tracking system. Visit <a href="https://www.anuko.com">www.anuko.com</a> for more information.',
'form.mail.report_sent' => 'گزارش ارسال شد.',
'form.mail.invoice_sent' => 'فاکتور ارسال شد.',

// Quotas configuration form.
// TODO: translate the following.
// 'form.quota.year' => 'Year',
// 'form.quota.month' => 'Month',
// 'form.quota.quota' => 'Quota',
// 'form.quota.workdayHours' => 'Hours in a work day',
// 'form.quota.hint' => 'If values are empty, quotas are calculated automatically based on workday hours and holidays.',
);
