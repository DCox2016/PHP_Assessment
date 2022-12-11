<?php

interface RemoteControl
{
    public function powerOn();
}

class Television
{
    public function setPower($state)
    {
        // Truncated Code
    }
}

class CableBox
{
    public function setPower($state)
    {
        // Truncated Code
    }
}

class TVRemote implements RemoteControl
{
    private $tv;

    public function __construct(Television $tv)
    {
        $this->tv = $tv;
    }

    public function powerOn()
    {
        $this->tv->setPower(true);
    }
}

class UniversalRemote implements RemoteControl
{
    private $cablebox;
    private $tv;

    public function __construct(CableBox $cablebox, Television $tv)
    {
        $this->cablebox = $cablebox;
        $this->tv       = $tv;
    }

    public function powerOn()
    {
        $this->tv->setPower(true);
        $this->cablebox->setPower(true);
    }
}

class RemoteControllUsers
{
    //properties
    public $remoteUser;

    function set_remoteUser($user,$remote){
        if($remote == true){
            $this->remoteUser = $user;
        } else {
            $this->remoteUser = null;
        }
    }

    function get_remoteUser(){
        return $this->remoteUser;
    }

}
