<?php

namespace App\Console\Commands;

use App\Contracts\ReaderInterface;
use Illuminate\Console\Command;
class CountByPrice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'count_by:price_range {min_price} {max_price}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'log in stock offers count between prices';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(ReaderInterface $reader)
    {
        $min_price = $this->argument('min_price');
        $max_price = $this->argument('max_price');

        $defaultSource = config('source.default');
        $source = config("source.{$defaultSource}.endpoint"); // path to source file or url address

        $isFile = strpos($source, 'http') !== false ? false : true;

        return $reader->read($source, $min_price, $max_price, $isFile);
    }
}
