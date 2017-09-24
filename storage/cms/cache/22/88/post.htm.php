<?php 
class Cms59c6fe6df1f8f472579594_faac0765d40597d0f810364fcc10c9beClass extends \Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
