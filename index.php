<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Project 1 for Kehinde Afolabi</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <div class="content">
        <h1>Kehinde Afolabi</h1>
        <img src="img/kehinde-afolabi.jpg" alt="kehinde-afolabi">
        <h2>About Me</h2>
        <p>My name is Kehinde Afolabi(Kenny for short) from Chicago Illinois. My interested in web technologies started in my early years
        in college while studying for a degree in Computer Engineering. I started as a web developer using front wnd technologies such as html/css and javascript.
        After a couple of years, i delved into the server site of things using php/mysql. Over the years, i have grown from developing
        applications from the scratch to using frameworks such as Wordpress, Codeigniter, Symfony, Opencart, Drupal and Yii. Thus course will introduce me the the
        Laravel framework which i have never been fortunate enough to work with. I hope it will be fun</p>
        <h2>Random Quote</h2>
        <?php $inputs = array();
         $inputs[] = "Together we can change the world, just one random act of kindness at a time. -Ron Hall";
         $inputs[] = "Carry out a random act of kindness, with no expectation of reward, safe in the knowledge that one day someone might do the same for you.. - Princess Diana";
         $inputs[] = "We can all fight against loneliness by engaging in random acts of kindness. - Gail Honeyman";
         $key = array_rand($inputs);
         ?>
        <blockquote><?php echo $inputs[$key]; ?></blockquote>




    </div>

</body>

</html>