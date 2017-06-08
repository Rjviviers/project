<!DOCTYPE html>
<?PHP session_start();
include './Functions.php';
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="Style.css"/>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/profile.css">
        <script src="js/jquery-1.10.2.min.js"></script>
        <title></title>
    </head>
    <body>
        <div id="w">
            <div id="content" >
                <div id="userphoto"><img src="avatars/avatar.jpg" alt="default avatar"></div>
                <h1>Your Profile</h1>

                <nav id="profiletabs">
                    <ul class="clearfix">
                        <li><a href="#userDetail" class="sel">Profile</a></li>
                        <li><a href="#bio">Course Marks</a></li>
                    </ul>
                </nav>



                <section id="userDetail">
                    <p>Your user details:</p>

                    <p class="userDetails"><span>E-mail Address </span> lolno@gmail.com</p>

                    <p class="userDetails"><span>Name  </span> English(US)</p>

                    <p class="userDetails"><span>Cell Phone </span> Public</p>

                    <p class="userDetails"><span>ID-Number </span> Weekly</p>

                    <p class="userDetails"><span>Gender </span> None</p>
                </section>

                <section id="bio"  class="hidden">

                </section>

            </div>
        </div>
        <script>
            $(function () {
                $('#profiletabs ul li a').on('click', function (e) {
                    e.preventDefault();
                    var newcontent = $(this).attr('href');

                    $('#profiletabs ul li a').removeClass('sel');
                    $(this).addClass('sel');

                    $('#content section').each(function () {
                        if (!$(this).hasClass('hidden')) {
                            $(this).addClass('hidden');
                        }
                    });

                    $(newcontent).removeClass('hidden');
                });
            });
        </script>









    </body>
</html>
<!-- 
               name
               password
               lastname 
               IDNumber 
               cellNumber
               gender 
               picture 
               unit 
               Term 
               Course 
-->
