<?php

return [

    'header'  => 'पोस्ट',
    'empty'   => [
        'description' => 'कोई पोस्ट नहीं मिली, द्वारा शुरू करें',
        'action'      => 'एक नई पोस्ट जोड़ना',
    ],
    'search'  => [
        'input' => 'खोज...',
        'empty' => 'दिए गए खोज मानदंडों से कोई भी पद मेल नहीं खाता है।',
    ],
    'details' => [
        'published' => 'प्रकाशित',
        'draft'     => 'प्रारूप',
        'updated'   => 'अपडेट किया गया',
    ],
    'forms'   => [
        'editor'   => [
            'title'  => 'शीर्षक',
            'body'   => 'अपनी कहानी बताओ ...',
            'link'   => 'लिंक चिपकाएँ या लिखें ...',
            'html'   => [
                'label'       => 'HTML एम्बेड करें',
                'placeholder' => 'अपना HTML यहाँ पेस्ट करें',
            ],
            'images' => [
                'featured' => [
                    'title'       => 'चुनिंदा चित्र कैप्शन',
                    'placeholder' => 'अपनी छवि के लिए एक कैप्शन जोड़ें',
                ],
                'picker'   => [
                    'greeting'    => 'कृप्या',
                    'action'      => 'अपलोड',
                    'item'        => 'एक छवि',
                    'operator'    => 'या',
                    'unsplash'    => 'खोज अनपलाश',
                    'key'         => 'कृपया अपनी Unsplash API कुंजी कॉन्फ़िगर करें।',
                    'placeholder' => 'मुफ्त उच्च-रिज़ॉल्यूशन फ़ोटो खोजें',
                    'clear'       => [
                        'action'      => 'हटाना',
                        'description' => 'चयनित छवि',
                    ],
                    'caption'     => [
                        'by' => 'के द्वारा तस्वीर',
                        'on' => 'पर',
                    ],
                    'search'      => [
                        'empty' => 'हमें कोई मैच नहीं मिला।',
                    ],
                    'uploader'    => [
                        'label'   => 'छवि जोड़ें',
                        'caption' => [
                            'placeholder' => 'छवि के लिए कैप्शन लिखें (वैकल्पिक)',
                        ],
                        'layout'  => [
                            'default' => 'मूलभूत ढांचा',
                            'wide'    => 'चौड़ी छवि',
                        ],
                    ],
                ],
            ],
        ],
        'image'    => [
            'header' => 'निरूपित चित्र',
        ],
        'publish'  => [
            'header'  => 'प्रकाशित तिथि (m/d/y h:m)',
            'subtext' => [
                'details'  => 'पोस्ट शेड्यूलिंग 24-घंटे के समय प्रारूप का उपयोग करता है और इसका उपयोग कर रहा है',
                'timezone' => 'समय क्षेत्र',
            ],
        ],
        'seo'      => [
            'header'    => 'एसईओ और सामाजिक',
            'meta'      => 'मेटा विवरण',
            'facebook'  => [
                'title'       => [
                    'label'       => 'फेसबुक कार्ड का शीर्षक',
                    'placeholder' => 'फेसबुक कार्ड में शीर्षक',
                ],
                'description' => [
                    'label'       => 'फेसबुक कार्ड विवरण',
                    'placeholder' => 'फेसबुक कार्ड में वर्णन',
                ],
            ],
            'twitter'   => [
                'title'       => [
                    'label'       => 'ट्विटर कार्ड का शीर्षक',
                    'placeholder' => 'ट्विटर कार्ड में शीर्षक',
                ],
                'description' => [
                    'label'       => 'ट्विटर कार्ड विवरण',
                    'placeholder' => 'ट्विटर कार्ड में वर्णन',
                ],
            ],
            'canonical' => [
                'label'       => 'कैनन का',
                'placeholder' => 'मूल स्रोत का कैनन यूआरएल',
            ],
        ],
        'settings' => [
            'header'  => 'सामान्य सेटिंग्स',
            'slug'    => [
                'label'       => 'काउंटर',
                'placeholder' => 'एक-अद्वितीय-स्लग',
            ],
            'summary' => [
                'label'       => 'सारांश',
                'placeholder' => 'एक वर्णनात्मक सारांश ।।',
            ],
            'topic'   => [
                'label' => 'विषय',
            ],
            'tags'    => [
                'label' => 'टैग',
            ],
        ],
    ],
    'delete'  => [
        'header'  => 'हटाना',
        'warning' => 'हटाए गए पद हमेशा के लिए चले गए हैं। क्या आपको यकीन है?',
    ],

];