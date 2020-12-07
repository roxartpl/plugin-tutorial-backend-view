<?php

namespace T3ko\Dpd\Soap\Types;

class ParcelDSPV1
{

    /**
     * @var int
     */
    private $parcelId;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var string
     */
    private $waybill;

    /**
     * @return int
     */
    public function getParcelId() : ?int
    {
        return $this->parcelId;
    }

    /**
     * @param int $parcelId
     * @return ParcelDSPV1
     */
    public function setParcelId(int $parcelId) : ParcelDSPV1
    {
        $this->parcelId = $parcelId;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference() : ?string
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     * @return ParcelDSPV1
     */
    public function setReference(string $reference) : ParcelDSPV1
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return string
     */
    public function getWaybill() : ?string
    {
        return $this->waybill;
    }

    /**
     * @param string $waybill
     * @return ParcelDSPV1
     */
    public function setWaybill(string $waybill) : ParcelDSPV1
    {
        $this->waybill = $waybill;
        return $this;
    }


}

