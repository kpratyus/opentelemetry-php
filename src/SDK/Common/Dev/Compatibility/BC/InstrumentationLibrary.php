<?php

declare(strict_types=1);

namespace OpenTelemetry\SDK\Common\Dev\Compatibility\BC;

use OpenTelemetry\SDK\Common\Dev\Compatibility\Util;
use OpenTelemetry\SDK\Common\Instrumentation\InstrumentationLibrary as Moved;

/**
 * @codeCoverageIgnoreStart
 */
const OpenTelemetry_SDK_InstrumentationLibrary = 'OpenTelemetry\SDK\InstrumentationLibrary';

final class InstrumentationLibrary implements InstrumentationLibraryInterface
{
    private Moved $adapted;

    public function __construct(string $name, ?string $version = null, ?string $schemaUrl = null)
    {
        $this->adapted = new Moved($name, $version, $schemaUrl);

        Util::triggerClassDeprecationNotice(
            OpenTelemetry_SDK_InstrumentationLibrary,
            Moved::class
        );
    }

    public function getName(): string
    {
        return $this->adapted->getName();
    }

    public function getVersion(): ?string
    {
        return $this->adapted->getVersion();
    }

    public function getSchemaUrl(): ?string
    {
        return $this->adapted->getSchemaUrl();
    }
}

class_alias(InstrumentationLibrary::class, OpenTelemetry_SDK_InstrumentationLibrary);
/**
 * @codeCoverageIgnoreEnd
 */
