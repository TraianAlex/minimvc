<?php

use Laracasts\Integrated\Extensions\Goutte as IntegrationTest;

class ExampleTest extends IntegrationTest
{
    protected $baseUrl = 'http://localhost:8080';//:8888 default
    /** @test */
    function it_loads_the_home_page()
    {
        $this->visit('/')->see('Home page');
    }
    /** @test */
    function it_loads_the_about_page()
    {
        $this->visit('about')->andSee('About Test');
        $this->visit('about')->click('Contact')->seePageIs('contact');
    }
}
