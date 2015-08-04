<?php
class SQDE_SequodeRunnerServerModule{
    public static function run(){
		$output_types = array('json');
        $request_pieces = SQDE_Server::requestUriPieces();
        if(isset($request_pieces[0]) && trim($request_pieces[0]) != '' && in_array($request_pieces[0], $output_types)){
            $output_type = $request_pieces[0];
            array_shift($request_pieces);
        }
		self::handleSequodeOutput(self::handleSequodeRoute($request_pieces), $output_type);
    }
	private static function handleSequodeOutput($sequode, $output_type = ''){

		switch($output_type){
			case 'json':
				header('Content-Type: application/json');
				echo @json_encode($sequode->output_object);
				break;
			default:
				if(strlen($sequode->output_object->Output_Buffer) > 0){
					echo $sequode->output_object->Output_Buffer;
				}else{
					header('Content-Type: application/json');
					echo @json_encode($sequode->output_object);
				}
				break; 
		}
	}
	private static function handleSequodeRoute($request_pieces){
		
		$owner = SQDE_ApplicationProfile::model()->owner();
		if(isset($request_pieces[0]) && trim($request_pieces[0]) != ''){
			$route = $request_pieces[0];
			$sequode_model = SQDE_SequodeActions::getModel($route, 'name', $owner);
			if(!$sequode_model){   
				echo '404 Error<br /> Does Not Exist! : '.$route;
				exit;
			}elseif(intval($sequode_model->usage_type) == 0){
				echo 'Type Error<br />Sequence-able code type sequode elements cannot be directly run with REST. : '.$route;
				exit;
			}else{
				array_shift($request_pieces);
				$parameters = array();
				if(isset($request_pieces[0])){
					$parameters = $request_pieces;
				}
				unset($request_pieces);
			}
		}else{
			$sequode_model = SQDE_SequodeActions::getIndex($owner);
			if(!$sequode_model){
				exit;
			}
		}
		$input_object = json_decode($sequode_model->input_object);
		$property_object = json_decode($sequode_model->property_object);
		foreach($input_object as $member => $value){
			if(isset($parameters[0])){
				$input_object->$member = $parameters[0];
				array_shift($parameters);
			}
		}
		foreach($property_object as $member => $value){
			if($member != 'Run_Process'){ continue; }
			if(isset($parameters[0])){
				$property_object->$member = $parameters[0];
				array_shift($parameters);
			}
		}
		$parameters = array($sequode_model, $input_object, $property_object);
		return forward_static_call_array(array('SQDE_SequodeOperations','run'), $parameters);
	}
}