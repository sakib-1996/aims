@extends('layouts.staff.app')

@section('title', 'All Members')

@section('content')


    <x-staff.page title="All Members">
        <x-staff.table :items="['Sl No', 'Receiver Email', 'Subject', 'Message', 'Sent At', 'Action']" />
    </x-staff.page>

    <div class="modal" tabindex="-1" id="mailLogModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">View The Message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="mailLogModal">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        var table = $('#table').DataTable({
            ajax: '{!! route('staff.therapist.sendMail.log') !!}',
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'id',
                    searchable: false
                },
                {
                    data: 'recipient_email',
                    name: 'recipient_email',
                    defaultContent: ''
                },
                {
                    data: 'subject',
                    name: 'subject',
                    defaultContent: ''
                },
                {
                    data: 'status',
                    name: 'status',
                    defaultContent: ''
                }, // controller এ নেই
                {
                    data: 'created_at',
                    name: 'created_at',
                },
                {
                    data: 'view',
                    name: 'view',
                    orderable: false,
                    searchable: false,
                },
            ]
        });
        $(document).on('click', '.view-mail-log', function() {
            var recipient = $(this).data('recipient-email');
            var subject = $(this).data('subject');
            var message = $(this).data('message');
            var html = '<p><strong>To:</strong> ' + recipient + '</p>' +
                '<p><strong>Subject:</strong> ' + subject + '</p>' +
                '<div style="background-color: #f5f5f5; padding: 10px">' + message + '</div>';

            $('#mailLogModal .modal-body').html(html);
            $('#mailLogModal').modal('show');
        });
    </script>
@endpush
