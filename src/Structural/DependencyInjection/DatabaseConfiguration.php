<?php

namespace App\Structural\DependencyInjection;

class DatabaseConfiguration
{
    private string $password;
    private int $port;
    private string $host;
    private string $username;

    /**
     * @param string $password
     * @param int $port
     * @param string $host
     * @param string $username
     */
    public function __construct(string $password, int $port, string $host, string $username)
    {
        $this->password = $password;
        $this->port = $port;
        $this->host = $host;
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }
}