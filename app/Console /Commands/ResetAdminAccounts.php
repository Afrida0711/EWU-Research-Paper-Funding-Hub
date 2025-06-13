<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class ResetAdminAccounts extends Command
{
    protected $signature = 'system:reset-admins';
    protected $description = 'Reset system admin accounts to default credentials';

    public function handle()
    {
        if ($this->confirm('This will reset ALL admin accounts to default passwords. Continue?')) {
            Artisan::call('db:seed --class=AdminUsersSeeder');
            $this->info('System admin accounts have been reset:');
            $this->line('Admin: ewu.research.admin@ewu.edu / EWU@Admin#Secure123');
            $this->line('ProVC: ewu.research.provc@ewu.edu / EWU@ProVC#Secure456');
            $this->line('VC: ewu.research.vc@ewu.edu / EWU@VC#Secure789');
            return 0;
        }
        
        $this->error('Operation cancelled');
        return 1;
    }
}