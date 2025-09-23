<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\MailLog;
use App\Models\Therapist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Yajra\DataTables\Facades\DataTables;

class MemberMailController extends Controller
{
    public function sendMail(Request $request)
    {
        $request->validate([
            'recipientEmail' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        $emails = [];
        if ($request->recipientEmail == 'All Members') {
            $emails = Therapist::pluck('email')->filter()->toArray();
        } else {
            $emails[] = $request->recipientEmail;
        }

        foreach ($emails as $email) {
            try {
                Mail::raw($request->message, function ($msg) use ($email, $request) {
                    $msg->to($email)
                        ->subject($request->subject);
                });

                // Log success
                MailLog::create([
                    'recipient_email' => $email,
                    'subject' => $request->subject,
                    'message' => $request->message,
                    'status' => 'success',
                ]);
            } catch (\Exception $e) {
                // Log failure
                MailLog::create([
                    'recipient_email' => $email,
                    'subject' => $request->subject,
                    'message' => $request->message,
                    'status' => 'failed',
                ]);
            }
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Email(s) sent successfully!',
        ]);
    }

    public function sendMailLog()
    {
        if (request()->ajax()) {
            $mailLogs = MailLog::query();

            return DataTables::eloquent($mailLogs)
                ->addIndexColumn()
                ->addColumn('recipient_email', fn($data) => $data->recipient_email)
                ->addColumn('subject', fn($data) => $data->subject)
                ->addColumn('message', fn($data) => $data->message) // add this
                ->addColumn('status', function ($data) {
                    return $data->status == 'success' ? '<span class="badge bg-success">Success</span>' : '<span class="badge bg-danger">Failed</span>';
                })
                ->addColumn('created_at', fn($data) => formatDate($data->created_at, 'd M, Y h:i A'))
                ->addColumn('view', function ($data) {
                    $message = htmlspecialchars($data->message, ENT_QUOTES, 'UTF-8');
                    return '<button class="btn btn-sm btn-primary view-mail-log"
                            data-recipient-email="' . e($data->recipient_email) . '"
                            data-subject="' . e($data->subject) . '"
                            data-message="' . $message . '">
                            <i class="bx bx-show"></i>
                        </button>';
                })

                ->rawColumns(['recipient_email', 'subject', 'message', 'status', 'view'])
                ->toJson();
        }

        return view('staff.therapist.mail_log');
    }

    public function whoWantToContact()
    {
        if (request()->ajax()) {
            $mailLogs = ContactUs::query();

            return DataTables::eloquent($mailLogs)
                ->addIndexColumn()
                ->addIndexColumn()
                ->editColumn('created_at', fn($row) => $row->created_at->format('d M, Y h:i A'))
                ->toJson();
        }


        return view('staff.therapist.who-want-to-contact');
    }
}
