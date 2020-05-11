<?php


namespace App\Http\Service;


use App\Contract\Blog\BlogRepositoryInterface;
use App\Contract\Blog\BlogServiceInterface;

class BlogService implements BlogServiceInterface
{
    protected $blogRepository;

    public function __construct(BlogRepositoryInterface $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function all($paginate)
    {
       return $this->blogRepository->all($paginate = null);
    }

    public function create($request)
    {
        // TODO: Implement create() method.
    }

    public function edit($request, $id)
    {
        // TODO: Implement edit() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
