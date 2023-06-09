<?php

namespace App\Http\Controllers;

use App\Models\EventAds;
use App\Models\Event;
use App\Models\EventCategory;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //

    public function EventAdsController() {
        $event_ads = EventAds::all();
        return $event_ads;
    }

    public function EventListController() {
        $events = Event::all();
        return $events;
    }

    public function EventCategoryController() {
        $eventcategories = EventCategory::all();
        return $eventcategories;
    }

    public function homepageData() {
        $event_ads = $this->EventAdsController();
        $events = $this->EventListController();
        $eventcategories = $this->EventCategoryController();

        $allData = [
            'event_ads' => $event_ads,
            'events' => $events,
            'eventcategories' => $eventcategories,
        ];

        return view('homepage', $allData);
    }
}
