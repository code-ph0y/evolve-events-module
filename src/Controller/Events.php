<?php
namespace EventsModule\Controller;

use EventsModule\Controller\Shared as SharedController;
use PPI\Framework\Http\Request as Request;

class Events extends SharedController
{
    public function calendarAction(Request $request)
    {
        return $this->render('EventsModule:events:calendar.html.php');
    }
}
