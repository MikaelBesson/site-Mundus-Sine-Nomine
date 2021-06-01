<?php

/**
 * Class infogame
 */
class infogame {
    private ?int $id;
    private string $dev;
    private string $genre;
    private string $content;


    /**
     * infogame constructor.
     * @param string $dev
     * @param string $genre
     * @param string $content
     * @param int|null $id
     */
    public function __construct(string $dev, string $genre, string $content, int $id = null){
        $this->id = $id;
        $this->dev = $dev;
        $this->genre = $genre;
        $this->content = $content;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }


    /**
     * @return string
     */
    public function getDev(): string
    {
        return $this->dev;
    }

    /**
     * @param string $dev
     */
    public function setDev(string $dev): void
    {
        $this->dev = $dev;
    }

    /**
     * @return string
     */
    public function getGenre(): string
    {
        return $this->genre;
    }

    /**
     * @param string $genre
     */
    public function setGenre(string $genre): void
    {
        $this->genre = $genre;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }
}