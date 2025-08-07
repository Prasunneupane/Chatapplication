<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    
</head>
<body>
    <div class="container">
        <h1>Create Post</h1>
        <form action="{{ route('post.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $post->id ?? '' }}">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title ??'' }}" required>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5"  required>
                    {{ trim($post->description) ?? '' }}
                </textarea>    
            </div>

            <div class="form-group">
                <input type="submit" value="Update" class="btn btn-primary ">
            </div>
        </form>
    </div>
</body>
</html>