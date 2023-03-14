DB::table('buku')->insert(
        [
            [
                'isbn' => '111',
                'judul'=>'Sejarah Kemerdekaan RI',
                'tahun_cetak' => 2023,
                'stok' => 10, 
                'idpengarang' => 1, 
                'idpenerbit' => 2, 
                'idkategori' => 1
            ],
            [
                'isbn' => '112',
                'judul'=>'Menanam Jagung Unggul',
                'tahun_cetak' => 2023,
                'stok' => 15, 
                'idpengarang' => 2, 
                'idpenerbit' => 1, 
                'idkategori' => 3
            ]
        ]);
