<?php 

namespace App\Repositories;

use App\Models\Post;
use App\Models\User;

interface PostRepositoryInterface{
    public function create(array $data): Post;

    public function getAllPost();

    public function getPostById($id):Post;
    public function update(array $data,int $id): Post;

    public function delete(int $id);

    // public function getPostWithAuthor(int $user_id);
    // public function getSinglePostWithAuthor($post_id,int $user_id);
}