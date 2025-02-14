<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opentelemetry/proto/logs/v1/logs.proto

namespace Opentelemetry\Proto\Logs\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A collection of InstrumentationLibraryLogs from a Resource.
 *
 * Generated from protobuf message <code>opentelemetry.proto.logs.v1.ResourceLogs</code>
 */
class ResourceLogs extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource for the logs in this message.
     * If this field is not set then resource info is unknown.
     *
     * Generated from protobuf field <code>.opentelemetry.proto.resource.v1.Resource resource = 1;</code>
     */
    private $resource = null;
    /**
     * A list of InstrumentationLibraryLogs that originate from a resource.
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.logs.v1.InstrumentationLibraryLogs instrumentation_library_logs = 2;</code>
     */
    private $instrumentation_library_logs;
    /**
     * This schema_url applies to the data in the "resource" field. It does not apply
     * to the data in the "instrumentation_library_logs" field which have their own
     * schema_url field.
     *
     * Generated from protobuf field <code>string schema_url = 3;</code>
     */
    private $schema_url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Opentelemetry\Proto\Resource\V1\Resource $resource
     *           The resource for the logs in this message.
     *           If this field is not set then resource info is unknown.
     *     @type \Opentelemetry\Proto\Logs\V1\InstrumentationLibraryLogs[]|\Google\Protobuf\Internal\RepeatedField $instrumentation_library_logs
     *           A list of InstrumentationLibraryLogs that originate from a resource.
     *     @type string $schema_url
     *           This schema_url applies to the data in the "resource" field. It does not apply
     *           to the data in the "instrumentation_library_logs" field which have their own
     *           schema_url field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Opentelemetry\Proto\Logs\V1\Logs::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource for the logs in this message.
     * If this field is not set then resource info is unknown.
     *
     * Generated from protobuf field <code>.opentelemetry.proto.resource.v1.Resource resource = 1;</code>
     * @return \Opentelemetry\Proto\Resource\V1\Resource
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * The resource for the logs in this message.
     * If this field is not set then resource info is unknown.
     *
     * Generated from protobuf field <code>.opentelemetry.proto.resource.v1.Resource resource = 1;</code>
     * @param \Opentelemetry\Proto\Resource\V1\Resource $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkMessage($var, \Opentelemetry\Proto\Resource\V1\Resource::class);
        $this->resource = $var;

        return $this;
    }

    /**
     * A list of InstrumentationLibraryLogs that originate from a resource.
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.logs.v1.InstrumentationLibraryLogs instrumentation_library_logs = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstrumentationLibraryLogs()
    {
        return $this->instrumentation_library_logs;
    }

    /**
     * A list of InstrumentationLibraryLogs that originate from a resource.
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.logs.v1.InstrumentationLibraryLogs instrumentation_library_logs = 2;</code>
     * @param \Opentelemetry\Proto\Logs\V1\InstrumentationLibraryLogs[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstrumentationLibraryLogs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Opentelemetry\Proto\Logs\V1\InstrumentationLibraryLogs::class);
        $this->instrumentation_library_logs = $arr;

        return $this;
    }

    /**
     * This schema_url applies to the data in the "resource" field. It does not apply
     * to the data in the "instrumentation_library_logs" field which have their own
     * schema_url field.
     *
     * Generated from protobuf field <code>string schema_url = 3;</code>
     * @return string
     */
    public function getSchemaUrl()
    {
        return $this->schema_url;
    }

    /**
     * This schema_url applies to the data in the "resource" field. It does not apply
     * to the data in the "instrumentation_library_logs" field which have their own
     * schema_url field.
     *
     * Generated from protobuf field <code>string schema_url = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSchemaUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->schema_url = $var;

        return $this;
    }

}

