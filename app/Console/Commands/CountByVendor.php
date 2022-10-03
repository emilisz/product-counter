<?php

namespace App\Console\Commands;

use App\Contracts\Reader;
use Illuminate\Console\Command;

class CountByVendor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'count_by:vendor_id {vendor_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'log in stock offers count by vendor_id';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(Reader $reader)
    {
        $vendor_id = $this->argument('vendor_id');

        $defaultSource = config('source.default');
        $source = config("source.{$defaultSource}.endpoint");
      
        $isFile = strpos($source, 'http') !== false ? false : true;

        return $reader->read($source,null,null,$isFile, $vendor_id);
    }
}
