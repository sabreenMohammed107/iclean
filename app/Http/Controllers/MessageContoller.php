<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\message; 

class MessageContoller extends Controller
{
    //
        
public function getAllMessages()
{
    # code...
      $messages= message::all(); 
     
      return view("admin.messages.index",compact("messages"));
}
    public function deleteMessage($id)
    {
        // Find the message by ID
        $message = message::find($id);
        
        // Check if message exists
        if ($message) {
            // Delete the message
            $message->delete();
            
            // Redirect with success message
            return redirect()->route('myadmin-allmessages')->with('success', 'Order deleted successfully.');
        }
        
        // Redirect with error message if order not found
         return redirect()->route('myadmin-allmessages')->with('error', 'Order not found.');
    }

}
