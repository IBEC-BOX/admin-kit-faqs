<?php

namespace AdminKit\Faqs\Commands;

use Illuminate\Console\Command;

class FaqsCommand extends Command
{
    public $signature = 'admin-kit-faqs';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
