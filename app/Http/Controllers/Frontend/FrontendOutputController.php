<?php

namespace App\Http\Controllers\Frontend;

use App\Config;
use App\Events\LeadFormSubmitted;
use App\Feedback;
use App\Hostel;
use App\NavMenuItem;
use App\Page;
use App\PortfolioItem;
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

        $this->varsAdd('phone', '8(800)505-16-57');
        $this->varsAdd('address', 'г. Москва, ул. Арбат, дом 12, стр.1, офис 308');
        $this->varsAdd('email', 'info@nicehostel.ru');

        $this->varsAdd('hostels', Hostel::all());

        $this->template .= 'home.home';
        return $this->renderOutput();
    }

    public function hostel(String $route) {

        $hostel = Hostel::where('route', $route)->first();

        $this->varsAdd('phone', $hostel->phone);
        $this->varsAdd('address', $hostel->address);
        $this->varsAdd('email', $hostel->email);
        $this->varsAdd('hostel', $hostel);
        $this->varsAdd('rooms', $hostel->rooms);

        $this->template .= 'hostel.hostel';
        return $this->renderOutput();
    }
}
