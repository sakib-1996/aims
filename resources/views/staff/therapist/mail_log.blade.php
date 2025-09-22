@extends('layouts.staff.app')

@section('title', 'All Members')

@section('content')


    <x-staff.page title="All Members">
        <x-staff.table :items="['Sl No', 'Receiver Email', 'Subject', 'Message', 'Sent At']" />
    </x-staff.page>

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
                    data: 'message',
                    name: 'message',
                    defaultContent: ''
                }, // controller এ নেই
                {
                    data: 'created_at',
                    name: 'created_at',
                },
            ]
        });
    </script>
@endpush
