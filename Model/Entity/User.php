<?php

/**
 * Class user
 */
class user {
    private ?int $id;
    private ?string $name;
    private ?string $password;
    private ?string $email;
    private ?int $role;

/* user constructor */
    /**
     * user constructor.
     * @param int|null $id
     * @param string $name
     * @param string $password
     * @param string $email
     * @param int|null $role
     */
    public function __construct(int $id = null, string $name = null, string $password = null, string $email = null, int $role = null) {
        $this->id = $id;
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->role = $role;
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
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return int|null
     */
    public function getRole(): ?int
    {
        return $this->role;
    }

    /**
     * @param int|null $role
     */
    public function setRole(?int $role): void
    {
        $this->role = $role;
    }

}