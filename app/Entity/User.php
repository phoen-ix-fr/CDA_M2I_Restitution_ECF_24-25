<?php

namespace M2i\Ecf\Entity;

class User extends BaseEntity
{
    protected string $_login;
    protected string $_password;
    protected string $_role;

    public function getLogin(): string
    {
        return $this->_login;
    }

    public function getRole(): string
    {
        return $this->_role;
    }

    public function getPasswordHash(): string
    {
        return $this->_password;
    }

    public function setBlankPassword(): void
    {
        $this->_password = "";
    }
}