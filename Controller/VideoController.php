<?php

class VideoController
{
    private PDO $pdo;

    public function __construct()
    {
        try {
            (new DotEnv(__DIR__ . '/../.env'))->load();
            $this->setPdo(new PDO(getenv('DATABASE_DNS'), getenv('DATABASE_USER'), getenv('DATABASE_PASSWORD')));
        } catch (PDOException $error) {
            var_dump($error);
            echo "<p style='color: red'>$error</p>";
        }
    }

    public function setPdo(PDO $pdo)
    {
        $this->pdo = $pdo;
        return $this;
    }


    public function getAll(): array
    {
        $videos = [];
        $req = $this->pdo->query("SELECT * FROM `video`");
        $data = $req->fetchAll();
        foreach ($data as $video) {
            $videos[] = new Video($video);
        }
        return $videos;
    }

    public function get(int $id): Video
    {
        # code...
    }

    public function update(int $id): void
    {
        $req = $this->pdo->prepare("UPDATE FROM `video` WHERE id = :id");
        $req->bindParam(":id", $id, PDO::PARAM_INT);
        $req->execute();
    }

    public function delete(int $id): void
    {
        $req = $this->pdo->prepare("DELETE FROM `video` WHERE id = :id");
        $req->bindParam(":id", $id, PDO::PARAM_INT);
        $req->execute();
    }

    public function create(Video $newMovie): void
    {
        $req = $this->pdo->prepare("INSERT INTO `video` (type_video, title, description, image_url, director, trailer_url, release_date, category_id) VALUES (:type_video, :title, :description, :image_url, :director, :trailer_url, :release_date, :category_id)");
        $req->bindValue(":type_video", $newMovie->getType_video(), PDO::PARAM_STR);
        $req->bindValue(":title", $newMovie->getTitle(), PDO::PARAM_STR);
        $req->bindValue(":description", $newMovie->getDescription(), PDO::PARAM_STR);
        $req->bindValue(":image_url", $newMovie->getImage_url(), PDO::PARAM_STR);
        $req->bindValue(":director", $newMovie->getDirector(), PDO::PARAM_STR);
        $req->bindValue(":trailer_url", $newMovie->getTrailer_url(), PDO::PARAM_STR);
        $req->bindValue(":release_date", $newMovie->getRelease_date(), PDO::PARAM_STR);
        $req->bindValue(":category_id", $newMovie->getCategory_id(), PDO::PARAM_INT);

        $req->execute();
    }
}
