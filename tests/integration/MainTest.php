<?php

class MainTest extends TestCase
{
    public function test_page_is_displayed()
    {
        $this->visit('api-tester')->see('<vm-api-tester-main>');
    }

    public function test_page_is_not_displayed_when_disabled()
    {
        Config::set('api-tester.enabled', false);

        $this->get('api-tester')->seeStatusCode(403);
    }

    public function test_assets_are_retrievable()
    {
        $this->get('api-tester/assets/api-tester.js')->seeStatusCode(200);
        $this->get('api-tester/assets/api-tester.css')->seeStatusCode(200);
    }

    public function test_requests_have_required_structure()
    {
        $this->get('api-tester/requests')->seeJsonStructure(['data' => []]);
    }

    public function test_invalid_request_can_not_be_stored(){
        
        $this->post('api-tester/requests', [])->seeStatusCode(422);
    }

    public function test_routes_have_required_structure()
    {
        $this->get('api-tester/routes');

        $this->seeJsonStructure([
            'data' => [
                '*' => ['method', 'path', 'action'],
            ],
        ]);
    }
}
