<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    /**
     * @param $grade
     * @return string
     */
    public function addResult($grade): string
    {
        if ($grade >= $this->best_grade) {
            if (($this->best_grade < $this->lowest_passing_grade) && $grade > $this->lowest_passing_grade) {
                $this->passed_at = now();
            }
            $this->best_grade = $grade;
            $this->save();

            return 'Added new Result...';
        } else {
            return 'Previous Result was better';
        }
    }
}
