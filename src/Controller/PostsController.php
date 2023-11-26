<?php
namespace App\Controller;

class PostsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('titleDefault');
    }

    public function index()
    {
        $posts = $this->Posts->find('all');
        $this->set('posts', $this->paginate($posts, ['limit' => 10, 'order' => ['created_at' => 'desc']]));

    }

    public function view($id = null)
    {
        $post = $this->Posts->get($id);
        $this->set(compact('post'));
    }
}

