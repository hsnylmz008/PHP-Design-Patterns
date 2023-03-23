<?php

namespace Behavioral\ChainOfResponsibility;

class Response {

    const CODE_OK = 200;
    const CONTENT_TYPE_JSON = "Content-Type: application/json";
    private Request $request;

    /**
     * @param Request $request
     */
    public function __construct (Request $request) {
        $this->request = $request;
    }

    /**
     * @return void
     */
    public function handle () {
        http_response_code(self::CODE_OK);
        header(self::CONTENT_TYPE_JSON);

        echo json_encode([
            "statusCode" => self::CODE_OK,
            "message" => "Request proceeded correctly",
            "params" => $this->request->getParams()
        ]);
    }
}