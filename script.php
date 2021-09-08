<?php

const MAX = 40000;


class Segfaulter {
    private int $counter = 0;

    function recurse() {
        $this->counter++;
        if ($this->counter % 1000 === 0) {
            echo $this->counter . PHP_EOL;
        }
        if ($this->counter >= MAX) {
            return;
        }

        preg_match("/..../u", "word", $matches);
        $this->recurse();
    }
}

$segfaulter = new Segfaulter();
$segfaulter->recurse();
echo "finished without error." . PHP_EOL;
