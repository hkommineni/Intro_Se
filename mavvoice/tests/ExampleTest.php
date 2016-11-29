<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testPutRequest()
    {
      $this->withoutMiddleware();
      $response = $this->call('PUT', '/posts', ['post' => '20']);
      $this->assertEquals(405, $response->status());
      usleep(200);
    }

    /**
     * A basic functional to test home page.
     *
     * @return void
     */
    public function testHomePage()
    {

        $this->visit('/')
             ->see('Home');
             usleep(200);
    }

    /**
     * A basic functional to test delete post request.
     *
     * @return void
     */
    public function testPostDeleteRequest()
    {

      $this->withoutMiddleware();
      $response = $this->call('DELETE', '/posts', ['post' => '20']);
      $this->assertEquals(405, $response->status());
      usleep(200);

    }


    /**
     * A basic functional to test create post request.
     *
     * @return void
     */
    public function testPostCreateRequest()
    {
      $this->withoutMiddleware();
      $response = $this->call('GET', '/posts/create');
      $this->assertEquals(500, $response->status());
      usleep(200);
    }



    /**
     * A basic functional to test update post request.
     *
     * @return void
     */
    public function testPostUpdateRequest()
    {
      $this->withoutMiddleware();
      $response = $this->call('PUT', '/posts', ['post' => '20']);
      $this->assertEquals(405, $response->status());
      usleep(200);
    }

    /**
     * A basic functional to test show post request.
     *
     * @return void
     */
    public function testPostShowRequest()
    {
      $this->withoutMiddleware();
      $response = $this->call('GET', '/posts', ['post' => '20']);
      $this->assertEquals(500, $response->status());
      usleep(200);
    }

    /**
     * A basic functional to test email value in Users table
     *
     * @return void
     */
    public function testValueUserDatabase()
    {
        $this->seeInDatabase('users', ['email' => 'test@gmail.com']);
        usleep(200);
    }

    /**
     * A basic functional to test title in post table.
     *
     * @return void
     */
    public function testTitleInPostDatabase()
    {
        $this->seeInDatabase('posts', ['title' => 'About UNO']);
        usleep(200);
    }

    /**
     * A basic functional to test creating fake values in User database
     *
     * @return void
     */
    public function testUserDatabase()
    {
        $user = factory(App\User::class)->make();
        usleep(200);
    }

    /**
     * A basic functional to test creating values in Post table.
     *
     * @return void
     */
    public function testPostDatabase()
    {
        $post = factory(App\Post::class)->make();
        usleep(200);
    }


    /**
     * A basic functional to test create comment request.
     *
     * @return void
     */
    public function testCommentUpdateRequest()
    {
      $this->withoutMiddleware();
      $response = $this->call('PUT', '/mavoice', ['post' => 'test']);
      $this->assertEquals(405, $response->status());
      usleep(200);

    }

    /**
     * A basic functional to test delete comment request.
     *
     * @return void
     */
    public function testCommentDestroyRequest()
    {
      $this->withoutMiddleware();
      $response = $this->call('DELETE', '/mavoice', ['post' => 'test']);
      $this->assertEquals(405, $response->status());
      usleep(200);

    }

    /**
     * A basic functional to test delete tags request.
     *
     * @return void
     */
    public function testTagsDestroyRequest()
    {
      $this->withoutMiddleware();
      $response = $this->call('DELETE', '/tags', ['tag' => 'test']);
      $this->assertEquals(405, $response->status());
      usleep(200);

    }

    /**
     * A basic functional to test create tags request.
     *
     * @return void
     */
    public function testTagsStoreRequest()
    {
      $this->withoutMiddleware();
      $response = $this->call('POST', '/tags');
      $this->assertEquals(302, $response->status());
      usleep(200);

    }

    /**
     * A basic functional to test update tags request.
     *
     * @return void
     */
    public function testTagsUpdateRequest()
    {
      $this->withoutMiddleware();
      $response = $this->call('PUT', '/tags',['tag' => 'test']);
      $this->assertEquals(405, $response->status());
      usleep(200);

    }
}
