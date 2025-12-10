<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\PaymentConfirmation;
use Illuminate\Http\Request;

class PaymentConfirmationController extends Controller
{
    public function index()
    {
        $confirmations = PaymentConfirmation::with(['location', 'locationCategory'])
            ->orderBy('created_at', 'desc')
            ->paginate(20);
            
        return view('admin.payment-confirmations.index', compact('confirmations'));
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
