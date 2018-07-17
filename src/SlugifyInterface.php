<?php

namespace italomoralesf\Slugify;

interface SlugifyInterface
{

    /**
     * Returns a URL from a string
     *
     * @param string             $string
     * @param array|null         $options
     *
     * @return string
     *
     */    
    public function render($string, array $options = []);

}