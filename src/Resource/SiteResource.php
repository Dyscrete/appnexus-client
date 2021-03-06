<?php
namespace ANClient\Resource;

/**
 * @link https://wiki.appnexus.com/display/api/Site+Service
 * @package ANClient\Resource
 */
class SiteResource extends AbstractResource
{
    /**
     * @return string
     */
    public function getIdName()
    {
        return 'site_id';
    }

    /**
     * @return string
     */
    public function getSingularName()
    {
        return 'site';
    }

    /**
     * @return string
     */
    public function getPluralName()
    {
        return 'sites';
    }

    /**
     * @return string
     */
    public function getEntityClassName()
    {
        return '\\ANClient\\Entity\\Site';
    }
}
