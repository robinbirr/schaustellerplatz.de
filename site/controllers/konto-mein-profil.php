<?php
return function ($kirby, $page) {
    $error = "";
    if ($kirby->request()->is('POST') && get('user')) {
        try {
            if(get('editEmail') !== ''){
                $user = $kirby->user()->changeEmail(get('editEmail'));
            }
            go('konto/mein-profil');
        } catch (Exception $e) {
            $error = true;
        }
    }
    return [
        'error' => $error
    ];
};