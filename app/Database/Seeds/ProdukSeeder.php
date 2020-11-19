<?php namespace App\Database\Seeds;

class ProdukSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $data = [
                    [
                        'nama_produk' => 'Cat food super premium',
                        'deskripsi_produk'    => 'Royal Canin'
                    ],

                    [
                    'nama_produk' => 'Cat food premium',
                    'deskripsi_produk'    => 'Proplan'
                    ],
                    [
                        'nama_produk' => 'Cat food medium',
                        'deskripsi_produk'    => 'Equilibrio'
                    ],
                    [
                        'nama_produk' => 'Cat food regular',
                        'deskripsi_produk'    => 'Ori cat'
                    ]
                ];


                $this->db->table('produk')->insertBatch($data);

        }
}