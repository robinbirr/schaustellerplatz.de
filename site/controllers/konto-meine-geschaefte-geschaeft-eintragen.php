<?php

return function ($kirby, $page) {

    // if the form has been submitted…
    if ($kirby->request()->is('POST') && get('register')) {

        // check the honeypot and exit if is has been filled in
        if(empty(get('website')) === false) {
            go($page->url());
            exit;
        }

        $data = [
            'title'    => get('title'),
        ];

        $rules = [
            'title'  => ['required'],
        ];

        $messages = [
            'title'  => 'Please enter your (link: #name text: name)',
        ];

        // some of the data is invalid
        if ($invalid = invalid($data, $rules, $messages)) {
            $alert = $invalid;

        } else {

            // authenticate as almighty
            $kirby->impersonate('kirby');

            // everything is ok, let's try to create a new registration
            try {
                // we store registrations as subpages of the current page
                $registration = $page->createChild([
                    'slug'     => md5(str::slug($data['title'] . microtime())),
                    'template' => 'geschaeft-single',
                    'content'  => $data
                ]);

                if ($registration) {
                    // store referer and name in session
                    $kirby->session()->set([
                        'referer' => $page->uri(),
                        'regName'  => esc($data['title'])
                    ]);
                    go('success');
                }

            } catch (Exception $e) {
                $alert = ['Your registration failed: ' . $e->getMessage()];
            }
        }
    }

    // return data to template
    return [
        'alert' => $alert ?? null,
        'data'  => $data ?? false,
    ];
};