<?php

namespace Bowero\Healthchecks;

use Illuminate\Support\Facades\Http;

class Healthchecks
{
    public string $uuid;

    /**
     * @return void
     */
    public function success()
    {
        Http::get(config('healthchecks.url') . $this->uuid);
    }

    /**
     * @return $this
     */
    public function start()
    {
        Http::post(config('healthchecks.url') . "$this->uuid/start");

        return $this;
    }

    /**
     * @return $this
     */
    public function failure()
    {
        Http::get(config('healthchecks.url') . "$this->uuid/fail");

        return $this;
    }

    /**
     * @param int $status
     * @return $this
     */
    public function exitWithStatus(int $status)
    {
        $response = Http::get(config('healthchecks.url') . "$this->uuid/$status");

        return $this;
    }

    /**
     * @param string $job
     * @return $this
     */
    public function job(string $job)
    {
        /*
         * Get the UUID of the job from the config file
         */
        $this->uuid = config('healthchecks.jobs.' . $job . '.uuid');

        return $this;
    }

    /**
     * @param string $uuid
     * @return $this
     */
    public function uuid(string $uuid)
    {
        $this->uuid = $uuid;

        return $this;
    }
}
