<?php
class SQDE_SequodeRemoteRunnerApplicationProfile {
    private function downloadFile($url, $path){

    $newfname = $path;
    $file = fopen ($url, "rb");
    if($file){
        $newf = fopen ($newfname, "wb");
        if ($newf)
            while(!feof($file)) {
                fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 );
            }
        }
        if ($file) {
            fclose($file);
        }
        if ($newf) {
            fclose($newf);
        }
    }
	public static function model($set = false){
        $packages = SQDE_Packages::models();
        $routes = array();
        foreach($packages as $package){
            if(isset($package->routes)){
                $routes = array_merge($routes, $package->routes);
            }
        }
        
        $model = (object) null;
        $model->routes = $routes;
        $model->server_account = 2;
        if(!is_dir(SQDE_Application::model()->cacheDir)){
            if (!mkdir(SQDE_Application::model()->cacheDir, 0777, true)) {
                echo 'Cannot make sequode cache directory:' . SQDE_Application::model()->cacheDir;
            }
            self::downloadFile('https://sequode.com/chain/'. $model->server_account, SQDE_Application::model()->cacheDir . DIRECTORY_SEPARATOR . 'sequodes.php');
        }
        include(SQDE_Application::model()->cacheDir . DIRECTORY_SEPARATOR . 'sequodes.php');
		$model->module = 'SQDE_SequodeRemoteRunnerServerModule';
		return $model;
	}
}