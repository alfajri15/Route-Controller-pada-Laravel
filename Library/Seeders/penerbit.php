for ($i=0; $i < 10; $i++) {
        DB::table('penerbit')->insert([
            'nama' => uniqid('nama_'),
            'alamat' => uniqid('alamat_'),
            'email' => uniqid().'@gmail.com',
            'website' => uniqid('www.').'.com',
            'telp' => '021-'.rand(),
            'cp' => uniqid('cp_')
        ]);
        }
