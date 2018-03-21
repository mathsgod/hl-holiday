<?

namespace HL;

class Holiday
{
    public $language;
    public $ical;
    public $path;

    public function __construct($language)
    {
        $this->language = $language;
        $this->path = realpath(__DIR__ . "/../../ics/$language.ics");
        $this->ical = new \ICal($this->path);
    }

    public function getHoliday($start, $end)
    {
        $holiday = [];

        foreach ($this->getEvents() as $event) {
            $c = [];
            $c["id"] = $event["UID"];
            $c["name"] = $event["SUMMARY"];

            $d = $event["DTSTART"];
            $c["date"] = substr($d, 0, 4) . "-" . substr($d, 4, 2) . "-" . substr($d, 6, 4);

            $s = strtotime($c["date"]);
            if ((strtotime($start) <= $s) && ($s <= strtotime($end))) {
                $holiday[] = $c;
            }
        }
        return $holiday;
    }

    public function getEvents()
    {
        return $this->ical->events();
    }
}
