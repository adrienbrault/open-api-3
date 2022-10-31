<?php

namespace PicturePark\API\Model;

class ImportTransferRequest
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * An optional id list of schemas with type layer.
     *
     * @var string[]|null
     */
    protected $layerSchemaIds;
    /**
    * The metadata to be assigned to the imported content. It's a dictionary of dynamic metadata whose structure is defined in the Layer schemas identified
    by the LayerSchemaIds property.
    *
    * @var mixed[]|null
    */
    protected $metadata;
    /**
     * An optional id list of content permission sets. Controls content accessibility outside of content ownership.
     *
     * @var string[]|null
     */
    protected $contentPermissionSetIds;
    /**
     * An optional id list of schemas with type layer.
     *
     * @return string[]|null
     */
    public function getLayerSchemaIds() : ?array
    {
        return $this->layerSchemaIds;
    }
    /**
     * An optional id list of schemas with type layer.
     *
     * @param string[]|null $layerSchemaIds
     *
     * @return self
     */
    public function setLayerSchemaIds(?array $layerSchemaIds) : self
    {
        $this->initialized['layerSchemaIds'] = true;
        $this->layerSchemaIds = $layerSchemaIds;
        return $this;
    }
    /**
    * The metadata to be assigned to the imported content. It's a dictionary of dynamic metadata whose structure is defined in the Layer schemas identified
    by the LayerSchemaIds property.
    *
    * @return mixed[]|null
    */
    public function getMetadata() : ?iterable
    {
        return $this->metadata;
    }
    /**
    * The metadata to be assigned to the imported content. It's a dictionary of dynamic metadata whose structure is defined in the Layer schemas identified
    by the LayerSchemaIds property.
    *
    * @param mixed[]|null $metadata
    *
    * @return self
    */
    public function setMetadata(?iterable $metadata) : self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
        return $this;
    }
    /**
     * An optional id list of content permission sets. Controls content accessibility outside of content ownership.
     *
     * @return string[]|null
     */
    public function getContentPermissionSetIds() : ?array
    {
        return $this->contentPermissionSetIds;
    }
    /**
     * An optional id list of content permission sets. Controls content accessibility outside of content ownership.
     *
     * @param string[]|null $contentPermissionSetIds
     *
     * @return self
     */
    public function setContentPermissionSetIds(?array $contentPermissionSetIds) : self
    {
        $this->initialized['contentPermissionSetIds'] = true;
        $this->contentPermissionSetIds = $contentPermissionSetIds;
        return $this;
    }
}