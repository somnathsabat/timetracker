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

$i18n_language = '한국어';
$i18n_months = array('1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월');
$i18n_weekdays = array('일요일', '월요일', '화요일', '수요일', '목요일', '금요일', '토요일');
$i18n_weekdays_short = array('일', '월', '화', '수', '목', '금', '토');
// format mm/dd
$i18n_holidays = array('01/01', '01/25', '01/26', '01/27', '03/02', '03/05', '08/15', '12/25');

$i18n_key_words = array(

// Menus.
'menu.login' => '로그인',
'menu.logout' => '로그아웃',
// TODO: Translate the following:
// 'menu.forum' => 'Forum',
'menu.help' => '도움말',
// Note to translators: menu.create_team needs a more accurate translation.
'menu.create_team' => '새로운 관리자 계정을 생성',
'menu.profile' => '프로필',
'menu.time' => '나의 시간', // TODO: improve this, used to be "My time", now just "Time".
// TODO: Translate the following:
// 'menu.expenses' => 'Expenses',
'menu.reports' => '보고서',
// TODO: Translate the following:
// 'menu.charts' => 'Charts',
'menu.projects' => '프로젝트',
// TODO: Translate the following:
// 'menu.tasks' => 'Tasks',
// 'menu.users' => 'Users',
'menu.teams' => '팀',
// TODO: Translate the following:
// 'menu.export' => 'Export',
'menu.clients' => '클라이언트',
'menu.options' => '옵션',

// Footer - strings on the bottom of most pages.
// TODO: Translate the following:
// 'footer.contribute_msg' => 'You can contribute to Time Tracker in different ways.',
// 'footer.credits' => 'Credits',
// 'footer.license' => 'License',
// 'footer.improve' => 'Contribute', // Translators: this could mean "Improve", if it makes better sense in your language.
                                     // This is a link to a webpage that describes how to contribute to the project.

// Error messages.
// TODO: Translate the following:
// 'error.access_denied' => 'Access denied.',
// 'error.sys' => 'System error.',
'error.db' => '데이터베이스 오류',
'error.field' => '부정확한 "{0}" 의 데이터',
'error.empty' => '"{0}" 의 필드가 비어있습니다',
'error.not_equal' => '"{0}" 의 필드가 "{1}" 의 필드와 같지 않습니다',
'error.interval' => '부정확한 간격입니다',
'error.project' => '프로젝트의 선택',
'error.activity' => '활동내용의 선택',
'error.auth' => '부정확한 로그인 혹은 암호가 틀립니다',
'error.user_exists' => '본 로그인과 연계된 사용자가 이미 있습니다',
'error.project_exists' => '본 이름과 연계된 프로젝트가 이미 있습니다',
'error.activity_exists' => '본 이름과 연계된 활동내용이 이미 있습니다',
// TODO: translate error.client_exists.
// 'error.client_exists' => 'client with this name already exists',
'error.no_login' => '본 로그인과 연계된 사용자가 없습니다',
'error.upload' => '파일 업로드 오류',
// TODO: Translate the following:
// 'error.range_locked' => 'Date range is locked.',
'error.mail_send' => '메일 보내기에서의 오류',
'error.no_email' => '본 로그인과 연계된 이메일이 없습니다',
// Note to translators: the strings below need to be translated.
// 'error.uncompleted_exists' => 'uncompleted entry already exists. close or delete it.',
// 'error.goto_uncompleted' => 'go to uncompleted entry.',

// labels for various buttons
'button.login' => '로그인',
'button.now' => '지금',
// 'button.set' => '설정',
'button.save' => '저장',
'button.delete' => '삭제',
'button.cancel' => '취소',
'button.submit' => '발송',
// TODO: impprove translation of all button.add strings.
'button.add_user' => '신규 사용자 추가',
'button.add_project' => '신규 프로젝트 추가',
'button.add_activity' => '신규 활동내용 추가',
'button.add_client' => '신규 클라이언트 추가',
'button.add' => '추가',
'button.generate' => '생성',
// Note to translators: button.reset_password needs an improved translation.
'button.reset_password' => '실행',
'button.send' => '송신',
'button.send_by_email' => '이메일로 송신',
'button.save_as_new' => '새것으로 저장',
'button.create_team' => '신규 팀 작성',
'button.export' => '팀 익스포트',
'button.import' => '팀 임포트',
'button.apply' => '적용',

// labels for controls on various forms
// TODO: translate label.team_name
// 'label.team_name' => 'team name',
'label.currency' => '화폐',
// TODO: translate label.manager_name and label.manager_login.
// 'label.manager_name' => 'manager name',
// 'label.manager_login' => 'manager login',
'label.password' => '암호',
'label.confirm_password' => '암호 확인',
'label.email' => '이메일',
'label.total' => '합계',
// Translate the following string.
// 'label.page' => 'Page',

// Form titles.
// TODO: the entire title section is missing here. See the English file.

"form.filter.project" => '프로젝트',
"form.filter.filter" => '좋아하는 보고서',
"form.filter.filter_new" => '좋아하는 것으로 저장',
"form.filter.filter_confirm_delete" => '좋아하는 이 보고서를 삭제해도 좋습니까?',

// login form attributes
"form.login.title" => '로그인',
"form.login.login" => '로그인ID',

// password reminder form attributes
"form.fpass.title" => '암호 재설정',
"form.fpass.login" => '로그인',
"form.fpass.send_pass_str" => '송신한 암호 재설정 요청',
"form.fpass.send_pass_subj" => 'Anuko Time Tracker 암호 재설정 요청',
// Note to translators: the ending of this string below needs to be translated.
"form.fpass.send_pass_body" => "사용자님께,\n\n누군가 (아마 당신) 가 당신의 Anuko Time Tracker 암호 재설정을 요청하였습니다. 당신의 암호를 재설정하기 바란다면 이 링크를 찾아주십시오. \n\n%s\n\nAnuko Time Tracker is a simple, easy to use, open source time tracking system. Visit https://www.anuko.com for more information.\n\n",
"form.fpass.reset_comment" => "암호를 재설정하려면 암호를 입력하고 저장을 클릭하십시오",

// administrator form
"form.admin.title" => '관리자',
"form.admin.duty_text" => '신규 팀관리자 계정을 생성하여 신규 팀을 생성합니다.<br>또한 다른 Anuko Time Tracker 서버 에서 xml 파일로부터 팀 데이터를 임포트할수 있습니다 (로그인 충돌은 허용되지 안음).',

"form.admin.change_pass" => '관리자 계정의 암호 변경',
"form.admin.profile.title" => '팀',
"form.admin.profile.noprofiles" => '당신의 데이터베이스는 비어있습니다. 관리자로 로그인하여 새로운 팀을 생성하십시오.',
"form.admin.profile.comment" => '팀 삭제',
"form.admin.profile.th.id" => '식별자',
"form.admin.profile.th.name" => '이름',
"form.admin.profile.th.edit" => '편집',
"form.admin.profile.th.del" => '삭제',
"form.admin.profile.th.active" => '활동내용',
"form.admin.options" => '옵션',
"form.admin.custom_date_format" => "날짜 포맷",
"form.admin.custom_time_format" => "시간 포맷",
"form.admin.start_week" => "주의 시작요일",

// my time form attributes
"form.mytime.title" => '나의 시간',
"form.mytime.edit_title" => '시간기록을 편집하기',
"form.mytime.del_str" => '시간기록을 삭제하기',
"form.mytime.time_form" => ' (hh:mm)',
"form.mytime.date" => '날짜',
"form.mytime.project" => '프로젝트',
"form.mytime.activity" => '활동내용',
"form.mytime.start" => '시작',
"form.mytime.finish" => '마감',
"form.mytime.duration" => '기간',
"form.mytime.note" => '표식',
"form.mytime.behalf" => '다음을 위한 하루일과',
"form.mytime.daily" => '하루일과',
"form.mytime.total" => '전체 시간: ',
"form.mytime.th.project" => '프로젝트',
"form.mytime.th.activity" => '활동내용',
"form.mytime.th.start" => '시작',
"form.mytime.th.finish" => '마감',
"form.mytime.th.duration" => '기간',
"form.mytime.th.note" => '표식',
"form.mytime.th.edit" => '편집',
"form.mytime.th.delete" => '삭제',
"form.mytime.del_yes" => '성과적으로 삭제된 시간기록',
"form.mytime.no_finished_rec" => '이 기록은 시작 시간으로만 저장되었습니다. 이것은 오류는 아닙니다. 필요하면 로그아웃 하십시오.',
"form.mytime.billable" => '청구가능',
"form.mytime.warn_tozero_rec" => '이 시간기간이 로크되었으므로 이 시간기록은 삭제되어야 합니다',
"form.mytime.uncompleted" => '완성되지 않은',

// profile form attributes
// Note to translators: we need a more accurate translation of form.profile.create_title
"form.profile.create_title" => '신규 관리자 계정을 생성',
"form.profile.edit_title" => '프로필을 편집하기',
"form.profile.name" => '이름',
"form.profile.login" => '로그인ID',

"form.profile.showchart" => '원 그래프를 보기',
"form.profile.lang" => '언어',
"form.profile.custom_date_format" => "날짜 포맷",
"form.profile.custom_time_format" => "시간 포맷",
"form.profile.default_format" => "(디폴트)",
"form.profile.start_week" => "주의 시작요일",

// people form attributes
"form.people.ppl_str" => '멤버',
"form.people.createu_str" => '신규 사용자를 만들기',
"form.people.edit_str" => '사용자를 편집하기',
"form.people.del_str" => '사용자를 삭제하기',
"form.people.th.name" => '이름',
"form.people.th.login" => '로그인ID',
"form.people.th.role" => '직위',
"form.people.th.edit" => '편집',
"form.people.th.del" => '삭제',
"form.people.th.status" => '상태',
"form.people.th.project" => '프로젝트',
"form.people.th.rate" => '급여',
"form.people.manager" => '관리자',
"form.people.comanager" => '공동관리자',
"form.people.empl" => '사용자',
"form.people.name" => '이름',
"form.people.login" => '로그인ID',

"form.people.rate" => '디폴트 시간당 급여',
"form.people.comanager" => '공동관리자',
"form.people.projects" => '프로젝트',

// projects form attributes
"form.project.proj_title" => '프로젝트',
"form.project.edit_str" => '프로젝트를 편집하기',
"form.project.add_str" => '신규 프로젝트를 추가하기',
"form.project.del_str" => '프로젝트를 삭제하기',
"form.project.th.name" => '이름',
"form.project.th.edit" => '편집',
"form.project.th.del" => '삭제',
"form.project.name" => '이름',

// activities form attributes
"form.activity.act_title" => '활동내용',
"form.activity.add_title" => '신규 활동내용을 추가하기',
"form.activity.edit_str" => '활동내용을 편집하기',
"form.activity.del_str" => '활동내용을 삭제하기',
"form.activity.name" => '이름',
"form.activity.project" => '프로젝트',
"form.activity.th.name" => '이름',
"form.activity.th.project" => '프로젝트',
"form.activity.th.edit" => '편집',
"form.activity.th.del" => '삭제',

// report attributes
"form.report.title" => '보고서',
"form.report.from" => '시작 날짜',
"form.report.to" => '마감 날짜',
"form.report.groupby_user" => '사용자',
"form.report.groupby_project" => '프로젝트',
"form.report.groupby_activity" => '활동내용',
"form.report.duration" => '기간',
"form.report.start" => '시작',
"form.report.activity" => '활동내용',
"form.report.show_idle" => '유휴 상태를 보기',
"form.report.finish" => '마감',
"form.report.note" => '표식',
"form.report.project" => '프로젝트',
"form.report.totals_only" => '오직 전체만',
"form.report.total" => '시간 총합',
"form.report.th.empllist" => '사용자',
"form.report.th.date" => '날짜',
"form.report.th.project" => '프로젝트',
"form.report.th.activity" => '활동내용',
"form.report.th.start" => '시작',
"form.report.th.finish" => '마감',
"form.report.th.duration" => '기간',
"form.report.th.note" => '주의',

// mail form attributes
"form.mail.from" => '부터',
"form.mail.to" => '까지',
"form.mail.cc" => 'cc',
"form.mail.subject" => '제목',
"form.mail.comment" => '코멘트',
"form.mail.above" => '이 보고서를 이메일로 송신',
// Note to translators: this string needs to be translated.
// "form.mail.footer_str" => 'Anuko Time Tracker is a simple, easy to use, open source<br>time tracking system. Visit <a href="https://www.anuko.com">www.anuko.com</a> for more information.',
"form.mail.sending_str" => '<b>송신된 메시지</b>',

// invoice attributes
"form.invoice.title" => '송장',
"form.invoice.caption" => '송장',
"form.invoice.above" => '송장에 대한 보충정보',
"form.invoice.select_cust" => '클라이언트의 선택',
"form.invoice.fillform" => '필드들을 채우십시오',
"form.invoice.date" => '날짜',
"form.invoice.number" => '송장 번호',
"form.invoice.tax" => '세금',
"form.invoice.comment" => '코멘트 ',
"form.invoice.th.username" => '개인',
"form.invoice.th.time" => '시간',
"form.invoice.th.rate" => '급여',
"form.invoice.th.summ" => '수량',
"form.invoice.subtotal" => '소계',
"form.invoice.customer" => '클라이언트',
"form.invoice.mailinv_above" => '이 송장을 이메일로 송신',
"form.invoice.sending_str" => '<b>송신한 송장</b>',

"form.migration.zip" => '압축',
"form.migration.file" => '파일 선택',
"form.migration.import.title" => '데이터 임포트',
"form.migration.import.success" => '성과적으로 완료된 임포트',
"form.migration.import.text" => 'xml 파일로부터 팀 데이터를 임포트',
"form.migration.export.title" => '데이터 익스포트',
"form.migration.export.success" => '성과적으로 완료된 익스포트',
"form.migration.export.text" => '팀의 모든 데이터를 xml 파일로 익스포트 할수 있습니다. 이것은 데이터를 당신자신의 서버에로 옮길때 쓸모있을수 있습니다.',
"form.migration.compression.none" => '없음',
"form.migration.compression.gzip" => 'gzip',
"form.migration.compression.bzip" => 'bzip',

"form.client.title" => '클라이언트',
"form.client.add_title" => '클라이언트 추가',
"form.client.edit_title" => '클라이언트 편집',
"form.client.del_title" => '클라이언트 삭제',
"form.client.th.name" => '이름',
"form.client.th.edit" => '편집',
"form.client.th.del" => '삭제',
"form.client.name" => '이름',
"form.client.tax" => '세금',
"form.client.comment" => '코멘트 ',

// miscellaneous strings
"forward.forgot_password" => '암호를 잊으셨습니까?',
"forward.edit" => '편집',
"forward.delete" => '삭제',
"forward.tocsvfile" => '데이터를 .csv 파일로 익스포트',
"forward.toxmlfile" => '데이터를 .xml 파일로 익스포트',
"forward.geninvoice" => '송장 만들기',
"forward.change" => '클라이언트 구성',

// strings inside contols on forms
"controls.select.project" => '--- 프로젝트 선택 ---',
"controls.select.activity" => '--- 활동내용 선택 ---',
"controls.select.client" => '--- 클라이언트 선택 ---',
"controls.project_bind" => '--- 전부 ---',
"controls.all" => '--- 전부 ---',
"controls.notbind" => '--- 아니 ---',
"controls.per_tm" => '이번달',
"controls.per_lm" => '전번달',
"controls.per_tw" => '이번주',
"controls.per_lw" => '전번주',
"controls.per_td" => '오늘',
"controls.per_at" => '전시간',
"controls.per_ty" => '올해',
"controls.sel_period" => '--- 시간 기간을 선택 ---',
"controls.sel_groupby" => '--- 그룹화되지 않음 ---',
"controls.inc_billable" => '청구 가능한',
"controls.inc_nbillable" => '청구 가능하지 않은',
"controls.default" => '--- 디폴트 ---',

// labels
"label.chart.title1" => '사용자별 활동내용',
"label.chart.title2" => '사용자별 프로젝트',
"label.chart.period" => '기간에 따른 그래프',

"label.pinfo" => '%s, %s',
"label.pinfo2" => '%s',
"label.pbehalf_info" => '%s %s <b>%s 을 대표하여</b>',
"label.pminfo" => ' (관리자)',
"label.pcminfo" => ' (공동관리자)',
"label.painfo" => ' (관리자)',
"label.time_noentry" => '항목이 없음',
"label.today" => '오늘',
"label.req_fields" => '* 필수 필드',
"label.sel_project" => '프로젝트 선택',
"label.sel_activity" => '활동내용 선택',
"label.sel_tp" => '시간 기간을 선택',
"label.set_tp" => '혹은 날짜를 설정',
"label.fields" => '필드들을 보기',
"label.group_title" => '다음것에 의한 그룹화',
"label.include_title" => '기록을 포함',
"label.inv_str" => '송장',
"label.set_empl" => '사용자들을 선택',
"label.sel_all" => '모두 선택',
"label.sel_none" => '모두 해제',
"label.or" => '혹은',
"label.disable" => '무력화',
"label.enable" => '가능화',
"label.filter" => '필터',
"label.timeweek" => '주별 합계',
"label.hrs" => '시간',
"label.errors" => '오류',
"label.ldap_hint" => '아래의 필드들에서 <b>Windows 로그인</b> 및 <b>암호</b> 를 입력하십시오.',
// Note to translators: the strings below need to be translated.
// "label.calendar_today" => 'today',
// "label.calendar_close" => 'close',

// login hello text
// "login.hello.text" => "Anuko Time Tracker is a simple, easy to use, open source time tracking system.",
);
