Schema::create('buku', function (Blueprint $table) {
            $table->increments('id');
            $table->string('isbn',100);
            $table->string('judul',100);
            $table->integer('tahun_cetak');
            $table->integer('stok');
            $table->integer('idpengarang');
            $table->integer('idpenerbit');
            $table->integer('idkategori');
            $table->timestamps();
        });
