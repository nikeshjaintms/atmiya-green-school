<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function markAsReadAndRedirect($id)
    {
        $notification = auth()->user()->notifications()->findOrFail($id);
        if ($notification->read_at === null) {
            $notification->markAsRead();
        }

        $enquiryId = $notification->data['enquiry_id'] ?? null;
        if ($enquiryId) {
            return redirect()->route('enquiry.replyForm', ['id' => $enquiryId]);
        }

        return redirect()->back()->with('error', 'Enquiry not found in notification.');
    }
}
