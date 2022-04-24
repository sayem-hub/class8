<?php 

        /*  Question 01:
        Create a function that will return children, teenagers, young people, old people from the age */

              echo "<h3>Create a function that will return children, teenagers, young people, old people from the age </h3>"; //HTML Headline
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

?>