<?php

Class TaskObject extends Conduit\Objects\GenericObject
{

  protected string $text;
  protected string|null $description;
  protected int|null $list;
  protected bool $complete;
  protected string|null $due_on;
  protected int|null $subtask_of;

  public function text(): string {
    return $this->text;
  }

  public function description(): string|null {
    return $this->description;
  }

  public function list(): int|null {
    return $this->list;
  }

  public function complete(): bool {
    return $this->complete;
  }

  public function dueOn(): string|null {
    return $this->due_on;
  }

  public function subtaskOf(): int|null {
    return $this->subtask_of;
  }

}
