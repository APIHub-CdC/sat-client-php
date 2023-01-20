<?php

namespace SatClientPhp\Client\Model;

use \ArrayAccess;
use \SatClientPhp\Client\ObjectSerializer;

class ResponseFile implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'responseFile';
    
    protected static $RCCPMTypes = [
        'id' => 'string',
        'type' => 'string',
        'id' => 'string',
        'type' => 'string',
        'resource' => 'string',
        'mime_type' => 'string',
        'extension' => 'string',
        'size' => 'int',
        'filename' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'id' => null,
        'type' => null,
        'id' => 'uuid',
        'type' => null,
        'resource' => null,
        'mime_type' => null,
        'extension' => null,
        'size' => 'int32',
        'filename' => null,
        'created_at' => null,
        'updated_at' => null
    ];
    
    public static function RCCPMTypes()
    {
        return self::$RCCPMTypes;
    }
    
    public static function RCCPMFormats()
    {
        return self::$RCCPMFormats;
    }
    
    protected static $attributeMap = [
        'id' => '@id',
        'type' => '@type',
        'id' => 'id',
        'type' => 'type',
        'resource' => 'resource',
        'mime_type' => 'mimeType',
        'extension' => 'extension',
        'size' => 'size',
        'filename' => 'filename',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt'
    ];
    
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'id' => 'setId',
        'type' => 'setType',
        'resource' => 'setResource',
        'mime_type' => 'setMimeType',
        'extension' => 'setExtension',
        'size' => 'setSize',
        'filename' => 'setFilename',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];
    
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'id' => 'getId',
        'type' => 'getType',
        'resource' => 'getResource',
        'mime_type' => 'getMimeType',
        'extension' => 'getExtension',
        'size' => 'getSize',
        'filename' => 'getFilename',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
    ];
    
    public static function attributeMap()
    {
        return self::$attributeMap;
    }
    
    public static function setters()
    {
        return self::$setters;
    }
    
    public static function getters()
    {
        return self::$getters;
    }
    
    public function getModelName()
    {
        return self::$RCCPMModelName;
    }
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'File';
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
        $this->container['mime_type'] = isset($data['mime_type']) ? $data['mime_type'] : null;
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['filename'] = isset($data['filename']) ? $data['filename'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getId()
    {
        return $this->container['id'];
    }
    
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }
    
    public function getType()
    {
        return $this->container['type'];
    }
    
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }
    
    public function getId()
    {
        return $this->container['id'];
    }
    
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }
    
    public function getType()
    {
        return $this->container['type'];
    }
    
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }
    
    public function getResource()
    {
        return $this->container['resource'];
    }
    
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;
        return $this;
    }
    
    public function getMimeType()
    {
        return $this->container['mime_type'];
    }
    
    public function setMimeType($mime_type)
    {
        $this->container['mime_type'] = $mime_type;
        return $this;
    }
    
    public function getExtension()
    {
        return $this->container['extension'];
    }
    
    public function setExtension($extension)
    {
        $this->container['extension'] = $extension;
        return $this;
    }
    
    public function getSize()
    {
        return $this->container['size'];
    }
    
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }
    
    public function getFilename()
    {
        return $this->container['filename'];
    }
    
    public function setFilename($filename)
    {
        $this->container['filename'] = $filename;
        return $this;
    }
    
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }
    
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;
        return $this;
    }
    
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }
    
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;
        return $this;
    }
    
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
