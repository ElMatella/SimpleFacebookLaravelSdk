<?php
namespace ElMatella\SimpleFacebookLaravelSdk

use Facebook\Facebook;

class SimpleFacebookLaravelSdk extends Facebook {

    public function __construct($app_id,$app_secret,$graph_version)
    {
        parent::__construct([
            'app_id' => $app_id,
            'app_secret' => $app_secret,
            'default_graph_version' => $graph_version,
        ]);
        $this->setDefaultAccessToken($app_id . '|' . $app_secret);
    }

    public function getInstance()
    {
        return $this;
    }
}