<?php
include("utils/createIdent.php");

class AnalyzerParams {
    public $definition;
    public $operation;

    public function __construct(string $definition, callable $operation) {
        $this->definition = $definition;
        $this->operation = $operation();
    }

    public function __destruct() {
        unset($this->definition);
        unset($this->operation);
    }

    public function build(): void {
        print_r(
            "<div class='item-block'>
                <span class='item'>$this->definition:</span>".createIdent(3)."<span class='item-output'>$this->operation</span>"."<br/>
            </div>"
        );
    }
}