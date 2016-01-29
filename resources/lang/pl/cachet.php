<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    // Components
    'components' => [
        'status' => [
            1 => 'Działa',
            2 => 'Problemy wydajnościowe',
            3 => 'Częściowa niedostępność',
            4 => 'Poważna awaria',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'Brak incydentów.',
        'past'          => 'Poprzednie incydenty',
        'previous_week' => 'Poprzedni tydzień',
        'next_week'     => 'Następny tydzień',
        'none'          => 'Brak incydentów',
        'scheduled'     => 'Zapowiedziane prace',
        'scheduled_at'  => ', scheduled :timestamp',
        'status'        => [
            0 => 'Planowy', // TODO: Hopefully remove this.
            1 => 'Szukanie',
            2 => 'Zidentyfikowany',
            3 => 'Obserwacja',
            4 => 'Naprawiony',
        ],
    ],

    // Service Status
    'service' => [
        'good' => 'Wszystkie systemy sprawne.',
        'bad'  => 'Część systemów ma problemy.',
    ],

    'api' => [
        'regenerate' => 'Przegeneruj klucz API',
        'revoke'     => 'Odwołaj klucz API',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
<<<<<<< HEAD
            'hourly'  => 'Last 12 Hours',
            'weekly'  => 'Week',
            'monthly' => 'Month',
=======
            'last_hour' => 'Last Hour',
            'hourly'    => 'Last 12 Hours',
            'weekly'    => 'Week',
            'monthly'   => 'Month',
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'Subscribe to get the most recent updates.',
        'button'    => 'Subscribe',
        'email'     => [
<<<<<<< HEAD
            'subscribe'    => 'Subscribe to email updates.',
            'subscribed'   => 'You\'ve been subscribed to email notifications, please check your email to confirm your subscription.',
            'verified'     => 'Your email subscription has been confirmed. Thank you!',
            'unsubscribe'  => 'Unsuscribe from email updates.',
            'unsubscribed' => 'Your email subscription has been cancelled.',
            'failure'      => 'Something went wrong with the subscription.',
            'verify'       => [
=======
            'subscribe'          => 'Subscribe to email updates.',
            'subscribed'         => 'You\'ve been subscribed to email notifications, please check your email to confirm your subscription.',
            'verified'           => 'Your email subscription has been confirmed. Thank you!',
            'unsubscribe'        => 'Unsuscribe from email updates.',
            'unsubscribed'       => 'Your email subscription has been cancelled.',
            'failure'            => 'Something went wrong with the subscription.',
            'already-subscribed' => 'Cannot subscribe :email because they\'re already subscribed.',
            'verify'             => [
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
                'text'           => "Please confirm your email subscription to :app_name status updates.\n:link\nThank you, :app_name",
                'html-preheader' => 'Please confirm your email subscription to :app_name status updates.',
                'html'           => '<p>Please confirm your email subscription to :app_name status updates.</p><p><a href=":link">:link</a></p><p>Thank you, :app_name</p>',
            ],
            'maintenance' => [
                'text'           => "New maintenance has been scheduled on :app_name.\nThank you, :app_name",
                'html-preheader' => 'New maintenance has been scheduled on :app_name.',
                'html'           => '<p>New maintenance has been scheduled on :app_name.</p><p>Thank you, :app_name</p>',
            ],
            'incident' => [
                'text'           => "New incident has been reported on :app_name.\nThank you, :app_name",
                'html-preheader' => 'New incident has been reported on :app_name.',
                'html'           => '<p>New incident has been reported on :app_name.</p><p>Thank you, :app_name</p>',
            ],
        ],
    ],

    // Other
    'powered_by'      => ':app Status Page is powered by <a href="https://cachethq.io">Cachet</a>.',
    'about_this_site' => 'O tej stronie',
    'rss-feed'        => 'RSS Feed',
    'atom-feed'       => 'Atom Feed',
    'feed'            => 'Status Feed',

];
