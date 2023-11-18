<?php

/*
|--------------------------------------------------------------------------
| Creating general static class
|--------------------------------------------------------------------------
|
*/

class General{
    //User greetings
    protected static $rel;
    protected static $dateFull;
    protected static $case;
    
    //Glogal case switch
    protected static $date;
    
    //For fullDates
    protected static $newDate;
    protected static $convertdate;
    protected static $getdate;
    
    //For getWeeks only
    protected static $weeks;
    
    // Initialization
    protected static function init(){
        //
        self::$rel = "/assets/images";
        
        self::$date = strtotime("now");
        self::$dateFull = date("G",self::$date);
    }
    
    // Returns assoc arrays of complete date info
    public static function getFullDates($datetocheck){
        // Check if value passed is not an int
        if (!is_int($datetocheck)) {
            $datetocheck = strtotime($datetocheck);
        }
        
        self::$newDate = new DateTime();
        self::$convertdate = date("Y-m-d G:i:s", $datetocheck);
        self::$getdate = self::$newDate->diff(new DateTime(self::$convertdate));
        
        $daysTotal = self::$getdate->days; // return total days
        $year = self::$getdate->y;
        $month = self::$getdate->m;
        $days = self::$getdate->d;
        $hour = self::$getdate->h;
        $mins = self::$getdate->i;
        $seconds = self::$getdate->s;

        return [
            'year' => $year,
            'month' => $month,
            'days' => $days,
            'hour' => $hour,
            'mins' => $mins,
            'sec' => $seconds,
            'total_days' => $daysTotal
        ];
    }
    
    // Returns formated date query
    public static function getWeeks($datetocheck){
        // Check if value passed is not an int
        if (!is_int($datetocheck)) {
            $datetocheck = strtotime($datetocheck);
        }
        
        self::$weeks = self::getFullDates($datetocheck);
        
        switch (self::$weeks) {
            // If day is today. Hour is 0 and mins is 0
            case self::$weeks['total_days']===0&&self::$weeks['hour']===0&&self::$weeks['mins']===0:
                self::$case = 'Just now';
                break;
            // If the day is today. Hour is 0 and mins is greater than 0
            case self::$weeks['total_days']===0&&self::$weeks['hour']===0&&self::$weeks['mins']>0:
                self::$case = self::$weeks['mins'] . 'm ' . self::$weeks['sec'] . 's ago';
                break;
            // If the day is today. Hour is greater than 0 and mins is equal to 0
            case self::$weeks['total_days']===0&&self::$weeks['hour']>0&&self::$weeks['mins']===0:
                self::$case = self::$weeks['hour'] . 'h ' . self::$weeks['sec'] . 's ago';
                break;
            // If the day is today. Hour is greater than 0 and mins is greater than 0
            case self::$weeks['total_days']===0&&self::$weeks['hour']>0&&self::$weeks['mins']>=0:
                self::$case = self::$weeks['hour'] . 'h ' . self::$weeks['mins'] . 'm ' . self::$weeks['sec'] . 's ago';
                break;
            // If the day is greater than today and less than 2 days 
            case self::$weeks['total_days']>0&&self::$weeks['total_days']<2:
                self::$case = self::$weeks['total_days'] . 'day ago';
                break;
            // If the day is greater than or equal to 2 and less than 7 days 
            case self::$weeks['total_days']>=2&&self::$weeks['total_days']<7:
                self::$case = self::$weeks['total_days'] . 'days ago';
                break;
            // If the day is greater than or equal to 7 and month is less than 366
            case self::$weeks['total_days']>=7&&self::$weeks['total_days']<366:
                // calculate the days to get the week out - Now we will use the floor to round the num to the lowest numeric figure
                $calWeek = floor(self::$weeks['total_days'] / 7);
                self::$case = $calWeek == 1 ? $calWeek . 'week ago' : $calWeek . 'weeks ago';
                break;
            case self::$weeks['total_days']>=366&&self::$weeks['total_days']<732:
                self::$case = self::$weeks['year'] . 'yr ago';
                break;
            case self::$weeks['total_days']>=732:
                self::$case = self::$weeks['year'] . 'yrs ago';
                break;
        }

        return self::$case;
    }
    
