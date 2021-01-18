<?php

return [
    // Toggles error reporting, see https://github.com/aidantwoods/SecureHeaders/wiki/errorReporting
    'errorReporting' => true,

    // Safe mode
    'safeMode' => false,

    // HSTS Strict-Transport-Security
    'hsts' => [
        'enabled' => true,
    ],

      // Content Security Policy
      'csp' => [
        'default' => [
            'self',
        ],
        'img-src' => [
            '*', // Allow images from anywhere
            '*.org',
        ],
        'style-src' => [
            'cdn.jsdelivr.net',
            'fonts.googleapis.com',
            'self',
            'maxcdn.bootstrapcdn.com',
            'stackpath.bootstrapcdn.com',
            'unsafe-inline'
        ],
        'font-src' => [
            'fonts.googleapis.com',
            'fonts.gstatic.com',
            'maxcdn.bootstrapcdn.com',
            'self',
            'unsafe-inline'
        ],
        'script-src' => [
            'self',
            'unsafe-inline',
            'cdn.jsdelivr.net',
            'unsafe-eval',
            'code.jquery.com',
        ],
    ],
];
