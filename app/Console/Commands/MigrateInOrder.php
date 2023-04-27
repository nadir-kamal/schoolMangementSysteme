<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MigrateInOrder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:migrate-in-order';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description make migartion in order';

    /**
     * Execute the console command.
     */
    public function handle()
    {
       /** Specify the names of the migrations files in the order you want to 
        * loaded
        * $migrations =[ 
        *               'xxxx_xx_xx_000000_create_nameTable_table.php',
        *    ];
        */
        $migrations = [ 
                        '2020_04_18_005024_create_users_types.php',
                        '2014_10_12_000000_create_users_table.php',
                        '2014_10_12_100000_create_password_resets_table.php',
                        '2019_08_19_000000_create_failed_jobs_table.php',
                        '2019_12_14_000001_create_personal_access_tokens_table.php',
                        '2023_03_30_195412_create_niveaux_table.php'
        ];

        foreach($migrations as $migration)
        {
           $basePath = 'database/migrations/';          
           $migrationName = trim($migration);
           $path = $basePath.$migrationName;
           $this->call('migrate:refresh', [
            '--path' => $path ,            
           ]);
        }
    }
}
