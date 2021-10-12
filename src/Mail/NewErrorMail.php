<?php

namespace Creativeorange\PrettyErrorPages\Mail;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewErrorMail extends Mailable
{
    use Queueable, SerializesModels;

    public ?string $lastName = null;
    public Carbon $date;
    public string $code;
    public string $description;
    public ?string $firstName = null;
    public ?string $email = null;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(
        Carbon $date,
        string $code,
        string $description,
        ?string $firstName = null,
        ?string $lastName = null,
        ?string $email = null
    ) {
        $this->email = $email;
        $this->firstName = $firstName;
        $this->description = $description;
        $this->code = $code;
        $this->date = $date;
        $this->lastName = $lastName;
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
