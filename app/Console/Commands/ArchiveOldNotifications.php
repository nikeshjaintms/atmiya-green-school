<?php

namespace App\Console\Commands;

use App\Models\Notification;
use Illuminate\Console\Command;

class ArchiveOldNotifications extends Command
{
    /**F
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notifications:archive-old-notifications';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Notification::where('created_at', '<', now()->subDays(30))
            ->delete();
        \Log::info('Old notifications cleaned up.');
    }
}
