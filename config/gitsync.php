<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Security Key 
    |--------------------------------------------------------------------------
    |
    | Key for security. Generate key with with Laravel helper str_random or 
    | other tools.
    |
     */

    'key' => '7092077',


    /*
    |--------------------------------------------------------------------------
    | Git hosting
    |--------------------------------------------------------------------------
    |
    | Define git hosting of your project
    |
    | Supported: "github", "bitbucket"
    |
     */

    'hosting' => '',

    /*
    |--------------------------------------------------------------------------
    | Email recipients
    |--------------------------------------------------------------------------
    |
    | Email address for email notification emails
    |
    */
   
    'mail' => '',

    /*
    |--------------------------------------------------------------------------
    | Remote branch
    |--------------------------------------------------------------------------
    |
    | Name of the remote branch repository to pull
    |
    */
    
    'branch' => 'master',

    /*
    |--------------------------------------------------------------------------
    | ppk file name
    |--------------------------------------------------------------------------
    |
    | File Name of the ppk 
    | file to be stored at storage/app/
    | eg: storage/app/filename.ppk
    */

    'ppk' => 'bridesgenie-east.ppk',

    /*
    |--------------------------------------------------------------------------
    | Commands
    |--------------------------------------------------------------------------
    |
    | commads to be run on remote server
    |
    |   [ 
    |    'sudo git pull origin',
    |    'sudo composer update',
    |    'sudo gulp',
    |   ]
    |
    |
    */
    'commands' => [
        'cd /var/www/bridesgenie.com/',
        'sudo git pull origin',
        'sudo composer update',
        'sudo gulp',
        'sudo chown -R nginx:nginx /var/www/bridesgenie.com/',
        'echo ""',
        'echo "Synced at $(date)"',
    ],

];
