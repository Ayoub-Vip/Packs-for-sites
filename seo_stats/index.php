<?php
/**
* my seomaster
*/
class seomaster{
	public function alexaRank($url)
	{      #simplexml_load_file()   -->  it use for load a xml file from anethor source
    $xml = simplexml_load_file('http://data.alexa.com/data?cli=10&dat=snbamz&url='.$url);
	$rank=(int)$xml->SD[1]->POPULARITY->attributes()->TEXT;
	$web=(string)$xml->SD[1]->POPULARITY->attributes()->URL;
	return $rank;
	}

	public function seo_link()
	{
		# code...
		#include_once("seo/seostats.php");
		$url="http://www.th3professional.com/";
		echo $this->alexaRank($url);
		/*$seo=new SEOstats($url);
		$google=$seo->Google();
		$alexa=$seo->Alexa();
		$sosiale=$seo->Social();
		$fb=$sosiale->getFacebookShares();
		echo $fb['comment_count'];*/
	}
}
$seomaster=new seomaster;
$seomaster->seo_link();

?>