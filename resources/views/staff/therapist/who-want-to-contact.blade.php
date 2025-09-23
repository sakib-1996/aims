@extends('layouts.staff.app')

@section('title', 'All Members')

@section('content')


    <x-staff.page title="All Members">
        <x-staff.table :items="['Sl No', 'Name', 'Email', 'Message', 'Sent At']" />
    </x-staff.page>

@endsection

@push('js')
    <script>
        var table = $('#table').DataTable({
            ajax: '{!! route('staff.therapist.whoWantToContact') !!}',
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'id',
                    searchable: false
                },
                {
                    data: 'name',
                    name: 'name',
                    defaultContent: ''
                },
                {
                    data: 'email',
                    name: 'email',
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
