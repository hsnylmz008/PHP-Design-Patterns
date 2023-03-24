<?php

namespace Behavioral\Observer;

use SplObjectStorage, SplObserver, SplSubject;
class Communicator implements SplSubject {

    /**
     * @var SplObjectStorage
     */
    private SplObjectStorage $employees;
    public $message;

    /**
     *
     */
    public function __construct () {
        $this->employees = new SplObjectStorage();
    }

    /**
     * @param SplObserver $employee
     * @return void
     */
    public function attach (SplObserver $employee): void {
        $this->employees->attach($employee);
    }

    /**
     * @param SplObserver $employee
     * @return void
     */
    public function detach (SplObserver $employee): void {
        $this->employees->detach($employee);
    }

    /**
     * @param string $message
     * @return void
     */
    public function inform (string $message): void {
        $this->message = $message;
        $this->notify();
    }

    /**
     * @return void
     */
    public function notify (): void {
        foreach ($this->employees as $employee) {
            $employee->update($this);
        }
    }
}
