<?php

/**
 * Class infoServ
 */
class infoServ {
    private ?int $id;
    private string $serv_name;
    private int $ip;
    private string $password;


    /**
     * infoServ constructor.
     * @param string $serv_name
     * @param int $ip
     * @param string $password
     * @param int|null $id
     */
    public function __construct(string $serv_name, int $ip, string $password, int $id = null){
        $this->id = $id;
        $this->serv_name = $serv_name;
        $this->ip = $ip;
        $this->password = $password;
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