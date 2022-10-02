<?php

namespace App\Message;

class LotMessage
{
    public function __construct(
        private $title,
        private $description
    )
    {
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
}