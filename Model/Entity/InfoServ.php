<?php

/**
 * Class infoServ
 */
class infoServ {
    private ?int $id;
    private string $serv_name;
    private string $ip;
    private string $password;
    private int $game_fk;


    /**
     * infoServ constructor.
     * @param string $serv_name
     * @param string $ip
     * @param string $password
     * @param int $game_fk
     * @param int $id
     */
    public function __construct(string $serv_name, string $ip, string $password, int $game_fk, int $id){
        $this->id = $id;
        $this->serv_name = $serv_name;
        $this->ip = $ip;
        $this->password = $password;
        $this->game_fk = $game_fk;
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
    public function getIp(): string
    {
        return $this->ip;
    }

    /**
     * @param int $ip
     */
    public function setIp(string $ip): void
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

    /**
     * @return int
     */
    public function getGameFk(): int
    {
        return $this->game_fk;
    }

    /**
     * @param int $game_fk
     */
    public function setGameFk(int $game_fk): void
    {
        $this->game_fk = $game_fk;
    }

}