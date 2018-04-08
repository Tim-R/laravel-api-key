<?php

namespace Ejarnutowski\LaravelApiKey\Models;

use Illuminate\Database\Eloquent\Model;

class ApiKeyAccessEvent extends BaseModel
{
    protected $table = 'api_key_access_events';

    /**
     * Get the related ApiKey record
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function apiKey()
    {
        return $this->belongsTo(ApiKey::class, 'api_key_id');
    }

}
