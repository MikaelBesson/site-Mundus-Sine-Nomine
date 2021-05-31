<?php

/**
 * Class game
 */
class game {
    private ?int $id;
    private string $name;
    private ?int $infogame_fk;


    /**
     * game constructor.
     * @param int|null $id
     * @param string $name
     * @param int|null $infogame_fk
     */
    public function __construct(int $id, string $name, int $infogame_fk = null){
        $this->id = $id;
        $this->name = $name;
        $this->infogame_fk = $infogame_fk;
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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int|null
     */
    public function getInfogameFk(): ?int
    {
        return $this->infogame_fk;
    }

    /**
     * @param int|null $infogame_fk
     */
    public function setInfogameFk(?int $infogame_fk): void
    {
        $this->infogame_fk = $infogame_fk;
    }


}