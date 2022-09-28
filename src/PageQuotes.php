<?php
/**
 * Class Quote
 */
class PageQuotes {
    private $quotes;

    /**
     * @param array $quotes
     */
    function __construct(array $quotes=array())
    {
        if (count($quotes))
        {
            $this->init($quotes);
            $this->quotes($quotes);
        }
    }

    static function quotes(array $quotes=array()) {

    }

    /**
     * @param array $quotes
     * @return void
     */
    public function init(array $quotes)
    {
        if (isset($quotes['quotes']) and !empty($quotes['quotes'])) $this->quotes = $quotes['quotes'];
    }

    /**
     * @param string $page
     * @param int $max
     * @return array
     */
    public function getQuotes(string $page, int $max=0): array
    {
        $quotes = array();
        if ($max) {
            $quotes = array_slice($this->quotes[$page],$max);
        } else {
            $quotes = $this->quotes[$page];
        }
        return $quotes;
    }

    /**
     * @param string $page
     * @param int $max
     * @return string
     */
    public function printQuotes(string $page, int $max=0): string
    {
        $all_quotes = $this->getQuotes($page, $max);
        $quotes = array_rand($all_quotes,1);
        $html = '';
        foreach ($quotes as $quote) {
            $html .= "<div>$quote</div>\n";
        }
        return $html;
    }
}