<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $products = [
            [
                'service' => 'Virtual Machine',
                'name' => 'Small',
                'description' => '2 vCPU，4GiB Memory，100GB System Disk',
                'price' => 18,
            ],
            [
                'service' => 'Virtual Machine',
                'name' => 'Medium',
                'description' => '2 vCPU，8GiB Memory，120GB System Disk',
                'price' => 30,
            ],  [
                'service' => 'Virtual Machine',
                'name' => 'Medium.2 ',
                'description' => '4 vCPU，8GiB Memory，160GB System Disk',
                'price' => 50,
            ],  [
                'service' => 'Virtual Machine',
                'name' => 'Large',
                'description' => '8 vCPU，16GiB Memory，250GB System Disk',
                'price' => 90,
            ],  [
                'service' => 'Virtual Machine',
                'name' => 'Large.2',
                'description' => '12 vCPU, 24GiB Memory，300GB System Disk',
                'price' => 150,
            ],  [
                'service' => 'Virtual Machine',
                'name' => 'Large.4 ',
                'description' => '16 vCPU，32GiB Memory，320GB System Disk',
                'price' => 180,
            ],  [
                'service' => 'Virtual Machine',
                'name' => 'Xlarge.4',
                'description' => '32 vCPU，64GiB Memory，500GB System Disk ',
                'price' => 380,
            ],  [
                'service' => 'Virtual Machine',
                'name' => '2xlarge.2 ',
                'description' => '48 vCPU，96GiB Memory，920GB System Disk',
                'price' => 640,
            ],  [
                'service' => 'Virtual Machine',
                'name' => '2xlarge.4 ',
                'description' => '50 vCPU，128GiB Memory，1200GB System Disk',
                'price' => 900,
            ],  [
                'service' => 'Virtual Machine',
                'name' => '4xlarge.4 ',
                'description' => '56 vCPU，256GiB Memory，1800GB System Disk',
                'price' => 1720,
            ],  [
                'service' => 'Virtual Machine',
                'name' => '8xlarge.2 ',
                'description' => '64 vCPU，512GiB Memory，2000GB System Disk',
                'price' => 2400,
            ],  [
                'service' => 'Bare Metal Service',
                'name' => 'PhysicalSmall ',
                'description' => '2*CPU，64G MEM, 2*300G SAS ',
                'price' => 450,
            ],
            [
                'service' => 'Bare Metal Service',
                'name' => 'PhysicalLarge ',
                'description' => '4*CPU，128G MEM, 4*600G SAS ',
                'price' => 1200,
            ],
            [
                'service' => 'Virtual Desktop Infrastructure',
                'name' => '> = 12 months ',
                'description' => '2 vCPU，4GiB Memory，60GB System Disk ',
                'price' => 10,
            ], [
                'service' => 'Virtual Desktop Infrastructure',
                'name' => '6 to <12 months ',
                'description' => '2 vCPU，4GiB Memory，60GB System Disk ',
                'price' => 15,
            ], [
                'service' => 'Virtual Desktop Infrastructure',
                'name' => '< 6 months  ',
                'description' => '2 vCPU，4GiB Memory，60GB System Disk ',
                'price' => 20,
            ],
            [
                'service' => 'Web hosting',
                'name' => 'Konza Personal Lite(Low) ',
                'description' => '500MB Memory, 35GB System Disk, 300GB Bandwidth',
                'price' => 1800,
            ],
            [
                'service' => 'Web hosting',
                'name' => 'Konza Personal Standard(Low) ',
                'description' => '500MB Memory, 80GB System Disk, 700GB Bandwidth ',
                'price' => 5000,
            ], [
                'service' => 'Web hosting',
                'name' => 'Konza Personal Enterprise(Low) ',
                'description' => '1GB Memory, 100GB System Disk, 700GB Bandwidth ',
                'price' => 6000,
            ], [
                'service' => 'Web hosting',
                'name' => 'Konza Personal Executive(Low) ',
                'description' => '1GB Memory, 120GB System Disk, Unlimited Bandwidth ',
                'price' => 8000,
            ],
            [
                'service' => 'Web hosting',
                'name' => 'Konza Business Lite(High) ',
                'description' => '512 MB Memory, 50GB System Disk, 400GB Bandwidth  ',
                'price' => 5200,
            ],[
                'service' => 'Web hosting',
                'name' => 'Konza Business Standard (High) ',
                'description' => '768 MB Memory, 65GB System Disk, 400GB Bandwidth',
                'price' => 7600,
            ],[
                'service' => 'Web hosting',
                'name' => 'Konza Business Enterprise(High) ',
                'description' => '1GB Memory, 120GB System Disk, 500GB Bandwidth ',
                'price' => 11000,
            ],[
                'service' => 'Web hosting',
                'name' => 'Konza Personal Executive(High) ',
                'description' => '1.5GB Memory, 150GB System Disk, 600GB Bandwidth ',
                'price' => 16000,
            ],
            [
                'service' => 'Colocation',
                'name' => '1U ',
                'description' => 'n/a ',
                'price' => 0,
            ],[
                'service' => 'Colocation',
                'name' => '2U ',
                'description' => 'n/a ',
                'price' => 0,
            ],[
                'service' => 'Colocation',
                'name' => 'Quarter Rack ',
                'description' => 'n/a',
                'price' => 0,
            ],[
                'service' => 'Colocation',
                'name' => 'Half Rack ',
                'description' => 'n/a ',
                'price' => 0,
            ],[
                'service' => 'Colocation',
                'name' => 'Full Rack ',
                'description' => 'n/a ',
                'price' => 0,
            ],

        ];
        Product::insert($products);
    }
}
