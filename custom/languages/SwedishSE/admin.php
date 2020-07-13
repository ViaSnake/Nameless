<?php
/*
 *	Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr3
 *
 *  License: MIT
 *
 *  Translated by IsS127
 *  SwedishSE Language - Admin
 */

$language = array(
	/*
	 *  Admin Control Panel
	 */
	// Login
	're-authenticate' => 'Vänligen åter autentisera',

	// Sidebar
	'dashboard' => 'Översikt',
	'configuration' => 'Konfiguration',
	'layout' => 'Layout',
	'user_management' => 'User Management',
	'admin_cp' => 'AdminKP',
	'administration' => 'Administration',
	'overview' => 'Översikt',
	'core' => 'Kärna',
	'integrations' => 'Integrationer',
	'minecraft' => 'Minecraft',
	'modules' => 'Moduler',
	'security' => 'Säkerhet',
	'sitemap' => 'Sitemap',
	'styles' => 'Stiler',
	'users_and_groups' => 'Användare och Grupper',

	// Overview
	'running_nameless_version' => 'Kör NamelessMC version <strong>{x}</strong>', // Don't replace "{x}"
	'running_php_version' => 'Kör PHP version <strong>{x}</strong>', // Don't replace "{x}"
	'statistics' => 'Statistik',
	'registrations' => 'Registrationer',
	'topics' => 'Topics',
	'posts' => 'Posts',
	'notices' => 'Notiser',
	'no_notices' => 'Inga Notiser.',
	'email_errors_logged' => 'E-post fel har blivit loggade',

	// Core
	'settings' => 'Inställningar',
	'general_settings' => 'Allmänna Inställningar',
	'sitename' => 'Sido namn',
	'default_language' => 'Standardspråk',
	'default_language_help' => 'Användarna kommer att kunna välja mellan alla installerade språk.',
	'install_language' => 'Installera Språk',
	'update_user_languages' => 'Uppdatera användar språk',
	'update_user_languages_warning' => 'Detta kommer uppdatera språk för alla dina användare, även om de redan har valt ett språk!',
	'updated_user_languages' => 'Användarspråk har uppdaterats.',
	'installed_languages' => 'Nya språk har installerats!',
	'default_timezone' => 'Standard tidszon',
	'registration' => 'Registrering',
	'enable_registration' => 'Aktivera registrering?',
	'verify_with_mcassoc' => 'Verifiera användarkonton med MCAssoc?',
	'email_verification' => 'Aktivera E-post verifiering?',
	'registration_settings_updated' => 'Registratingsinställningar har uppdaterats.',
	'homepage_type' => 'Hemside typ',
	'post_formatting_type' => 'Post formaterings typ',
	'portal' => 'Portal',
	'private_profiles' => 'Privat Profiler',
	'missing_sitename' => 'Vänligen ange ett sajtnamn mellan 2 och 64 tecken långt.',
	'missing_contact_address' => 'Vänligen ange en kontaktadress mellan 3 och 255 tecken.',
	'use_friendly_urls' => 'Friendly URLs',
	'use_friendly_urls_help' => 'VIKTIGT: Din webserver måste konfigureras för att tillåta användning av mod_rewrite och .htaccess-filer för att detta ska fungera.',
	'config_not_writable' => 'Din <strong>core/config.php</strong> fil är inte skrivbar. Vänligen kontrollera filbehörigheter.',
	'settings_updated_successfully' => 'Allmänna inställningar har uppdaterats.',
	'social_media' => 'Sociala Medier',
	'youtube_url' => 'Youtube URL',
	'twitter_url' => 'Twitter URL',
	'twitter_dark_theme' => 'Använd Twitter mörk tema?',
	'discord_id' => 'Discord Server ID',
	'discord_widget_theme' => 'Discord Widget Theme',
	'discord_id_length' => 'Please ensure your Discord ID is 18 characters long.',
	'discord_id_numeric' => 'Please ensure your Discord ID is numeric (Numbers only).',
	'dark' => 'Dark',
	'light' => 'Light',
	'google_plus_url' => 'Google Plus URL',
	'facebook_url' => 'Facebook URL',
	'social_media_settings_updated' => 'Social media inställningar uppdaterade.',
	'successfully_updated' => 'Uppdaterat!',
    'debugging_and_maintenance' => 'Felsökning och uppbyggnadsläge',
    'maintenance' => 'Uppbyggnadsläge',
    'debugging_settings_updated_successfully' => 'Debugging settings updated successfully.',
    'enable_debug_mode' => 'Aktivera debug-läge?',
	'force_https' => 'Tvinga https?',
	'force_https_help' => 'Om aktiverad, kommer alla förfrågningar till din webbplats att omdirigeras till https. Du måste ha ett giltigt SSL-certifikat aktivt för att detta ska fungera korrekt.',
	'force_www' => 'Force www?',
	'contact_email_address' => 'Kontakt E-postadress',
	'emails' => 'E-poster',
	'email_errors' => 'E-postfel',
	'registration_email' => 'Registrering E-post',
	'contact_email' => 'Contact E-post',
	'forgot_password_email' => 'Glömt lösenord E-post',
	'unknown' => 'OKänd',
	'delete_email_error' => 'Radera fel',
	'confirm_email_error_deletion' => 'Är du säker på att du vill radera detta fel?',
	'viewing_email_error' => 'Visar fel',
	'unable_to_write_email_config' => 'Det går inte att skriva fil <strong>core/email.php</core>. Vänligen kontrollera filbehörigheter.',
	'enable_mailer' => 'Aktivera PHPMailer?',
	'enable_mailer_help' => 'Aktivera det här om e-postmeddelanden inte skickas som standard. Användningen av PHPMailer kräver att du har en tjänst som kan skicka e-postmeddelanden, till exempel Gmail eller en SMTP-leverantör.',
	'outgoing_email' => 'Utgående E-postadress',
	'outgoing_email_info' => 'Detta är den e-postadress som NamelessMC ska använda för att skicka e-post från.',
	'mailer_settings_info' => 'The following fields are required if you have enabled PHPMailer. For more information on how to fill out these fields, check out <a href="https://github.com/NamelessMC/Nameless/wiki/Setting-up-SMTP-with-Nameless-(e.g.-Gmail-or-Outlook)" target="_blank">the wiki</a>.',
	'host' => 'Host',
	'email_port' => 'Port',
	'email_password_hidden' => 'Lösenordet visas inte av säkerhetsskäl.',
	'send_test_email' => 'Skicka Test E-post',
	'send_test_email_info' => 'Följande knapp kommer att försöka skicka ett mail till din e-postadress, <strong> {x} </strong>. Eventuella fel när du skickar e-postmeddelandet visas.', // Don't replace {x}
    'send' => 'Skicka',
	'test_email_error' => 'Test e-post fel:',
	'test_email_success' => 'Test e-post skickat framgångsrikt!',
	'edit_email_messages' => 'Email Messages',
	'email_language_info' => 'Not seeing your language? Make sure \'emails.php\' is in your language directory and it is writable by your webserver.',
	'editing_language' => 'Editing Language',
	'email_preview_popup' => 'Preview',
	'email_preview_popup_message' => 'Click here to see a preview of the email.',
	'email_message_greeting' => 'Greeting',
	'email_message_thanks' => 'Thanks',
	'email_message_options' => 'Options',
	'email_message_subject' => 'Subject',
	'email_message_message' => 'Message',
	'terms_error' => 'Vänligen se till att dina villkor inte är längre än 100000 tecken.',
	'privacy_policy_error' => 'Please enter a privacy policy no longer than 100000 characters.',
	'terms_updated' => 'Villkoren uppdateras framgångsrikt.',
	'avatars' => 'Avatars',
	'allow_custom_avatars' => 'Tillåt egna användare avatarer?',
	'default_avatar' => 'Standard avatar',
	'custom_avatar' => 'Egen avatar',
	'minecraft_avatar' => 'Minecraft avatar',
	'minecraft_avatar_source' => 'Minecraft avatar source',
	'built_in_avatars' => 'Inbyggd avatar tjänst',
	'minecraft_avatar_perspective' => 'Minecraft avatar perspektiv',
	'face' => 'Ansikte',
	'head' => 'Huvud',
	'bust' => 'Bust',
	'select_default_avatar' => 'Välj en ny standard avatar:',
	'no_avatars_available' => 'Inga avatarer är tillgängliga. Var god och ladda upp en ny bild ovan först.',
	'avatar_settings_updated_successfully' => 'Avatarinställningarna uppdaterades!',
	'navigation' => 'Navigering',
	'navbar_order' => 'Navbar Ordning',
	'navbar_order_instructions' => 'Du kan ge varje föremål ett nummer över 0 för att ordna föremålet i navbaren, där 1 är det första föremålet och högre nummer som kommer efter det.',
    'navbar_icon' => 'Navbar Icon',
    'navbar_icon_instructions' => 'You can also add an icon to each navbar item here, for example using <a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank" rel="noopener nofollow">Font Awesome</a>, <a href="https://semantic-ui.com/elements/icon.html" target="_blank" rel="noopener nofollow">Semantic UI</a>.',
    'navigation_settings_updated_successfully' => 'Navigation settings updated successfully.',
    'dropdown_items' => 'Dropdown Items',
	'enable_page_load_timer' => 'Aktivera sidladdningstimer?',
    'google_recaptcha' => 'Aktivera Google reCAPTCHA?',
    'google_recaptcha_login' => 'Enable Google reCAPTCHA on login?',
    'captcha_type' => 'Captcha Type',
    'recaptcha_site_key' => 'reCAPTCHA Sido Nyckel',
    'recaptcha_secret_key' => 'reCAPTCHA Privat Nyckel',
    'registration_disabled_message' => 'Registrering inaktiverad text',
    'enable_nicknames_on_registration' => 'Enable nicknames for registering users?',
    'validation_promote_group' => 'Post-validation group',
    'validation_promote_group_info' => 'Detta är gruppen användraren får när hen har bekräftat sin konto.',
    'login_method' => 'Inloggningsmetod',
    'privacy_and_terms' => 'Sekretesspolicy och Villkor',

	// Reactions
	'icon' => 'Ikon',
	'type' => 'typ',
	'positive' => 'Positiv',
	'neutral' => 'Neutral',
	'negative' => 'Negativ',
	'editing_reaction' => 'Redigerar Reaktion',
	'html' => 'HTML',
	'new_reaction' => '<i class="fa fa-plus-circle"></i> Ny Reaktion',
	'creating_reaction' => 'Skapar Reaktion',
	'no_reactions' => 'There are no reactions yet.',
	'reaction_created_successfully' => 'Reaction created successfully.',
	'reaction_edited_successfully' => 'Reaction edited successfully.',
	'reaction_deleted_successfully' => 'Reaction deleted successfully.',
	'name_required' => 'A name is required',
	'html_required' => 'HTML is required',
	'type_required' => 'A type is required',
	'name_maximum_16' => 'The name must be no more than 16 characters',
	'html_maximum_255' => 'The HTML must be no more than 255 characters',
	'confirm_delete_reaction' => 'Are you sure you want to delete this reaction?',

	// Custom profile fields
	'custom_fields' => 'Anpassade profilfält',
	'new_field' => '<i class="fa fa-plus-circle"></i> New Field',
	'required' => 'Obligatorisk',
	'editable' => 'Redigerbar',
	'public' => 'Publik',
	'forum_posts' => 'Display on Forum',
	'text' => 'Text',
	'textarea' => 'Text area',
	'date' => 'Date',
	'creating_profile_field' => 'Creating Profile Field',
	'editing_profile_field' => 'Editing Profile Field',
	'field_name' => 'Fält Namn',
	'profile_field_required_help' => 'Obligatoriska fält måste fyllas i av användaren, och de kommer att visas under registrering.',
	'profile_field_public_help' => 'Offentliga fält kommer att visas för alla användare, om det här är inaktiverat kan moderatorer bara visa värdena.',
	'profile_field_error' => 'Ange ett fältnamn mellan 2 och 16 tecken långt.',
	'description' => 'Beskrivning',
	'display_field_on_forum' => 'Visa fält på forumet?',
	'profile_field_forum_help' => 'Om aktiverat, fältet kommer att visas av användraren bredvid forum inlägg.',
	'profile_field_editable_help' => 'Om aktiverat, kommer fältet att bli redigerbar i deras profil inställningar.',
	'no_custom_fields' => 'There are no custom fields yet.',
	'profile_field_updated_successfully' => 'The profile field was updated successfully.',
	'profile_field_created_successfully' => 'The profile field was created successfully.',
	'profile_field_deleted_successfully' => 'The profile field was deleted successfully.',

	// Minecraft
	'enable_minecraft_integration' => 'Aktivera Minecraft Integration?',
	'mc_service_status' => 'Minecraft Service Status',
	'service_query_error' => 'Det går inte att hämta status på servicen.',
	'authme_integration' => 'AuthMe Integration',
	'authme_integration_info' => 'När AuthMe integration är aktiverad, kan användrarna bara registrera sig i servern.',
	'enable_authme' => 'Aktivera AuthMe integration?',
	'authme_db_address' => 'AuthMe Databas Adress',
	'authme_db_port' => 'AuthMe Databas Port',
	'authme_db_name' => 'AuthMe Databas Namn',
	'authme_db_user' => 'AuthMe Databas Användrarnamn',
	'authme_db_password' => 'AuthMe Database Lösenord',
	'authme_db_password_hidden' => 'The AuthMe database password is hidden for security reasons.',
	'authme_hash_algorithm' => 'AuthMe Hashing Algoritm',
	'authme_db_table' => 'AuthMe Användartabell',
	'enter_authme_db_details' => 'Var god och ange giltiga databasuppgifter.',
	'authme_password_sync' => 'Synkronisera AuthMe lösenord?',
	'authme_password_sync_help' => 'Om aktiverat, när användarens lösenord uppdateras i spelet, uppdateras lösenordet även på webbplatsen.',
	'minecraft_servers' => 'Minecraft Serverar',
	'account_verification' => 'Minecraft Konto verifikation',
	'server_banners' => 'Server Banners',
	'query_errors' => 'Query Fel',
	'add_server' => '<i class="fa fa-plus-circle"></i> Add Server',
	'no_servers_defined' => 'Inga servrar har definierats än',
	'query_settings' => 'Query Inställningar',
	'default_server' => 'Standard Server',
	'no_default_server' => 'Ingen standard server',
	'external_query' => 'Använd extern query?',
	'external_query_help' => 'Om den standarda serverns query inte fungerar, aktivera det här alternativet.',
	'adding_server' => 'Addar Server',
	'server_name' => 'Server Namn',
	'server_address' => 'Server Addres',
	'server_address_help' => 'Det här är den IP adress eller domän som används för att ansluta till din server, utan porten.',
	'server_port' => 'Server Port',
    'parent_server' => 'Förälder Server',
    'parent_server_help' => 'En förälder server är typiskt den Bungee-instansen som servern är ansluten till, om det finns.',
    'no_parent_server' => 'Ingen förälder server',
    'bungee_instance' => 'BungeeCord Instans?',
    'bungee_instance_help' => 'Välj det här alternativet om servern är en BungeeCord instans.',
    'server_query_information' => 'För att kunna visa en lista över onlinespelare på din webbplats, då <strong>måste</strong> din server ha \'enable-query\' aktiverat i din servers <strong>server.properties</strong> fil',
    'enable_status_query' => 'Aktivera status query?',
    'status_query_help' => 'Om det här är aktiverat visar status sidan den här servern som online eller offline.',
    'show_ip_on_status_page' => 'Show IP on status page?',
    'show_ip_on_status_page_info' => 'If this is enabled, users will be able to view and copy the IP address when viewing the Status page.',
    'enable_player_list' => 'Aktivera spelarlistan?',
    'pre_1.7' => 'Minecraft version äldre än 1.7?',
    'player_list_help' => 'Om detta är aktiverat visar status sidan en lista över online spelare.',
    'server_query_port' => 'Server Query Port',
    'server_query_port_help' => 'Detta är alternativet query.port i serverns <strong>server.properties</strong> filen, du måste ha \'enable-query\' aktiverat för att detta ska funka.',
    'server_name_required' => 'Vänligen ange serverns namn',
    'server_name_minimum' => 'Var god och se till att ditt servernamn är minst 1 tecken',
    'server_name_maximum' => 'Var god och se till att ditt servernamn är högst 20 tecken',
    'server_address_required' => 'Vänligen ange servens adress',
    'server_address_minimum' => 'Var god och se till att ditt server adress är minst 1 tecken',
    'server_address_maximum' => 'Var god och se till att ditt server adress är högst 64 tecken',
    'server_port_required' => 'Vänligen ange servens port',
    'server_port_minimum' => 'Var god och se till att ditt server port är minst 2 tecken',
    'server_port_maximum' => 'Var god och se till att ditt server port är högst 5 tecken',
    'server_parent_required' => 'Vänligen välj en förälder server',
    'query_port_maximum' => 'Var god och se till att ditt server port är högst 5 tecken',
    'server_created' => 'Server har skapats!',
    'confirm_delete_server' => 'Är du säker på att du vill radera den här servern?',
	'server_updated' => 'Server uppdaterats!',
	'editing_server' => 'Redigerar Server',
	'server_deleted' => 'Server har raderats!',
	'unable_to_delete_server' => 'Det gick inte att ta bort servern.',
	'leave_port_empty_for_srv' => 'Du kan lämna porten tom om det är 25565 eller om din domän använder en SRV record.',
    'viewing_query_error' => 'Visar Query Fel',
    'confirm_query_error_deletion' => 'Är du säker på att du vill radera detta query fel?',
    'no_query_errors' => 'Inga query fel har loggade.',
    'new_banner' => '<i class="fa fa-plus-circle"></i> Ny Banner',
	'purge_errors' => 'Rensa ut fel',
	'confirm_purge_errors' => 'Är du säker på att du vill rensa alla fel?',
	'email_errors_purged_successfully' => 'Email errors have been purged successfully.',
	'error_deleted_successfully' => 'The error has been deleted successfully.',
	'no_email_errors' => 'No email errors logged.',
	'email_settings_updated_successfully' => 'Email settings have been updated successfully.',
	'content' => 'Content',
	'mcassoc_help' => 'mcassoc är en extern tjänst som kan användas för att verifiera att användarna äger det Minecraft-konto de har registrerat sig med. För att använda den här funktionen måste du registrera dig för en delad nyckel <a href = "https://mcassoc.lukegb.com/" target="_blank">här</a>.',
	'mcassoc_key' => 'mcassoc Delat Nyckel',
	'mcassoc_instance' => 'mcassoc Instans Nyckel',
	'mcassoc_instance_help' => '<a href="#" onclick="generateInstance();">Klicka för att generera en instans nyckel</a>',
	'mcassoc_error' => 'Var god och se till att du har angivit din delade nyckel korrekt och att du har skapat en instansnyckel korrekt.',
	'updated_mcassoc_successfully' => 'mcassoc inställningar uppdaterades!',
	'force_premium_accounts' => 'Tvinga Premium Minecraft-konton?',
	'banner_background' => 'Banner bakgrund',
	'query_interval' => 'Query intervall (i minuter, måste vara mellan 5 och 60 min)',
	'player_graphs' => 'Player Grafer',
	'player_count_cronjob_info' => 'Du kan ställa in ett cron-jobb för att queria dina servrar varenda {x} minuter med följande kommando:',
	'status_page' => 'Enable status page?',
	'minecraft_settings_updated_successfully' => 'Settings updated successfully.',
	'server_id_x' => 'Server ID: {x}', // Don't replace {x}
	'server_information' => 'Server Information',
	'query_information' => 'Query Information',
	'query_errors_purged_successfully' => 'Query errors purged successfully.',
	'query_error_deleted_successfully' => 'Query error deleted successfully.',
	'banner_updated_successfully' => 'Banner updated successfully. It may take a while for your changes to take effect.',

	// Modules
	'modules_installed_successfully' => 'Alla nya moduler har installerats!',
	'enabled' => 'Aktiverat',
	'disabled' => 'Inaktiverat',
	'enable' => 'Aktivera',
	'disable' => 'Inaktivera',
	'module_enabled' => 'Modul aktiverat.',
	'module_disabled' => 'Modul inaktiverat.',
	'author' => 'Skapare:',
	'author_x' => 'Skapare: {x}', // Don't replace {x}
	'module_outdated' => 'We have detected that this module is intended for Nameless version {x}, but you are running Nameless version {y}', // Don't replace "{x}" or "{y}"
	'find_modules' => 'Find Modules',
	'view_all_modules' => 'View all modules',
	'unable_to_retrieve_modules' => 'Unable to retrieve modules',
	'module' => 'Module',
	'unable_to_enable_module' => 'Unable to enable incompatible module.',

	// Styles
	'templates' => 'Mallar',
	'panel_templates' => 'Panel Templates',
	'template_outdated' => 'Vi har upptäckt att din mall är för Nameless version {x}, men du kör Nameless version {y}', // Don't replace "{x}" or "{y}"
	'active' => 'Aktiv',
	'deactivate' => 'Avaktivera',
	'activate' => 'Activate',
	'warning_editing_default_template' => 'Varning! Det är rekomenderat att inte redigera standard mallen!',
	'images' => 'Bilder',
	'upload_new_image' => 'Ladda upp ny bild',
	'reset_background' => 'Återställ bakgrund',
	'install' => '<i class="fa fa-plus-circle"></i> Installera',
	'template_updated' => 'Mallen har uppdaterats!',
	'default' => 'Standard',
	'make_default' => 'Gör standard',
	'default_template_set' => 'Standard mallen är nu {x}!', // Don't replace {x}
	'template_deactivated' => 'Mallen är nu deaktiverad!',
	'template_activated' => 'Mallen har blivit aktiverat!',
	'permissions' => 'Behörigheter',
	'setting_perms_for_x' => 'Inställer behörigheter för mall {x}', // Don't replace {x}
	'templates_installed_successfully' => 'Några nya mallar har installerats!',
	'confirm_delete_template' => 'Är du säker på att du vill radera den här mallen?',
	'delete' => 'Radera',
	'template_deleted_successfully' => 'Mallen har tagits bort!',
	'background_image_x' => 'Background image: <strong>{x}</strong>', // Don't replace {x}
	'banner_image_x' => 'Banner image: <strong>{x}</strong>', // Don't replace {x}
	'background_directory_not_writable' => 'The <strong>uploads/backgrounds</strong> directory is not writable!',
	'template_banners_directory_not_writable' => 'The <strong>uploads/template_banners</strong> directory is not writable!',
	'template_banner_reset_successfully' => 'Banner reset successfully.',
	'template_banner_updated_successfully' => 'Banner updated successfully.',
	'reset_banner' => 'Reset Banner',
	'find_templates' => 'Find Templates',
	'view_all_templates' => 'View all templates',
	'unable_to_retrieve_templates' => 'Unable to retrieve templates',
	'template' => 'Template',
	'stats' => 'Stats',
	'downloads_x' => 'Downloads: {x}',
	'views_x' => 'Views: {x}',
	'rating_x' => 'Rating: {x}',
	'editing_template_x' => 'Editing template {x}', // Don't replace {x}
	'editing_template_file_in_template' => 'Editing file {x} in template {y}', // Don't replace {x} or {y}
	'cant_write_to_template' => 'Can\'t write to template file! Please check file permissions.',
	'unable_to_delete_template' => 'Unable to fully delete template. Please check file permissions.',
	'background_reset_successfully' => 'Background reset successfully.',
	'background_updated_successfully' => 'Background updated successfully.',
	'unable_to_enable_template' => 'Unable to enable incompatible template.',

	// Users & groups
	'users' => 'Användrare',
	'groups' => 'Grupper',
	'group' => 'Grupp',
	'new_user' => '<i class="fa fa-plus-circle"></i> Ny Användrare',
	'creating_new_user' => 'Skapar en ny användrare',
	'registered' => 'Registrerad',
	'user_created' => 'Användrare har skapats!',
	'cant_delete_root_user' => 'Kan inte radera root användraren!',
	'cant_modify_root_user' => 'Kan inte ändra root användrarens grupp!',
	'user_deleted' => 'Användrare raderat!',
	'confirm_user_deletion' => 'Är du säker på att du vill radera användaren <strong>{x}</strong>?', // Don't replace {x}
	'validate_user' => 'Validera användaren',
	'update_uuid' => 'Uppdatera UUID',
	'update_mc_name' => 'Uppdatera Minecraft Användrarnamnet',
	'reset_password' => 'Återställ lösenord',
	'punish_user' => 'Straffa användaren',
	'delete_user' => 'Radera Användrare',
	'minecraft_uuid' => 'Minecraft UUID',
	'other_actions' => 'Andra val',
	'disable_avatar' => 'Inaktivera Avatar',
	'select_user_group' => 'Du måste välja en grupp.',
	'uuid_max_32' => 'UUID måste vara högst 32 tecken.',
	'title_max_64' => 'Användarnamnet måste vara högst 64 tecken.',
	'group_id' => 'Grupp ID',
	'name' => 'Namn',
	'title' => 'Användrarens Titel',
	'new_group' => '<i class="fa fa-plus-circle"></i> Ny Grupp',
	'group_name_required' => 'Var god och ange ett gruppnamn.',
	'group_name_minimum' => 'Var god och se till att ditt gruppnamn är minst 2 tecken långt.',
	'group_name_maximum' => 'Var god och se till att ditt gruppnamn är högst 20 tecken långt.',
	'creating_group' => 'Skapar en ny grupp',
	'group_html_maximum' => 'Var god och se till att din grupp HTML inte är längre än 1024 tecken.',
	'group_html' => 'Gropp HTML',
	'group_html_lg' => 'Gropp HTML Stor',
	'group_username_colour' => 'Gropp Användrare Färg',
	'group_staff' => 'Är gruppen en personal grupp?',
	'delete_group' => 'Radera Grupp',
	'confirm_group_deletion' => 'Är du säker på att du vill ta bort gruppen {x}?', // Don't replace {x}
	'group_not_exist' => 'Det där gruppen finns inte!',
	'secondary_groups' => 'Sekundära grupper',
	'secondary_groups_info' => 'Användaren får ytterligare behörigheter från dessa grupper. Ctrl + klicka för att välja / avmarkera flera grupper.',
	'unable_to_update_uuid' => 'Kan inte uppdatera UUID.',
	'default_group' => 'Is the group the default group (for new users)?',
	'user_id' => 'User ID',
	'uuid' => 'UUID',
	'group_order' => 'Group Order',
	'group_created_successfully' => 'Group created successfully.',
	'group_updated_successfully' => 'Group updated successfully.',
	'group_deleted_successfully' => 'Group deleted successfully.',
	'unable_to_delete_group' => 'Unable to delete a default group, or a group that can view the StaffCP. Please update the group settings first!',
	'can_view_staffcp' => 'Kan gruppen visa StaffCP?',
	'user' => 'User',
	'user_validated_successfully' => 'User validated successfully.',
	'user_updated_successfully' => 'User updated successfully.',
	'editing_user_x' => 'Editing user {x}', // Don't replace {x}
	'details' => 'Details',

	// Permissions
	'select_all' => 'Välj alla',
	'deselect_all' => 'Avmarkera alla',
	'background_image' => 'Bakgrundsbild',
	'can_edit_own_group' => 'Kan redigera egen grupps behörigheter',
	'permissions_updated_successfully' => 'Behörigheterna uppdaterades!',
	'cant_edit_this_group' => 'Du kan inte redigera gruppens behörigheter!',

	// General Admin language
	'task_successful' => 'Valet har gjorts!',
	'invalid_action' => 'Ogiltig val.',
	'enable_night_mode' => 'Aktivera Nattläge',
	'disable_night_mode' => 'Inaktivera Nattläge',
	'view_site' => 'Visa Sida',
	'signed_in_as_x' => 'Inloggad som {x}', // Don't replace {x}
    'warning' => 'Varning',

    // Maintenance
    'maintenance_mode' => 'Uppbyggnadsläge',
    'maintenance_enabled' => 'Uppbyggnadsläge är nuvarande inaktiverat',
    'enable_maintenance_mode' => 'Aktivera uppbyggnadsläge?',
    'maintenance_mode_message' => 'Uppbyggnadsläge meddelande',
    'maintenance_message_max_1024' => 'Se till att ditt uppbyggnadsläge meddelande är högst 1024 tecken.',

	// Security
	'acp_logins' => 'AdminKP Inloggningar',
	'please_select_logs' => 'Var god och välj loggar att visa',
	'ip_address' => 'IP Adress',
	'template_changes' => 'Malländringar',
	'file_changed' => 'Fil ändrad',
	'all_logs' => 'All Logs',
	'action' => 'Action',
	'action_info' => 'Action Info',

	// Updates
	'update' => 'Uppdatera',
	'current_version_x' => 'Nuvarande version: <strong>{x}</strong>', // Don't replaec {x}
	'new_version_x' => 'Ny version: <strong>{x}</strong>', // Don't replace {x}
	'new_update_available' => 'Det finns en ny uppdatering tillgänglig!',
	'new_urgent_update_available' => 'There is a new urgent update available. Please update as soon as possible!',
	'up_to_date' => 'Din NamelessMC installation kör den nyasta versionen!',
	'urgent' => 'Den här uppdateringen är en brådskande uppdatering',
	'changelog' => 'Ändringslogg',
	'update_check_error' => 'Ett fel uppstod när du letade efter en uppdatering:',
	'instructions' => 'Instruktioner',
	'download' => 'Ladda ner',
	'install_confirm' => 'Var god och se till att du har laddat ner paketet och laddat upp filerna inuti först!',
	'check_again' => 'Check again',

	// Widgets
	'widgets' => 'Widgetar',
	'widget_enabled' => 'Widget aktiverat',
	'widget_disabled' => 'Widget inaktiverat',
	'widget_updated' => 'Widget updated.',
	'editing_widget_x' => 'Redigerar widget {x}', // Don't replace {x}
	'module_x' => 'Module: {x}', // Don't replace {x}
	'widget_order' => 'Widget Order',

    // Online users widget
    'include_staff_in_user_widget' => 'Include staff members in user widget?',
    'show_nickname_instead_of_username' => 'Show user\'s nickname instead of username?',

    // Custom Pages
    'pages' => 'Sidor',
    'custom_pages' => 'Sidor',
    'new_page' => '<i class="fa fa-plus-circle"></i>Ny Sida',
    'no_custom_pages' => 'Inga sidor har skapats än.',
    'creating_new_page' => 'Skapar Sida',
    'page_title' => 'Sido Titel',
    'page_path' => 'Sido Väg (med föregående /, t.ex /example)',
    'page_icon' => 'Sido Ikon',
    'page_link_location' => 'Sido Länk Plats',
    'page_link_navbar' => 'Navfält',
    'page_link_footer' => 'Sidfot',
    'page_link_more' => '"Mer" Rullgardinsmeny',
    'page_link_none' => 'Ingen länk',
    'page_content' => 'Sido Innehåll',
    'page_redirect' => 'Sido Omdirigera?',
    'page_redirect_to' => 'Omdirigerings Länk (med föregående http://)',
    'unsafe_html' => 'Tillåt osäker HTML?',
    'unsafe_html_warning' => 'Aktivering av det här alternativet innebär att alla HTML kan användas på sidan, inklusive potentiellt farlig JavaScript. Aktivera bara detta om du är säker på att din HTML är säker.',
    'include_in_sitemap' => 'Include in sitemap?',
    'sitemap_link' => 'Sitemap link:',
    'basic_page' => 'Basic page?',
    'page_permissions' => 'Sido Behörigheter',
    'view_page' => 'Visa Sida?',
    'editing_page_x' => 'Redigerar Sidan {x}', // Don't replace {x}
    'unable_to_create_page' => 'Det gick inte att skapa sida:',
    'page_title_required' => 'En sido titel krävs.',
    'page_url_required' => 'En sido väg krävs.',
    'link_location_required' => 'En sido länk plats krävs.',
    'page_title_minimum_2' => 'Sido titeln måste minst vara 2 tecken.',
    'page_url_minimum_2' => 'Sido vägen måste minst vara 2 tecken.',
    'page_title_maximum_30' => 'Sido titeln måste högst vara 30 tecken.',
    'page_icon_maximum_64' => 'Sido ikonen måste högst vara 64 tecken.',
    'page_url_maximum_20' => 'Sido vägen måste högst vara 20 tecken.',
    'page_content_maximum_100000' => 'Sido innehållet måste högst vara 100000 tecken.',
    'page_redirect_link_maximum_512' => 'Sido omdirigerings länken måste högst vara 512 tecken.',
    'confirm_delete_page' => 'Är du säker på att du vill ta bort den här sidan?',
    'page_created_successfully' => 'Page created successfully.',
    'page_updated_successfully' => 'Page updated successfully.',
    'page_deleted_successfully' => 'Page deleted successfully.',

    // API
    'api' => 'API',
    'enable_api' => 'Aktivera API?',
    'api_info' => 'API:an tillåter plugins och andra tjänster att interagera med din hemsida, till exempel det <a href="https://namelessmc.com/resources/resource/5-namelessplugin/" target="_blank" >officiella Nameless plugin</a>.',
    'enable_legacy_api' => 'Aktivera äldre API?',
    'legacy_api_info' => 'Äldre API:an tillåter plugins och andra tjänst som använder det gamla Nameless versionen 1 API:an för att fungera med din version 2 hemsida.',
    'confirm_api_regen' => 'Är du säker på att du vill regenerera din API nyckel?',
	'api_key' => 'API Key',
	'api_url' => 'API URL',
	'copy' => 'Copy',
	'api_key_regenerated' => 'The API key has been regenerated successfully.',
    'api_registration_email' => 'API Registrerings Email',
	'show_registration_link' => 'Show registration link',
	'registration_link' => 'Registration Link',
    'link_to_complete_registration' => 'Länk till fullständig registrering: {x}', // Don't replace {x}
    'api_verification' => 'Enable API verification?',
    'api_verification_info' => 'If enabled, accounts can only be verified through the API, for example ingame using the official Nameless plugin. <strong>This option will override email verification, and accounts will be automatically activated!</strong><br />You should set up your default group to have limited permissions, and then update the post-validation group in the StaffCP -> Core -> Registration tab to the full member group with normal permissions.',
    'enable_username_sync' => 'Enable username sync?',
    'enable_username_sync_info' => 'If enabled, website usernames will be updated to match ingame usernames.',
	'api_settings_updated_successfully' => 'API settings updated successfully.',
	'group_sync' => 'Group Sync',
	'group_sync_info' => 'You can configure the API to automatically update a user\'s website group when their ingame group is changed. Simply enter the ingame group name and the website group it should be synchronised with below.',
	'ingame_group' => 'Ingame Group Name',
	'website_group' => 'Website Group',
	'set_as_primary_group' => 'Set as primary group?',
	'set_as_primary_group_info' => 'If enabled, the user\'s primary website group will be updated. If disabled, the ingame group will be added to the user\'s website secondary groups.',
	'ingame_group_maximum' => 'Please ensure your group name is a maximum of 64 characters long.',
	'select_website_group' => 'Please select a website group.',
	'ingame_group_already_exists' => 'A rank sync rule has already been created for that ingame group.',
	'group_sync_rule_created_successfully' => 'The group sync rule has been created successfully.',
	'group_sync_rules_updated_successfully' => 'Group sync rules have been updated successfully.',
	'group_sync_rule_deleted_successfully' => 'The group sync rule has been deleted successfully.',
	'existing_rules' => 'Existing Rules',
	'new_rule' => 'New Rule',

	// File uploads
	'drag_files_here' => 'Dra filer här för att ladda upp.',
	'invalid_file_type' => 'Ogiltig filtyp!',
	'file_too_big' => 'Filen är för stor! Din fil var {{filesize}} och max kan man ha {{maxFilesize}}', // Don't replace {{filesize}} or {{maxFilesize}}
	'allowed_proxies' => 'Allowed Proxies',
	'allowed_proxies_info' => 'Line separated list of allowed proxy IPs.',

	// Error logs
	'error_logs' => 'Error Logs',
	'notice_log' => 'Notice log',
	'warning_log' => 'Warning log',
	'custom_log' => 'Custom log',
	'other_log' => 'Other log',
	'fatal_log' => 'Fatal log',
	'log_file_not_found' => 'Log file not found.',
	'log_purged_successfully' => 'The log has been purged successfully.',

	// Hooks
	'hooks' => 'Webhooks',
	'hooks_info' => 'Webhooks allow external services to be notified when certain events happen. When the specified events happen.',
	'new_hook' => 'New Hook',
	'creating_new_hook' => 'Creating New Webhook',
	'editing_hook' => 'Editing Webhook',
	'delete_hook' => 'Are you sure you want to delete this hook?',
	'hook_url' => 'Webhook URL',
	'hook_type' => 'Webhook Type',
	'hook_events' => 'Events to trigger this webhook',
	'invalid_hook_url' => 'Invalid webhook url',
	'invalid_hook_events' => 'You must select at least 1 event',
	'register_hook_info' => 'User registration',
	'validate_hook_info' => 'User validation',
	'delete_hook_info' => 'User deletion',

	// Sitemap
	'unable_to_load_sitemap_file_x' => 'Unable to load sitemap file {x}', // Don't replace {x}
	'sitemap_generated' => 'Sitemap generated successfully',
	'sitemap_not_writable' => 'The <strong>cache/sitemaps</strong> directory is not writable.',
	'cache_not_writable' => 'The <strong>cache</strong> directory is not writable.',
	'generate_sitemap' => 'Generate Sitemap',
	'download_sitemap' => 'Download Sitemap',
	'sitemap_not_generated_yet' => 'A sitemap has not been generated yet!',
	'sitemap_last_generated_x' => 'The sitemap was last generated {x}', // Don't replace {x}

	// Page metadata
	'page_metadata' => 'Page Metadata',
	'metadata_page_x' => 'Viewing metadata for page {x}', // Don't replace {x}
	'keywords' => 'Keywords',
	'description_max_500' => 'The description must be at most 500 characters.',
	'page' => 'Page',
	'metadata_updated_successfully' => 'Metadata updated successfully.',

	// Dashboard
	'total_users' => 'Total Users',
	'total_users_statistic_icon' => '<i class="fas fa-users"></i>',
	'recent_users' => 'New Users',
	'recent_users_statistic_icon' => '<i class="fas fa-users"></i>',
	'average_players' => 'Average Players',
	'nameless_news' => 'NamelessMC News',
	'unable_to_retrieve_nameless_news' => 'Unable to retrieve the latest news',
	'confirm_leave_site' => 'You are about to leave this site! Are you sure you want to visit <strong id="leaveSiteURL">{x}</strong>?', // don't replace {x} and make sure it has the id leaveSiteURL
	'server_compatibility' => 'Server Compatibility',
	'issues' => 'Issues',

	// Other
	'source' => 'Source',
	'support' => 'Support',
	'admin_dir_still_exists' => 'Warning! The <strong>modules/Core/pages/admin</strong> directory still exists. Please remove this directory.',
	'mod_dir_still_exists' => 'Warning! The <strong>modules/Core/pages/mod</strong> directory still exists. Please remove this directory.',
	'forum_topic_reply_email' => 'Forum Topic Reply',

	// Announcements
	'announcements' => 'Announcements',
	'new_announcement' => 'New Announcement',
	'creating_announcement' => 'Creating Announcement',
	'editing_announcement' => 'Editing Announcement',
	'creating_announcement_success' => 'Announcement created successfully.',
	'editing_announcement_success' => 'Announcement updated successfully.',
	'creating_announcement_failure' => 'Announcement creation failed.',
	'editing_announcement_failure' => 'Announcement update failed.',
	'announcement_icon_instructions' => 'You can also add an icon to each announcement here, for example using <a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank" rel="noopener nofollow">Font Awesome</a>, <a href="https://semantic-ui.com/elements/icon.html" target="_blank" rel="noopener nofollow">Semantic UI</a>.',
	'header' => 'Header',
	'message' => 'Message',
	'pages' => 'Pages',
	'text_colour' => 'Text Colour',
	'background_colour' => 'Background Colour',
	'closable' => 'Closable',
	'can_view_announcement' => 'Can view Announcement',
	'verify_delete_announcement' => 'Are you sure you want to delete this announcement?',
	'deleted_announcement_success' => 'Announcement deleted successfully.',
	'header_required' => 'Header is required.',
	'message_required' => 'Message is required',
	'background_colour_required' => 'Background Colour is required',
	'text_colour_required' => 'Text Colour is required',
);
