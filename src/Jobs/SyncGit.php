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

    private $server;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($server)
    {
        $this->server = $server;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
            
        dump("Logging into server: ".$this->server);
        $key = new RSA();
        $contents = Storage::get('bridesgenie-east.ppk');

        //$key->setPassword('whatever');
        $key->loadKey($contents);

        $ssh = new SSH2($this->server);
        if (!$ssh->login('ubuntu', $key)) {
            exit('Login Failed');
        }
        $ssh->setTimeout(60);
        $commands = [
            'cd /var/www/bridesgenie.com/',
            'sudo git pull origin',
            'sudo composer update',
            'sudo gulp',
            'sudo chown -R nginx:nginx /var/www/bridesgenie.com/',
            'echo ""',
            'echo "Synced at $(date)"',
        ];
        $commands = implode('; ',$commands);
        //echo $commands;
        $output = $ssh->exec($commands);
        dump($output);
    }
}
