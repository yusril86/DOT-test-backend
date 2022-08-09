<?php

namespace App\Console\Commands;

use App\Http\Controllers\FetchApiController;
use App\Models\City;
use Illuminate\Console\Command;

class CreateCity extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:city';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert data to database cities';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $data = (new FetchApiController)->getCities();
        if ($this->confirm('Tambahkan data kota dari API RajaOngkir ?', true)) {
            City::truncate();
            City::insert($data);
            $this->info('kota berhasil di simpan');
          }else{
            $this->info('kota batal di simpan');
          }
    }
}
