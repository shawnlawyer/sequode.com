<?php
class SQDE_SequodeRoutes{
	public static function collections($collection='collections', $key = null){
        $collections = array('my', 'sequode_favorites', 'palette', 'sequodes', 'tokens', 'packages');
        switch($collection){
			case 'my':
                SQDE_SequodeCollections::owned();
                return;
			case 'machines':
                SQDE_MachineCollections::owned();
                return;
			case 'packages':
                SQDE_PackageCollections::owned();
                return;
			case 'tokens':
                SQDE_TokenCollections::owned();
                return;
			case 'sequode_search':
                SQDE_SequodeCollections::search();
                return;
			case 'user_search':
                SQDE_UsersCollections::search();
                return;
			case 'session_search':
                SQDE_SessionCollections::search();
                return;
			case 'package_search':
                SQDE_PackageCollections::search();
                return;
			case 'token_search':
                SQDE_TokenCollections::search();
                return;
			case 'machine_search':
                SQDE_MachineCollections::search();
                return;
			case 'sequode_favorites':
                SQDE_SequodeCollections::favorited();
                return;
			case 'palette':
                SQDE_SequodeCollections::palette();
                return;
			case 'sequodes':
                SQDE_SequodeCollections::main();
                return;
            default:
			case 'collections':
                echo '{';
                echo  "\n";
                foreach($collections as $loop_key => $collection){
                    if($loop_key != 0){echo ",\n";}
                    echo '"'.$collection.'":';
                    echo self::collections($collection);
                }
                
                echo  "\n";
                echo '}';
                return;
		}
	}
}