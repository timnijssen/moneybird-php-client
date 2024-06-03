<?php

namespace Picqer\Financials\Moneybird\Actions;

/**
 * Class FindOne.
 */
trait FindOne
{
    use BaseTrait;

    /**
     * @param  string|int  $id
     * @return mixed
     *
     * @throws \Picqer\Financials\Moneybird\Exceptions\ApiException
     */
    public function find($id)
    {
        $result = $this->connection()->get($this->getEndpoint() . '/' . urlencode($id));

        return $this->makeFromResponse($result);
    }
}
