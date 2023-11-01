<?php
    require_once('classes.php');
    class Logic
    {
        
        function GenData($groupstate)
        {
            $teachers = ["Emily Smith", "James Johnson", "Olivia Davis", "Michael Brown", "Sophia Wilson", "William Anderson", "Ava Martinez", "John Taylor", "Isabella Jones", "Daniel Miller"];
            $subject = ["Aj", "Fy", "Ps", "Ma", "Fot", "Čj", "Tv", "Pl", "Cpr", "WWW3", "Zim", "Alm", "Vt"];
        
            $teacher = $teachers[rand(0, sizeof($teachers) - 1)]; 
            $room = rand(0, 13);
            $subject = $subject[rand(0, sizeof($subject) - 1)]; 
        
            $hour = new hour($teacher, $groupstate, $room, $subject); 
        
            return $hour;
        }
        function IsSplited(){
            if(1 == rand(1,10)){ 
                return true;
            }
            return false;
        }
        function SplitedHourStructure(){
            $hourS1 =$this -> GenData("S1");
            $hourS2 = $this -> GenData("S2");
            echo "<table><tr><td>$hourS1->group U$hourS1->room</td></tr><tr><td>$hourS1->subject</td></tr><tr><td>$hourS1->teacher</td></tr></table><table><tr><td>$hourS2->group U$hourS2->room</td></tr><tr><td>$hourS2->subject</td></tr><tr><td>$hourS2->teacher</td></tr></table>";
        }
        function ClassicHourStructure(){
            $hour = $this -> GenData("none");
            echo "<table><tr><td>U$hour->room</td></tr><tr><td>$hour->subject</td></tr><tr><td>$hour->teacher</td></table>";
        }
        public function PrintData($i)
        {
            $days = ["Pondělí","Úterý","Středa","Čtvrtek","Pátek"];
            echo "<tr>";
            echo "<td>{$days[$i]}</td>";
            for($i = 0; $i <= rand(1,9) ; $i++){
                if($this -> IsSplited() == true){
                    echo "<td>";
                    $this -> SplitedHourStructure();
                    echo "</td>";
                }
                else{
                   echo "<td>";
                   $this -> ClassicHourStructure();
                   echo "</td>";
                }
            }
            echo "</tr>";
        }
    }
    
?>