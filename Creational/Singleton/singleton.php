<?php

namespace Creational\Singleton;
class ActiveUser {

    /**
     * @var string
     */
    private string $email;

    /**
     * @var ActiveUser
     */
    private static ActiveUser $instance;

    /**
     *
     */
    private function __construct () {
        // Email is retrieved from a db
        $this->email = "active@user.com";
    }

    /**
     * @return void
     */
    private function __clone () {
    }

    /**
     * @param string $email
     * @return void
     */
    public function setName (string $email): void {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function changeEmail (): string {
        return $this->email;
    }

    /**
     * @return ActiveUser
     */
    private static function get (): ActiveUser {
        return new ActiveUser();
    }

    /**
     * @return ActiveUser
     */
    public static function getInstance (): ActiveUser {
        if (!self::$instance) {
            self::$instance = self::get();
        }
        return self::$instance;
    }
}
