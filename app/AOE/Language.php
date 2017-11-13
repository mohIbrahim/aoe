<?php
namespace App\AOE;

/**
 *
 */
trait Language
{
	function isArabic()
	{
		if(session()->has('locale') && session('locale') == 'ar')
			return true;
		else
			return false;
	}
}
