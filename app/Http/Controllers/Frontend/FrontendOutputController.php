<?php

namespace App\Http\Controllers\Frontend;

use App\Config;
use App\Events\LeadFormSubmitted;
use App\Feedback;
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

        $this->template .= 'home.home';
        return $this->renderOutput();
    }

    public function zemlyanoy_val() {

        $this->varsAdd('phone', '8(800)505-16-57');
        $this->varsAdd('address', 'г. Москва, ул. Арбат, дом 12, стр.1, офис 308');
        $this->varsAdd('email', 'info@nicehostel.ru');

        $this->template .= 'hostels.zemlyanoy_val';
        return $this->renderOutput();
    }
}
