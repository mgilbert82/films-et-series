<?php

class Video
{

    //Attributs
    private int $id;
    private string $type_video;
    private int $category_id;
    private string $title;
    private string $description;
    private string $image_url;
    private string $trailer_url;
    private string $director;
    private string $release_date;

    //Constructeur
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    //Méthodes
    public function hydrate(array $data): void
    {
        foreach ($data as $key => $value) {
            $method = "set" . ucfirst($key); //setID, setDescription, setTitle...

            if (method_exists($this, $method)) {
                $this->$method($value); //setID(), setDescription(), setTitle()...
            }
        }
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $newId): self
    {
        if ($newId > 0) {
            $this->id = $newId;
        }
        return $this;
    }

    public function getType_video(): string
    {
        return $this->type_video;
    }


    public function setType_video(string $type_video): self
    {
        $this->type_video = $type_video;

        return $this;
    }

    public function getCategory_id(): int
    {
        return $this->category_id;
    }

    public function setCategory_id($category_id): self
    {
        if ($category_id > 0) {
            $this->category_id = $category_id;
        }
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        if (strlen($title) >= 5 && strlen($title) <= 180) {
            $this->title = $title;
        }
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        if (strlen($description) >= 10 && strlen($description) <= 2000) {
            $this->description = $description;
        }
        return $this;
    }

    public function getImage_url(): string
    {
        return $this->image_url;
    }

    public function setImage_url(string $image_url): self
    {
        $this->image_url = $image_url;

        return $this;
    }

    public function getTrailer_url(): string
    {
        return $this->trailer_url;
    }

    public function setTrailer_url(string $trailer_url): self
    {
        $this->trailer_url = $trailer_url;

        return $this;
    }

    public function getDirector(): string
    {
        return $this->director;
    }

    public function setDirector(string $director): self
    {
        if (strlen($director) >= 5 && strlen($director) <= 100) {
            $this->director = $director;
        }
        return $this;
    }

    public function getRelease_date(): string
    {
        return $this->release_date;
    }

    public function setRelease_date(string $release_date): self
    {
        $this->release_date = $release_date;

        return $this;
    }
}
