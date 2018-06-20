<?php 
	namespace backend\controllers;
	use Yii;
	use yii\web\Controller;
	use PhpOrient\PhpOrient;

	class OrientdbController extends Controller{
		public function actionSimpleOrientdb(){
			$client = new PhpOrient( 'localhost', 2424 );
			$client->username = 'root';
			$client->password = '1234';
			$client->connect();
			$opendb = $client->dbOpen( 'product', 'root', '1234' );
			$result = $client->query( 'select from product order by id' );
			 
			return $this->render('simpleorientdb', ['result' => $result]);
		}
	}

?>