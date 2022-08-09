<?php

namespace App\Console\Commands;

use App\Http\Controllers\FetchApiController;
use App\Models\Province;
use Illuminate\Console\Command;

class CreateProvince extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:province';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert data to database provinces';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $data = (new FetchApiController)->getProvince();
        if ($this->confirm('Tambahkan data provinsi dari API RajaOngkir ?', true)) {
            Province::truncate();
            Province::insert($data);
            $this->info('Provinsi berhasil di simpan');
          }else{
            $this->info('Provinsi batal di simpan');
          }
    }
}
