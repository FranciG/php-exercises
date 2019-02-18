
  <?php

  echo 'This is the second file '.;
  echo "<h3>PHP variables</h3>";
    $name='Garfield';
    $age=5;
    echo 'Name of the cat is '.$name "and it is" $age "years old";
      echo "<h3>PHP array</h3>";
      $names = array("jim", "lisa", "bob");
      echo "Names from the array:"
      print_r($names);
      echo "The second name is "  . $names[1] .;
      echo "<h3>PHP associative array</h3>";
      $persons=array(
      		array("fname"=>'Jim', "lname"=>'Smith'),
      		array("fname"=>'Ann', "lname"=>'Jones'),
      		array("fname"=>'Lisa', "lname"=>'Daniels')
      	);

        foreach ($persons as $person) {
  		echo $person['lname'].'<br>';
  	}

}
  ?>
