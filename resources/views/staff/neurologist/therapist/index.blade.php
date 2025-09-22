@extends('layouts.staff.app')

@section('title', 'All Members')

@section('content')


    <x-staff.page title="All Members">

        @can('create_therapist')
            <x-slot name="header">
                <div class="d-flex justify-content-end">
                    <div>
                        <button type="button" class="btn me-2 btn-success btn-sm" data-bs-toggle="modal"
                            data-bs-target="#sendMailModal" onclick="openSendMailModal('all')">
                            Send Mail to All
                        </button>
                    </div>
                    <x-staff.page-button :href="route('staff.therapist.create')" class="btn-sm" title="Add new member" icon="add" />

                </div>
            </x-slot>
        @endcan

        <x-staff.table :items="[
            'Sl No',
            'Name',
            'Email',
            'Phone',
            'Membership',
            'Expire Date',
            'Profile',
            'Profile Status',
            'Action',
        ]" />
    </x-staff.page>



    <div class="modal fade" id="sendMailModal" tabindex="-1" aria-labelledby="sendMailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="sendMailModalLabel">Send Mail</h5>
                    <button type="button" class="btn-close closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="sendMailForm">
                    <div class="modal-body">
                        <!-- Recipient -->
                        <div class="mb-3">
                            <label for="recipientEmail" class="form-label">Recipient Email</label>
                            <input type="text" class="form-control" id="recipientEmail" name="recipientEmail" readonly>
                        </div>

                        <!-- Subject -->
                        <div class="mb-3">
                            <label for="mailSubject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="mailSubject" name="subject"
                                placeholder="Enter subject" required>
                        </div>

                        <!-- Message -->
                        <div class="mb-3">
                            <label for="mailMessage" class="form-label">Message</label>
                            <textarea class="form-control" id="mailMessage" name="message" rows="5" placeholder="Write your message here..."
                                required></textarea>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary closeModal" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="sendMailFormBtn" class="btn btn-primary">Send Mail</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection

@push('js')
    <script>
        var table = $('#table').DataTable({
            ajax: '{!! route('staff.therapist.index') !!}',
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'id',
                    searchable: false
                },
                {
                    data: 'user.full_name',
                    name: 'user.first_name',
                    defaultContent: ''
                },
                {
                    data: 'user.email',
                    name: 'user.email',
                    defaultContent: ''
                },
                {
                    data: 'user.phone',
                    name: 'user.phone',
                    defaultContent: ''
                },
                {
                    data: 'membership_plan.name',
                    name: 'membershipPlan.name',
                    defaultContent: '',
                    render: (data, type, row) => {
                        return data != null ? `${data} (${row.membership_type})` : null;
                    }
                },
                {
                    data: 'membership_expire',
                    name: 'membership_expire'
                },
                // {data: 'video', name: 'video', render: (data) => data !== null ? 'Live profile':'Standard profile'},
                {
                    data: 'live_profile',
                    name: 'live_profile',
                    render: (data, type, row) => {
                        return `<div class="d-flex">
                            <div class="me-2">Standard</div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" ${data ? 'checked':''} id="inActiveSwitch" value="${row.id}" data-type="live_profile">
                            </div>
                            <div>Live</div>
                        </div>`
                    },
                    searchable: false,
                    orderable: false
                },
                {
                    data: 'hide_profile',
                    name: 'hide_profile',
                    render: (data, type, row) => {
                        return `<div class="d-flex">
                            <div class="me-2">Hide</div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" ${!data ? 'checked':''} id="inActiveSwitch" value="${row.id}" data-type="hide_profile">
                            </div>
                            <div>Show</div>
                        </div>`
                    },
                    searchable: false,
                    orderable: false
                },
                {
                    data: 'action',
                    searchable: false,
                    orderable: false
                }
            ]
        });

        function openSendMailModal(email) {
            const emailInput = document.getElementById("recipientEmail");
            if (email === 'all') {
                emailInput.value = "All Members";
            } else {
                emailInput.value = email;
            }
            const sendMailModal = new bootstrap.Modal(document.getElementById('sendMailModal'));
            sendMailModal.show();
        }

        $(document).ready(function() {
            $('#sendMailModal .closeModal').on('click', function() {
                $('.modal-backdrop').remove();
                $('#sendMailModal').modal('hide');
            });

            $('#sendMailModal').on('hidden.bs.modal', function() {
                $('#sendMailForm')[0].reset();
                $('#recipientEmail').val('');
            });
        });

        $('#sendMailForm').on('submit', function(e) {
            e.preventDefault();
            let formData = $(this).serialize();
            $.ajax({
                url: "{{ route('staff.therapist.sendMail') }}",
                method: "POST",
                data: formData,
                beforeSend: function() {
                    $('#sendMailFormBtn').prop('disabled', true).text('Sending...');
                },
                success: function(res) {
                    $('#sendMailModal').modal('hide');
                    $('#sendMailForm')[0].reset();
                    Swal.fire({
                        icon: 'success',
                        title: 'Sent!',
                        text: res.message,
                        timer: 2500,
                        showConfirmButton: true
                    });
                },
                error: function(err) {
                    alert('Error sending email!');
                },
                complete: function() {
                    $('#sendMailFormBtn').prop('disabled', false).text('Send Mail');
                }
            });
        });
    </script>
@endpush
