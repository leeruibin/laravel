<?php
namespace App\Http\Controllers;

class MyLinkedlist {
    private $list = array();
    private $list_length = 0;

    //using a string array to initialize list
    public function __construct(array $a){
        //undefine offset 是说数组未定义
        $length = count($a);
        $this->list_length = $length;
        for( $i=0 ; $i<$length ; $i++){
            array_push($this->list ,$a[$i]);
        }
        // $this->print_list();
    }

    //add an element at specified index
    public function insert($index, $s){
        //检测是否超出链表范围
        if($index < 0 || $index > $this->list_length){

        }else {
            for($ar_index = $this->list_length; $ar_index >=$index ; $ar_index-- ){
                if($ar_index==0){
                    break;
                }
                $this->list[$ar_index] = $this->list[$ar_index-1];
            }
            $this->list[$index] = $s;
            $this->list_length++;
            $this->print_list();
        }
    }

    //delete an element at specified index,from one
    public function delete( $index){
        //检测是否超出链表范围
        if($index<1||$index>$this->list_length){

            return;
        }else {
            //用户从1开始删除符合常识,最后一个不必操作
            for($ar_index = $index-1 ;$ar_index<$this->list_length-1 ;$ar_index++){
                $this->list[$ar_index] = $this->list[$ar_index+1];
            }
            $this->list_length--;
            $this->print_list();
        }
    }

    //add one element at the end of the list
    public function push($s){

        array_push($this->list,$s);
        $this->list_length++;
        $this->print_list();

    }

    //return the last one element
    public function pop(){

        if($this->list_length==0){
            echo "链表为空，不能进行操作";
            return null;
        }
        else {
            $this->list_length--;
            $this->print_list();
            return $this->list[$this->list_length];
        }


    }

    //return number of elements
    public function size(){
        echo $this->list_length;
    }

    //print the list
    public function print_list(){
        for($index = 0;$index < $this->list_length;$index++){
            echo $this->list[$index];
            echo "<br>";
        }
    }

}



?>
