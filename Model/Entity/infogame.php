<?php


class infogame {
    private ?int $id;
    private string $dev;
    private string $genre;
    private string $content;
    private string $serv_name;
    private int $ip;
    private string $password;


    public function __construct(string $dev, string $genre, string $content, string $serv_name, int $ip, string $password, int $id = null){
        $this->id = $id;

        $this->dev = $dev;
        $this->genre = $genre;
        $this->content = $content;
        $this->serv_name = $serv_name;
        $this->ip = $ip;
        $this->password =$password;
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

    /**
     * @return string
     */
    public function getServName(): string
    {
        return $this->serv_name;
    }

    /**
     * @param string $serv_name
     */
    public function setServName(string $serv_name): void
    {
        $this->serv_name = $serv_name;
    }

    /**
     * @return int
     */
    public function getIp(): int
    {
        return $this->ip;
    }

    /**
     * @param int $ip
     */
    public function setIp(int $ip): void
    {
        $this->ip = $ip;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }



}