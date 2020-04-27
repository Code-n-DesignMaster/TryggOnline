<?php
namespace App\Controllers;

use Sober\Controller\Controller;
use LJSystem\BankID\BankID;
use chillerlan\QRCode\QRCode;

class PageBecomeCustomer extends Controller
{
    protected $template = 'page-become-customer';
    protected $chooseSubscriptionArray;
    protected $bankID;
    private $currentURL;
    private $bankIdLink;
    private $autostarttoken;

    public function __construct(){
        $this->chooseSubscriptionArray = array(
            'status' => 'publish',
        );
        $this->bankID = new BankID();
        $this->currentURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $this->autostarttoken = bin2hex(openssl_random_pseudo_bytes(24));
        $this->bankIdLink = 'bankid:///?autostarttoken='.$this->autostarttoken.'&redirect='.$this->currentURL.'';
    }

    public function choose_subscription(){
        $products = wc_get_products( $this->chooseSubscriptionArray );
        return $products;
    }

    public function qr_code_login_generation(){
        return (new QRCode)->render(urlencode($this->bankIdLink));
    }

    public function login_register_uri(){
        return $this->bankIdLink;
    }

    public function loginWithBankID(){
        // echo '<pre>';
        // print_r(wp_get_session_token());
        // echo '</pre>';
    }
}