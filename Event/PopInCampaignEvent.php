<?php
/**
* This class has been generated by TheliaStudio
* For more information, see https://github.com/thelia-modules/TheliaStudio
*/

namespace PopIn\Event;

use PopIn\Model\PopInCampaign;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Thelia\Core\Event\ActionEvent;

/**
 * Class PopInCampaignEvent
 * @package PopIn\Event
 */
class PopInCampaignEvent extends ActionEvent
{
    protected $id;
    protected $start;
    protected $end;
    protected $contentSourceType;
    protected $contentSourceId;
    protected $customTitle;
    protected $customImage;
    protected $customDescription;
    protected $customPostscriptum;
    protected $customLink;


    protected $popInCampaign;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getStart()
    {
        return $this->start;
    }

    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    public function getEnd()
    {
        return $this->end;
    }

    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    public function getContentSourceType()
    {
        return $this->contentSourceType;
    }

    public function setContentSourceType($contentSourceType)
    {
        $this->contentSourceType = $contentSourceType;

        return $this;
    }

    public function getContentSourceId()
    {
        return $this->contentSourceId;
    }

    public function setContentSourceId($contentSourceId)
    {
        $this->contentSourceId = $contentSourceId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomTitle()
    {
        return $this->customTitle;
    }

    /**
     * @param mixed $customTitle
     * @return PopInCampaignEvent
     */
    public function setCustomTitle($customTitle)
    {
        $this->customTitle = $customTitle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomImage()
    {
        return $this->customImage;
    }

    /**
     * @param UploadedFile $customImage
     * @return PopInCampaignEvent
     */
    public function setCustomImage(UploadedFile $customImage = null)
    {
        $this->customImage = $customImage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomDescription()
    {
        return $this->customDescription;
    }

    /**
     * @param mixed $customDescription
     * @return PopInCampaignEvent
     */
    public function setCustomDescription($customDescription)
    {
        $this->customDescription = $customDescription;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomPostscriptum()
    {
        return $this->customPostscriptum;
    }

    /**
     * @param mixed $customPostscriptum
     * @return PopInCampaignEvent
     */
    public function setCustomPostscriptum($customPostscriptum)
    {
        $this->customPostscriptum = $customPostscriptum;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomLink()
    {
        return $this->customLink;
    }

    /**
     * @param mixed $customLink
     * @return PopInCampaignEvent
     */
    public function setCustomLink($customLink)
    {
        $this->customLink = $customLink;
        return $this;
    }

    public function getPopInCampaign()
    {
        return $this->popInCampaign;
    }

    public function setPopInCampaign(PopInCampaign $popInCampaign)
    {
        $this->popInCampaign = $popInCampaign;

        return $this;
    }
}

