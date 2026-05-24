<?php

namespace App\Http\Controllers\Admin\Advisory;

trait BelongsToAdvisory
{
    protected const ADVISORY_DOMAIN = 'advisory';

    protected function ensureAdvisory(object $model): void
    {
        abort_unless(($model->source_domain ?? null) === self::ADVISORY_DOMAIN, 404);
    }
}
