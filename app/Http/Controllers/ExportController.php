<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\User;

class ExportController extends Controller
{
    public function exportCsv()
    {
        $fileName = 'answers.csv';
        $tasks = User::all()->toArray();

        $headers = [
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0",
        ];

        $columns = ['Пользователь', 'Хозяйство', 'Номер телефона', 'Отзыв', 'Ответ 1', 'Ответ 2', 'Ответ 3'];

        $callback = function () use ($tasks, $columns) {
            $file = fopen('php://output', 'w');
            fwrite($file, chr(0xEF) . chr(0xBB) . chr(0xBF)); // BOM
            fputcsv($file, $columns, ';');

            foreach ($tasks as $task) {
                $row = [];
                $answers = Answer::query()
                                 ->where('user_id', $task['id'])
                                 ->orderBy('question_number', 'ASC')
                                 ->get()
                                 ->toArray();
                $row['Пользователь'] = $task['name'];
                $row['Хозяйство'] = $task['hoz'];
                $row['Номер телефона'] = $task['phone'];
                $row['Отзыв'] = $task['review'];
                foreach ($answers as $key => $answer) {
                    $row['Ответ ' . $key + 1] = $answer['answer'] === "2" ? 'Правильно' : 'Неправильно';
                }

                fputcsv(
                    $file,
                    [
                        $row['Пользователь'],
                        $row['Хозяйство'],
                        $row['Номер телефона'],
                        $row['Отзыв'],
                        $row['Ответ 1'] ?? '',
                        $row['Ответ 2'] ?? '',
                        $row['Ответ 3'] ?? '',
                    ],
                    ';'
                );
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    private function isAnswerRight(array $answer)
    {

    }
}
