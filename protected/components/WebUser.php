<?php
class WebUser extends CWebUser{

    protected $_model;

    function isAdmin(){
        $user = $this->loadUser();
        if ($user)
            return $user->level==LevelLookUp::ADMIN;
        return false;
    }

    function isKadis(){
        $user = $this->loadUser();
        if ($user)
            return $user->level==LevelLookUp::KADIS;
        return false;
    }
	function isSekretaris(){
        $user = $this->loadUser();
        if ($user)
            return $user->level==LevelLookUp::SEKRETARIS;
        return false;
    }

    function isKabid(){
        $user = $this->loadUser();
        if ($user)
            return $user->level==LevelLookUp::KABID;
        return false;
    }
	function isKasie(){
        $user = $this->loadUser();
        if ($user)
            return $user->level==LevelLookUp::KASIE;
        return false;
    }
	function isStaf(){
        $user = $this->loadUser();
        if ($user)
            return $user->level==LevelLookUp::STAF;
        return false;
    }

	function getLevel()
	{
		$user=$this->loadUser();
		if($user)
			return $user->level;
		return 100;
	}

	function getNama()
    {
        $user=$this->loadUser();
        if($user)
            return $user->nama;
        return 100;
    }
	function getBidang()
    {
        $user=$this->loadUser();
        if($user)
            return $user->bidang;
        return 100;
    }


    function getUn()
    {
        $user=$this->loadUser();
        if($user)
            return $user->username;
        return 100;
    }


	function getIduser()
    {
        $user=$this->loadUser();
        if($user)
            return $user->kd_user;
        return 100;
    }

    // Load user model.
    protected function loadUser()
    {
        if ( $this->_model === null ) {
            $this->_model = User::model()->findByPk( $this->id );
        }
        return $this->_model;
    }
}
