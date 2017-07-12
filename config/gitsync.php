<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Security Key 
    |--------------------------------------------------------------------------
    |
    | Key for security. Generate key with with Laravel helper str_random or 
    | other tools. 
    | Default: YOURKEY 
    | Please change below
     */

    'key' => '',


    /*
    |--------------------------------------------------------------------------
    | Git hosting
    |--------------------------------------------------------------------------
    |
    | Define git hosting of your project
    |
    | Supported: "github", "bitbucket"
    |
    | [To Do: identify provider based on workload ]
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
    | eg: master
    */
    
    'branch' => '',

    /*
    |--------------------------------------------------------------------------
    | ppk file name
    |--------------------------------------------------------------------------
    |
    | File Name of the ppk 
    | file to be stored at storage/app/
    | for  "storage/app/filename.ppk" the below corresponsing value is filename.ppk
    */

    'ppk' => '',

    /*
    |--------------------------------------------------------------------------
    | Commands
    |--------------------------------------------------------------------------
    |
    | commads to be executed on remote server
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
    ],

];
