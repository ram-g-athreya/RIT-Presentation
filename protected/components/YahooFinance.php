<?php

class YahooFinance {

    public $quote;
    public $chart;
    public $news;

    public function __construct($symbol) {
        $this->getData($symbol);
    }

    private function makeRequest($url) {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        return curl_exec($curl);
    }

    public function getData($symbol) {
        $symbol = strtoupper($symbol);

        //Get Stock Quote
        $base_url = "https://query.yahooapis.com/v1/public/yql/?q=";
        $query = str_replace(" ", "%20", 'select * from yahoo.finance.quotes where symbol="' . $symbol . '"');
        $query = urlencode('select * from yahoo.finance.quotes where symbol="' . $symbol . '"');
        $suffix = "&format=json&diagnostics=true&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=";
        $url = $base_url . $query . $suffix;
        $result = json_decode($this->makeRequest($url));
        $this->quote = $result->query->results;

        //Get Chart
        $this->chart = "http://chart.finance.yahoo.com/z?s=" . $symbol . "&t=7d";

        //Get News Items
        $url = "http://feeds.finance.yahoo.com/rss/2.0/headline?s=" . strtolower($symbol) . "&region=US&lang=en-US";
        $xml_string = $this->makeRequest($url);
        $xml = simplexml_load_string($xml_string);
        $json = json_encode($xml);
        $news = json_decode($json, TRUE);
        $news = $news['channel']['item'];
        $this->news = array_slice($news, 0, 4);
    }

}

?>
