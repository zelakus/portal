<?php
namespace console\controllers;


/**
 * Gets database info for `platformer` module
 */
class DefaultController extends \kouosl\base\controllers\console\BaseController
{
    /**
     * Returns every score
     * 
     */
	public function actionGameCount()
    {
		$count = \Yii::$app->db
          ->createCommand("SELECT COUNT(*) FROM games")
          ->queryScalar();
        print_r($count);
        echo"\n";
    }
	
	/**
     * Returns recorded highscore count
     * 
     */
	public function actionRecordCount()
    {	
		$count = \Yii::$app->db
          ->createCommand("SELECT COUNT(*) FROM highscores")
          ->queryScalar();
        print_r($count);
        echo"\n";
    }
	
	/**
     * Returns highscores
     * 
     */
	public function actionHighscores()
    {	
		$groups = \Yii::$app->db
          ->createCommand("SELECT * FROM highscores")
          ->queryAll();
        print_r($groups);
        echo"\n";
    }
	
	/**
     * Returns games
     * 
     */
	public function actionGames()
    {	
		$groups = \Yii::$app->db
          ->createCommand("SELECT * FROM games")
          ->queryAll();
        print_r($groups);
        echo"\n";
    }
}
