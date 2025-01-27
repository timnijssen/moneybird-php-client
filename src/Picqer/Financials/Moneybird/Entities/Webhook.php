<?php

namespace Picqer\Financials\Moneybird\Entities;

use Picqer\Financials\Moneybird\Actions\FindAll;
use Picqer\Financials\Moneybird\Actions\Removable;
use Picqer\Financials\Moneybird\Actions\Storable;
use Picqer\Financials\Moneybird\Model;

/**
 * Class Webhook.
 */
class Webhook extends Model
{
    use FindAll, Storable, Removable;

    const JSON_OPTIONS = 0;

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'url',
        'enabled_events',
        'last_http_status',
        'last_http_body',
        'token',
    ];

    /**
     * @var string
     */
    protected $endpoint = 'webhooks';
}
