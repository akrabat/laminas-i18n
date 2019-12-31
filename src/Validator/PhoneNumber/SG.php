<?php

/**
 * @see       https://github.com/laminas/laminas-i18n for the canonical source repository
 * @copyright https://github.com/laminas/laminas-i18n/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-i18n/blob/master/LICENSE.md New BSD License
 */

return [
    'code' => '65',
    'patterns' => [
        'national' => [
            'general' => '/^[36]\\d{7}|[17-9]\\d{7,10}$/',
            'fixed' => '/^6[1-9]\\d{6}$/',
            'mobile' => '/^(?:8[1-7]|9[0-8])\\d{6}$/',
            'tollfree' => '/^1?800\\d{7}$/',
            'premium' => '/^1900\\d{7}$/',
            'voip' => '/^3[12]\\d{6}$/',
            'uan' => '/^7000\\d{7}$/',
            'shortcode' => '/^1(?:[0136]\\d{2}|[89](?:[1-9]\\d|0[1-9])|[57]\\d{2,3})|99[0246-8]$/',
            'emergency' => '/^99[359]$/',
        ],
        'possible' => [
            'general' => '/^\\d{8,11}$/',
            'fixed' => '/^\\d{8}$/',
            'mobile' => '/^\\d{8}$/',
            'tollfree' => '/^\\d{10,11}$/',
            'premium' => '/^\\d{11}$/',
            'voip' => '/^\\d{8}$/',
            'uan' => '/^\\d{11}$/',
            'shortcode' => '/^\\d{3,5}$/',
            'emergency' => '/^\\d{3}$/',
        ],
    ],
];
