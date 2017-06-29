<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\QuizzRequest;

use App\Answer;
use App\Question;
use App\Quizz;
use App\Phone;

class QuizzController extends Controller
{

	/**
	 * returns the home page
	 * @param void
	 * @return void	
	*/

	
	public function index()
	{
		return view('welcome');
	}

	/**
	 * First question and first set of answers
	 * @param void
	 * @return void	
	*/


	public function set_one()
	{		
		Quizz::start_quizz();

		$question = Question::get_question(0);
		$answers = Answer::get_answers(0);
		return view('sets.one', compact(['question', 'answers']));
	}

	/**
	 * receives	first selected answer in request
	 * increments the corresponding keys in quizz array
	 * @param Request $request
	*/


	public function res_set_one(QuizzRequest $request)
	{
		$answer = $request->answer;    
		
		Quizz::result_set_one($answer);

		return redirect()->route('set_two');
	}

	/**
	 * returns second question and set of answers
	 * @return view
	 * @return string $question
	 * @return arr $answers
	*/


	public function set_two()
	{
		
		$question = Question::get_question(1);
		$answers = Answer::get_answers(1);
		return view('sets.two', compact(['question', 'answers']));
	}


	/**
	 * receives	second selected answer in request
	 * increments the corresponding keys in quizz array
	 * @param Request $request
	*/


	public function res_set_two(QuizzRequest $request)
	{
		$answer = $request->answer;    
		
		Quizz::result_set_two($answer);

		return redirect()->route('set_three');
	}
	
	/**
	 * returns third question and set of answers
	 * @return view
	 * @return string $question
	 * @return arr $answers
	*/


	public function set_three()
	{
		
		$question = Question::get_question(2);
		$answers = Answer::get_answers(2);
		return view('sets.three', compact(['question', 'answers']));
	}


	/**
	 * receives	third selected answer in request
	 * increments the corresponding keys in quizz array
	 * @param Request $request
	*/


	public function res_set_three(QuizzRequest $request)
	{
		$answer = $request->answer;    
		
		Quizz::result_set_three($answer);

		return redirect()->route('set_four');
	}

	/**
		 * returns fourth question and set of answers
		 * @return view
		 * @return string $question
		 * @return arr $answers
		*/
	
	
	public function set_four()
	{
	
		$question = Question::get_question(3);
		$answers = Answer::get_answers(3);
		return view('sets.four', compact(['question', 'answers']));
	}


	/**
	 * receives	fourth selected answer in request
	 * increments the corresponding keys in quizz array
	 * @param Request $request
	*/


	public function res_set_four(QuizzRequest $request)
	{
		$answer = $request->answer;    
		
		Quizz::result_set_four($answer);

		return redirect()->route('set_five');
	}

	/**
	 * returns fifth question and set of answers
	 * @return view
	 * @return string $question
	 * @return arr $answers
	*/


	public function set_five()
	{
		
		$question = Question::get_question(4);
		$answers = Answer::get_answers(4);
		return view('sets.five', compact(['question', 'answers']));
	}


	/**
	 * receives	fifth selected answer in request
	 * increments the corresponding keys in quizz array
	 * @param Request $request
	*/


	public function res_set_five(QuizzRequest $request)
	{
		$answer = $request->answer;    
		
		Quizz::result_set_five($answer);

		return redirect()->route('set_six');
	}

	/**
	 * returns sixth question and set of answers
	 * @return view
	 * @return string $question
	 * @return arr $answers
	*/


	public function set_six()
	{
		
		$question = Question::get_question(5);
		$answers = Answer::get_answers(5);
		return view('sets.six', compact(['question', 'answers']));
	}


	/**
	 * receives	third selected answer in request
	 * increments the corresponding keys in quizz array
	 * @param Request $request
	*/


	public function res_set_six(QuizzRequest $request)
	{
		$answer = $request->answer;    
		Quizz::result_set_six($answer);
		
		$res = Quizz::quizz_result($answer);
		//TO DO STORE THE RESULT IN SESSION
		
		//redirects to user info form
		return redirect()->route('user_info');
		
	}
	//in userController class
//get user info form
	//displays success in the end!!
	
}
