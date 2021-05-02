<?php

namespace App\Mail\ToUser;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResultTest extends Mailable
{
    use Queueable, SerializesModels;

    private $mailName;
    protected $fromEmail;
    protected $testResult;
    protected $testGroupName;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($testGroupName, $testResult)
    {
        $this->fromEmail = env('MAIL_USERNAME');
        $this->mailName = env('MAIL_NAME');
        $this->testResult = $testResult;
        $this->testGroupName = $testGroupName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->fromEmail, $this->mailName)->view("mail.toUser.tests.resultTest")->with([
            'testResult' => $this->testResult,
            'testGroupName' => $this->testGroupName,
        ])->subject("Ваш результат");
    }
}
