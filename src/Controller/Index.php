<?php
namespace EventsModule\Controller;

use EventsModule\Controller\Shared as SharedController;
use Psr\Http\Message\RequestInterface;

class Index extends SharedController
{
    public function indexAction(RequestInterface $request)
    {
        return $this->render('EventsModule:index:index.html.php');
    }
}
