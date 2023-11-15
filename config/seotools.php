<?php

/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => false, // set false to total remove
            'titleBefore'  => false,
            'description'  => 'Welcome to Synex Digital - your trusted partner for web application development, web development, UI/UX design, and more. Let us bring your digital dreams to life.', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => [
                'Synex Digital',
                'Web Development Agency',
                'Web Application Development',
                'UI/UX Design Services',
                'Custom Web Solutions',
                'Innovative Website Development',
                'Full-Stack Development',
                'Digital Agency Services',
                'Web Development Experts',
                'Web Development Company',
                'Professional Web Developers',
                'Creative Web Design',
                'Web Development Services',
                'SEO-Friendly Web Development'
            ],
            'canonical'    => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => false, // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Synex Digital | Your Web Development and UI/UX Design Partner', // set false to total remove
            'description' => 'Welcome to Synex Digital - your trusted partner for web application development, web development, UI/UX design, and more. Let us bring your digital dreams to life.', // set false to total remove
            'url'         => 'http://synexdigital.com', // Set null for using Url::current(), set false to total remove
            'type'        => 'Digital Web Development and UI/UX Design Agency',
            'site_name'   => 'Synex Digital',
            'images'      => ['http://synexdigital.com/asset/Frontend/logo_dsefault.png'],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'         => 'Synex Digital | Your Web Development and UI/UX Design Partner', // set false to total remove
            'description'   => 'Welcome to Synex Digital - your trusted partner for web application development, web development, UI/UX design, and more. Let us bring your digital dreams to life.', // set false to total remove
            'url'           => 'http://synexdigital.com', // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'          => 'Organization',
            'images'        => ['http://synexdigital.com/asset/Frontend/logo_dsefault.png'],

            "name"          => "Synex Digital",
            "logo"          => "http://synexdigital.com/asset/Frontend/logo_dsefault.png",

            "address"       => [
                "@type"             => "PostalAddress",
                "streetAddress"     => "Dhanmondi",
                "addressLocality"   => "Dhaka",
                "addressRegion"     => "Dhaka",
                "postalCode"        => "1208",
                "addressCountry"    => "Bangladesh"
            ],
            "contactPoint" => [
                "@type"         => "ContactPoint",
                "telephone"     => "+8801757647319",
                "contactType"   => "Customer Support",
                "email"         => "digitalsynex@gmail.com"
            ],
            "sameAs"        => [
                "https://www.upwork.com/ag/synexdigital",
                "https://www.linkedin.com/company/synex-digital",
            ],
            "foundingDate"  => "2023",
            "founder"      => [
                [
                    "@type"     => "Person",
                    "name"      => "Ali Imran Mehedi",
                    "sameAs"    => "https://www.linkedin.com/in/ali-imran-mehedi-601bab290",
                    "image"     => "https://media.licdn.com/dms/image/D4E03AQGmCJN8rN374Q/profile-displayphoto-shrink_200_200/0/1694458382289?e=1701907200&v=beta&t=gHFXBV7cAki0gPqaGmzF74aeiNGWK6DdFyvREKjM0vc",
                    "jobTitle"  => "Founder"
                ],
                [
                    "@type"     => "Person",
                    "name"      => "Md Ismail Hossain",
                    "sameAs"    => "https://www.linkedin.com/in/md-ismail-hossain-911a96236",
                    "image"     => "https://media.licdn.com/dms/image/C5603AQHb9Gbn9OLYUA/profile-displayphoto-shrink_200_200/0/1664188182447?e=1701907200&v=beta&t=giVYihC6XF4cYBupoObOYadjq-cqAkQ82qaqDRoUus4",
                    "jobTitle"  => "Founder"
                ]
            ],
            "employees"     => "10+",
            "keywords"      => "web development, web application development, UI/UX design, digital agency"
        ],
    ],
];
