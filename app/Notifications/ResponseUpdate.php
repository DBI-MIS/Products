<?php

namespace App\Notifications;

use App\Mail\EmailResponse;
use App\Models\Post;
use App\Models\Product;
use App\Models\Response;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Arr;


class ResponseUpdate extends Notification
{
    use Queueable;
    use Notifiable;
    
    public $response;
    

    public function __construct($response)
    {
        $this->response = $response;
    
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable)
    {
        // return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): Mailable
    {
        
        $response = $this->response;
        $post = Product::find($response->product_title)->title;
        

        
            
        
        return (new EmailResponse($response, $post))
            ->view('mail.mail')->with('response', $this->response)->with('post', $post)
            ->to('desktoppublisher@dbiphils.com')
            ->subject('New Product Inquiry')
            ->from('ggcmis@dbiphils.com', 'New Product Inquiry')
            // ->replyTo($this->response->email, $this->response->full_name, 'replyTo')
                
            
            
            ;
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray()
    {
        
    }
}