    // User greetings
    public static function userGreetings(){
        self::init();
        
        switch (self::$dateFull) {
        case self::$dateFull>=0&&self::$dateFull<12:
            self::$case = "<p class='greeting'>Good Morning <img src='".self::$rel."g_morning_icon.png' style='width: 50px;top: -5px;position: relative;'></p>";
            break;
        case self::$dateFull>=12&&self::$dateFull<17:
            self::$case = "<p class='greeting'>Good Afternoon <img src='".self::$rel."g_afternoon_icon.png' style='width: 50px;top: -5px;position: relative;'></p>";
            break;
        case self::$dateFull>=17&&self::$dateFull<21:
            self::$case = "<p class='greeting'>Good Evening <img src='".self::$rel."g_evening_icon.png' style='width: 50px;top: -5px;position: relative;'></p>";
            break;
        case self::$dateFull>=21:
            self::$case = "<p class='greeting'>Good Night <img src='".self::$rel."g_night_icon.png' style='width: 50px;top: -5px;position: relative;'></p>";
            break;
        }
        
        return self::$case;
    }
}

/*
|--------------------------------------------------------------------------
| IP Configuration classes
|--------------------------------------------------------------------------
|
|
*/

class ipConfig{
    protected static $IPAddress;
    protected static $support;
    protected static $preference;
    
    protected static $output = NULL;
    
    protected static function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
        if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
            $ip = $_SERVER["REMOTE_ADDR"];
            if ($deep_detect) {
                if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                    $ip = $_SERVER['HTTP_CLIENT_IP'];
            }
        }
        $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
        $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
        $continents = array(
            "AF" => "Africa",
            "AN" => "Antarctica",
            "AS" => "Asia",
            "EU" => "Europe",
            "OC" => "Australia (Oceania)",
            "NA" => "North America",
            "SA" => "South America"
        );
        if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
            $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
            if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
                switch ($purpose) {
                    case "location":
                        self::$output = array(
                            "city"           => @$ipdat->geoplugin_city,
                            "state"          => @$ipdat->geoplugin_regionName,
                            "country"        => @$ipdat->geoplugin_countryName,
                            "country_code"   => @$ipdat->geoplugin_countryCode,
                            "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                            "continent_code" => @$ipdat->geoplugin_continentCode
                        );
                        break;
                    case "address":
                        $address = array($ipdat->geoplugin_countryName);
                        if (@strlen($ipdat->geoplugin_regionName) >= 1)
                            $address[] = $ipdat->geoplugin_regionName;
                        if (@strlen($ipdat->geoplugin_city) >= 1)
                            $address[] = $ipdat->geoplugin_city;
                        self::$output = implode(", ", array_reverse($address));
                        break;
                    case "city":
                        self::$output = @$ipdat->geoplugin_city;
                        break;
                    case "state":
                        self::$output = @$ipdat->geoplugin_regionName;
                        break;
                    case "region":
                        self::$output = @$ipdat->geoplugin_regionName;
                        break;
                    case "country":
                        self::$output = @$ipdat->geoplugin_countryName;
                        break;
                    case "countrycode":
                        self::$output = @$ipdat->geoplugin_countryCode;
                        break;
                }
            }
        }
        
        return self::$output;
    }
    
    public static function getIP($preference = NULL) {
        self::$IPAddress = $_SERVER["REMOTE_ADDR"];  //"185.248.12.73" - Turkey IP $_SERVER["REMOTE_ADDR"]
        
        switch ($preference) {
            case 'country':
               self::$preference = self::ip_info(self::$IPAddress, $preference); 
                break;
            case 'countrycode':
                self::$preference = self::ip_info(self::$IPAddress, $preference); 
                break;
            case 'state':
                self::$preference = self::ip_info(self::$IPAddress, $preference); 
                break;
            case 'region':
                self::$preference = self::ip_info(self::$IPAddress, $preference); 
                break;
            case 'city':
                self::$preference = self::ip_info(self::$IPAddress, $preference); 
                break;
            case 'location':
                self::$preference = self::ip_info(self::$IPAddress, $preference); 
                break;
            case 'address':
                self::$preference = self::ip_info(self::$IPAddress, $preference); 
                break;
            default:
                self::$preference = self::ip_info(self::$IPAddress, 'country'); 
                break;
        }
        
        return self::$preference;
    }
}