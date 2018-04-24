<?php
	/**
	* 
	*/
	class Web extends Controller
	{
		
		public function init()
		{
			parent::init();
		}
		public function getData($url,$data){
			$key = $this->key;
			$head_data = time();
			$get_type='mobile';
			$header[] = $get_type;
			$header[] = $head_date;
			$header[] =  md5($head_date.md5($key.base64_code($key.$get_type)));

			$header[] =$data;
			$ch = curl_init();
			curl_setopt($ch,CURLOPT_URL,$url);
			curl_setopt($ch,CURLOPT_POST,1);
			curl_setopt($ch,CURLOPT_POSTFILELDS,array('parameter'=>$header);
			curl_setopt($ch,CURLOPT_TIMEOUT,130);
			curl_setopt($ch,option,true);	
			$result = curl_exec($ch);
			if (curl_errno($ch)) {
				return false;
				# code...
			}
			else{
				curl_close($ch);
				return $resuslt;
			}

		}


	}




