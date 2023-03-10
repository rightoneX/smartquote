<?php

class Navigation
{
    public $page;

    public function __construct($url)
    {
        $path = parse_url($url);
        // $query = parse_url($url, PHP_URL_QUERY);

        // $selected class="darkerlishadowdown

        switch ($path['path']) {
                // restricted page
            case '/dashboard':
                $this->page = 'pages/dashboard.page.php';
                break;

            case '/tasks':
                $this->page = 'pages/tasks.page.php';
                break;

            case '/quotes':
                $this->page = 'pages/quotes.page.php';
                break;

            case '/projects':
                $this->page = 'pages/projects.page.php';
                break;

            case '/contacts':
                $this->page = 'pages/contacts.page.php';
                break;

            case '/companies':
                $this->page = 'pages/companies.page.php';
                break;

            case '/products':
                $this->page = 'pages/products.page.php';
                break;

            case '/statistics':
                $this->page = 'pages/statistics.page.php';
                break;

            case '/profile':
                $this->page = 'pages/profile.page.php';
                break;

            case '/company':
                $this->page = 'pages/company.page.php';
                break;

            case '/product':
                $this->page = 'pages/product.page.php';
                break;

            case '/help':
                $this->page = 'pages/help.page.php';
                break;

            case '/logout':
                $this->page =  'pages/logout.page.php';
                break;

                // publicly accessible pages 
            case '/':
                $this->page = 'pages/welcome.page.php';
                break;

            case '/news':
                $this->page = 'pages/news.page.php';
                break;

            case '/login':
                $this->page = 'pages/login.page.php';
                break;

            case '/features':
                $this->page =  'pages/features.page.php';
                break;

            case '/pricing':
                $this->page =  'pages/pricing.page.php';
                break;

            case '/faq':
                $this->page =  'pages/faq.page.php';
                break;

            case '/about':
                $this->page =  'pages/about.page.php';
                break;

                // REST API 
            case '/api':
                $this->page =  'pages/processing/api_v1.pro.php';
                break;

            default:
                $this->page = 'pages/404.page.php';
                break;
        }
    }
}
