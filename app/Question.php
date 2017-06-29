<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected static $question = [
	//1
		'Кога изгаряш от нетърпение да си направиш селфи и да го споделиш в социалните мрежи?',
	//2
		'Коя е най-любимата ти лятна напитка?',
	//3
		'Има ли размерът значение всъщност?',
	//4
		'Къде най-много обичаш да си почиваш?',
	//5
		'Как би се описал?',
	//6
		'Какво искаш ти от връзката си с телефона?'
	];

	public static function get_question($set)
	{
		return Question::$question[$set];
	}
}
