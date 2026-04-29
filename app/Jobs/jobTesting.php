<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\Middleware\Skip;
class jobTesting implements ShouldQueue, ShouldBeUnique
{
    use Queueable;
    
    /**
     * Create a new job instance.
     */
    public function __construct(User $user)
    {
        $this->user=$user->withoutRelations();
    }

    /**
     * Execute the job.
     */
    // public function uniqueId(): string
    // {
    //     return $this->user->id;
    // }
    // public function debounceId(): string
    // {
    //     return $this->user->id;
    // }
    public function middlewhare(){
        return [
           new Skip(fn () => true),
        ]
    }
    public function handle(): void
    {
        //
    }
}
