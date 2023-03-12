<?php

namespace TextAnalysis;

interface DocumentInterface
{
    public function textLength();

    public function wordsNumber();

    public function keywordNumber(string $keyword);

}
