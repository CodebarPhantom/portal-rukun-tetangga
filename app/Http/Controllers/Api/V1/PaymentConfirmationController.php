<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\MasterController;
use App\Models\PaymentConfirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;

class PaymentConfirmationController extends MasterController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function dataTable(Request $request)
    {
        //Gate::authorize('readPolicy', PaymentConfirmation::class);

        $search = $request->input('search', '');
        $pageSize = $request->input('size', 10);
        $sortField = $request->input('sortField', 'created_at');
        $sortOrder = $request->input('sortOrder', 'desc');

        $allowedSortFields = ['confirmation_code', 'payer_name', 'created_at'];
        $allowedSortOrders = ['asc', 'desc'];

        if (!in_array($sortField, $allowedSortFields)) {
            $sortField = 'created_at';
        }

        if (!in_array($sortOrder, $allowedSortOrders)) {
            $sortOrder = 'desc';
        }

        $confirmations = PaymentConfirmation::with(['location', 'locationCategory'])
            ->where(function ($query) use ($search) {
                if (!empty($search)) {
                    $query->whereRaw('confirmation_code ILIKE ?', ['%'.$search.'%'])
                          ->orWhereRaw('payer_name ILIKE ?', ['%'.$search.'%'])
                          ->orWhereHas('location', function($subQ) use ($search) {
                              $subQ->whereRaw('name ILIKE ?', ['%'.$search.'%']);
                          })
                          ->orWhereHas('locationCategory', function($subQ) use ($search) {
                              $subQ->whereRaw('name ILIKE ?', ['%'.$search.'%']);
                          });
                }
            })
            ->orderBy($sortField, $sortOrder)
            ->paginate($pageSize);

        $months = [
            1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr',
            5 => 'Mei', 6 => 'Jun', 7 => 'Jul', 8 => 'Agu',
            9 => 'Sep', 10 => 'Okt', 11 => 'Nov', 12 => 'Des'
        ];

        $confirmationData = $confirmations->map(function($confirmation) use ($months) {
            return [
                'id' => $confirmation->id,
                'confirmation_code' => $confirmation->confirmation_code,
                'payer_name' => $confirmation->payer_name,
                'category' => $confirmation->locationCategory->name,
                'location' => $confirmation->location->name,
                'period' => $months[$confirmation->month] . ' ' . $confirmation->year,
                'amount' => $confirmation->amount,
                'amount_formatted' => number_format($confirmation->amount, 0, ',', '.'),
                'status' => $confirmation->status,
                'status_label' => $confirmation->status_label,
                'proof_file' => $confirmation->proof_file,
                'proof_file_url' => $confirmation->proof_file ? Storage::url($confirmation->proof_file) : null,
                'created_at' => $confirmation->created_at->format('d/m/Y H:i'),
            ];
        });

        return response()->json([
            'page' => $confirmations->currentPage(),
            'pageCount' => $confirmations->lastPage(),
            'sortField' => $sortField,
            'sortOrder' => $sortOrder,
            'totalCount' => $confirmations->total(),
            'data' => $confirmationData,
        ]);
    }
}
