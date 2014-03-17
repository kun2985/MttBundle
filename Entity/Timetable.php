<?php

namespace CanalTP\MttBundle\Entity;

/**
 * Timetable
 */
class Timetable extends AbstractEntity
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $externalRouteId;

    /**
     * @var Object
     */
    private $blocks;

    /**
     * @var Object
     */
    private $ditributionLists;

    /**
     * @var Object
     */
    private $network;

    /**
     * @var string - non persistent
     */
    private $title;

    /**
     * @var Object - non persistent
     */
    private $line;

    /**
     * @var Object - non persistent
     */
    private $line_config;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set externalRouteId
     *
     * @param  string    $externalRouteId
     * @return Timetable
     */
    public function setExternalRouteId($externalRouteId)
    {
        $this->externalRouteId = $externalRouteId;

        return $this;
    }

    /**
     * Get externalRouteId
     *
     * @return string
     */
    public function getExternalRouteId()
    {
        return $this->externalRouteId;
    }

    /**
     * Set blocks
     *
     * @param  array $blocks
     * @return Line
     */
    public function setBlocks($blocks)
    {
        $this->blocks = $blocks;

        return $this;
    }

    /**
     * Get blocks
     *
     * @return array
     */
    public function getBlocks()
    {
        return $this->blocks;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set title
     *
     * @param  string $networkId
     * @return Line
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

     /**
     * Set line
     *
     * @param  Object    $line
     * @return Timetable
     */
    public function setNetwork($network)
    {
        $this->network = $network;

        return $this;
    }

    /**
     * Get network
     *
     * @return Object
     */
    public function getNetwork()
    {
        return $this->network;
    }

     /**
     * Set lineConfig
     *
     * @param  Object    $line
     * @return Timetable
     */
    public function setLineConfig($lineConfig)
    {
        $this->line_config = $lineConfig;

        return $this;
    }

    /**
     * Get lineConfig
     *
     * @return Object
     */
    public function getLineConfig()
    {
        return $this->line_config;
    }

     /**
     * Set line
     *
     * @param  Object $line
     * @return Route
     */
    public function setLine($line)
    {
        $this->line = $line;

        return $this;
    }

    /**
     * Get line
     *
     * @return Object
     */
    public function getLine()
    {
        return $this->line;
    }
}
