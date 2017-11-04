<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PagesTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_can_browse_a_list_of_pages()
    {
        $page = factory("App\Page")->create();

        $response = $this->get('/pages');

        $response->assertStatus(200);
        $response->assertSee($page->title);
    }

    /** @test */
    public function a_user_can_browse_a_specific_page()
    {
        $page = factory("App\Page")->create();

        $response = $this->get('/pages/' . $page->id);

        $response->assertStatus(200);
        $response->assertSee($page->title);
    }
}
