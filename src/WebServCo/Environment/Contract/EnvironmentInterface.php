<?php

declare(strict_types=1);

namespace WebServCo\Environment\Contract;

interface EnvironmentInterface
{
    // Development - local
    final public const ENVIRONMENT_DEVELOPMENT = 'development';

    // Test, QC
    final public const ENVIRONMENT_TESTING = 'testing';

    // Staging, Model, Pre, Demo
    // Mirror of production environment
    final public const ENVIRONMENT_STAGING = 'staging';

    // Production, Live
    final public const ENVIRONMENT_PRODUCTION = 'production';
}
