<?php

/**
 * XML sitemap controller
 *
 * @package silverstripe-seo
 * @license MIT License https://github.com/cyber-duck/silverstripe-seo/blob/master/LICENSE
 * @author  <andrewm@cyber-duck.co.uk>
 **/
class SitemapXML_Controller extends Page_Controller {

    private static $allowed_actions = array('getSitemap');

    /**
     * @since version 1.2
     *
     * @var array $url_handlers Push requests to sitemap.xml to the getSitemap method
     **/
    private static $url_handlers = array(
        '' => 'getSitemap'
    );

    /**
     * Set properties for this class and call the sitemap render method
     *
     * @since version 1.2
     *
     * @return void
     **/
    public function init()
    {
        $this->response->addHeader("Content-Type", "application/xml"); 
        
        parent::init();
    }

    public function getSitemap()
    {
        return SEO::getSitemapXML();
    }
}