<?php
namespace EventsModule\Controller;

use EventsModule\Controller\Shared as SharedController;
use PPI\Framework\Http\Request as Request;

class Events extends SharedController
{
    public function calendarAction(Request $request)
    {
        // Get all events for the current month in json format
        $events = json_encode($this->getService('events.event.storage')->getCurrentMonthEvents());

        return $this->render('EventsModule:events:calendar.html.php', compact('events'));
    }
}
