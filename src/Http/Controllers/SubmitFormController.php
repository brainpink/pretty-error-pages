<?php

namespace Creativeorange\PrettyErrorPages\Http\Controllers;

use Carbon\Carbon;
use Creativeorange\PrettyErrorPages\Http\Requests\SubmitFormRequest;
use Creativeorange\PrettyErrorPages\Mail\NewErrorMail;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class SubmitFormController extends Controller
{
    public function __invoke(SubmitFormRequest $request)
    {
        $emailAddresses = config('pretty-error-pages.mail_to.address');
        if (is_string($emailAddresses)) {
            $emailAddresses = [$emailAddresses];
        }

        foreach ($emailAddresses as $emailAddress) {
            Mail::to($emailAddress)
                ->send(new NewErrorMail(
                           Carbon::now(),
                           $request->get('code'),
                           $request->get('description'),
                           $request->get('first_name'),
                           $request->get('last_name'),
                           $request->get('email'),
                       ));
        }

        return redirect()->to(config('pretty-error-pages.home'));
    }
}
