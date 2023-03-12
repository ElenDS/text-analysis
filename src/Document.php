<?php

namespace TextAnalysis;

class Document implements DocumentInterface
{
    public function __construct(readonly string $article)
    {
    }

    public function textLength()
    {
        return strlen($this->article);
    }

    public function wordsNumber()
    {
        return str_word_count($this->article);
    }

    public function keywordNumber(string $keyword)
    {
        return substr_count($this->article, $keyword);
    }
}
