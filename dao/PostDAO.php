<?php
require_once('dao/BaseDAO.php');
require_once('model/Post.php');

class PostDAO extends BaseDAO
{
    public function getPosts(){
        $db = $this->dbConnect();
        $req = $db->query('SELECT *, DATE_FORMAT(date_created, \'%d/%m/%y\') as created_date FROM posts');
        $posts = [];
        while($post = $req->fetch()){
            array_push($posts, new Post($post['id'], $post['title'], $post['content'], $post['created_date']));
        }
        return $posts;
    }

    public function getPost($postId){
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return new Post($post['id'], $post['title'], $post['content'], $post['date_created']);
    }

    public function createPost($titlePost, $contentPost){
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO posts(title, content, date_created) VALUES(?, ?, NOW())');
        $post = $req->execute(array($titlePost, $contentPost));

        return $post;
    }

    public function updatePost($titlePost, $contentPost, $postId){
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE posts SET title = ?, content= ? WHERE id = ?');
        $post = $req->execute(array($titlePost, $contentPost, $postId));

        return $post;
    }

    public function deletePost($postId){
      $db = $this->dbConnect();
      $req = $db->prepare('DELETE FROM posts WHERE id =?');  
      $post = $req->execute(array($postId));

      return $post;
    }
}

