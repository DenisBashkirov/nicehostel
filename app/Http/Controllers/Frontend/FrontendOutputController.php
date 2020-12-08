<?php

namespace App\Http\Controllers\Frontend;

use App\Config;
use App\Events\LeadFormSubmitted;
use App\Feedback;
use App\Hostel;
use App\NavMenuItem;
use App\Page;
use App\PortfolioItem;
use App\Room;
use App\ServiceType;
use App\TeamPerson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Route;
use Cookie;

class FrontendOutputController extends FrontendBaseController
{
    protected $route_name;
    protected $page;
    protected $template;

    public function __construct() {
        $this->template = 'frontend.pages.';
    }

    public function home() {

        $this->varsAdd('meta_title', 'Nicehostel - Сеть уютных хостелов');
        $this->varsAdd('meta_description', 'Nicehostel - сеть хостелов в городах России, работающих по франшизе.');

        $this->varsAdd('phone', '+7(903)710-86-71');
        $this->varsAdd('address', ' г. Москва, ул. Тушинская, дом 17, офис 33');
        $this->varsAdd('email', 'info@nicehostel.ru');

        $this->varsAdd('hostels', Hostel::all());

        $this->template .= 'home.home';
        return $this->renderOutput();
    }

    public function hostel(String $route) {

        $hostel = Hostel::where('route', $route)->first();
        $min_price = Room::where('hostel_id', $hostel->id)->min('price');

        $this->varsAdd('meta_title', 'Nicehostel | г. ' . $hostel->city . ', ' . $hostel->address);
        $this->varsAdd('meta_description', 'Уютный хостел в г. ' . $hostel->city . '. Размещение от ' . $min_price . 'р . Адрес: ' . $hostel->address . '.');

        $this->varsAdd('phone', $hostel->phone);
        $this->varsAdd('address', $hostel->address);
        $this->varsAdd('email', $hostel->email);
        $this->varsAdd('hostel', $hostel);
        $this->varsAdd('rooms', $hostel->rooms);

        $this->template .= 'hostel.hostel';
        return $this->renderOutput();
    }
}
