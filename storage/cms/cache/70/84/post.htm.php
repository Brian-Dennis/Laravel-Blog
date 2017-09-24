<?php 
class Cms59c70a8dbaf6e492506320_d072db569144889dd4dc7c12a8c05a77Class extends \Cms\Classes\PageCode
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
