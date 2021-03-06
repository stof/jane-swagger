<?php

namespace Joli\Jane\Swagger\Model;

class Oauth2AccessCodeSecurity
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $flow;
    /**
     * @var string[]
     */
    protected $scopes;
    /**
     * @var string
     */
    protected $authorizationUrl;
    /**
     * @var string
     */
    protected $tokenUrl;
    /**
     * @var string
     */
    protected $description;
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
    /**
     * @return string
     */
    public function getFlow()
    {
        return $this->flow;
    }
    /**
     * @param string $flow
     *
     * @return self
     */
    public function setFlow($flow)
    {
        $this->flow = $flow;

        return $this;
    }
    /**
     * @return string[]
     */
    public function getScopes()
    {
        return $this->scopes;
    }
    /**
     * @param string[] $scopes
     *
     * @return self
     */
    public function setScopes($scopes)
    {
        $this->scopes = $scopes;

        return $this;
    }
    /**
     * @return string
     */
    public function getAuthorizationUrl()
    {
        return $this->authorizationUrl;
    }
    /**
     * @param string $authorizationUrl
     *
     * @return self
     */
    public function setAuthorizationUrl($authorizationUrl)
    {
        $this->authorizationUrl = $authorizationUrl;

        return $this;
    }
    /**
     * @return string
     */
    public function getTokenUrl()
    {
        return $this->tokenUrl;
    }
    /**
     * @param string $tokenUrl
     *
     * @return self
     */
    public function setTokenUrl($tokenUrl)
    {
        $this->tokenUrl = $tokenUrl;

        return $this;
    }
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
