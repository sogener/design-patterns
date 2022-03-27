<?php

namespace App\Behavioral\Command;

/**
 * Общий интерфейс для всех комманд
 */
interface Command
{
    /**
     * Обязательный метод для запуска команды
     * Receiver будет в конструкторе команды
     */
    public function execute();
}