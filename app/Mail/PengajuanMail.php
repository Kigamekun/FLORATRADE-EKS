<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Pengajuan;
use App\Models\SubPengajuan;

class PengajuanMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $id;
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_NAME'))->view('notification.pengajuan_notification')->with([
            'pengajuan' => Pengajuan::where('id',$this->id)->first(),
            'sub_pengajuan' => SubPengajuan::where('pengajuan_id',$this->id)->get(),
        ]);
    }
}
