<?php
function lang($phrase){
    static $lang = array(
    
'mail_msg_ticket_refer'=>'ЗАЯВКА ПЕРЕАДРЕСОВАНА',
'mail_msg_ticket_refer_ext'=>'Ви отримали це повідомлення, тому що заявка була переадресована користувачем',
'mail_msg_ticket_to_ext'=>'на',
'mail_msg_ticket_comment'=>'ЗАЯВКА ПРОКОМЕНТОВАНА',
'mail_msg_ticket_comment_ext'=>'Ви отримали це повідомлення, тому що заявка була прокоментована користувачем',
'mail_msg_ticket_lock'=>'ЗАЯВКА ЗАБЛОКОВАНА',
'mail_msg_ticket_lock_ext'=>'Ви отримали це повідомлення, тому що заявка була заблокована користувачем',
'mail_msg_ticket_unlock'=>'ЗАЯВКА РОЗБЛОКОВАНА',
'mail_msg_ticket_unlock_ext'=>'Ви отримали це повідомлення, що заявка була розблокована користувачем',
'mail_msg_ticket_ok'=>'ЗАЯВКА ВИКОНАНА',
'mail_msg_ticket_ok_ext'=>'Ви отримали це повідомлення, що заявка була виконана користувачем',
'mail_msg_ticket_no_ok'=>'ЗАЯВКА НЕ ВИКОНАНА',
'mail_msg_ticket_no_ok_ext'=>'Ви отримали це повідомлення, тому що заявка была відмічена як "не виконана" користувачем',
'REG_msg'=>'Реєстрацію завершено! Ви зможете зайти, після перевірки адміністратором.',
'REG_new'=>'Реєстрація нового користучача',
'REG_button'=>'Реєстрація',
'REG_already'=>'В мене вже є аккаунт',

'EXT_graph'=>'Звіти',
'EXT_graph_user'=>'Звіт користувача',
'EXT_graph_user_ext'=>'За певний період',
'EXT_graph_user_ext2'=>'В даному розділі містяться звіти користувача за певний період',
'CONF_2noty_info'=>'Для роботи поштових повідомлень, додайте в cron ',
'EXT_do_write_message'=>'Надіслати повідомлення', 
'EXT_no_unread_msg'=>'Немає повідомлень',
'EXT_unread_msg1'=>'У Вас',
'EXT_unread_msg2'=>'нових повідомлень',
'EXT_all_msgs'=>'Всі повідомлення',
'MESSAGES_navbar'=>'Повідомлення',
'CONF_timezone'=>'Часова зона',
'MESSAGES_us'=>'Повідомлення користувача',
'MESSAGES_us_ext'=>'Переписка и приватні повідомлення',
'MESSAGES_main'=>'Основний чат',
'MESSAGES_fio'=>'ПІБ користувача',
'MESSAGES_with'=>'Переписка з',
'MESSAGES_sel_text'=>'Введіть текст',

'UPGRADE_title'=>'Оновлення системи',
'UPGRADE_title_ext'=>'Майстер оновлення версії',
'UPGRADE_version_already'=>'У Вас сама остання версія!',
'UPGRADE_dbu'=>'Створено резервну копію БД',
'UPGRADE_error'=>'Оновлення пройшло з помилками. Спробуйте ще раз. Або зверніться в службу підтримки.',
'UPGRADE_success'=>'Оновлення пройшло вдало. У Вас сама остання версія.',
'UPGRADE_new'=>'Доступна нова версія',
'UPGRADE_list'=>'Список змін',
'UPGRADE_files'=>'Файли, які будуть змінені',
'UPGRADE_att'=>'Зверніть увагу, права на файли та каталоги виставлені згідно: ',
'UPGRADE_now'=>'Обновити зараз!',


'EXT_toggle_nav'=>'Меню навігації',
'EXT_users_online'=>'користувачів онлайн',
'EXT_users_all_view'=>'переглянути всіх',
'EXT_new_message'=>'Нове повідомлення',
'EXT_stats_refer'=>'Переадресовано',
'EXT_stats_lock'=>'Заблоковано заявок',
'EXT_stats_unlock'=>'Розблоковано',
'EXT_stats_no_ok'=>'Не виконано',
'EXT_stats_main'=>'Інформація по заявкам',
'EXT_stats_main_todo'=>'Для відображення статистики по користувачу, вкажіть користувача та період.',
'EXT_stat_title'=>'Журнал дій користувача з ',
'EXT_for_clients'=>'Для клієнтів',
'EXT_for_clients_ext'=>'буде доступно для клієнтів',
'EXT_hello'=>'Привіт',
'EXT_fill_msg'=>'Вкажіть повідомлення',
'EXT_client_add_after'=>'Клієнт буде доданий після модерації адміністратором.',
'EXT_press_tofind'=>'Натисніть для пошуку',
'EXT_news_view_t'=>'Дивитись заявку',
'EXT_ldap_ip'=>'IP-адреса LDAP-сервера',
'EXT_ldap_domain'=>'LDAP-домен для облікового запису',
'EXT_pb_noti'=>'PushBullet-повідомлення',
'EXT_pb_api_key'=>'API-ключ',
'EXT_perf_must_ldap'=>'На сервері LDAP повинен бути обліковий запис з одноименнім логіном',
'EXT_client'=>'Клієнт',
'EXT_client_what'=>'Буде бачити заявки тільки створені собою.',
'EXT_perf_msg_t'=>'Заголовок повідомлення',
'EXT_t_created'=>'Створено заявок',
'EXT_t_locked'=>'В обробці',
'EXT_t_oked'=>'Виконано',
'EXT_attach_file'=>'Прикрепив файл',
'EXT_more_info'=>'Перейти',
'NAVBAR_news'=>'Новини',
'STATS_TITLE_ext'=>'Приватні графіки',
'VIEWUSER_title'=>'Інформація про користувача',
'VIEWUSER_title_ext'=>'Профіль користувача',
'MAIN_attention'=>'Увага',

'CLIENTS_name_ext'=>'Пошук та редагування',
'STATS_TITLE_short'=>'Статистика',

'ticket_login_error'=>'Такий логін вже існує',

'NEWS_action_lock'=>'заблокувати заявку',
'NEWS_action_unlock'=>'розблокувати заявку',
'NEWS_action_ok'=>'виконав заявку',
'NEWS_action_no_ok'=>'відмітив заявку',
'NEWS_action_no_ok2'=>'як не виконана',
'NEWS_action_refer'=>'переадресував заявку',
'NEWS_action_create'=>'створив нову заявку з кодом',
'NEWS_action_comment'=>'прокоментував заявку',
'NEWS_action_ticket_arch'=>'перейшла до архіву',

'NEWS_text_ticket'=>'Текст заявки',
'NEWS_text_comment'=>'Коментарі',


'DASHBOARD_messages'=>'Важливі повідомлення',
'DASHBOARD_title_ext'=>'Основна інформація',

'NEWS_today'=>'сьогодні',

'PROFILE_select_image'=>'Обрати зображення',
'PROFILE_del_image'=>'Видалити',
'NAVBAR_profile_ext'=>'Перегляд та редагування інформації',

'ALLSTATS_main'=>'Загагальна статистика',    
'ALLSTATS_help'=>'В даному розділі знаходиться статистика всіх відділів та їх користувачів, на які ви маєте права доступу.',
'ALLSTATS_unit'=>'Інформація щодо заявок вашого розділу',
'ALLSTATS_unit_free'=>'Вільних заявок',
'ALLSTATS_unit_lock'=>'Зайнятих заявок',
'ALLSTATS_unit_ok'=>'Виконаних заявок',
'ALLSTATS_user'=>'Інформація щодо заявок користувачів вашого розділу',
'ALLSTATS_user_fio'=>'ПІБ',
'ALLSTATS_user_free'=>'Вільних',
'ALLSTATS_user_lock'=>'Заблокованих',
'ALLSTATS_user_ok'=>'Виконаних',
'ALLSTATS_user_out_all'=>'Створено (всього)',
'ALLSTATS_user_out_all_not'=>'Створено (не виконаних)',
    
'NAVBAR_files'=>'Файли заявок',   
'T_from'=>'з',
'FILES_title'=>'Файли заявок',
'FILES_off' =>'На даний час відключено завантаження файлів до заявок. Для активації перейдіть <a href="./config">сюди</a> та активуйте завантаження файлів до заявок.',
'FILES_info'=>'В даному розділі Ви можете переглянути прекріплені файлі до заявок, а також видалити їх.',
'FILES_name'=>'Им\'я файла',
'FILES_ticket'=>'Заявка',
'FILES_size'=>'Розмір',
'FILES_del'=>'Видалити',
'FILES_down'=>'Зкачати',
'CONF_file_types'=>'Дозволені типи файлів',
'CONF_file_size'=>'Максимальний размір файлу',    
/////////////////////////////////////////////////
'DEPS_off' => 'В даний момент відключений фіксований список тем заявок. Для його включення перейдіть <a href="./config"> сюди </a> і виберіть теми заявок "фіксований список". ', 
'CONF_info' => 'В даному розділі містяться основні налаштування системи.', 
'CONF_mail' => 'E-mail адміністратора', 
'CONF_title' => 'Налаштування системи', 
'CONF_mains' => 'Загальні налаштування', 
'CONF_name' => 'Назва організації', 
'CONF_title_org' => 'Заголовок системи', 
'CONF_url' => 'URL системи', 
'CONF_2arch' => 'Через скільки днів заявку перенести в архів', 
'CONF_2arch_info' => 'Для автоматичного переносу заявок в архів, додайте в cron-планувальник рядок:', 
'CONF_f_login' => 'Перший вхід і активація', 
'CONF_f_login_opt_true' => 'Доступна посилання', 
'CONF_false' => 'Не активно ', 
'CONF_f_login_info' => '', 
'CONF_subj' => 'Теми заявок', 
'CONF_fix_list' => 'Фіксований список', 
'CONF_subj_text' => 'Поле введення', 
'CONF_subj_info' => 'При створенні заявок Ви можете визначити фіксирований набір тем або ж текстове поле, в яке вписують назву теми заявки.', 
'CONF_fup' => 'Завантаження файлів до заявки', 
'CONF_true' => 'Активно', 
'CONF_fup_info' => 'Можливість прикріплення файлів до заявки.', 
'CONF_act_edit' => 'Редагувати',   
 
 
 
 ////////////////////////////////
'CONF_mail_name' => 'Налаштування пошти', 
'CONF_mail_status' => 'Поштові повідомлення', 
'CONF_mail_host' => 'Адреса SMTP-сервера', 
'CONF_mail_port' => 'Порт SMTP-сервера', 
'CONF_mail_auth' => 'Авторизація', 
'CONF_mail_type' => 'Тип авторизації', 
'CONF_mail_login' => 'Логін', 
'CONF_mail_pass' => 'Пароль', 
'CONF_mail_from' => 'Відправник', 
'CONF_mail_debug' => 'Режим налагодження', 
'CONF_mail_type' => 'Тип', 
'HELPER_info' => 'В даному розділі можуть міститися інструкції та документація для вирішення типових проблем.', 
'NAVBAR_conf' => 'Налаштування системи', 
'DASHBOARD_TITLE' => 'Панель приладів', 
'DASHBOARD_ticket_stats' => 'Статистика заявок', 
'DASHBOARD_ticket_in_desc' => 'Вхідні вільні заявки, які ви можете взяти', 
'DASHBOARD_ticket_in' => 'входять заявки', 
'DASHBOARD_ticket_lock' => 'заблоковано мною', 
'DASHBOARD_ticket_lock_desc' => 'Заявки, з якими Ви працюєте', 
'DASHBOARD_ticket_out' => 'вихідні заявки', 
'DASHBOARD_ticket_out_desc' => 'Заявки, створені Вами і залишилися не виконаними', 
'DASHBOARD_last_news' => 'Останні зміни', 
'DASHBOARD_last_help' => 'Останнє з Центру Знань', 
'APPROVED_info' => 'В даному розділі містяться запити користувачів системи на зміну інформації про клієнтів (користувачів).', 
'WORKERS_info' => 'В даному розділі міститься інформація про користувачів (клієнтах), ви можете знайти і відправити запит на зміну інформації.', 
'DASHBOARD_author' => 'Автор', 
'DASHBOARD_last_in' => 'Останні вхідні заявки', 
'NEW_title' => 'Створення нової заявки', 
'NEW_ok' => 'Заявка успішно створена!', 
'NEW_ok_1' => 'Ви можете', 
'NEW_ok_2' => 'поділитися посиланням', 
'NEW_ok_3' => 'на заявку або', 
'NEW_ok_4' => 'роздрукуйте її', 
'NEW_from' => 'Від кого', 
'NEW_from_desc' => 'ПІБ або логін користувача, який звернувся за допомогою', 
'NEW_fio' => 'ПІБ або логін', 
'NEW_fio_desc' => 'Заповніть це поле', 
'NEW_to' => 'Кому', 
'NEW_to_desc' => 'Виконавець заявки - або весь відділ, або опціонально конкретного співробітника.', 
'NEW_to_unit' => 'Відділ', 
'NEW_to_unit_desc' => 'Вкажіть відділ призначення або співробітника', 
'NEW_to_user' => 'Виконавець', 
'NEW_prio' => 'Пріоритет', 
'NEW_prio_low' => 'Низький', 
'NEW_prio_norm' => 'Середній', 
'NEW_prio_high' => 'Високий', 
'NEW_prio_high_desc' => 'Буде задіяно SMS-інформування', 
'NEW_subj' => 'Тема', 
'NEW_subj_msg' => 'Вкажіть тему заявки', 
'NEW_subj_det' => 'Заголовок заявки', 
'NEW_MSG' => 'Текст', 
'NEW_MSG_msg' => 'Вкажіть детально суть заявки', 
'NEW_MSG_ph' => 'Суть заявки', 
'NEW_MSG_ph_1' => 'Якщо потрібно доповніть повідомлення інформацією', 
'NEW_button_create' => 'Створити заявку', 
'NEW_button_reset' => 'Очистити поля', 
'LIST_title' => 'Список заявок', 
'LIST_ok_t' => 'виконані заявки', 
'LIST_lock_t_i' => 'заявки, з якими Ви працюєте', 
'LIST_lock_t' => 'заявки, з якими інші працюють', 
'LIST_lock_n' => 'номер заявки', 
'LIST_find_ph' => 'Введіть # або тему заявки, або текст заявки, або текст коментаря', 
'LIST_find_button' => 'Пошук', 
'LIST_in' => 'Вхідні', 
'LIST_out' => 'Вихідні', 
'LIST_arch' => 'Архів', 
'LIST_loading' => 'йде завантаження',
 
 
 ////////////////////////////////////////////
 
 
 'CREATE_ACC_success' => 'Ваш обліковий запис успішно активовано! <br> На Вашу електронну пошту надіслано логін та пароль. ', 
 
 
 
'msg_created_new_user' => 'Буде створено нового користувача',


'CREATE_ACC_already' => 'Ваш обліковий запис вже активовано.',
'CREATE_ACC_error' => 'Користувача з такою електроною адресою не знайдено.',
'MAIN_TITLE' => 'СИСТЕМА ЗАЯВОК', 
'AUTH_USER' => 'Авторизація користувача', 
'login' => 'Логін', 
'pass' => 'Пароль', 
'remember_me' => 'Запам\'ятати мене', 
'error_auth' => 'Помилка авторизації. <br> Перевірте логін і пароль. ', 
'first_in_auth' => 'Перший вхід і активація', 
'user_auth' => 'Активація користувача', 
'work_mail' => 'Ваш робочий e-mail', 
'action_auth' => 'Активувати', 
'log_in' => 'Увійти', 
'work_mail_ph' => 'Вкажіть Вашу робочу електронну пошту (e-mail).', 
'NOTES_single' => 'Запис ...', 
't_LIST_prio' => 'Пріоритет', 
't_LIST_subj' => 'Тема', 
't_LIST_worker' => 'Користувач', 
't_LIST_create' => 'Створено', 
't_LIST_ago' => 'Минуло', 
't_LIST_init' => 'Автор', 
't_LIST_to' => 'Виконавець', 
't_LIST_status' => 'Статус', 
't_LIST_action' => 'Дія', 
'stats_last_time' => 'Останній вхід:', 
't_list_a_nook' => 'позначити, як виконане', 
't_list_a_unlock' => 'розблокувати', 
't_list_a_lock' => 'заблокувати', 
't_list_a_ok' => 'виконати', 
't_list_a_all' => 'Всім', 
't_list_a_user_ok' => 'Виконав', 
't_list_a_date_ok' => 'Виконано', 
't_list_a_p_norm' => 'Середній пріоритет', 
't_list_a_p_low' => 'Низький пріоритет', 
't_list_a_p_high' => 'Високий пріоритет', 
't_list_a_oko' => 'виконано', 
't_list_a_arch' => 'в архіві', 
't_list_a_lock_i' => 'працюю я', 
't_list_a_lock_u' => 'працює', 
't_list_a_hold' => 'очікування дії', 
't_list_a_ok_no' => 'Виконано / не виконане', 

'HELP_desc' => 'Опис проблеми', 
'HELP_do' => 'Рішення', 
'HELP_save' => 'Зберегти', 
'HELP_back' => 'Назад', 
'HELP_all' => 'Все', 
'HELP_create' => 'Створити', 
'MSG_no_records' => 'Немає записів', 
'TICKET_name' => 'Заявка',
///////////////////////////////////////////////

'WORKER_TITLE' => 'Інформація про користувача', 
'WORKER_fio' => 'ПІБ', 
'WORKER_login' => 'Логін', 
'WORKER_posada' => 'Посада', 
'WORKER_unit' => 'Підрозділ', 
'WORKER_tel' => 'Тел', 
'WORKER_tel_full' => 'Телефон', 
'WORKER_room' => 'Адреса', 
'WORKER_mail' => 'E-mail', 
'WORKER_total' => 'Заявок', 
'WORKER_last' => 'Остання', 
'WORKER_edit_info' => 'Зміна інформації', 
'WORKER_send_approve' => 'Надіслати запит на зміну', 
'PROFILE_msg_ok' => 'Інформація успішно оновлена.', 
'PROFILE_msg_error' => 'Ім\'я або e-mail мають не коректний формат.', 
'PROFILE_msg_pass_err' => 'Старий пароль не вірний.', 
'PROFILE_msg_pass_err2' => 'Нові паролі не збігаються.', 
'PROFILE_msg_pass_err3' => 'Пароль повинен бути не менше 4 символів.', 
'PROFILE_msg_pass_ok' => 'Пароль успішно змінений. Вам потрібно <a href=\'index.php\'> зайти заново в систему </a>. ', 
'PROFILE_msg_te' => 'Помилка', 
'PROFILE_priv' => 'Ваші повноваження в системі', 
'PROFILE_priv_unit' => 'Доступ до відділів', 
'TABLE_name' => 'Назва', 
'TABLE_action' => 'Дія', 
'PROFILE_msg_send' => 'Запит на зміну інформації про користувача відправлений. Зміни відбудуться тільки після перевірки адміністратором. ', 
'PROFILE_msg_add' => 'Користувач (клієнт) успішно доданий', 
'TICKET_msg_OK' => 'Заявка виконана', 
'TICKET_msg_OK_error' => 'Неможливо виконання. Заявка вже виконана користувачем ', 
'TICKET_msg_unOK' => 'Заявка не виконана', 
'TICKET_msg_unOK_error' => 'Неможливо виконати', 
'TICKET_msg_lock' => 'Заявка заблокована', 
'TICKET_msg_lock_error' => 'Неможливо заблокувати заявку. З нею працює ', 
'TICKET_msg_unlock' => 'Заявка розблокована', 
'TICKET_msg_refer' => 'Заявка переадресована', 
'empty' => 'пусто', 
't_list_a_top' => 'ТОП 10 результатів пошуку', 
'TICKET_p_add_client' => 'Додавання клієнта', 
'TICKET_p_edit_client' => 'Редагування клієнта', 
'TICKET_status_arch' => 'заявка в архіві', 
'TICKET_status_ok' => 'заявка виконана користувачем', 
'TICKET_status_lock' => 'із заявкою працює', 
'TICKET_status_new' => 'нова заявка, очікування дії', 
'TICKET_action_unlock' => 'Відновити', 
'TICKET_action_lock' => 'Заблокувати', 
'TICKET_action_ok' => 'Виконано', 
'TICKET_action_nook' => 'Не виконано', 
'TICKET_msg_updated' => 'Заявка була оновлена.',












'TICKET_t_from' => 'Автор', 
'TICKET_t_was_create' => 'Була створена', 
'TICKET_t_to' => 'Виконавець', 
'TICKET_t_last_edit' => 'Редагував', 
'TICKET_t_worker' => 'Користувач', 
'TICKET_t_last_up' => 'Останнє оновлення', 
'TICKET_t_status' => 'Статус', 
'TICKET_t_prio' => 'Пріоритет', 
'TICKET_t_subj' => 'Тема', 
'TICKET_t_refer' => 'Переадресація', 
'TICKET_t_refer_to' => 'Переадресація на', 
'TICKET_t_opt' => 'опціонально', 
'TICKET_t_in_arch' => 'Заявка знаходиться в архіві.', 
'TICKET_t_ok' => 'Заявка успішно виконана користувачем', 
'TICKET_t_ok_1' => 'Через деякий час заявка перейде в архів.', 
'TICKET_t_lock' => 'В даний час із заявкою працює користувач', 
'TICKET_t_lock_1' => 'Тому Ви не можете працювати з заявкою.', 
'TICKET_t_lock_i' => 'В даний час Ви працюєте із заявкою. Для того, щоб інші могли працювати, розблокуйте її. ', 
'TICKET_t_comment' => 'Коментарі', 
'TICKET_t_history' => 'Історія змін', 
'TICKET_t_your_comment' => 'Ваш коментар', 
'TICKET_t_det_ticket' => 'Вкажіть детально суть заявки', 
'TICKET_t_comm_ph' => 'Коментар до заявки', 
'TICKET_t_send' => 'Відправити', 
'TICKET_t_date' => 'Дата', 
'TICKET_t_init' => 'Автор', 
'TICKET_t_action' => 'Дія', 
'TICKET_t_desc' => 'Опис', 
'TICKET_t_a_refer' => 'заявка переадресована на', 
'TICKET_t_a_arch' => 'заявка перенесена в архів', 
'TICKET_t_a_ok' => 'заявка позначена як виконана', 
'TICKET_t_a_nook' => 'заявка позначена як не виконана', 
'TICKET_t_a_lock' => 'заявка заблокована', 
'TICKET_t_a_unlock' => 'заявка розблокована', 
'TICKET_t_a_create' => 'заявка була створена', 
'TICKET_t_a_e_text' => 'в заявці було змінене повідомлення', 
'TICKET_t_a_e_prio' => 'в заявці був змінений пріоритет', 
'TICKET_t_a_e_subj' => 'в заявці була змінена тема', 
'TICKET_t_a_com' => 'заявка була прокоментована', 
'TICKET_t_no' => 'Немає такої заявки', 
'TICKET_error_msg' => '<strong> Упс! </ Strong> У Вас немає прав на додавання нового клієнта.', 

'CLIENTS_name' => 'Клієнти', 
'CLIENTS_find' => 'Знайти', 
'CLIENTS_find_me' => 'Скористайтеся пошуком для редагування інформації ...',


'NAVBAR_tickets' => 'Заявки', 
'NAVBAR_create_ticket' => 'Створити заявку', 
'NAVBAR_list_ticket' => 'Список заявок', 
'NAVBAR_workers' => 'Клієнти', 
'NAVBAR_helper' => 'Центр знань', 
'NAVBAR_notes' => 'Блокнот', 
'NAVBAR_admin' => 'Адміністрування', 
'NAVBAR_users' => 'Користувачі системи', 
'NAVBAR_deps' => 'Відділи системи', 
'NAVBAR_approve' => 'Підтвердження', 
'NAVBAR_all_tickets' => 'Всі заявки', 
'NAVBAR_reports' => 'Звіти', 
'NAVBAR_db' => 'Довідники', 
'NAVBAR_posads' => 'Посади', 
'NAVBAR_units' => 'Управління', 
'NAVBAR_subjs' => 'Теми заявок', 
'NAVBAR_profile' => 'Профіль', 
'NAVBAR_help' => 'Допомога', 
'NAVBAR_logout' => 'Вийти', 

'CONF_title_ext' => 'Конфігурація системи', 

'TICKET_ACTION_refer' => 'переадресована користувачем', 
'TICKET_ACTION_refer_to' => 'на', 
'TICKET_ACTION_ok' => 'виконана користувачем', 
'TICKET_ACTION_nook' => 'не виконано користувачем', 
'TICKET_ACTION_lock' => 'заблокована користувачем', 
'TICKET_ACTION_unlock' => 'розблокована користувачем', 
'TICKET_ACTION_create' => 'створена користувачем', 
'TICKET_ACTION_edit' => 'змінено користувачем', 
'TICKET_ACTION_comment' => 'прокоментовано користувачем', 
'TICKET_ACTION_arch' => 'заявка перенесена в архів', 
'NOTES_title_ext' => 'Особисті нотатки', 
'ALLSTATS_main_ext' => 'По відділам і користувачам', 
'HELPER_title' => 'Центр знань', 
'HELPER_title_ext' => 'Популярні питання та їх рішення', 
'HELPER_back' => 'назад', 
'HELPER_print' => 'роздрукувати', 
'HELPER_pub' => 'Опублікував', 
'HELPER_date' => 'Дата', 
'HELPER_find' => 'Знайти', 
'HELPER_create' => 'створити новий запис', 
'HELPER_desc' => 'Опис проблеми чи питання ...',
/////////////////////////////








'USERS_title_ext' => 'Управління обліковими записами', 
'NOTES_title' => 'Персональний блокнот', 
'NOTES_link' => 'Посилання на запис', 
'NOTES_create' => 'створити новий запис', 
'NOTES_cr' => 'Додайте новий або оберіть ...', 


'P_title' => 'Редагування інформації', 
'P_main' => 'Загальна інформація', 
'P_login' => 'Логін', 
'P_mail' => 'E-mail', 
'P_mail_desc' => 'Використовується виключно для оповіщення.', 
'P_edit' => 'Зберегти', 
'P_passedit' => 'Зміна пароля', 
'P_pass_old' => 'Старий пароль', 
'P_pass_old2' => 'Пароль старий', 
'P_pass_new' => 'Новий пароль', 
'P_pass_new2' => 'Пароль новий', 
'P_pass_new_re' => 'Повторіть новий пароль', 
'P_pass_new_re2' => 'Пароль новий (повторно)', 
'P_do_edit_pass' => 'Змінити пароль', 

'JS_not_found' => 'Не знайдено ... ', 
'JS_ticket' => 'Заявка', 
'JS_up' => 'Оновлено!', 
'JS_save' => 'Зберегти', 
'JS_pub' => 'Поділитися', 
'JS_del' => 'Дійсно хочете видалити?', 
'JS_create' => 'Додайте новий або оберіть ...', 
'JS_low' => 'Низький', 
'JS_norm' => 'Середній', 
'JS_high' => 'Високий', 
'JS_unit' => 'Заповніть поле підрозділ', 
'JS_probl' => 'Заповніть поле опис проблеми', 
'JS_ok' => 'Виконано', 
'JS_no_ok' => 'Не виконано', 
'JS_unlock' => 'Відновити', 
'JS_lock' => 'Заблокувати', 
'NAVBAR_workers_list' => 'Список клієнтів', 
'NAVBAR_workers_add' => 'Створити клієнта', 
'LIST_pin' => 'Відділів', 
'USERS_title' => 'Користувачі системи', 
'USERS_create' => 'Створити користувача', 
'USERS_list' => 'Користувачі', 
'USERS_profile_priv' => 'Видимість заявок', 
'USERS_msg_add' => 'Користувач успішно доданий!', 
'USERS_new' => 'Новий клієнт', 
'USERS_new_add' => 'Новий користувач', 
'USERS_fio' => 'ПІБ', 
'USERS_fio_full' => 'прізвища, ім\'я та по батькові', 
'USERS_login' => 'Логін', 
'USERS_pass' => 'Пароль', 
'USERS_mail' => 'E-mail', 
'USERS_units' => 'Відділи', 
'USERS_unit' => 'Відділ', 
'USERS_nach1' => 'Начальник управління', 
'USERS_nach1_desc' => 'Буде бачити всі заявки.', 
'USERS_nach' => 'Начальник відділу', 
'USERS_nach_desc' => 'Буде бачити всі заявки, адресовані в обрані відділи, а також адресовані всім користувачам відділу.', 
'USERS_wo' => 'Співробітник', 
'USERS_wo_desc' => 'Буде бачити всі заявки, адресовані у відділ і користувачеві. Заявки іншим користувачам відділу буде не видно. ', 
'USERS_make_create' => 'Створити користувача', 
'FILES_title_ext' => 'Управління файлами заявок', 
'POSADA_title_ext' => 'Управління посадами', 
'USERS_uid' => 'UID', 
'USERS_privs' => 'Привілеї', 
'USERS_p_1' => 'Нач. відділу ', 
'USERS_p_2' => 'Співробітник', 
'USERS_p_3' => 'Нач. управління ', 
'USERS_p_4' => 'Клієнт', 
'USERS_msg_edit_ok' => 'Дані користувача успішно відредаговані!', 
'USERS_make_edit' => 'Редагувати дані клієнта', 
'USERS_make_edit_user' => 'Редагувати дані користувача', 
'DEPS_title_ext' => 'Управління підрозділами', 
'USERS_acc' => 'Аккаунт', 
'USERS_not_active' => 'Виключений', 
'USERS_active' => 'Включений', 
'USERS_editable' => 'Редагувати дані', 

'DEPS_title' => 'Відділи', 
'DEPS_name' => 'Назва відділу', 
'DEPS_add' => 'Додати', 
'DEPS_n' => 'Назва', 
'DEPS_action' => 'Дія', 


'APPROVE_title' => 'Підтвердження зміни інформації', 
'APPROVE_info' => 'Інформація', 
'APPROVE_fio' => 'ПІБ', 
'APPROVE_login' => 'Логін', 
'APPROVE_posada' => 'Посада', 
'APPROVE_unit' => 'Підрозділ', 
'APPROVE_tel' => 'Тел', 
'APPROVE_adr' => 'Адреса', 
'APPROVE_mail' => 'E-mail', 
'APPROVE_app' => 'Підтвердити?', 
'APPROVE_orig' => 'Оригінал', 
'APPROVE_yes' => 'Так', 
'APPROVE_no' => 'Немає', 
'APPROVE_want_edit' => 'хоче змінити на', 
'APPROVE_want_add' => 'хоче створити', 

'POSADA_title' => 'Посади', 
'POSADA_name' => 'Назва посади', 
'POSADA_add' => 'Додати', 
'POSADA_n' => 'Назва', 
'POSADA_action' => 'Дія', 


'UNITS_title' => 'Підрозділи клієнтів', 
'UNITS_title_ext' => 'Управління підрозділами клієнтів', 
'UNITS_name' => 'Назва управління', 
'UNITS_add' => 'Додати', 
'UNITS_n' => 'Назва', 
'UNITS_action' => 'Дія', 


'SUBJ_title' => 'Теми заявок', 
'SUBJ_name' => 'Назва теми', 
'SUBJ_add' => 'Додати', 
'SUBJ_n' => 'Назва', 
'SUBJ_action' => 'Дія', 


'STATS_TITLE' => 'Статистика користувача', 
'STATS_in' => 'Вхідні заявки', 
'STATS_out' => 'Вихідні заявки', 
'STATS_new' => 'Нові', 
'STATS_lock' => 'С якими працюю', 
'STATS_ok' => 'Виконано мною', 
'STATS_nook' => 'Не виконані ', 
'STATS_create' => 'Створено мною', 
'STATS_lock_o' => 'Працюють', 
'STATS_ok_o' => 'Виконано',


//////////////////////////////////////////////////////














'STATS_help1' => '<li> нові - заявки, які адресовані Вам або Вашому відділу і Ви можете їх виконати. </li> <li> Заблоковані - заявки, над якими Ви працюєте. </li> <li> Виконані - заявки, які Ви вже виконали (через деякий час перейдуть в архів і зникнуть за графіком) </li> ', 
'STATS_help2' => '<li> Чи не виконані - заявки, які ви створили, але їх ще ніхто не виконав. </li> <li> Заблоковані - заявки, над якими хтось працює. </li> <li> Виконані - заявки, які Ви створили і їх виконали </li> ', 
'STATS_in_now' => 'Вхідні заявки в даний час', 
'STATS_t' => 'Заявок', 
'STATS_t_ok' => 'Виконані', 
'STATS_t_free' => 'Вільні', 
'STATS_out_all' => 'Вихідні заявки за весь період', 
'STATS_t_lock' => 'С якими працюють', 

'DEPS_info' => 'В даному розділі містяться відділи, в які входять користувачі системи. <br> При створенні заявки, ви можете вибрати один з цих відділів.', 
'SUBJ_info' => 'В даному розділі містяться теми заявок. <br> При створенні заявки, ви можете вибрати тему заявки.', 
'POSADA_info' => 'В даному розділі містяться посади користувачів (клієнтів). <br> При створенні заявки, якщо у Вас є права на редагування/додавання користувачів (клієнтів), Ви зможете вказувати посаду.', 
'UNITS_info' => 'В даному розділі містяться відділи користувачів (клієнтів). <br> При створенні заявки, якщо у Вас є права на редагування/додавання користувачів (клієнтів), Ви зможете вказувати відділ.', 
'DASHBOARD_def_msg' => ', вітаємо Вас в системі заявок! </strong> </center> <br> Рекомендуємо Вам подивитися <a href=\'help\' class=\'alert-link\'> </i> інструкції </a> по роботі з системою. <br> Або <a href=\'create\'class=\'alert-link\'> створіть нову заявку </a> прямо зараз! ', 

'msg_creted_new_user' => 'Буде створений новий користувач.', 


'MAIL_active' => 'Обліковий запис активовано', 
'MAIL_adr' => 'Адреса', 
'MAIL_active_u' => 'Обліковий запис користувача активовано', 
'MAIL_cong' => 'Вітаємо Вас в системі заявок', 
'MAIL_data' => 'Дані', 
'MAIL_name' => 'Система заявок', 
'MAIL_new' => 'НОВА ЗАЯВКА', 
'MAIL_code' => 'Код заявки', 
'MAIL_2link' => 'Перейти на сторінку заявки', 
'MAIL_info' => 'Інформація', 
'MAIL_created' => 'Заявку створив', 
'MAIL_to' => 'Кому', 
'MAIL_prio' => 'Пріоритет', 
'MAIL_worker' => 'Співробітник', 
'MAIL_msg' => 'Повідомлення', 
'MAIL_subj' => 'Тема', 
'MAIL_text' => 'Текст', 
't_LIST_worker_to' => 'співробітникові', 
't_LIST_person' => 'персонально', 

'HELP_title' => 'Інструкція по роботі з заявками', 
'HELP_new' => 'Створення заявки', 
'HELP_review' => 'Перегляд заявки', 
'HELP_edit_user' => 'Зміна інформації про користувача', 
'HELP_new_text' => '<p> Для створення заявки, Вам необхідно заповнити обов\'язкові поля. 
                                 </p> 
                                 <ol> 
                                     <li> <strong> Від кого </strong> - Вам необхідно почати набирати частина прізвища, ім\'я, по батькові або логін. Якщо такий працівник вже є в системі, то Вам автоматично буде запропоновано вибрати його із cписку. Якщо його немає - то він буде створений. У правій частині сторінки Ви можете додатково вказати контактну інформацію про працівника. Як правило це контактний телефон, адресу. </li> 
                                     <li> <strong> Кому </strong> - вказується відділ. Обов\'язково вказати відділ, а також опціонально виконавця. Якщо вказати тільки відділ, то заявку побачать всі співробітники відділу. Якщо вказати ще й виконавця, то заявку побачить лише виконавець а також начальник його відділу. </li> 
                                     <li> <strong> Пріоритет </strong> - вказується пріоритет виконання заявки. У загальному списку заявки його можна побачити певними позначками. </li> 
                                     <li> <strong> Тема </strong> - вказується стисло тема заявки. </li> 
                                     <li> <strong> Повідомлення </strong> - вказується детально суть заявки. </li> 
                                 </ol> ', 
'HELP_review_text' => '<p> Вам доступні три розділи: "Вхідні", "Вихідні", "Архів". Детально про них нижче. 
                                 </p> 
                                 <ul> 
                                     <li> <strong> Вхідні </strong> - в цьому каталозі містяться всі заявки, адресуванні Вам безпосередньо або Вашому відділу. 
При наявності прав користувача - ви бачите тільки заявки адресуванні всьому відділу або Вам безпосередньо. (заявки адресовані Вам і відділу). 
При наявності прав начальника відділу - ви бачите все заявки Вашого відділу (адресовані Вам, користувачам, і відділу). 
                                     </li> 
                                     <li> <strong> Вихідні </strong> - в цьому каталозі містяться всі заявки які створювали Ви. Ви можете переглядати статус Ваших створюваних заявок. 
                                     </li> 
                                     <li> <strong> Архів </strong> - в цьому каталозі містяться всі заявки які були виконані, і через деякий час перейшли в архів. Вони відправляються в архів автоматично. 
                                     </li> 
                                 </ul> 
                                 <p> 
                                     У списку заявки мають різні кольори, для того, щоб бачити їх статус. Якщо заявка чорного кольором - то вона не прочитана. Синього - очікує дії. Жовтого - блокована Вами. Сірого - блокована користувачем. Зеленого - заявка виконана. 
                                 </p> 
                                 <center> 
                                
                                 </center> 
                                 <p> 
                                     <strong> Як тільки Ви або Ваш відділ отримали нову заявку </strong>, Вам необхідно переглянути її, натиснувши на тему і прийняти рішення: 
                                 <ul> 
                                     <li> <strong> Переадресувати на інший відділ або користувача </strong> - Якщо заявка не у Вашій компетенції, то ви можете перевести заявку на інший відділ або користувача. 
                                     </li> 
                                     <li> <strong> Заблокувати її </strong> - для того щоб всі бачили, що Ви працюєте в даний час із заявкою, і інші користувачі не змогли нічого робити із заявкою крім начальника відділу. 
                                     <li> <strong> Виконати її </strong> - значить заявку виконали і через деякий час вона потрапить в архів </li> 

                                         </ul> 
                                     </li> 
                                 </ul> 
                                 </p> 
                                 <p> 
                                     Також ви можете залишити коментар до заявки. 
                                 </p> ', 
'HELP_edit_user_text' => '<p> Іноді виникає необхідність доповнити інформацію про користувача або змінити її. 
Для цього існує розділ - Користувачі. Знайдіть того користувача, який вам потрібен і змініть дані. Після чого, вони пройдуть перевірку адміністратором системи і зміняться. 
                                 </p> ', 
'REFER_comment_add' => 'доповнив', 
'TICKET_file_upload' => 'вибрати файли', 
'TICKET_file_startupload' => 'завантажити', 
'TICKET_file_notupload' => 'скасувати завантаження', 
'TICKET_file_notupload_one' => 'скасувати', 
'TICKET_file_upload_msg' => 'Ви можете перенести файли на сторінку', 
'TICKET_file_add' => 'Додати файл', 
'TICKET_file_list' => 'Прикріплені файли', 
'SYSTEM_lang' => 'Мова', 
'summernote_lang' => 'uk-UA', 
'note_save' => 'Запис збережено', 
'upload_errortypes' => 'Тип файлу не допускається', 
'upload_errorsize' => 'Занадто великий файл', 
'upload_not_u' => 'Ви забули завантажити файли', 
'userinfo_ticket' => 'Заявки користувача', 
'file_info' => 'Файл', 
'file_info2' => 'завантажений', 
'last_more' => 'ще', 
'ticket_sort_def' => 'Показати все', 
'ticket_sort_ok' => 'Виконані', 
'ticket_sort_ilock' => 'Заблоковані мною', 
'ticket_sort_lock' => 'заблокованості не мною',
''=>''

            );
    return isset($lang[$phrase]) ? $lang[$phrase] : 'undefined';
}
?>