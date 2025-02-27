<?php
/*********************************************************************
* Author: Raymond Marx
* Date: 20240130
* Description: Example PHP program treasure hunt
* Version: 0.0.1
**********************************************************************/

// Create variable win, a nice string to show when user wins
// Concatinate with .
// \n is an enter
$win =  "      ___________\n"                        .
                "     '._==_==_=_.'\n"                    .
                "     .-\\:      /-.\n"                    .
                "    | (|:.     |) |\n"                    .
                "     '-|:.     |-' \n"                    .
                "       \\::.    /\n"                        .
                "        '::. .'\n"                            .
                "          ) (\n"                                .
                "        _.' '._\n"                            .
                "       `\"\"\"\"\"\"\"`\n";


$lose = "                   \n"                        .
                "        --          --           \n"                    .
                "           --    --              \n"                    .
                "              --                   \n"                    .
                "           --    --                  \n"                  .
                "        --          --                \n"                        .
                "      --             --                \n" ;




// Nice intro screen for the game
// printf output a formatted string.
printf("Welcome to the treasure hunt game!\n\n");
printf("      _______\n");
printf( "     //  $$ /|\n");
printf("    // $$  / |\n");
printf("   //_____/  |\n");
printf("  |          |\n");
printf("  |   __   |\n");
printf("  |  |__|  |\n");
printf("  |________|\n\n\n");

// Question 1
printf("You find yourself standing at the edge of the jungle, with two paths ahead of you:\n");
printf("Option 1. This path leads through a dense thicket of thorns\n");
printf("Option 2. This path seems to be clear and well - trodden\n");
printf("Please make your choice 1 or 2:\n");
// Collect answer
// readline is a function!!
// https://www.php.net/manual/en/function.readline.php
$userChoice = readline("");

// Check the choice of the user: Option 1
// So comparing is done with ==
// Declaring a variable is done with 1 =
if ($userChoice == 1) {
    printf("You push your way through the thicket, enduring scratches and cuts along the way. Eventually, you emerge into a clearing and find a hidden cave. \n\n");
    printf("Option 1. Do you enter the cave?\n");
    printf("Option 2. Do you continue on the path?\n");
    printf("Please make your choice 1 or 2:\n");
    // Collect answer
    $userChoice = readline("");
  // Option 1 --> show winning
  if ($userChoice == 1) {
      printf("You found the chest!!!\n\n");
      printf("%s", $win);
  }
}

// Option 2
if ($userChoice == 2) {
    printf("You follow the well-trodden path and come across a river. Do you attempt to cross the river or look for a different route? \n\n");
  printf("Option 1. You attempt to cross the river?\n");
  printf("Option 2. Loof for a different route?\n");
  // Collect answer
  $userChoice = readline("");

  // Option 1 continue Game
  if ($userChoice == 1) {
        printf("You found an raft and got on it... Ahead you see an island do you go there? \n "); 
  printf("Option 1. go to the island\n");
  printf("Option 2. continue on the raft\n");
        // Collect answer
        $userChoice = readline("");
    }
  }
 
if ($userChoice == 1) {
  printf(" When you got to the island you found an X marked on the ground. \n "); 
printf("Option 1. dig up the X on the ground\n");
printf("Option 2. go back on the raft\n");
  // Collect answer
  $userChoice = readline("");

if ($userChoice == 2) 
  printf(" You continued on the raft but you forget that you dindt have anything to eat... THE END \n "); 

}


if ($userChoice == 1) {
  printf(" you digged at the X mark and found a Golden chest! do you want to open it? \n "); 
printf("Option 1. Open the golden chest \n");
printf("Option 2. dont open the chest\n");
  // Collect answer
  $userChoice = readline("");
 
  if ($userChoice == 2) 
  printf(" you dindt open the Golden chest so you left the island in the end you never found the trophy... THE END\n "); 
}


if ($userChoice == 1) {
  printf(" you opend the Golden chest but found nothing inside, but in the dark you see an Entrance. do you go in? \n "); 
printf("Option 1. Go in the dark Entrance \n");
printf("Option 2. Dont go in the dark Entrance \n");
  // Collect answer
  $userChoice = readline("");

  if ($userChoice == 2) 
  printf(" you dindt go in the dark Entrance and left the island in the end you never found the trophy... THE END\n "); 
}


if ($userChoice == 1) {
  printf(" you went in the Dark Entrance en found an weird looking item. \n "); 
printf("Option 1. get the item \n");
printf("Option 2. Dont get the item\n");
  // Collect answer
  $userChoice = readline("");

if ($userChoice == 2) 
  printf(" you dindt get the item and was now trapped in the dark cave... THE END\n "); 

}


if ($userChoice == 1) {
  printf(" You got the weird looking item but then disscoverd that it was the trophy... YOU WIN! \n "); 
printf("%s", $win);
}
















?>