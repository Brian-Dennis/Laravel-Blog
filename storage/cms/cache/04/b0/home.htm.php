<?php 
class Cms59c6fcea29757373820025_623632f45d4acff709dabc4682e0ff23Class extends \Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
