<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Phone;

class Quizz extends Model
{
	public static $quizz = [];

	/**
	 * Initializes $quizz array to be able to 
	 * add from the users`s choice on each question
	 * sets quizz key in session to store the results
	 * @param void
	 * @return void	
	*/

	public static function start_quizz()
	{
		foreach( Phone::$phones as $phone )
		{
			Quizz::$quizz[$phone[0]] = 0;
		}
		session(['quizz'=>Quizz::$quizz]);

	}

    /**
	 * After receiving first user`s choice
	 * incerements the corresponding values 
	 * of each key
	 * @param int $answer
	 * @return void	
	*/

    public static function result_set_one($answer)
    {
    	$quizz = session()->get('quizz');
    	
    	switch ($answer) {
    		case 0:
    		$quizz['SGX4']++;
    		$quizz['SGA3']++;
    		$quizz['SGA5']++;
    		$quizz['S7E']++;
    		break;
    		case 1:
    		$quizz['SGJ5']++;
    		$quizz['SJ7']++;
    		break;
    		case 2:
    		$quizz['SGA5'] ++;
    		$quizz['S7E']++;
    		break;
    		case 3:
    		$quizz['SGA3']++;
    		$quizz['SGA5']++;
    		$quizz['S7E']++;
    		break;    
    	}
    	session(['quizz'=>$quizz]);

    }

    /**
	 * After receiving second user`s choice
	 * incerements the corresponding values 
	 * of each key
	 * @param int $answer
	 * @return void	
	*/

    public static function result_set_two($answer)
    {
    	$quizz = session()->get('quizz');
    	
    	switch ($answer) {
    		case 0:
    		$quizz['S7E']++;
    		$quizz['SGA3']++;
    		$quizz['SGA5']++;
    		break;
    		case 1:
    		$quizz['SGX4']++;
    		$quizz['SGJ5']++;
    		break;
    		case 2:
    		$quizz['SGA3'] ++;
    		$quizz['SGA5']++;
    		break;
    		case 3:
    		$quizz['SGX4']++;
    		$quizz['SJ7']++;
    		break;    
    	}
    	session(['quizz'=>$quizz]);
    }

	/**
	 * After receiving third user`s choice
	 * incerements the corresponding values 
	 * of each key
	 * @param int $answer
	 * @return void	
	*/

	public static function result_set_three($answer)
	{

		$quizz = session()->get('quizz');

		switch ($answer) {
			case 0:
			$quizz['SGA3']++;
			$quizz['SGJ5']++;
			break;
			case 1:
			$quizz['SGX4']++;
			$quizz['SGA3']++;
			break;
			case 2:
			$quizz['SJ7'] ++;
			$quizz['S7E']++;
			$quizz['SGA5']++;
			break;
			case 3:
			$quizz['SGJ5']++;
			break;    
		}
		session(['quizz'=>$quizz]);
	}

	/**
	 * After receiving fourth user`s choice
	 * incerements the corresponding values 
	 * of each key
	 * @param int $answer
	 * @return void	
	*/

	public static function result_set_four($answer)
	{

		$quizz = session()->get('quizz');

		switch ($answer) {
			case 0:
			$quizz['SJ7']++;
			$quizz['SGJ5']++;
			break;
			case 1:
			$quizz['SGA5']++;
			$quizz['S7E']++;
			$quizz['SGA3']++;
			break;
			case 2:
			$quizz['S7E']++;
			$quizz['SGA5']++;
			$quizz['SGA3']++;
			break;
			case 3:
			$quizz['SGJ5']++;
			$quizz['SGX4']++;			
			break;    
		}
		session(['quizz'=>$quizz]);
	}

	/**
	 * After receiving fifth user`s choice
	 * incerements the corresponding values 
	 * of each key
	 * @param int $answer
	 * @return void	
	*/

	public static function result_set_five($answer)
	{

		$quizz = session()->get('quizz');

		switch ($answer) {
			case 0:
			$quizz['SGA3']++;
			$quizz['SGA5']++;
			break;
			case 1:
			$quizz['SGX4']++;
			break;
			case 3:
			$quizz['S7E']++;
			$quizz['SGA5']++;
			break;
			case 2:
			$quizz['SGJ5']++;
			$quizz['SJ7']++;			
			break;    
		}
		session(['quizz'=>$quizz]);
	}

		/**
	 * After receiving sixth user`s choice
	 * incerements the corresponding values 
	 * of each key
	 * @param int $answer
	 * @return void	
	*/

		public static function result_set_six($answer)
		{

			$quizz = session()->get('quizz');

			switch ($answer) {
				case 0:
				$quizz['SGJ5']++;
				$quizz['SJ7']++;
				break;
				case 1:
				$quizz['SGX4']++;
				$quizz['SGA5']++;
				$quizz['SGA3']++;
				$quizz['S7E']++;			
				break;
				case 2:
				$quizz['S7E']++;
				$quizz['SGA5']++;
				break;
				case 3:
				$quizz['SGA5']++;
				$quizz['SGA3']++;		
				break;    
			}
			session(['quizz'=>$quizz]);
		}

		public static function quizz_result($arr)
		{
			$quizz = session()->get('quizz');
			arsort($quizz);
			
			$prize = array_keys($quizz);
			foreach( Phone::$phones as $phone )
			{
				if($phone[0] === $prize[0]){
					$res = $phone;
				}
			}
			
			session(['quizz_res'=>$res]);

			//UNSET SESSION QUIZZ KEY
			session()->forget('quizz');
			
		}

	}
