<?php
namespace UniAlfa\Trabalho;
class Details {
    private int $id;
    private string $model;
    private bool $year;

    public function setId($id):void
    {
        $this->id = $id;
    }

    public function getId():int
    {
        return $this->id;
    }

    public function setModel($model):void
    {
        $this->model = $model;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function setYear($year):void
    {
        $this->year = $year;
    }

    public function getYear(): string
    {
        return $this->year;
    }
}
?>