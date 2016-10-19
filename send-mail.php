<?php

// $_POST is a GLOBAL variable that contains all the
// fields coming in from the form that was submitted.
//
// $_POST is an Associative Array, meaning it is indexed by a string
// rather than a number.
$name = $_POST['name'];
$comments = $_POST['comments'];

// These are LOCAL variables so we can set the data we
// will need to mail the contact info data
$to = "tamouse@gmail.com";
$subject = "New Comment Recieved";
// Let's make the mail body a bit more readable
$body = "New comment received.\n" .
    "\n" .
    "Name: $name\n" .
    "\n" .
    "Comments:\n" .
    "\n" .
    "$comments\n" ;


// This will not actually work on Cloud9 because SPAM, but let's pretend
mail($to, $subject, $body);

// At this point, we've seen some actual PHP code, which is wrapped in these
// funny-looking taggy delimiter thingies.
//
// Start the PHP code with <?php and close it with ? > (note they have to be
// righ next to each other as below)
?><!-- this is now regular HTML again -->


<h1>Thanks!</h1>


<!-- Let's take a look at what that $_POST variable actually contains: -->
<pre>
    <code>
        <?php var_dump($_POST) ?>
    </code>
</pre>