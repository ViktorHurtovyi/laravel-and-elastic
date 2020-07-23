<?php


namespace App\Articles;



interface ArticlesRepository
{
    public function search(string $query = '');
}
