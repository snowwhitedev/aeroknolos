<?php

return [
    'plugin' => [
        'name' => 'Blog',
        'description' => 'Robustná blogová platforma.'
    ],
    'blog' => [
        'menu_label' => 'Blog',
        'menu_description' => 'Správa blogových príspevkov',
        'posts' => 'Príspevky',
        'create_post' => 'Príspevok',
        'categories' => 'Kategórie',
        'create_category' => 'Kategórie príspevkov',
        'tab' => 'Blog',
        'access_posts' => 'Správa blogových príspevkov',
        'access_categories' => 'Správa blogových kategórií',
        'access_other_posts' => 'Správa blogových príspevkov ostatných užívateľov',
        'access_import_export' => 'Možnosť importu a exportu príspevkov',
        'access_publish' => 'Možnosť publikovať príspevky',
        'delete_confirm' => 'Ste si istý?',
        'chart_published' => 'PublikovanéPublished',
        'chart_drafts' => 'Koncepty',
        'chart_total' => 'Celkom'
    ],
    'posts' => [
        'list_title' => 'Správa blogových príspevkov',
        'filter_category' => 'Kategória',
        'filter_published' => 'Publikované',
        'filter_date' => 'Dátum',
        'new_post' => 'Nový príspevok',
        'export_post' => 'Exportovať príspevky',
        'import_post' => 'Importovať príspevky'
    ],
    'post' => [
        'title' => 'Názov',
        'title_placeholder' => 'Názov nového príspevku',
        'content' => 'Obsah',
        'content_html' => 'HTML Obsah',
        'slug' => 'URL príspevku',
        'slug_placeholder' => 'url-nového-príspevku',
        'categories' => 'Kategórie',
        'author_email' => 'Email autora',
        'created' => 'Vytvorené',
        'created_date' => 'Dátum vytvorenia',
        'updated' => 'Upravené',
        'updated_date' => 'Dátum upravenia',
        'published' => 'Publikované',
        'published_date' => 'Dátum publikovania',
        'published_validation' => 'Prosím zvoľte dátum publikovania príspevku',
        'tab_edit' => 'Upraviť',
        'tab_categories' => 'Kategórie',
        'categories_comment' => 'Vyberte kategórie do ktorých tento príspevok patrí',
        'categories_placeholder' => 'Neexistujú žiadne kategórie, najprv nejakú vytvorte!',
        'tab_manage' => 'Nastavenia',
        'published_on' => 'Dátum publikovania',
        'excerpt' => 'Výňatok príspevku',
        'summary' => 'Zhrnutie',
        'featured_images' => 'Obrázky',
        'delete_confirm' => 'Zmazať tento príspevok?',
        'delete_success' => 'Vybrané príspevky boli úspešne odstránené.',
        'close_confirm' => 'Príspevok nie je uložený.',
        'return_to_posts' => 'Späť na zoznam príspevkov'
    ],
    'categories' => [
        'list_title' => 'Správa blogových kategórií',
        'new_category' => 'Nová kategória',
        'uncategorized' => 'Nezaradené'
    ],
    'category' => [
        'name' => 'Názov',
        'name_placeholder' => 'Názov novej kategórie',
        'description' => 'Popis',
        'slug' => 'URL kategórie',
        'slug_placeholder' => 'url-novej-kategórie',
        'posts' => 'Počet príspevkov',
        'delete_confirm' => 'Zmazať túto kategóriu?',
        'delete_success' => 'Vybrané kategórie boli úspešne odstránené.',
        'return_to_categories' => 'Späť na zoznam kategórií',
        'reorder' => 'Zmeniť poradie kategórií'
    ],
    'menuitem' => [
        'blog_category' => 'Blogová kategória',
        'all_blog_categories' => 'Všetky blogové kategórie',
        'blog_post' => 'Blogové príspevky',
        'all_blog_posts' => 'Všetky blogové príspevky',
        'category_blog_posts' => 'Blogové príspevky v kategórií'
    ],
    'settings' => [
        'category_title' => 'Zoznam kategórií',
        'category_description' => 'Zobrazí zoznam blogových kategórií na stránke.',
        'category_slug' => 'URL kategórie',
        'category_slug_description' => "Nájde blogovú kategóriu s týmto URL. Používa sa pre zobrazenie aktívnej kategórie.",
        'category_display_empty' => 'Zobraziť prázdne kategórie',
        'category_display_empty_description' => 'Zobrazí kategórie, ktoré nemajú žiadne príspevky.',
        'category_page' => 'Stránka kategórie',
        'category_page_description' => 'Názov stránky kategórie kam budú smerovať odkazy na kategóriu. Táto hodnota je použitá v predvolenej čiastočnej stránke komponentu.',
        'post_title' => 'Príspevok',
        'post_description' => 'Zobrazí blogový príspevok na stránke.',
        'post_slug' => 'URL príspevku',
        'post_slug_description' => "Nájde blogový príspevok s týmto URL.",
        'post_category' => 'Stránka kategórie',
        'post_category_description' => 'Názov stránky kategórie kam budú smerovať odkazy na kategóriu. Táto hodnota je použitá v predvolenej čiastočnej stránke komponentu.',
        'posts_title' => 'Zoznam príspevkov',
        'posts_description' => 'Zobrazí zoznam blogových príspevkov na stránke.',
        'posts_pagination' => 'číslo stránky',
        'posts_pagination_description' => 'Táto hodnota je použitá na určenie na akej stránke sa užívateľ nachádza.',
        'posts_filter' => 'Filter kategórií',
        'posts_filter_description' => 'Zadajte URL kategórie alebo URL parameter na filtrovanie príspevkov. Nechajte prázdne pre zobrazenie všetkých príspevkov.',
        'posts_per_page' => 'Príspevkov na stránku',
        'posts_per_page_validation' => 'Neplatný formát hodnoty počtu príspevkov na stránku',
        'posts_no_posts' => 'Správa prázdnej stránky',
        'posts_no_posts_description' => 'Správa, ktorá bude zobrazená v zozname príspevkov v prípade, že nie sú žiadne na zobrazenie. Táto hodnota je použitá v predvolenej čiastočnej stránke komponentu.',
        'posts_no_posts_default' => 'Nenašli sa žiadne príspevky',
        'posts_order' => 'Zoradenie príspevkov',
        'posts_order_description' => 'Atribút podľa ktorého budú príspevky zoradené',
        'posts_category' => 'Stránka kategórie',
        'posts_category_description' => 'Názov stránky kategórie kam budú smerovať odkazy "Vložené do". Táto hodnota je použitá v predvolenej čiastočnej stránke komponentu.',
        'posts_post' => 'Stránka príspevku',
        'posts_post_description' => 'Názov stránky príspevku kam budú smerovať odkazy "Zistiť viac". Táto hodnota je použitá v predvolenej čiastočnej stránke komponentu.',
        'posts_except_post' => 'Okrem príspevku',
        'posts_except_post_description' => 'Zadajte ID/URL alebo premennú s ID/URL príspevku, ktorý chcete vylúčiť',
        'posts_except_categories' => 'Okrem kategórií',
        'posts_except_categories_description' => 'Zadajte zoznam kategórií oddelený čiarkami alebo premennú s týmto zoznamom, ktoré chcete vylúčiť',
        'rssfeed_blog' => 'Stránka blogu',
        'rssfeed_blog_description' => 'Názov hlavnej stránky blogu na generovanie odkazov. Táto hodnota je použitá v predvolenej čiastočnej stránke komponentu.',
        'rssfeed_title' => 'RSS Kanál',
        'rssfeed_description' => 'Vygeneruje RSS kanál, ktorý obsahuje blogové príspevky.',
        'group_links' => 'Odkazy',
        'group_exceptions' => 'Výnimky'
    ],
    'sorting' => [
        'title_asc' => 'Názov (vzostupne)',
        'title_desc' => 'Názov (zostupne)',
        'created_asc' => 'Vytvorené (vzostupne)',
        'created_desc' => 'Vytvorené (zostupne)',
        'updated_asc' => 'Upravené (vzostupne)',
        'updated_desc' => 'Upravené (zostupne)',
        'published_asc' => 'Publikované (vzostupne)',
        'published_desc' => 'Publikované (zostupne)',
        'random' => 'Náhodne'
    ],
    'import' => [
        'update_existing_label' => 'Aktualizovať existujúce príspevky',
        'update_existing_comment' => 'Začiarknutím tohto políčka aktualizujte príspevky, ktoré majú presne to isté ID, titul alebo URL príspevku.',
        'auto_create_categories_label' => 'Vytvoriť kategórie zadané v importovanom súbore',
        'auto_create_categories_comment' => 'Ak chcete túto funkciu použiť, mali by sa zhodovať so stĺpcom Kategórie, inak vyberte predvolené kategórie, ktoré chcete použiť z nižšie uvedených položiek.',
        'categories_label' => 'Kategórie',
        'categories_comment' => 'Vyberte kategórie, do ktorých budú patriť importované príspevky (voliteľné).',
        'default_author_label' => 'Predvolený autor príspevku (voliteľné)',
        'default_author_comment' => 'Import sa pokúsi použiť existujúceho autora, ak sa zhoduje so stĺpcom e-mail, inak sa použije vyššie uvedený autor.',
        'default_author_placeholder' => '-- vyberte autora --'
    ]
];