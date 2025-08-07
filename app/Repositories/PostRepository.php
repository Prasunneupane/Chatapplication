<?php

namespace App\Repositories;
use App\Models\Post;
// use App\Repositories\PostRepositoryInterface;
class PostRepository implements PostRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct(private Post $model)
    {
        //
    }

    public function create( $data): Post{
        $post =$this->model->create($data);
        return $post;
}

    public function getAllPost()
    {
         $post= $this->model->get();
         return $post;
    }

    public function getPostById($id): Post
    {
        // Logic to retrieve a post by ID
        // This method should be implemented in the repository interface and repository class
        return $this->model->findOrFail($id);
    }

    public function update(array $data, $id): Post
    {
        $post = $this->model->findOrFail($id);
        $post->fill($data);
        $post->save();
        return $post;
    }

    public function delete(int $id)
    {
        $post = $this->model->findOrFail($id);
        $post->delete();
        return $post;
    }
}


?>
