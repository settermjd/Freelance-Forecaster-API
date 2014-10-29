<?php
namespace FreelanceForecaster\V1\Rest\Article;

class ArticleResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get('FreelanceForecaster\V1\Rest\Article\ArticleMapper');
        return new ArticleResource($mapper);
    }
}
