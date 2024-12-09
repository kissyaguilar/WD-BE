<?php
class Island
{
    public $islandOfPersonalityID;
    public $name;
    public $image;
    public $color;
    public $shortDescription;
    public $longDescription;

    public function __construct($islandOfPersonalityID, $name, $image, $color, $shortDescription, $longDescription)
    {
        $this->islandOfPersonalityID = $islandOfPersonalityID;
        $this->name = $name;
        $this->image = $image;
        $this->color = $color;
        $this->shortDescription = $shortDescription;
        $this->longDescription = $longDescription;
    }
}
?>