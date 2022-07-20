<?php
class NewsPaper implements SplSubject{
    private $name;
    private $observers = [];
    private $content;

    public function __construct($name) {
        $this->name = $name;
    }

    // 옵저버 추가
    public function attach(\SplObserver $observer) {
        $this->observers[] = $observer;
    }

    // 옵저버 삭제
    public function detach(\SplObserver $observer) {
        $key = array_search($observer, $this->observers, true);

        if ($key) {
            unset($this->observers[$key]);
        }
    }

    public function breakOutNews($content) {
        $this->content = $content;
        $this->notify();
    }

    public function getContent() {
        return $this->content." ({$this->name})";
    }

    // 옵저버에게 알림
    public function notify() {
        foreach ($this->observers as $value) {
            $value->update($this);
        }
    }
}