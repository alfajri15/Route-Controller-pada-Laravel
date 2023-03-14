Schema::create('penerbit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',50);
            $table->text('alamat');
            $table->string('email')->unique();
            $table->string('website');
            $table->string('telp');
            $table->string('cp');
            $table->timestamps();
        });
