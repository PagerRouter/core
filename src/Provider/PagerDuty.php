<?php
namespace Shrikeh\PagerRouter\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Shrikeh\PagerRouter\Provider\PagerDuty\Exception\MissingApiKey;
use Shrikeh\PagerDuty\Pimple\Application;

final class PagerDuty implements ServiceProviderInterface
{
    const PROVIDER_PAGERDUTY = 'pagerduty';
    const PAGERDUTY_API_KEY_ENV_VAR = 'PAGERDUTY_API_KEY';

    private $apiKey;

    private $containerKey;

    public static function fromEnv($containerKey = self::PROVIDER_PAGERDUTY)
    {
        return new static(getenv(static::PAGERDUTY_API_KEY_ENV_VAR), $containerKey);
    }

    public static function withApiKey($apiKey, $containerKey = self::PROVIDER_PAGERDUTY)
    {
        return new static($apiKey, $containerKey);
    }

    private function __construct($apiKey, $containerKey)
    {
        if ('' === (string) $apiKey) {
            throw new MissingApiKey('PagerDuty API key cannot be an empty string');
        }
        $this->apiKey = $apiKey;
        $this->containerKey = (string) $containerKey;
    }

    public function register(Container $container)
    {
        $container[$this->containerKey] = Application::container($this->apiKey);
    }
}
