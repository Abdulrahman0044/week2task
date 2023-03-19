<?php 
/* This code is written to validate a voter's eligibility to vote 
during election
*/ 
//voter's name = "Rashidi Yekini";
$minvoterAge = 18; //Initialize the minimum age for eligibility
$ageRashidi = 18;
$voterPvcCheck = "TRUE";
$voterWard = 020;

    if($ageRashidi == $minvoterAge){ // Validate the voter's age
        /*If the voter's age is 18, then the pvc will validate it
        * We then use switch statement because if Rashidi is confirmed to be 18 years, 
        PVC checker flags TRUE */

    switch($voterPvcCheck){
         case "NO":
             {
                echo ("Voter is not eligible to vote <br>"); //printed if the age is not 18
                break;
            }
        case "MAYBE":
            {
                echo("Voter is not completely eligible to vote <br>"); //if the age is not valid
                break;
            }
        case "TRUE":
            { // If it is true that his age is 18, we then assign ward for him
                //Here we use if statement
                
                 if($voterWard == 020){
                    echo("Voter is eligible to vote <br>");
                } else{
                    echo("Voter is not allocated any number and therefore, he has no ward <br>");
                }
                break;
             }
        default:
        {
            break;
        }
}
} else{
        //If Rashidi is below 18 years, this is then printed
    echo("Voter is not eligible to vote");
}


?>