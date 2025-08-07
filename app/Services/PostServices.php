<?php

namespace App\Services;

use App\Repositories\PostRepositoryInterface;

class PostServices
{
    /**
     * Create a new class instance.
     */
    public function __construct(public PostRepositoryInterface $postRepository)
    {
       
    }
    public function getAllPosts()
    {
        // Retrieve all posts using the repository
        return $this->postRepository->getAllPost();
    }
    
    public function createPost(array $data)
    {
        // Create a new post using the repository
        return $this->postRepository->create($data);
    }
    public function getPostById($id)
    {
        // Logic to retrieve a post by ID
        // This method should be implemented in the repository interface and repository class
        return $this->postRepository->getPostById($id);
    }

    public function updatePost(array $data, $id){
        return $this->postRepository->update($data, $id);
    }

    public function deletePost($id){
        return $this->postRepository->delete($id);
    }

    
}
