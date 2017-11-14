<?php
namespace App\AOE;

/**
 *
 */
trait Language
{
	public function isArabic()
	{
		if (session()->has('locale') && session('locale') == 'ar')
			return true;
		else
			return false;
	}

	public function isEnglish()
	{
		if (session()->has('locale') && session('local') == 'en')
			return true;
		else
			return false;
	}

}
