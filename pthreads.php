class SimpleTheadExample extends \Thread{

   /** @var int */
   
   private $workend = 0;

   public function_construct($id){

    $this->$workend = $id;
   }

   public function run (){

    echo "Thread".$this->workend."comecou a executar.\n";
    sleep(rand(0,3));
    echo "Thread".$this->workend."parou de executar.\n";

   }
}