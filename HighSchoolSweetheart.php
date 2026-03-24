<?php
 
// https://exercism.org/tracks/php/exercises/sweethearts/edit

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        $trimmedName = trim($name);
        return $trimmedName[0];
    }

    public function initial(string $name): string
    {
        return strtoupper(($this->firstLetter($name)) . '.');
    }

    public function initials(string $name): string
    {
       $parts = explode(" ", $name);
       $firstName = $parts[0];
       $lastName = $parts[1];
      return  $this->initial($firstName) . " " .  $this->initial($lastName);
    }

public function pair(string $sweetheart_a, string $sweetheart_b): string
{
    $initials_a = $this->initials($sweetheart_a);
    $initials_b = $this->initials($sweetheart_b);
    
    $heart = <<<HEART
     ******       ******
   **      **   **      **
 **         ** **         **
**            *            **
**                         **
**     {$initials_a}  +  {$initials_b}     **
 **                       **
   **                   **
     **               **
       **           **
         **       **
           **   **
             ***
              *
HEART;
    
    return $heart;
}
}


$sweetheart = new HighSchoolSweetheart();
echo$sweetheart->initials("Jane Doe");