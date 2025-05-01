<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // $table->unsignedBigInteger('tanaman_id');

            // $table->foreign('tanaman_id')->references('id')->on('tanaman')->onDelete('cascade');

            $table->string('pengajuan_id');
            $table->string('negara_tujuan');
            $table->string('nama_penerima');
            $table->string('alamat_penerima');
            // $table->string('jumlah');
            // $table->string('varietas');


            $table->string('no_surat')->nullable();
            $table->string('no_resi')->nullable();
            $table->string('file_resi')->nullable();
            $table->date('date')->nullable();

            // $table->integer('status')->default(0)->nullable();
            $table->integer('status')->default(0)->comment('-1 = Declined ,0 = menunggu approval, 1 = Approved, 2 = verifikasi teknis, 3 = persetujuan dirjen , 4 = Permohonan Diterima Menunggu Pembayaran , 5 = pembayaran diterima, 6 = proses karantina, 7 = proses pengiriman, 8 = selesai');
            // [-1,0,1, 2, 3, 4,5,6]
            $table->enum('payment_status', ['1', '2', '3', '4'])->comment('1 = menunggu pembayaran, 2 = sudah dibayar, 3 = kadaluarsa, 4 = gagal / batal');
            $table->string('transaction_id')->nullable();
            $table->string('jumlah_pembayaran')->nullable();
            $table->string('payment_status_message')->nullable();
            $table->timestamp('transaction_time')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('approval_code_payment')->nullable();

            $table->string('snap_token', 36)->nullable();
            $table->string('keterangan')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan');
    }
}
