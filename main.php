<?php
class Farm
{
    public $chicken;
    public $cow;
  
    public function chickenCreate(){
        return $chicken;
    }
    public function cowCreate(){
        return $cow;
    }
 
}
    class Animal extends Farm
    {
        public $egg;
        public $milk;
        public function chickenCount($chicken){
           return 'chicken'.$chicken;
        }
        public function chickenProduction(){
            $egg= rand(0,1);
            return $egg;
         }
        
        public function cowCount($cow){
           return 'cow '.$cow;
        }
        public function cowProduction(){
            $milk= rand(8,12);
            return $milk;
         }
    }

    $cowmass = array();
    $chickenmass = array();
    $farm = new Animal();
    $countmilk=0;
    $countegg=0;
    for($i=1;$i<=10;$i++){
        $cowmass[$i]=$farm->cowCount(substr(md5(rand()), 0, 3));
    }
    for($i=1;$i<=20;$i++){
        
        $chickenmass[$i]=$farm->chickenCount(substr(md5(rand()), 0, 3));
    }
    
    for($i=1;$i<=count($cowmass);$i++){
        
        $countmilk +=$farm->cowProduction();
    }
    for($i=1;$i<=count($chickenmass);$i++){
        
        $countegg+=$farm->chickenProduction();
    }
    echo "Колличество надоя ".$countmilk;
    echo '<br>';
    echo "Колличество яиц ".$countegg;

?>