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
        $this->template .= 'home.home';

        return $this->renderOutput();
    }

    public function zemlyanoy_val() {

    }
}
