<?php

namespace App\Mail\Orders;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderPlaced extends Mailable
{
    use Queueable, SerializesModels;
    public $amount, $plan, $name, $email, $phone, $location, $notes, $transactionReference, $payment_type, $subject, $mail_user_type;

    /**
     * Create a new message instance.
     */
    public function __construct($amount, $plan, $name, $email, $phone, $location, $notes, $transactionReference, $payment_type, $subject, $mail_user_type)
    {
        $this->amount = $amount;
        $this->plan = $plan;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->location = $location;
        $this->mail_user_type = $mail_user_type;
        $this->subject = $subject;
        $this->notes = $notes;
        $this->transactionReference = $transactionReference;
        $this->payment_type = $payment_type;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('noreply@reocarwash.com', config('app.name')),
            subject: $this->subject
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.orders.order-placed',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
