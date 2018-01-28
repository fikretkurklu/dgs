<?php

error_reporting(E_ERROR | E_PARSE | E_WARNING);


class SteamUser
{
    public static $apikey;
    public static $domain;

    public function GetPlayerSummaries ($steamid)
    {
        $response = file_get_contents('http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=' . $this->apikey . '&steamids=' . $steamid);
        $json = json_decode($response);
        return $json->response->players[0];
    }

    public function signIn ()
    {
        require 'modeles/php/lightopenid/openid.php';
        $openid = new LightOpenID($this->domain);
        if(!$openid->mode)
        {
            $openid->identity = 'http://steamcommunity.com/openid';
            header('Location: ' . $openid->authUrl());
        }
        elseif($openid->mode == 'cancel')
        {
            print ('User has canceled authentication!');
        }
        else
        {
            if($openid->validate())
            {
                preg_match("/^http:\/\/steamcommunity\.com\/openid\/id\/(7[0-9]{15,25}+)$/", $openid->identity, $matches); // steamID: $matches[1]
                setcookie('steamID', $matches[1], time()+(60*60*24*7), '/'); // 1 week
                header('Location: index.php');
                exit;
            }
            else
            {
                print ('fail');
            }
        }
    }
}


$steamuser = new SteamUser();
$steamuser->apikey = "0F2BD2E6A7F506772A1D420EABE0DAE1"; // put your API key here
$steamuser->domain = "diamondgamingshop.pe.hu"; // put your domain


if(isset($_GET['login']))
{
    $steamuser->signIn();

}
if (array_key_exists( 'logout', $_POST ))
{
    setcookie('steamID', '', -1, '/');
	session_destroy();
    header('Location: index.php');
}

if($_COOKIE['steamID']){
    
    $name = $steamuser->GetPlayerSummaries($_COOKIE['steamID'])->personaname;
    $communityURL = $steamuser->GetPlayerSummaries($_COOKIE['steamID'])->profileurl;
    $avatar = $steamuser->GetPlayerSummaries($_COOKIE['steamID'])->avatarfull;
    $steamId = $steamuser->GetPlayerSummaries($_COOKIE['steamID'])->steamid;
    $referralLink = 'http://diamondgamingshop.me/referral/'.$steamId;
    $miniAvatar = $steamuser->GetPlayerSummaries($_COOKIE['steamID'])->avatar;
    
    $usermanager = new UserManager($bdd);
	
    $req = $usermanager->getUserBySteamId($steamId);
    $data = $req->fetch();
    if($data['nbre'] == 0){
        
    	$classdata = array(
                'name' => $name,
                'communityURL' => $communityURL,
                'steamid' => $steamId,
                'avatar' => $avatar,
                'referralLink' => $referralLink,
                'miniAvatar' => $miniAvatar
            );
    	
        $newuser = new User($classdata);
        $usermanager->add($newuser);

        $dataUser = $usermanager->getUser($steamId);
        $userData = $dataUser->fetch();

        $_SESSION['logUser']['name'] = $userData['name'];
        $_SESSION['logUser']['id'] = $userData['id'];
        $_SESSION['logUser']['communityURL'] = $userData['communityURL'];
        $_SESSION['logUser']['steamid'] = $userData['steamid'];
        $_SESSION['logUser']['nbreDiamonds'] = $userData['nbreDiamonds'];
        $_SESSION['logUser']['avatar'] = $userData['avatar'];
        $_SESSION['logUser']['referralLink'] = $userData['referralLink'];
        $_SESSION['logUser']['code'] = $userData['code'];
        $_SESSION['logUser']['tradeLink'] = $userData['tradeLink'];
        $_SESSION['logUser']['miniAvatar'] = $userData['miniAvatar'];
        $_SESSION['logUser']['affiliated'] = $userData['affiliated'];

        header('Location: index.php?page=referral');
    }elseif($data['nbre'] == 1){
        $usermanager->updateName($name, $steamId);
        $usermanager->updateAvatar($avatar, $steamId);
        $usermanager->updateCommunityURL($communityURL, $steamId);
        $usermanager->updateMiniAvatar($miniAvatar, $steamId);

        $data = $usermanager->getUser($steamId);
        $userData = $data->fetch();

        $_SESSION['logUser']['name'] = $userData['name'];
        $_SESSION['logUser']['id'] = $userData['id'];
        $_SESSION['logUser']['communityURL'] = $userData['communityURL'];
        $_SESSION['logUser']['steamid'] = $userData['steamid'];
        $_SESSION['logUser']['nbreDiamonds'] = $userData['nbreDiamonds'];
        $_SESSION['logUser']['avatar'] = $userData['avatar'];
        $_SESSION['logUser']['referralLink'] = $userData['referralLink'];
        $_SESSION['logUser']['code'] = $userData['code'];
        $_SESSION['logUser']['tradeLink'] = $userData['tradeLink'];
        $_SESSION['logUser']['miniAvatar'] = $userData['miniAvatar'];
	    $_SESSION['logUser']['affiliated'] = $userData['affiliated'];

    }
}
?>
