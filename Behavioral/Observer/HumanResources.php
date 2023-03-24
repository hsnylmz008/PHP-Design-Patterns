<?php

namespace Behavioral\Observer;
class HumanResources {

    /**
     * @var Communicator
     */
    private Communicator $communicator;

    /**
     * @param array $employees
     */
    public function __construct (array $employees) {
        $this->communicator = new Communicator();

        foreach ($employees as $employee) {
            $this->communicator->attach($employee);
        }
    }

    /**
     * @param string $message
     * @return void
     */
    public function inform (string $message): void {
        $this->communicator->inform($message);
    }

    /**
     * @param Employee $employee
     * @return void
     */
    public function layOf (Employee $employee) {
        $this->communicator->detach($employee);
    }

    /**
     * @param Employee $employee
     * @return void
     */
    public function employ (Employee $employee) {
        $this->communicator->attach($employee);
    }
}
