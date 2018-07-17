<?php

namespace Italomoralesf\Slugify;

/**
 * Slugify
 *
 * @package Italomoralesf\Slugify
 * @author  Italo Morales F <i@italomoralesf.com>
 * 
 */
class Slugify implements SlugifyInterface
{

	const PATTERN = '/[^\w\d\-\_]/i';
	
    protected $options = [
    	'regexp'	=> self::PATTERN,
        'separator' => '-',
        'lowercase' => true
    ];

	public function __construct(array $options = [])
    {

        $this->options  = array_merge($this->options, $options);

    }

    /**
     * Returns a URL from a string
     *
     * @param string             $string
     * @param array|null         $options
     *
     * @return string
     *
     */ 
    public function render($string, array $options = [])
    {
        $options = array_merge($this->options, (array) $options);

        if ($options['lowercase'])
            $string = strtolower($string);

        $slug = str_replace(' ', $options['separator'], $string);
        
        $slug = preg_replace($options['regexp'], '', $slug);

        return trim($slug);
    }
}