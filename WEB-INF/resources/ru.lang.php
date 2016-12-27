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

$i18n_language = 'Русский';
$i18n_months = array('Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь');
$i18n_weekdays = array('Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота');
$i18n_weekdays_short = array('Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб');
// format mm/dd
$i18n_holidays = array('01/01', '01/07', '02/23', '03/08', '05/01', '05/09', '06/12', '11/04');

$i18n_key_words = array(

// Menus - short selection strings that are displayed on the top of application web pages.
// Example: https://timetracker.anuko.com (black menu on top).
'menu.login' => 'Войти',
'menu.logout' => 'Выйти',
'menu.forum' => 'Форум',
'menu.help' => 'Справка',
'menu.create_team' => 'Создать команду',
'menu.profile' => 'Профиль',
'menu.time' => 'Время',
'menu.expenses' => 'Расходы',
'menu.reports' => 'Отчёты',
'menu.charts' => 'Диаграммы',
'menu.projects' => 'Проекты',
'menu.tasks' => 'Задачи',
'menu.users' => 'Люди',
'menu.teams' => 'Команды',
'menu.export' => 'Экспорт',
'menu.clients' => 'Клиенты',
'menu.options' => 'Опции',

// Footer - strings on the bottom of most pages.
'footer.mobile_phones' => 'Time Tracker доступен на мобильных телефонах.',
'footer.contribute_msg' => 'Вы можете улучшить Time Tracker разными способами.',
'footer.credits' => 'Авторы',
'footer.license' => 'Лицензия',
'footer.improve' => 'Улучшить',

// Error messages.
'error.access_denied' => 'Доступ запрещён.',
'error.sys' => 'Системная ошибка.',
'error.db' => 'Ошибка базы данных.',
'error.field' => 'Некорректные данные в поле "{0}".',
'error.empty' => 'Пустое поле "{0}".',
'error.not_equal' => 'Значение "{0}" не соответствует "{1}".',
'error.interval' => 'Поле "{0}" должно быть больше "{1}".',
'error.project' => 'Выберите проект.',
'error.task' => 'Выберите задачу.',
'error.client' => 'Выберите клиента.',
'error.report' => 'Выберите отчёт.',
'error.auth' => 'Неправильно введен логин или пароль.',
'error.user_exists' => 'Пользователь с таким логином уже существует.',
'error.project_exists' => 'Проект с таким именем уже есть.',
'error.task_exists' => 'Задача с таким названием уже есть.',
'error.client_exists' => 'Клиент с таким именем уже есть.',
'error.invoice_exists' => 'Счёт с таким номером уже есть.',
'error.no_invoiceable_items' => 'Нет записей для включения в счёт.',
'error.no_login' => 'Нет пользователя с таким логином.',
'error.no_teams' => 'Ваша база данных пуста. Войдите в систему как администратор и создайте новую команду.',
'error.upload' => 'Ошибка загрузки файла.',
'error.range_locked' => 'Диапазон дат заблокирован.',
'error.mail_send' => 'Ошибка отправки почты.',
'error.no_email' => 'Для данного логина не предоставлен e-mail.',
'error.uncompleted_exists' => 'Неоконченная запись уже существует. Закройте или удалите её.',
'error.goto_uncompleted' => 'Посмотреть неоконченную запись.',
'error.overlap' => 'Интервал времени перекрывается с существующими записями.',
'error.future_date' => 'Дата в будущем.',

// Labels for buttons.
'button.login' => 'Войти',
'button.now' => 'Сейчас',
'button.save' => 'Сохранить',
'button.copy' => 'Скопировать',
'button.cancel' => 'Отменить',
'button.submit' => 'Подтвердить',
'button.add_user' => 'Добавить пользователя',
'button.add_project' => 'Добавить проект',
'button.add_task' => 'Добавить задачу',
'button.add_client' => 'Добавить клиента',
'button.add_invoice' => 'Добавить счёт',
'button.add_option' => 'Добавить опцию',
'button.add' => 'Добавить',
'button.generate' => 'Сгенерировать',
'button.reset_password' => 'Сбросить пароль',
'button.send' => 'Отправить',
'button.send_by_email' => 'Отправить по e-mail',
'button.create_team' => 'Создать команду',
'button.export' => 'Экспортировать команду',
'button.import' => 'Импортировать команду',
'button.close' => 'Закрыть',
'button.stop' => 'Завершить',

// Labels for controls on forms. Labels in this section are used on multiple forms.
'label.team_name' => 'Название команды',
'label.address' => 'Адрес',
'label.currency' => 'Валюта',
'label.manager_name' => 'Имя менеджера',
'label.manager_login' => 'Логин менеджера',
'label.person_name' => 'Имя',
'label.thing_name' => 'Название',
'label.login' => 'Логин',
'label.password' => 'Пароль',
'label.confirm_password' => 'Подтверждение пароля',
'label.email' => 'Адрес e-mail',
'label.date' => 'Дата',
'label.start_date' => 'Начальная дата',
'label.end_date' => 'Конечная дата',
'label.user' => 'Пользователь',
'label.users' => 'Сотрудники',
'label.client' => 'Клиент',
'label.clients' => 'Клиенты',
'label.option' => 'Опция',
'label.invoice' => 'Счёт',
'label.project' => 'Проект',
'label.projects' => 'Проекты',
'label.task' => 'Задача',
'label.tasks' => 'Задачи',
'label.description' => 'Описание',
'label.start' => 'Начало',
'label.finish' => 'Окончание',
'label.duration' => 'Длительность',
'label.note' => 'Комментарий',
'label.item' => 'Предмет',
'label.cost' => 'Стоимость',
'label.day_total' => 'Итог за день',
'label.week_total' => 'Итог за неделю',
'label.month_total' => 'Итог за месяц',
'label.today' => 'Сегодня',
'label.total_hours' => 'Итого часов',
'label.total_cost' => 'Итоговая стоимость',
'label.view' => 'Посмотреть',
'label.edit' => 'Редактировать',
'label.delete' => 'Удалить',
'label.configure' => 'Настроить',
'label.select_all' => 'Отметить все',
'label.select_none' => 'Снять все отметки',
'label.id' => 'ID',
'label.language' => 'Язык',
'label.decimal_mark' => 'Десятичный знак',
'label.date_format' => 'Формат даты',
'label.time_format' => 'Формат времени',
'label.week_start' => 'День начала недели',
'label.comment' => 'Комментарий',
'label.status' => 'Статус',
'label.tax' => 'Налог',
'label.subtotal' => 'Сумма',
'label.total' => 'Итого',
'label.client_name' => 'Имя клиента',
'label.client_address' => 'Адрес клиента',
'label.or' => 'или',
'label.error' => 'Ошибка',
'label.ldap_hint' => 'Введите свои <b>Windows логин</b> и <b>пароль</b> в поля ниже.',
'label.required_fields' => '* - обязательные для заполнения поля',
'label.on_behalf' => 'от имени',
'label.role_manager' => '(менеджер)',
'label.role_comanager' => '(ассистент менеджера)',
'label.role_admin' => '(администратор)',
'label.page' => 'Стр',
// Labels for plugins (extensions to Time Tracker that provide additional features).
'label.custom_fields' => 'Дополнительные поля',
'label.monthly_quotas' => 'Месячные квоты',
'label.type' => 'Тип',
'label.type_dropdown' => 'комбо',
'label.type_text' => 'текст',
'label.required' => 'Обязательное',
'label.fav_report' => 'Стандартный отчёт',
'label.cron_schedule' => 'Расписание cron',
'label.what_is_it' => 'Что это?',

// Form titles.
'title.login' => 'Вход в систему',
'title.teams' => 'Команды',
'title.create_team' => 'Создание команды',
'title.edit_team' => 'Редактирование команды',
'title.delete_team' => 'Удаление команды',
'title.reset_password' => 'Cброс пароля',
'title.change_password' => 'Смена пароля',
'title.time' => 'Время',
'title.edit_time_record' => 'Редактирование записи о времени',
'title.delete_time_record' => 'Удаление записи о времени',
'title.expenses' => 'Расходы',
'title.edit_expense' => 'Редактирование предмета расхода',
'title.delete_expense' => 'Удаление предмета расхода',
'title.reports' => 'Отчёты',
'title.report' => 'Отчёт',
'title.send_report' => 'Отсылка отчёта',
'title.invoice' => 'Счёт',
'title.send_invoice' => 'Отсылка счёта',
'title.charts' => 'Диаграммы',
'title.projects' => 'Проекты',
'title.add_project' => 'Создание проекта',
'title.edit_project' => 'Редактирование проекта',
'title.delete_project' => 'Удаление проекта',
'title.tasks' => 'Задачи',
'title.add_task' => 'Добавление задачи',
'title.edit_task' => 'Редактирование задачи',
'title.delete_task' => 'Удаление задачи',
'title.users' => 'Сотрудники',
'title.add_user' => 'Создание пользователя',
'title.edit_user' => 'Редактирование пользователя',
'title.delete_user' => 'Удаление пользователя',
'title.clients' => 'Клиенты',
'title.add_client' => 'Добавление клиента',
'title.edit_client' => 'Редактирование клиента',
'title.delete_client' => 'Удаление клиента',
'title.invoices' => 'Счета',
'title.add_invoice' => 'Добавление счёта',
'title.view_invoice' => 'Просматривание счёта',
'title.delete_invoice' => 'Удаление счёта',
'title.notifications' => 'Уведомления',
'title.add_notification' => 'Добавление уведомления',
'title.edit_notification' => 'Редактирование уведомления',
'title.delete_notification' => 'Удаление уведомления',
'title.monthly_quotas' => 'Месячные квоты',
'title.export' => 'Экспортирование данных команды',
'title.import' => 'Импортирование данных команды',
'title.options' => 'Опции',
'title.profile' => 'Профиль',
'title.cf_custom_fields' => 'Дополнительные поля',
'title.cf_add_custom_field' => 'Добавление поля',
'title.cf_edit_custom_field' => 'Редактирование поля',
'title.cf_delete_custom_field' => 'Удаление поля',
'title.cf_dropdown_options' => 'Опции для выпадающего поля',
'title.cf_add_dropdown_option' => 'Добавление опции',
'title.cf_edit_dropdown_option' => 'Редактирование опции',
'title.cf_delete_dropdown_option' => 'Удаление опции',
'title.locking' => 'Блокировка',

// Section for common strings inside combo boxes on forms. Strings shared between forms shall be placed here.
// Strings that are used in a single form must go to the specific form section.
'dropdown.all' => '--- все ---',
'dropdown.no' => '--- нет ---',
'dropdown.this_day' => 'этот день',
'dropdown.this_week' => 'эта неделя',
'dropdown.last_week' => 'прошлая неделя',
'dropdown.this_month' => 'этот месяц',
'dropdown.last_month' => 'прошлый месяц',
'dropdown.this_year' => 'этот год',
'dropdown.all_time' => 'всё время',
'dropdown.projects' => 'проекты',
'dropdown.tasks' => 'задачи',
'dropdown.clients' => 'клиенты',
'dropdown.select' => '--- выберите ---',
'dropdown.select_invoice' => '--- выберите счёт ---',
'dropdown.status_active' => 'активный',
'dropdown.status_inactive' => 'неактивный',
'dropdown.delete'=>'удалить',
'dropdown.do_not_delete'=>'не удалять',

// Below is a section for strings that are used on individual forms. When a string is used only on one form it should be placed here.
// One exception is for closely related forms such as "Time" and "Editing Time Record" with similar controls. In such cases
// a string can be defined on the main form and used on related forms. The reasoning for this is to make translation effort easier.
// Strings that are used on multiple unrelated forms should be placed in shared sections such as label.<stringname>, etc.

// Login form. See example at https://timetracker.anuko.com/login.php.
'form.login.forgot_password' => 'Забыли пароль?',
'form.login.about' =>'Anuko <a href="https://www.anuko.com/lp/tt_2.htm" target="_blank">Time Tracker</a> - это открытая (open source), простая и лёгкая в использовании система трекинга рабочего времени.',

// Resetting Password form. See example at https://timetracker.anuko.com/password_reset.php.
'form.reset_password.message' => 'Запрос на сброс пароля отослан по e-mail.',
'form.reset_password.email_subject' => 'Сброс пароля к Anuko Time Tracker',
'form.reset_password.email_body' => "Уважаемый пользователь,\n\nКто-то, возможно вы, попросил сбросить ваш пароль к системе Anuko Time Tracker. Пройдите по данной ссылке для сброса пароля.\n\n%s\n\nAnuko Time Tracker - это открытая (open source), простая и лёгкая в использовании система трекинга рабочего времени. Подробности - на сайте https://www.anuko.com.",

// Changing Password form. See example at https://timetracker.anuko.com/password_change.php?ref=1.
'form.change_password.tip' => 'Впечатайте новый пароль и нажмите Cохранить.',

// Time form. See example at https://timetracker.anuko.com/time.php.
'form.time.duration_format' => '(чч:мм или 0.0ч)',
'form.time.billable' => 'Включается в счёт',
'form.time.uncompleted' => 'Не завершено',
'form.time.remaining_quota' => 'Доступная квота',
'form.time.over_quota' => 'Превышение квоты',

// Editing Time Record form. See example at https://timetracker.anuko.com/time_edit.php (get there by editing an uncompleted time record).
'form.time_edit.uncompleted' => 'Эта запись сохранена только со временем начала. Это не ошибка.',

// Reports form. See example at https://timetracker.anuko.com/reports.php
'form.reports.save_as_favorite' => 'Сохранить как стандартный отчёт',
'form.reports.confirm_delete' => 'Удалить стандартный отчёт?',
'form.reports.include_records' => 'Включать записи',
'form.reports.include_billable' => 'включаемые в счёт',
'form.reports.include_not_billable' => 'не включаемые в счёт',
'form.reports.include_invoiced' => 'внесённые в счёт',
'form.reports.include_not_invoiced' => 'не внесённые в счёт',
'form.reports.select_period' => 'Выберите интервал времени',
'form.reports.set_period' => 'или укажите даты',
'form.reports.show_fields' => 'Показывать поля',
'form.reports.group_by' => 'Группировать по',
'form.reports.group_by_no' => '--- без группировки ---',
'form.reports.group_by_date' => 'дате',
'form.reports.group_by_user' => 'пользователю',
'form.reports.group_by_client' => 'клиенту',
'form.reports.group_by_project' => 'проекту',
'form.reports.group_by_task' => 'задаче',
'form.reports.totals_only' => 'Только итоги',

// Report form. See example at https://timetracker.anuko.com/report.php
// (after generating a report at https://timetracker.anuko.com/reports.php).
'form.report.export' => 'Экспортировать',

// Invoice form. See example at https://timetracker.anuko.com/invoice.php
// (you can get to this form after generating a report).
'form.invoice.number' => 'Номер счёта',
'form.invoice.person' => 'Работник',
'form.invoice.invoice_to_delete' => 'Счёт для удаления',
'form.invoice.invoice_entries' => 'Записи счёта',

// Charts form. See example at https://timetracker.anuko.com/charts.php
'form.charts.interval' => 'Интервал',
'form.charts.chart' => 'Диаграмма',

// Projects form. See example at https://timetracker.anuko.com/projects.php
'form.projects.active_projects' => 'Активные проекты',
'form.projects.inactive_projects' => 'Неактивные проекты',

// Tasks form. See example at https://timetracker.anuko.com/tasks.php
'form.tasks.active_tasks' => 'Активные задачи',
'form.tasks.inactive_tasks' => 'Неактивные задачи',

// Users form. See example at https://timetracker.anuko.com/users.php
'form.users.active_users' => 'Активные пользователи',
'form.users.inactive_users' => 'Неактивные пользователи',
'form.users.role' => 'Роль',
'form.users.manager' => 'Менеджер',
'form.users.comanager' => 'Ассистент менеджера',
'form.users.rate' => 'Ставка',
'form.users.default_rate' => 'Почасовая ставка',

// Client delete form. See example at https://timetracker.anuko.com/client_delete.php
'form.client.client_to_delete' => 'Клиент для удаления',
'form.client.client_entries' => 'Записи клиента',

// Clients form. See example at https://timetracker.anuko.com/clients.php
'form.clients.active_clients' => 'Активные клиенты',
'form.clients.inactive_clients' => 'Неактивные клиенты',

// Strings for Exporting Team Data form. See example at https://timetracker.anuko.com/export.php
'form.export.hint' => 'Вы можете экспортировать все данные команды в xml файл. Это может быть полезно если вы переносите данные на свой собственный сервер.',
'form.export.compression' => 'Сжатие',
'form.export.compression_none' => 'нет',
'form.export.compression_bzip' => 'в формате bzip',

// Strings for Importing Team Data form. See example at https://timetracker.anuko.com/imort.php (login as admin first).
'form.import.hint' => 'Импортируйте данные команды из xml файла.',
'form.import.file' => 'Укажите файл',
'form.import.success' => 'Импорт успешно выполнен.',

// Teams form. See example at https://timetracker.anuko.com/admin_teams.php (login as admin first).
'form.teams.hint' => 'Cоздайте новую команду, сделав новый аккаунт для её менеджера.<br>Также вы можете импортировать данные команды через xml файл из другого Anuko Time Tracker сервера (запрещено дублирование логинов).',

// Profile form. See example at https://timetracker.anuko.com/profile_edit.php.
'form.profile.12_hours' => '12 часов',
'form.profile.24_hours' => '24 часа',
'form.profile.tracking_mode' => 'Режим работы',
'form.profile.mode_time' => 'время',
'form.profile.mode_projects' => 'проекты',
'form.profile.mode_projects_and_tasks' => 'проекты и задачи',
'form.profile.record_type' => 'Тип записи',
'form.profile.type_all' => 'все',
'form.profile.type_start_finish' => 'начало и конец',
'form.profile.type_duration' => 'длительность',
'form.profile.plugins' => 'Плагины',

// Mail form. See example at https://timetracker.anuko.com/report_send.php when emailing a report.
'form.mail.from' => 'От',
'form.mail.to' => 'Кому',
'form.mail.cc' => 'Копия',
'form.mail.subject' => 'Тема',
'form.mail.report_subject' => 'Time Tracker отчёт',
'form.mail.footer' => 'Anuko Time Tracker - это открытая (open source), простая и лёгкая в использовании система трекинга рабочего времени. Подробности на сайте <a href="https://www.anuko.com">www.anuko.com</a>.',
'form.mail.report_sent' => 'Отчёт отправлен.',
'form.mail.invoice_sent' => 'Счёт отправлен.',

// Quotas configuration form.
'form.quota.year' => 'Год',
'form.quota.month' => 'Месяц',
'form.quota.quota' => 'Квота',
'form.quota.workdayHours' => 'Количество часов в рабочем дне',
'form.quota.hint' => 'При пустых значениях квоты автоматически определяются из длительности рабочего дня и праздников.',
);
