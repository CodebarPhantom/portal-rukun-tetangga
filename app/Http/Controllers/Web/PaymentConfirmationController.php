<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\MasterController;
use App\Models\PaymentConfirmation;
use Illuminate\Http\Request;

class PaymentConfirmationController extends MasterController
{
    public function index()
    {
        $func = function () {


            $breadcrumbs = ['Konfirmasi Pembayaran'];
            $pageTitle = "Lokasi";
            $this->data = compact('breadcrumbs', 'pageTitle');
        };

        return $this->callFunction($func, view('admin.payment-confirmations.index'));
    }

    public function updateStatus(PaymentConfirmation $confirmation, Request $request)
    {
        $request->validate([
            'status' => 'required|in:butuh_pengecekan,sudah_dicek'
        ]);

        $confirmation->update([
            'status' => $request->status
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Status berhasil diupdate',
            'status_label' => $confirmation->status_label
        ]);
    }
}
