<?php

        /*  Question 01:
        Create a function that will return children, teenagers, young people, old people from the age */

              echo "<h3>Q-1: Create a function that will return children, teenagers, young people, old people from the age </h3>"; //HTML Headline
              echo "<hr/>"; //HTML horizontal line


              function defineAge($age) {
                  if($age <= 12) {
                  return "You are a Children!";
                }

                  elseif($age <= 19) {
                  return "You are a Teenager!";
                }

                  elseif($age <= 50) {
                  return "You are a young people!";
                }
                  else{
                  return "You are an Old man! ";
                  }
              }

              echo defineAge(100);


              /*  Question 02:
                Create a function that will return the area of a rectangle, square, triangle */

              echo "<h3>Q-2: Create a function that will return the area of a rectangle, square, triangle </h3>"; //HTML Headline
              echo "<hr/>"; //HTML horizontal line

                      function rectangle($lenth, $width) {
                      return $lenth * $width;
                      }
    
                      function square($side) {
                      return $side * $side;
                      }

                      function triangle($base, $height) {
                      return 0.5 * $base * $height;
                      }
                      
                      echo "Area of  Rectangle = " . rectangle(20,15) . "<br>";  //Area of Rectangle = 300
                      echo "Area of  Square = " . square(6) . "<br>";//Area of Square = 36
                      echo "Area of  Triangle = " . triangle(16, 7); //Area of Triangle = 56
                      


                        /*  Question 02: GPA function for result publishing */
              echo "<h3>Q-3: GPA function for result publishing</h3>"; //HTML Headline
              echo "<hr/>"; //HTML horizontal line

               function gpaCal($avgMarks)
              {
                      if ($avgMarks >= 80 && $avgMarks <= 100 ) {
                      return "You got A+!";

                  } elseif ($avgMarks >= 70 && $avgMarks <= 79 ) {
                      return "You got A!";

                  } elseif ($avgMarks >= 60 && $avgMarks <= 69){
                      return "You got A-";

                  } elseif ($avgMarks >= 50 && $avgMarks <= 59){
                        return "You got B!";

                  } elseif ($avgMarks >= 40 && $avgMarks <= 49){
                      return "You got C!";

                  } elseif ($avgMarks >= 1 && $avgMarks <= 39){
                      return "You got F!";
                  } else{
                    return "You got 0!";
                  }
              }
                    $subjectA   = 75;
                    $subjectB   = 80;
                    $subjectC   = 65;
                    $subjectD   = 90;

                    $totalMarks  = $subjectA + $subjectB + $subjectC + $subjectD;
                    $totalSubj     = 4;
                    $avgMarks   = $totalMarks / $totalSubj;
                    echo gpaCal($avgMarks );


                    /*  Question 04: Create an age calculator function */
                      echo "<h3>Q-4: Create an age calculator function </h3>"; //HTML Headline
                      echo "<hr/>"; //HTML horizontal line

                      $birthday = new DateTime('18.7.1991'); // Your date of birth
                      $today = new Datetime(date('d.m.y'));
                      $diff = $today->diff($birthday);
                      printf(' Your age : %d years, %d month, %d days', $diff->y, $diff->m, $diff->d);



                      /*  Question 05: Create a BMI function for health */
                      echo "<h3>Q-5: Create a BMI function for health </h3>"; //HTML Headline
                      echo "<hr/>"; //HTML horizontal line
                                   

                      function bmi($weightInKg,$heightInMeter) {
                          $bmi = $weightInKg/($heightInMeter*$heightInMeter);
                          return $bmi;
                      }   

                      $bmi = bmi(65, 1.58); 

                      if ($bmi <= 18.5) {
                          $message = "UNDERWEIGHT!";

                          } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
                          $message = "NORMAL WEIGHT!";

                          } else if ($bmi > 24.9 AND $bmi<=29.9) {
                          $message = "OVERWEIGHT!";

                          } else if ($bmi > 30.0) {
                          $message = "OBESE!";
                      }
                      echo "Your BMI value is  " . $bmi . "  and you are : "; 
                      echo "$message";



                      /*  Question 06: Create a currency converter function from taka to USD, CAD, POUND, EURO etc*/
                      echo "<h3>Q-6: reate a currency converter function from taka to USD, CAD, POUND, EURO </h3>"; //HTML Headline
                      echo "<hr/>"; //HTML horizontal line
                      
                      

                          function currencyConverter($amountBDT, $currency) {
                          if ($currency == "USD") {
                          return round($amountBDT / 86.42, 2) . " usd";
                          }

                          if ($currency == "CAD") {
                          return round($amountBDT / 66.83, 2) . " cad";
                          }

                            if ($currency == "POUND") {
                            return round($amountBDT / 105.65, 2) . " pound";
                          }

                          if ($currency == "EURO") {
                            return round($amountBDT / 90.09, 2) . " euro";
                        }
                    }
                      
                      $converted_amount = currencyConverter(1000, 'POUND');
                      echo "Your converted amount is:  $converted_amount";
      

                      
?>