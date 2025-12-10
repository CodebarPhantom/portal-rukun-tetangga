@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Konfirmasi Pembayaran</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Kategori</th>
                                    <th>Lokasi</th>
                                    <th>Bulan/Tahun</th>
                                    <th>Nominal</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($confirmations as $confirmation)
                                <tr>
                                    <td>{{ $confirmation->confirmation_code }}</td>
                                    <td>{{ $confirmation->payer_name }}</td>
                                    <td>{{ $confirmation->locationCategory->name }}</td>
                                    <td>{{ $confirmation->location->name }}</td>
                                    <td>
                                        @php
                                            $months = [
                                                1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr',
                                                5 => 'Mei', 6 => 'Jun', 7 => 'Jul', 8 => 'Agu',
                                                9 => 'Sep', 10 => 'Okt', 11 => 'Nov', 12 => 'Des'
                                            ];
                                        @endphp
                                        {{ $months[$confirmation->month] }} {{ $confirmation->year }}
                                    </td>
                                    <td>Rp {{ number_format($confirmation->amount, 0, ',', '.') }}</td>
                                    <td>
                                        <span class="badge badge-{{ $confirmation->status === 'sudah_dicek' ? 'success' : 'warning' }}" id="status-{{ $confirmation->id }}">
                                            {{ $confirmation->status_label }}
                                        </span>
                                    </td>
                                    <td>{{ $confirmation->created_at->format('d/m/Y H:i') }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown">
                                                Ubah Status
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#" onclick="updateStatus({{ $confirmation->id }}, 'butuh_pengecekan')">
                                                    Butuh Pengecekan
                                                </a>
                                                <a class="dropdown-item" href="#" onclick="updateStatus({{ $confirmation->id }}, 'sudah_dicek')">
                                                    Sudah Dicek
                                                </a>
                                            </div>
                                        </div>
                                        @if($confirmation->proof_file)
                                        <a href="{{ Storage::url($confirmation->proof_file) }}" target="_blank" class="btn btn-sm btn-info ml-1">
                                            <i class="fas fa-eye"></i> Bukti
                                        </a>
                                        @endif
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="9" class="text-center">Belum ada konfirmasi pembayaran</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    
                    {{ $confirmations->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function updateStatus(confirmationId, status) {
    if (confirm('Yakin ingin mengubah status?')) {
        fetch(`/admin/payment-confirmations/${confirmationId}/status`, {
            method: 'PATCH',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ status: status })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const statusBadge = document.getElementById(`status-${confirmationId}`);
                statusBadge.textContent = data.status_label;
                statusBadge.className = `badge badge-${status === 'sudah_dicek' ? 'success' : 'warning'}`;
                alert('Status berhasil diupdate!');
            } else {
                alert('Gagal mengupdate status');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Terjadi kesalahan');
        });
    }
}
</script>
@endsection