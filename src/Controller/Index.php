<?php
namespace EventsModule\Controller;

use EventsModule\Controller\Shared as SharedController;
use PPI\Framework\Http\Request as Request;

class Index extends SharedController
{
    public function indexAction(Request $request)
    {
        return $this->render('EventsModule:index:index.html.php');
    }
}
