<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Order;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $title, $body, $lastName, $firstName, $phoneNumber, $order;
    public function __construct($title, $body, $lastName, $firstName, $phoneNumber, $order)
    {   
        $this->title = $title;
        $this->body = $body;
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->phoneNumber = $phoneNumber;
        $this->order = $order;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Дякуємо за замовлення в магазині TechnoShop',
        );
    }

    public function build()
    {
        $productsInOrder = $this->order->products;

        return $this->view('mail.order')
                    ->with([
                        'title' => $this->title,
                        'body' => $this->body,
                        'lastName' => $this->lastName,
                        'firstName' => $this->firstName,
                        'phoneNumber' => $this->phoneNumber,
                        'productsInOrder' => $productsInOrder,
                    ]);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
    // use Queueable, SerializesModels;

    // /**
    //  * Create a new message instance.
    //  */
    // public function __construct(private string $title, private string  $body)
    // {
    // }

    // /**
    //  * Get the message envelope.
    //  */

    // /**
    //  * Get the message content definition.
    //  */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'mail.order',
    //         with: [
    //             'title' => $this->title,
    //             'body' => $this->body,
    //         ],
    //     );
    // }

    // /**
    //  * Get the attachments for the message.
    //  *
    //  * @return array<int, \Illuminate\Mail\Mailables\Attachment>
    //  */
    // public function attachments(): array
    // {
    //     return [];
    // }
}
