 <?php
    $connect = mysqli_connect("localhost","root","");
    


    class number {
    
        public $n;
    
        public function nmbr(){
          
            if ($this->n>0)
            {
                echo "Positive";
            }
            elseif($this->n<0)
            {
                echo "Negative";
            }
            else
            {
                echo "Zero";
            }
        }
    }

    $x=new number;
    $x->n=mysqli_real_escape_string($connect,$_REQUEST['d1']);
    echo $x->nmbr();
    
    ?>