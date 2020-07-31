<?php
    
    /**
     * Language array
     * @var array
     *
     * When updating this, ONLY change the valüs on the right hand side.
     * When I push a Prometheus update there will be a new section at the bottom of the en-gb language file each time there's an update.
     * If the new valüs are not set it will fallback to the default ones.
     */
    $lang = array(

        // Navigation bar
        "home" => "Home",
        "store" => "Shop",
        "buy_credits" => "Credits kaufen",
        "raffles" => "Verlosungen",
        "profile" => "Profil",
        "support" => "Hilfe",
        "admin" => "Admin",
        "sign_out" => "Abmelden",
        "sign_in" => "Anmelden",

        // Header errors and messages
        "not_setup" => "Das Interface ist nicht richtig Eingestellt! <a href='admin.php?a=gen&p=settings'>Klicke hier</a> [Admin -> General Settings -> Settings]",
        "header_sandbox" => "PayPal Sandbox ist ativiert. Benutze dies nur zum Tester! Deaktiviere es <a href='admin.php?a=gen&p=paypal'>hier</a>",
        "missing_action" => "Ein oder Mehrere Angebote fehlen!",
        "unfinished_action" => "Du hast eine nicht fertige Einstellung, <a href='profile.php'>hier</a>",

        // Frontpage
        "welcome" => "Willkommen - Anmelden",
        "welcome_text" => "Bitte melde dich mit Steam an um an den Server zu spenden.",

        // News
        "news" => "Neuigkeiten",
        "by" => "Von",
        "no_news" => "Keine Neuigkeiten",
        "no_news_text" => "Es gibt momentan keine Neuigkeiten",
        "no_news_articles" => "Keine Neuigkeiten",

        // Footer
        "tos" => "Nutzungsbedingungen",
        "powered_by" => "Powered by Steam",

        // Store
        "credits" => "Credits",
        "featured_pkg" => "Meistgekauftes Paket",
        "permanent" => "Permanent",
        "non_permanent" => "Zeitbegrenzt",

        "select_credit" => "Credit Paket auswählen",
        "select_raffle" => "Verlosungspaket auswählen",
        "global_packages" => "Allgemeine Pakete",

        // Raffles
        "raffle_ticket" => "Ticket kaufen",
        "raffle_ended" => "Die Verlosung ist zu Ende. Der Gewinner ist: ",
        "raffle_not_compatible" => "Dieses Paket ist nicht mit einem deiner anderen Pakete kompatibel. Zugriff zur Verlosung verweigert.",
        "raffle_already_own" => "Du besitzt dieses Paket bereits. Zugriff zur Verlosung verweigert.",
        "raffle_reached_max" => "Du hast die maximale Anzahl an Verlosungszugriffen erreicht. Zugriff zur Verlosung verweigert.",

        // Support
        "create_ticket" => "Ticket erstellen",
        "ticket_closed" => "Dieses Ticket ist geschlossen.",
        "reply" => "Antworten",
        "create" => "Erstellen",

        // Terms of Service
        "tos_edited" => "Die Nutzungsbedingungen wurden bearbeitet. <a href='tos.php'>Terms of Service</a> Akzeptiere sie bevor du das Paket kaufst!",
        "tos_must_accept" => "Du musst die Nutzungsbedingungen akzeptieren!",
        "tos_accept" => "Akzeptieren",

        // Purchase buttons
        "purchase_paypal" => "Mit PayPal kaufen",
        "purchase_credits" => "Mit Credits kaufen",
        "purchase" => "Kaufen",
        "buy_sign_in" => "Du musst dich anmelden, bevor du etwas kaufen kannst!",
        "buy_already_own" => "Du besitzt dieses Paket bereits!",
        "buy_not_compatible" => "Dieses Paket ist nicht mit einem deiner anderen Pakete kompatibel!",
        "buy_they_already_own" => "Diese Person besitzt dieses Paket bereits!",
        "buy_they_not_compatible" => "Dieses Paket ist nicht mit einem anderen Paket dieser Person kompatibel!",

        // Packages
        "buying_someone_else" => "Kaufst du für jemand anderen?",
        "buying_yourself" => "Im Moment kaufst du für dich selbst.",
        "buying_for" => "Im Moment kaufst du für ",
        "packages_custom_amount" => "Benutzerdefinierte Anzahl",

        "packages_not_available" => "Für diesen Server sind keine Pakete verfügbar.",
        "raffle_not_available" => "Im Moment sind keine Verlosungspakete verfügbar.",
        "credit_not_available" => "Im Moment sind keine Credit Pakete verfügbar.",

        // Buttons
        "submit" => "Bestätigen",

        // Profile
        "non_perm_pkg" => "Zeitbegrenztes Paket",
        "perm_pkg" => "Permanente(s) Paket(e)",
        "acc_info" => "Account Information",
        "pkg_history" => "Paket Verlauf",
        "acc_credits" => "Credits",
        "transfer_credits" => "Credits überweisen",
        "package" => "Paket",

        // Tables
        "id" => "ID",
        "user" => "Benutzer",
        "description" => "Beschreibung",
        "timestamp" => "Zeitstempel",
        "action" => "Aktion",
        "replies" => "Antworten",
        "view" => "Ansehen",

        // Select boxes
        "select_server" => "Server wählen:",
        "select_currency" => "Währung wählen:",
        "select_category" => "Kategorie wählen:",
        "none" => "Keine(n)",

        // Modals
        "yes" => "Ja",
        "no" => "Nein",
        "sure" => "Bist du sicher?",
        "sure_cur" => "Bist du sicher, dass du diese Währung löschen möchtest?",
        "sure_srv" => "Bist du dir sicher, dass du diesen Server löschen möchtest?",
        "sure_cat" => "Bist du dir sicher, dass du diese Kategorie löschen möchtest?",

        // Dangerous settings
        "dangerous" => "Gefährliche Einstellungen",
        "danger_cur" => "Alternativ, kannst du diese Währung löschen.",
        "danger_srv" => "Nicht den Server löschen, es sei denn, ihm sind keine Pakete zugewiesen!",
        "danger_cat" => "Nicht die Kategorie löschen, es sei denn, ohr sind keine Pakete zugewiesen!",
        "delete" => "Löschen",

        // Admin nav
        "dashboard" => "Dashboard",
        "general_settings" => "Allgemeine Einstellungen",
        "support_tickets" => "Support Tickets",
        "servers" => "Server",
        "currencies" => "Währungen",
        "categories" => "Kategorien",
        "packages_and_actions" => "Pakete & Aktionen",
        "credit_packages" => "Credit Pakete",
        "raffles" => "Verlosungen",
        "theme_editor" => "Theme editor",
        "documentation" => "Documentation",

        // General Settings
        "settings" => "Einstellungen",
        "main_page" => "Hauptseite",
        "integration_settings" => "Integration Einstellungen",
        "ingame_notifications" => "Ingame Benachrichtigungen",

        // Servers page
        "add_srv" => "Server hinzufügen",
        "edit_srv" => "Server bearbeiten",
        "server_name" => "Server Name",
        "featured_pkg_short" => "Meistgekauftes Paket",

        // Currency page
        "add_cur" => "Währung hinzufügen",
        "edit_cur" => "Währung bearbeiten",
        "cc" => "Währungs Code",

        // Category page
        "add_cat" => "Kategorie hinzufügen",
        "edit_cat" => "Kategorie bearbeiten",
        "cat_name" => "Kategorie Name",

        // Dashboard nav
        "main_dashboard" => "Haupt Dashboard",
        "sale" => "Sale",
        "transactions" => "Transaktionen",
        "users" => "Benutzer",
        "logs" => "Logs",
        "update_sql" => "Update SQL",
        "other_features" => "Andere Features",

        // Admin dashboard
        "total" => "Gesamt",
        "full_total" => "Insgesamt",
        "dashboard_text" => "Willkommen im Admin Dashboard. Hier kannst du Statistiken über die Spenden sehen.",

        /**
         * New in 1.4.7.2
         */
        "welcome_main" => "Willkommen",
        "need_credits" => "Du brauchst mehr Credits? <a href='store.php?page=credits'>Schau mal hier!</a>",
        "no_history" => "Keinen Verlauf",
        "amount" => "Anzahl",
        "you_have_none" => "Du hast keine(n)",

        "add_cre" => "Credit Paket hinzufügen",
        "edit_cre" => "Credit Paket bearbeiten",
        "pack_title" => "Paket Titel",
        "price" => "Preis",
        "currency" => "Währung",
        "sure_cre" => "Bist du sicher, dass du dieses Credit Paket löschen möchtest?",
        "danger_cre" => "Alternativ, kannst du dieses Vredit Paket löschen.",
        "select_package" => "Paket auswählen:",
        "choose_cre" => "Credit Paket auswählen",
        "brief_desc" => "Kurzbeschreibung",
        "amt_of_cre" => "Anzahl Credits",
        "price_of_pkg" => "Paketpreis",
        "no_support" => "Du hast keine Support Tickets",
        "no_other_available" => "Kein anderes Paket verfügbar",

        /**
         * New in 1.4.8
         */
        "purchase_free" => "Bekomme dieses Paket kostenlos!",
        "dashboard_revenügraph" => "Einnahmen Graf",
        "dashboard_revenücurrency" => "In deiner Hauptwährung angezeigt",
        "dashboard_packagesgraph" => "Paket Sales",
        "dashboard_serversgraph" => "Server Sales",
        "between" => "Zwischen",
        "and" => "Und",

        /**
         * New in 1.4.9
         */
        "free" => "Kostenlos",
        "buy_own_free" => "Du besitzt dieses kostenlose Paket bereits. Du kannst es nicht zweimal anfordern.",
        
        /**
         * New in 1.4.9.2
         */
        "updates" => "Updates",

        /**
         * New in 1.4.9.3
         */
        "header_sqlupdate" => "Es gibt ein neüs <a href='admin.php?update'>MySQL Update!</a>",
        "monthly_goal" => "Monatliches Ziel",
        
        /**
         * New in 1.4.9.6
         */
        "payment_success" => "Zahlung erfolgreich!",
        "profile_updated" => "Dein Profil wurde aktualisiert.",
        "payment_failed" => "Zahlung fehlgeschlagen!",
        "check_credits" => "Bitte überprüfe ob du genug Credits hast um dieses Paket zu kaufen!",
        "not_authorised" => "Du bist nicht berechtigt diesen Bereich zu sehen. Melde dich zürst an!",
        
        /**
         * New in 1.5
         */
        "wiki" => "Wiki",
        "no_graph_info" => "Keine Graphinfo",
        "no_graph_info_text" => "Graphinfo wird nicht angezeigt, weil noch keine Transaktionen vorhanden sind!",
        "paymentwall_purchase" => "Mit Paymentwall kaufen",
        "stripe_purchase" => "Mit Stripe kaunfen",
        "payment_gateways" => "Zahlungsmöglichkeiten",
        "advanced" => "Erweitert",
        "no_servers" => "Momentan sind keine Server verfügbar.",
        "entries" => "Zugänge",
        "you_can_enter" => "Du kannst eintreten.",
        "times_more" => "mal mehr",
        "dashboard_creditsrevenü" => "This graph also compares credits spent to money spent. Although credits are aquired with money. (Credits = <font color='#9c9c9c'><b>Gray</b></font>, Money = <font color='#c10000'><b>Red</b></font>)",
        "pkg_discounted" => "Dieses Paket ist ausverkauft, da du es bereits besitzt.",

        "compatible_text" => "Solange du dieses Paket besitzt, kannst du die Pakete unten nicht besitzen",
        "not_compatible" => "Nicht kompatibel mit",

        "packages" => "Pakete",
        "upgradeable_text" => "Wenn sie das ausgewählte Paket besitzen, erhalten sie dieses vergünstigt.",
        "upgradeable" => "Verbesserbar mit",

        "assign_actions" => "Aktionen festlegen",
        "actions_text" => "Lege fest welche Aktion das Paket ausführen soll, nachdem der Spieler es gekauft hat.",
        "actions" => "Aktionen",
        "servers" => "Server",
        "label_amount" => "Label Anahl",
        "add_package" => "Paket hinzufügen",
        "edit_package" => "Paket bearbeiten",
        "labels" => "Labels",
        "title" => "Titel",
        "category" => "Kategorie",
        "no_packages" => "Momentan sind keine Pakete im System",
        
        /**
         * New in 1.5.0.2
         */
        "hide" => "Paket verstecken",
        "hide_text" => "Wenn du keins der unten ausgewählten Pakete besitzt, verstecke sie im Shop",
        
        /**
         * New in 1.5.0.6
         */
        "signin" => "Anmelden",
        "welcome_signin" => "Du musst dich erst anmelden bevor du ein Paket kaufen kannst",
        "blacklist_notext" => "Du musst eine korrekte Steam64 oder SteamID eingeben",
        "blacklist_success" => "Du hast diese Person erfolgreich geblacklistet",
        "blacklisted_you" => "Du bist von jeglichem Verkauf von Paketen in dieser Community ausgeschlossen",
        "blacklisted_them" => "Diese Person ist von Verkaufen in dieser Community ausgeschlossen. Du kannst nichts für ihn kaufen",

        "recent_donators" => "Letzte Donator",
        "name" => "Name",
        "recent_none" => "In letzter zeit hat keiner gespendet",
        "raffle_free" => "Tritt kostenlos bei!",
        
        /**
         * New in 1.5.0.8
         */
        "top_donators" => "Top Donator",
        "top_none" => "Es gibt momentan noch keine Donator",

        /**
         * New in 1.5.0.9
         */
        "step" => "Schritt",

        /**
         * New in 1.5.1
         */
        "permission_groups" => "Admin Gruppen",
        "add_permission" => "Admin Gruppe hinzufügen",
        "edit_permission" => "Admin Gruppe bearbeiten",
        "permissions" => "Rechte",
        "no_perm" => "Sorry, aber das darfst du leider nicht machen (nicht genügend Rechte)",

        /**
         * New in 1.5.1.2
         */
        "select_gateway" => "Zahlungsmethode auswählen",

        /**
         * New in 1.5.2
         */
        "buy_disable" => "Pakete deaktivieren",
        "buy_disable_text" => "Deaktiviere diese Pakete wenn du dieses Paket kaufst",

        "credits_dösntexist" => "DieserBenutzer existiert in unserem System nicht.",
        "credits_yourself" => "Du kannst Credits nicht an dich selbst senden.",
        "credits_steamid" => "Versuche eine andere SteamID",
        "credits_transferringto" => "übertragen an:",

        "type" => "Typ",
        "gateway" => "Zugang",
        "no_users" => "Keine Benutzer gefunden",

        "view_profile" => "Profil anschaün",
        "view_blacklist" => "Blacklist anschaün",

        "manage" => "Verwalten",
        "users_search" => "Nach Namen, Steam64 oder SteamID suchen",

        "transaction" => "Transaktion",
        "delivered" => "Ausgeliefert",
        "state" => "Status",
        "assign_package" => "Paket zuweisen",
        "set_credits" => "Credits setzen",
        "give_ticket" => "Ticket geben",
        "del_inactive_actions" => "Inaktive Aktionen löschen",

        "select_pkg" => "Paket auswählen",
        "do_assign_actions" => "Aktionen ausführen",
        "dont_assign_actions" => "Aktionen nicht ausführen",
        "clone_expiretime" => "verbleibende Zeit vom letzten Paket des gleichen Typs kopieren",
        "assign" => "Zuweisen",

        "set" => "Setzen",
        "disable" => "Deaktivieren",
        "enable" => "Aktivieren",
        "inactive_everyone" => "Für jeden inaktiv setzen",
        "del" => "Del",
        "edit" => "Bearbeiten",

        "sale_settings" => "Sale Einstellungen",
        "sale_text" => "Wähle die Pakete, welche im Sale angeboten werden sollen.",
        "message" => "Nachricht",
        "percentage" => "Prozent",
        "end_date" => "End Datum",

        "update" => "Update",
        "automatic_updates" => "Automatische Updates",
        "dl_lua" => "Aktüllste Lua Dateien downloaden",
        "dl_web" => "Aktüllste Web Dateien downloaden",
        "no_write_perm" => "Dein Updates Ornder hat keine Schreib-Rechte! Automatische Updates werden nicht funktionieren, bis du ihm die Rechte 777 vergeben hast! <br> Hier kannst du das Update manüll downloaden",
        "newest_version" => "Die neüste Version:",

        "test_message" => "Test Nachricht an den Server senden",
        
        /**
         * New in 1.5.2.2
         */
        
        "find_more" => "Hier gibt es genaüre Infos!",

        /**
         * New in 1.5.3
         */
        
        "duplicate" => "Kopieren",
        "other" => "Andere",
        "someone_else" => "Wie auch immer, du kannst es noch immer für jemand anderen kaufen",

        /**
         * New in 1.5.4 -- Do not replace $1, $2, $3 etc, they get replaced with numbers and stuff automatically, so keep them there!
         */
        
        "here" => "hier", // This is $1 in 'job_already_created' because it's wrapped in a link
        "job_already_created" => "Du hast bereits einen eigenen Job erstellt. Wenn du direkt bezahlen möchtest klicke $1. Ansonsten kannst du einen neün Job erstellen.",
        
        "general_info" => "Generelle Information",
        "preferences" => "Präferenzen",

        "job_name" => "Job Name",
        "chat_cmd" => "Chat Command um diesen Job zu erhalten",
        "job_desc" => "Job Beschreibung",
        "job_colour" => "Job Farbe",

        "weapons" => "Waffen",
        "models" => "Models",
        "model" => "Model",
        
        "job_costs" => "Kostet $1 oder $2 Credits",

        "friends" => "Freunde",
        "friends_max" => "<h6>Freunde - $1 max</h6>",
        "friends_add" => "Für jeden Freund den du hinzufügst, kostet es $1 oder $2 Credits mehr",
        "friends_not" => "Du darfst keine Freunde zu diesem Paket hinzufügen",

        "salary" => "Gehalt",
        "salary_static" => "Dein Gehalt wird $1 betragen",
        "salary_base" => "Das normale Gehalt beträgt $1. Für jede Nummer die du hoch gehst, erhöht sich der Preis um $2 oder $3 Credits",
        "salary_max" => "<h6>Gehalt - $1 max times to scale</h6>",
        "salary_current" => "Dein aktülles Gehalt beträgt: $1",

        "license" => "Lizenz",
        "license_included" => "Du bekommst eine Lizent mit diesem Job",
        "license_include" => "Lizenz - Kostet $1 oder $2 Credits",
        "license_no" => "Du bekommst keine Lizenz",

        "payment_confirmation" => "Zahlungsbestätigung",
        "job_total" => "Momentane Kosten: $1 oder $2 Credits",
        "job_proceed" => "Zur Kasse",

        /**
         * New in 1.5.5
         */
        
        "job_total_nocredits" => "Momentane Kosten: $1",
        "job_total_onlycredits" => "Momentane Kosten: $1 Credits",
        
        "earned_total" => "GESAMTER GEWINN",
        "earned_week" => "GEWINN DIESER WOCHE",
        "earned_month" => "GEWINN DIESES MONATS",

        "real_transaction" => "Als reelle Transaktion behandeln",
        "not_real_transaction" => "Nicht als reelle Transaktion behandeln(Das Geld wird nicht zu irgendwelchen Stats hinzugefügt)",
        
        /**
         * New in 1.6
         */

        "active_everyone" => "Für jeden aktivieren",
        "buy_others_disabled" => "Die Möglichkeit etwas für andere kaufen ist deaktiviert",
        "job_skip_prize" => "überspringen - Nur wenn du diesen Verlosungspreis nicht in Anspruch nehmen möchtest",

        "move_packages" => "Klicke $1 um Pakete zu bewegen",

        "add" => "Hinzufügen",
        "edit" => "Bearbeiten",

        // Theme
        "theme" => "Thema",
        "danger_theme" => "Lösche dieses Thema nur, wenn du es aktüll nicht benutzt!",
        "sure_theme" => "Bist du sicher, dass du dieses Thema löschen möchtest?",
        "theme_name" => "Themen Name",
        
        "edit_theme" => "Thema bearbeiten",
        "add_theme" => "Thema hinzufügen",
        "select_theme" => "Thema hinzufügen",

        // Imprint page
        "imprint" => "Impressun",
        "enable_imprint" => "Impressum aktivieren",
        "company_name" => "Name des Unternehmens",
        "street_address" => "Strasse",
        "post_address" => "Postleitzahl, Stadt",
        "country" => "Land",
        "trade_register" => "Handelsregister",
        "company_id" => "Unternehmens ID",
        "company_ceo" => "CEO",
        "contact_email" => "Kontakt EMail",
        "contact_phone" => "Kontakt Telefon",

        /**
         * New in 1.6.1
         */
        "game" => "Spiel",
        "server_ip" => "Server IP",
        "server_port" => "Server port",
        "server_rcon" => "Server RCon",

        "edit_raffle" => "Verlosung bearbeiten",
        "add_raffle" => "Verlosung hinzufügen",
        "select_raffle" => "Verlosung auswählen:",

        "package_cantbuy" => "Du kannst dieses Paket nicht kaufen ohne eines der folgenden Pakete zu besitzen: $1",
        "package_they_cantbuy" => "Dieses Paket kann nicht gekauft werden ohne eines der folgenden Pakete zu besitzen: $1",

        "hide" => "Wenn du keines dieser Pakete besitzt, kannst du dieses nicht bekommen",
        "hide_text" => "Wenn du keines der unten ausgewählten Pakete besitzt, kann dieses Paket nicht gekauft werden",

        "your_spendings" => "Deine Spenden der letzten 5 Monate",
        "spendings_currency" => "Die Spenden werden in der Website Haupt Währung [$1] angezeigt. Dieser Graph vergleicht Credit Spenden mit Geld Spenden. (Credits = <font color='#9c9c9c'><b>Gray</b></font>, Geld = <font color='#c10000'><b>Red</b></font>)",
    
        "spent_total" => "INSGESAMT GESPENDET",
        "spent_week" => "DIESE WOCHE GESPENDET",
        "spent_month" => "DIESEN MONAT GESPENDET",

        /**
         * New in 1.6.1.5
         */
        "advent_calendar" => "Adventskalender",
        "advent" => "Advent",
        "day" => "Tag",
        "advent_opened" => "Du hast heute $1 geöffnet und $2 erhalten!",
        "advent_nopkg" => "Für heute ist kein Geschenk eingetragen. Bitte den Support darüber informieren!",
        "advent_text" => "Bekomme jeden Tag ein kostenloses Geschenk vom 1. Dezember bis zum 24. Dezember!",

        /**
         * New in 1.6.2
         */
        "coupons" => "Gutscheine",
        "add_cou" => "Gutschein Hinzufügen",
        "edit_cou" => "Gutschein Bearbeiten",
        "select_cou" => "Gutschein auswählen",
        "sure_cou" => "Bist du sicher, dass du diesen Gutschein löschen willst?",
        "coupon_text" => "Wenn du einen Gutschein-Code hast, füge ihn hier ein :)",
    );
