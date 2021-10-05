<?php

namespace Creativeorange\PrettyErrorPages\Mail;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewErrorMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(
        public Carbon $date,
        public string $code,
        public string $description,
        public ?string $firstName = null,
        public ?string $lastName = null,
        public ?string $email = null
    ) {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('pretty-error-pages::mails.new-error-mail', [
            'date'        => $this->date,
            'code'        => $this->code,
            'first_name'  => $this->firstName,
            'last_name'   => $this->lastName,
            'email'       => $this->email,
            'description' => $this->description,
        ]);
    }
}
