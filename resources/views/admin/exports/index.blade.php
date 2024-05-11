@extends('admin.app')

@section('content')
    <div class="table-responsive">
        <div class="mb-3">
            <div class="input-group">
                <input type="text" id="searchInput" class="form-control" placeholder="ابحث عن حوالة..." aria-label="ابحث عن حوالة..." oninput="searchTable()">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-primary text-light"><i class="fas fa-search"></i></span>
                </div>
            </div>
        </div>
        <a href="{{ route('exports.create') }}" class="btn btn-primary">إنشاء حوالة جديدة</a>
        <table id="exportTable" class="table table-striped table-bordered mt-3">
            <thead>
            <tr>
                <th>#</th>
                <th>الجهة</th>
                <th>العملة المرسلة</th>
                <th>المبلغ المرسل</th>
                <th>الضريبة</th>
                <th>الإجراءات</th>
            </tr>
            </thead>
            <tbody>
            @foreach($exports as $export)
                <tr>
                    <td>{{ $export->id }}</td>
                    <td>{{ $export->branch }}</td>
                    <td>{{ $export->sent_currency }}</td>
                    <td>{{ $export->amount_sent }}</td>
                    <td>{{ $export->tax }}</td>
                    <td>
                        <button type="button" class="btn btn-sm btn-primary" onclick="showExportModal({{ $export->id }})">عرض</button>
                        <button type="button" class="btn btn-sm btn-info" onclick="editExportModal({{ $export->id }})">تعديل</button>
                        <button type="button" class="btn btn-sm btn-danger" onclick="deleteExportModal({{ $export->id }})">حذف</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div id="noResults" style="display: none;">
            <p>لا توجد نتائج للبحث.</p>
        </div>
        {{ $exports->links() }}
    </div>

    <!-- Export Details Modal -->
    <div class="modal fade" id="exportDetailsModal" tabindex="-1" role="dialog" aria-labelledby="exportDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exportDetailsModalLabel">تفاصيل الحوالة</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Export details will be loaded here via AJAX -->
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Export Modal -->
    <div class="modal fade" id="editExportModal" tabindex="-1" role="dialog" aria-labelledby="editExportModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editExportModalLabel">تعديل الحوالة</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Edit export form will be loaded here via AJAX -->
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Export Confirmation Modal -->
    <div class="modal fade" id="deleteExportModal" tabindex="-1" role="dialog" aria-labelledby="deleteExportModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteExportModalLabel">تأكيد الحذف</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>هل أنت متأكد أنك تريد حذف هذه الحوالة؟</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                    <form action="" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">حذف</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showExportModal(id) {
            // Load export details via AJAX and display in the modal
            $('#exportDetailsModal').modal('show');
        }

        function editExportModal(id) {
            // Load edit export form via AJAX and display in the modal
            $('#editExportModal').modal('show');
        }

        function deleteExportModal(id) {
            // Set the delete form action to the export's delete route
            var deleteUrl = "{{ route('exports.destroy', ':id') }}".replace(':id', id);
            $('#deleteExportModal form').attr('action', deleteUrl);
            $('#deleteExportModal').modal('show');
        }
    </script>
@endsection
