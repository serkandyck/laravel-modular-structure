<?php

namespace Modules\GitLab\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Modules\MobileApp\Entities\MobileApp;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Str;

class SetupGit implements ShouldQueue
{
    use Dispatchable, Queueable;

    protected $mobileApp;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(MobileApp $mobileApp)
    {
        $this->mobileApp = $mobileApp;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Add Flutter Repo
        $repo = new \Cz\Git\GitRepository(storage_path('app/example_app'));

        // Generate user unique branch and save model
        $branch = Str::random(21);
        $repo->createBranch($branch, TRUE);

        $this->mobileApp->branch = $branch;
        $this->mobileApp->save();

        // Make Application Changes and commit user unique branch
        $filename = $repo->getRepositoryPath() . '/' . $branch.'.txt';
        file_put_contents($filename, "Branch is working");

        $repo->addFile($filename);
        $repo->commit($branch);

        // Push Branch
        $repo->push('origin', array($branch, '-u'));
    }
}
