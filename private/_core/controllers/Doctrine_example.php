<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Doctrine_example extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 public $em;
	 
	public function index()
	{
		$model = 'ShopAttributes';
		
		$model2 = 'Membersshop';
		$model3 = 'Membersusers';
		$this->load->library('doctrine');
		$doc= $this->doctrine->em;
		$this->load->model('Entities/'.$model);		
		$this->load->model('Entities/'.$model2);
			
		$this->load->model('Entities/'.$model3);
		$product = $doc->find($model, '1');
	
		
if ($product === null) {
    echo "No product found.\n";
    exit(1);
}
if(count($_POST))
{
$posts=$_POST['post'];
foreach($posts as $key=> $val)
{

$atr = 'set'.$key;
if(method_exists($product,$atr) && !is_array($val)){

$product->$atr($val);


}
else if(is_array($val))
{

$atr = 'set'.$key;
$user = $doc->find( $val['fk'], $val['val']);
$product->$atr($user);


}

}
$doc->flush();

}

echo '<form action="" method="post">';
foreach((array)$product as $key=>$val)
{
	if(!is_object($val)){
	
	
	$var = strlen($model)+1;
	$atr = 'get'.preg_replace('/[^A-Za-z0-9\-]/', '', substr($key, $var));
	echo substr($key, $var).'<input type="text" name="post['.preg_replace('/[^A-Za-z0-9\-]/', '', substr($key, $var)).']" value="'.$val.'" />';
	echo '<br/>';
	}
	else
	{
	//echo $key;
	$var2 = strlen($model)+1;
	$valxu=preg_replace('/[^A-Za-z0-9\-]/', '', substr($key, $var2));//echo $valxu;
$atr = 'get'.substr($key, $var);
	$vals = $doc->getClassMetadata($model)->associationMappings[$valxu]['targetEntity'];
	
	
	//echo'<pre>';print_r($vals);echo'</pre>';
				$categoryId = $doc->getUnitOfWork()->getEntityIdentifier($val);
				foreach ($categoryId as $keyx=>$valx)
				{
				
				$myval = $valx;
				}
	$mash='get'.preg_replace('/[^A-Za-z0-9\-]/', '', substr($key, $var2));
	$productRepository = $doc->getRepository($model2);
	$products = $productRepository->findAll();
	echo substr($key, $var2);
	
	echo '<select name="post['.preg_replace('/[^A-Za-z0-9\-]/', '', substr($key, $var2)).'][val]">';
	foreach($products as $key33=>$val33)
	{
	echo '<option value="'.$val33->getIdshop().'" ';
	if($val33->getIdshop()==$myval){echo 'selected';}
	echo '>'.$val33->getName().'</option>';
	}
	
	echo'</select>';
	
	echo '<input type="hidden" name="post['.preg_replace('/[^A-Za-z0-9\-]/', '', substr($key, $var2)).'][fk]" value="'.$vals.'" />';
	
	//echo $atr2;
	//echo $product->$atr2()->getid();
	//echo 'memberid';
		
	}
}
echo '<input type="submit"/>';
echo '</form>';
		//echo sprintf("-%s\n", $product->getTitlePage());
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */