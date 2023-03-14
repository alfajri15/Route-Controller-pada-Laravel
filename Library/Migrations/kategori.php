Schema::create('kategori', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',50);
            $table->timestamps();
        });
