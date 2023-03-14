Schema::create('pengarang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',50);
            $table->string('email')->unique();
            $table->integer('hp');
            $table->timestamps();
        });
