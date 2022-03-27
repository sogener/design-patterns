<?php

namespace App\Behavioral\Command;

/**
 * Получатель, это сервис который содержит
 * конкретную бизнес логику программы (конкретный класс)
 */
class Receiver
{
    private bool $messageWithDate = true;

    /**
     * @var array
     */
    private array $output = [];

    /**
     * @param string $str
     * @return void
     */
    public function write(string $str): void
    {
        if ($this->messageWithDate) {
            $str .= date('Y-m-d');
        }
        $this->output[] = $str;
    }

    /**
     * @return string
     */
    public function getOutput(): string
    {
        return implode("\n", $this->output);
    }

    public function enableDate(): void
    {
        $this->messageWithDate = true;
    }

    public function disableDate(): void
    {
        $this->messageWithDate = false;
    }
}