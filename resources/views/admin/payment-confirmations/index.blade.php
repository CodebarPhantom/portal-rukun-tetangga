@extends('layouts.main')

@section('content')
    <!-- Container -->
    <div class="container-fixed">
        <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
            <div class="flex flex-col justify-center gap-2">
                <h1 class="text-xl font-bold leading-none text-gray-900">
                    Konfirmasi Pembayaran
                </h1>
            </div>
            <div class="flex items-center gap-2.5">
                <div class="relative">
                    <i class="ki-filled ki-magnifier leading-none text-md text-gray-500 absolute top-1/2 left-0 -translate-y-1/2 ml-3"></i>
                    <input class="input input-sm pl-8 text-center" data-datatable-search="#kt_remote_table" placeholder="Cari Data" value="" type="text">
                </div>
                <button id="refresh-btn" class="btn btn-sm text-center btn-info">
                    <i class="ki-filled ki-arrows-circle"></i>
                </button>
            </div>
        </div>
    </div>

    @include('partials.attention')

    <div class="container-fixed">
        <div class="grid pb-7.5">
            <div class="card card-grid min-w-full">
                <div class="card-body">
                    <div id="kt_remote_table">
                        <div class="scrollable-x-auto">
                            <table class="table table-auto table-border align-middle text-gray-700 font-medium text-sm" data-datatable-table="true">
                                <thead>
                                    <tr>
                                        <th class="w-1/12 text-center" data-datatable-column="confirmation_code">
                                            <span class="sort">
                                                <span class="sort-label">Kode</span>
                                                <span class="sort-icon"></span>
                                            </span>
                                        </th>
                                        <th class="w-2/12 text-center" data-datatable-column="payer_name">
                                            <span class="sort">
                                                <span class="sort-label">Nama</span>
                                            </span>
                                        </th>
                                        <th class="w-2/12 text-center" data-datatable-column="category">
                                            <span class="sort">
                                                <span class="sort-label">Kategori</span>
                                            </span>
                                        </th>
                                        <th class="w-2/12 text-center" data-datatable-column="location">
                                            <span class="sort">
                                                <span class="sort-label">Lokasi</span>
                                            </span>
                                        </th>
                                        <th class="w-1/12 text-center" data-datatable-column="period">
                                            <span class="sort">
                                                <span class="sort-label">Periode</span>
                                            </span>
                                        </th>
                                        <th class="w-1/12 text-center" data-datatable-column="amount">
                                            <span class="sort">
                                                <span class="sort-label">Nominal</span>
                                            </span>
                                        </th>
                                        <th class="w-1/12 text-center" data-datatable-column="status">
                                            <span class="sort">
                                                <span class="sort-label">Status</span>
                                            </span>
                                        </th>
                                        <th class="w-2/12 text-center" data-datatable-column="action">
                                            <span class="sort">
                                                <span class="sort-label">Action</span>
                                            </span>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="card-footer justify-center md:justify-between flex-col md:flex-row gap-3 text-gray-600 text-2sm font-medium">
                            <div class="flex items-center gap-2">
                                Show
                                <select class="select select-sm w-16" data-datatable-size="true" name="perpage"></select>
                                per page
                            </div>
                            <div class="flex items-center gap-4">
                                <span data-datatable-info="true"></span>
                                <div class="pagination" data-datatable-pagination="true"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('javascript')
    <script type="text/javascript">
        const apiUrl = '{{ route('api.v1.payment-confirmations.datatable') }}';
        const updateStatusUrl = "{{ route('admin.payment-confirmations.update-status', ':id') }}";
        const element = document.querySelector('#kt_remote_table');

        const dataTableOptions = {
            apiEndpoint: apiUrl,
            pageSize: 10,
            searchQuery: '',
            infoEmpty: 'Data Kosong',
            stateSave: false,
            columns: {
                confirmation_code: {
                    title: 'Kode',
                },
                payer_name: {
                    title: 'Nama',
                },
                category: {
                    title: 'Kategori',
                },
                location: {
                    title: 'Lokasi',
                },
                period: {
                    title: 'Periode',
                },
                amount: {
                    title: 'Nominal',
                    render: (data, type, row) => {
                        return `Rp ${type.amount_formatted}`;
                    },
                    createdCell(cell) {
                        cell.classList.add('text-center');
                    },
                },
                status: {
                    title: 'Status',
                    render: (data, type, row) => {
                        const badgeClass = type.status === 'sudah_dicek' ? 'badge-success' : 'badge-warning';
                        return `<span class="badge ${badgeClass}">${type.status_label}</span>`;
                    },
                    createdCell(cell) {
                        cell.classList.add('text-center');
                    },
                },
                action: {
                    title: 'Action',
                    render: (data, type, row) => {
                        let actions = `
                        <button class="btn btn-icon btn-sm btn-clear btn-warning" data-tooltip="#pending" onclick="updateStatus(${type.id}, 'butuh_pengecekan')">
                            <i class="ki-filled ki-time"></i>
                        </button>
                        <div class="tooltip transition-opacity duration-300" id="pending">
                            Butuh Pengecekan
                        </div>

                        <button class="btn btn-icon btn-sm btn-clear btn-success" data-tooltip="#checked" onclick="updateStatus(${type.id}, 'sudah_dicek')">
                            <i class="ki-filled ki-check"></i>
                        </button>
                        <div class="tooltip transition-opacity duration-300" id="checked">
                            Sudah Dicek
                        </div>`;

                        if (type.proof_file) {
                            actions += `
                        <a href="${type.proof_file_url}" class="btn btn-icon btn-sm btn-clear btn-primary" target="_blank" data-tooltip="#view-proof">
                            <i class="ki-filled ki-eye"></i>
                        </a>
                        <div class="tooltip transition-opacity duration-300" id="view-proof">
                            Lihat Bukti
                        </div>`;
                        }

                        return actions;
                    },
                    createdCell(cell) {
                        cell.classList.add('text-center');
                    },
                },
            }
        };

        const dataTable = new KTDataTable(element, dataTableOptions);
        const refreshTable = document.getElementById('refresh-btn').addEventListener('click', function() {
            dataTable.reload();
        });

        function updateStatus(confirmationId, status) {
            if (confirm('Yakin ingin mengubah status?')) {
                const url = updateStatusUrl.replace(':id', confirmationId);
                fetch(url, {
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
                        dataTable.reload();
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
@endpush
