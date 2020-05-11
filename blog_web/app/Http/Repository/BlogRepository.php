<?php


namespace App\Http\Repository;


use App\Blog;
use App\Contract\Blog\BlogRepositoryInterface;

class BlogRepository implements BlogRepositoryInterface
{
    protected $post;

    public function __construct(Blog $post)
    {
        $this->post = $post;
    }

    public function model()
    {
       return $this->post;
    }

    public function all($paginate)
    {
        return $this->post-$this->all();
    }

    public function delete($obj)
    {
        // TODO: Implement delete() method.
    }

    public function update($obj)
    {
        // TODO: Implement update() method.
    }

    public function store($obj)
    {
        // TODO: Implement store() method.
    }
}
