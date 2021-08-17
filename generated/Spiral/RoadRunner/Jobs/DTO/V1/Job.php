<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: jobs.proto

namespace Spiral\RoadRunner\Jobs\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>jobs.v1.Job</code>
 */
class Job extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string job = 1;</code>
     */
    protected $job = '';
    /**
     * Generated from protobuf field <code>string id = 2;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string payload = 3;</code>
     */
    protected $payload = '';
    /**
     * Generated from protobuf field <code>map<string, .jobs.v1.HeaderValue> headers = 4;</code>
     */
    private $headers;
    /**
     * Generated from protobuf field <code>.jobs.v1.Options options = 5;</code>
     */
    protected $options = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $job
     *     @type string $id
     *     @type string $payload
     *     @type array|\Google\Protobuf\Internal\MapField $headers
     *     @type \Spiral\RoadRunner\Jobs\DTO\V1\Options $options
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Jobs::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string job = 1;</code>
     * @return string
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Generated from protobuf field <code>string job = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setJob($var)
    {
        GPBUtil::checkString($var, True);
        $this->job = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string id = 2;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string payload = 3;</code>
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Generated from protobuf field <code>string payload = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkString($var, True);
        $this->payload = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, .jobs.v1.HeaderValue> headers = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Generated from protobuf field <code>map<string, .jobs.v1.HeaderValue> headers = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setHeaders($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Spiral\RoadRunner\Jobs\DTO\V1\HeaderValue::class);
        $this->headers = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.jobs.v1.Options options = 5;</code>
     * @return \Spiral\RoadRunner\Jobs\DTO\V1\Options
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Generated from protobuf field <code>.jobs.v1.Options options = 5;</code>
     * @param \Spiral\RoadRunner\Jobs\DTO\V1\Options $var
     * @return $this
     */
    public function setOptions($var)
    {
        GPBUtil::checkMessage($var, \Spiral\RoadRunner\Jobs\DTO\V1\Options::class);
        $this->options = $var;

        return $this;
    }

}

