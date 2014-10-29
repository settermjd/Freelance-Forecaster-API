<?php

namespace FreelanceForecaster\V1\Rest\Article;

class ArticleEntity
{
    public $id;
    public $name;
    public $url;
    public $notes;
    public $publication_id;
    public $user_id;
    public $rate;
    public $rate_type_id;
    public $publish_date;
    public $accept_date;
    public $submit_date;
    public $status_id;
    public $article_type_id;
    public $client_id;

    public function getArrayCopy()
    {
        return array(
            'id'     => $this->id,
            'name' => $this->name,
            'url'  => $this->url,
            'notes'  => $this->notes,
            'publication_id'  => $this->publication_id,
            'user_id'  => $this->user_id,
            'rate'  => $this->rate,
            'rate_type_id'  => $this->rate_type_id,
            'publish_date'  => $this->publish_date,
            'accept_date'  => $this->accept_date,
            'submit_date'  => $this->submit_date,
            'status_id'  => $this->status_id,
            'article_type_id'  => $this->article_type_id,
            'client_id'  => $this->client_id,
        );
    }

    public function exchangeArray(array $array)
    {
        $this->id     = $array['id'];
        $this->name = $array['name'];
        $this->url  = $array['url'];
        $this->notes     = $array['notes'];
        $this->publication_id = $array['publication_id'];
        $this->user_id  = $array['user_id'];
        $this->rate     = $array['rate'];
        $this->rate_type_id = $array['rate_type_id'];
        $this->publish_date  = $array['publish_date'];
        $this->accept_date     = $array['accept_date'];
        $this->submit_date = $array['submit_date'];
        $this->status_id = $array['status_id'];
        $this->article_type_id     = $array['article_type_id'];
        $this->client_id = $array['client_id'];
    }
}
