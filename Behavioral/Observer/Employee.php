<?php

namespace Behavioral\Observer;

use SplObserver, SplSubject;
class Employee implements SplObserver {

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    private string $email;

    /**
     * @param string $name
     * @param string $email
     */
    public function __construct (string $name, string $email) {
        $this->name = $name;
        $this->email = $email;
    }

    /**
     * @param SplSubject $communicator
     * @return void
     */
    public function update (SplSubject $communicator): void {
        $this->sendEmail($communicator->message);
    }

    /**
     * @param string $message
     * @return void
     */
    protected function sendEmail (string $message) {
        echo "Sending email to: " . $this->email . " -  Hello " . $this->name . ", " . $message . PHP_EOL;
    }
}
