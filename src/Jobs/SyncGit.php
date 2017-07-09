<?php

namespace Vonec\Gitsync\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;

use phpseclib\Crypt\RSA;
use phpseclib\Net\SSH2;
use Illuminate\Support\Facades\Storage;


class SyncGit extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    private $server_ip;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($server_ip)
    {
        $this->server_ip = $server_ip;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
            
        // validate ip address

        if(filter_var($server_ip, FILTER_VALIDATE_IP)) {
            dump("Logging into Server: ".$this->server_ip);
            if(!empty(config('gitsync.ppk'))){
                $key = new RSA();
                $contents = Storage::get(config('gitsync.ppk'));

                //$key->setPassword('whatever');
                $key->loadKey($contents);

                $ssh = new SSH2($this->server_ip);
                if (!$ssh->login('ubuntu', $key)) {
                    exit('Login Failed');
                }
                $ssh->setTimeout(60);
                if(!empty(config('gitsync.commands'))){
                    $commands = implode('; ', config('gitsync.commands'));
                    //echo $commands;
                    $output = $ssh->exec($commands);

                }
                dump($output);
            }
            

        }
    }
}
