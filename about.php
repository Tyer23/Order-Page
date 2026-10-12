<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="about page of burritos restaurant" />
  <meta name="keywords" content="HTML5, CSS layout" />
  <meta name="author" content="prabesh bhattarai" />
  <!--this is the title-->
  <title>About us</title>
  <link href="styles/about.css" rel="stylesheet" />
</head>

<body>
  <!--heading-->

  <?php
  include_once ("includes/header.inc");
  include_once ("includes/nav.inc");
  ?>

  <h2>Who we are</h2>
  <h3>Our team members</h3>
  <p>We are the Burritos. Get familiar with our
    team members
  </p>
  <div id="hyperlinks">
    <ul>
      <li><a href="#prabesh" class="links">Prabesh Bhattarai</a></li>
      <li><a href="#aaradhya" class="links">Aaradhya Lamsala</a></li>
      <li><a href="#tyler" class="links">Quoc Co Luc</a></li>
      <li><a href="#Akash" class="links">Akash Tabassum</a></li>
      <li><a href="#sa" class="links">Saddat Mahmud</a></li>
    </ul>
  </div>
  <br />

  <!--prabesh details-->
  <div id="prabesh">
    <figure><img src="images/prabesh.jpeg" alt="this is the photo of Prabesh" height="250" width="350"></figure>
    <h3 class="peter">Prabesh</h3>

    <dl>
      <dt>Name:</dt>
      <dd>Prabesh Bhattarai</dd>
      <dt>Student ID:</dt>
      <dd>104085535</dd>
      <dt>Course:</dt>
      <dd>Bachelor of Computer Science major Software Development</dd>
      <dt>Email:</dt>
      <dd><a href="mailto:104085535@student.swin.edu.au" class="mail">104085535@student.swin.edu.au</a></dd>
      <dt>Nationality:</dt>
      <dd>Nepalease</dd>
      <dt>Hobbies:</dt>
      <dd>Watching sci-fi movies, walking through the woods and hills, etc.</dd>
      <dt>Favourite series:</dt>
      <dd>Game of thrones</dd>
    </dl>

    <!--prabesh swin timetable-->
    <section id="prabesh_timetable">

      <h4>This is my class schedule for 1st semester 2022.</h4>
      <table>
        <thead>
          <tr>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>8:30am - 9:30am <br> COS10026(live online)</td>
            <td>8:30am - 10:30am<br>COS10009(lsive online)</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>12:30pm - 2:30pm<br>TNE10006(lecutre)</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>2:30pm - 3:30pm<br>COS10004(live online)</td>
            <td>2:30pm - 4:30pm<br>COS10009(lab)</td>
            <td>3:30pm - 5:30pm<br>COS10004(lab1)</td>
            <td>3:30pm - 5:30pm<br>COS10026(workshop)</td>
            <td></td>
          </tr>
          <tr>
            <td>4:30pm - 5:30pm<br>COS10026(seminar)</td>
            <td>5:30pm - 8:30pm<br>TNE10006(lab)</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </section>
  </div><br /><br><br>


  <!--Aaradhya details-->
  <div id="aaradhya">
    <figure>
      <img src="images/aaradhya.jpeg" alt="aaradhya photo" height="260" width="350">
    </figure>
    <h3 class="aaron">Aaradhya</h3>

    <dl>
      <dt>Name:</dt>
      <dd>Aaradhya Lamsal</dd>
      <dt>Student ID:</dt>
      <dd>103828166</dd>
      <dt>Course:</dt>
      <dd>Bachelor of Computer Science major Cybersecurity</dd>
      <dt>Email:</dt>
      <dd><a href="mailto:103828166@student.swin.edu.au" class="mail">103828166@student.swin.edu.au</a></dd>
      <dt>Nationality:</dt>
      <dd>Nepalease</dd>
      <dt>Hobbies:</dt>
      <dd>playing guitar</dd>
      <dt>Favourite Movies:</dt>
      <dd>The Wolf of Wall Street</dd>
    </dl>

    <!--aaradhya swin timetable-->
    <section id="aaradhya_timetable">
      <h4>Here is my campus timetable for 1st semester 2022</h4>

      <table>
        <thead>
          <tr>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>8:30am - 9:30am<br>COS10026(workshop)</td>
            <td>8:30am - 10:30am<br>COS10009(live online)</td>
            <td></td>
            <td>10:30am - 11:30am<br>COS10004(lab)</td>
            <td></td>

          </tr>
          <tr>
            <td>12:30pm - 2:30pm<br>TNE10006(lecture)</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>2:30pm - 3:30pm<br>COS10004(live online)</td>
            <td>2:30pm - 4:30pm<br>COS10009(lab)</td>
            <td></td>
            <td>3:30pm - 5:30pm<br>COS10026(workshop)</td>
            <td></td>
          </tr>
          <tr>
            <td>4:30pm - 5:30pm<br>COS10026(seminar)</td>
            <td>5:30pm - 8:30pm<br>TNE10006</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </section>
  </div><br><br><br>
  <!--Tyler-->
  <div id="tyler">
    <figure>
      <img src="images/tyler.jpg" alt="photo of Quoc" height="260" width="300" />
    </figure>
    <h3 class="tyl">Co</h3>

    <dl>
      <dt>Name:</dt>
      <dd>Quoc Co Luc</dd>
      <dt>Studnet ID:</dt>
      <dd>103830572</dd>
      <dt>Course:</dt>
      <dd>Bachelor of Computer Science</dd>
      <dt>Email:</dt>
      <dd><a href="mailto:103830572@student.swin.edu.au" class="mail">103830572@student.swin.edu.au</a></dd>
      <dt>Nationality:</dt>
      <dd>Vietnamese</dd>
      <dt>Hobbies:</dt>
      <dd>Student</dd>
      <dt>Favourite movies:</dt>
      <dd>High School Musical, Camp Rock</dd>
    </dl>


    <!--tyler swin timeable-->
    <section id="tyler_timetable">
      <h4>This is my Swinburne timetable for 1st semester 2022</h4>
      <table>
        <thead>
          <tr>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
          </tr>
        </thead>
        <tr>
          <td>8:30am - 9:30am<br>COS10026(live online)</td>
          <td>8:30am - 10:30am<br>COS10009(live online)</td>
          <td>8:30am - 10:30am<br>COS1009(lab)</td>
          <td></td>
          <td>10:30am - 12:30pm<br>COS10004(lab)</td>
        </tr>
        <tr>
          <td>12:30pm - 1:30pm<br>TNE10006(lecture)</td>
          <td></td>
          <td>11:30pm - 2:30pm<br>TNE10006(lab)</td>
          <td></td>
          <td>12:30pm - 2:3pm<br>COS10009(workshop)</td>
        </tr>
        <tr>
          <td>2:30pm - 3:30pm<br>COS10004(live online)</td>
          <td></td>
          <td></td>
          <td>3:30pm - 4:30pm<br>COS10026(workshop)</td>
          <td></td>
        </tr>
        <tr>
          <td>4:30pm - 5:30pm<br>C0S10026(workshop)</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        </tbody>
      </table>
    </section>
  </div><br><br><br>


  <!--dk details-->
  <div id="Akash">

    <figure>
      <img src="images/ak47.jpeg" alt="photo of Akash" height="260" width="300" />
    </figure>
    <h3 class="ak">Akash</h3>
    <dl>
      <dt>Name:</dt>
      <dd>Akash Tabassum</dd>
      <dt>Student ID:</dt>
      <dd>103524286</dd>
      <dt>Course:</dt>
      <dd>Bachelor of Computer Science</dd>
      <dt>Email:</dt>
      <dd><a href="mailto:103524286@student.swin.edu.au" class="mail">103524286@student.swin.edu.au</a></dd>
      <dt>Nationality:</dt>
      <dd>Pakistani</dd>
      <dt>Hobbies:</dt>
      <dd>Rockclimbing, camping and anything outdoors!</dd>
    </dl>
    <!--ak siwn timetable-->
    <section id="Akash_timetable">
      <h4>This my 1st semester 2022 timeable.</h4>
      <table>
        <thead>
          <tr>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>8:30am - 9:30am<br>COS10026(workshop)</td>
            <td>8:30am - 10:30am<br>COS10009(live online)</td>
            <td></td>
            <td>10:30am - 11:30am<br>COS10004(lab)</td>
            <td></td>

          </tr>
          <tr>
            <td>12:30pm - 2:30pm<br>TNE10006(lecture)</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>2:30pm - 3:30pm<br>COS10004(live online)</td>
            <td>2:30pm - 4:30pm<br>COS10009(lab)</td>
            <td></td>
            <td>3:30pm - 5:30pm<br>COS10026(workshop)</td>
            <td></td>
          </tr>
          <tr>
            <td>4:30pm - 5:30pm<br>COS10026(seminar)</td>
            <td>5:30pm - 8:30pm<br>TNE10006</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
  </div><br>
  <!--sa-->
  <div id="sa">

    <figure>
      <img src="images/sa.jpeg" alt="photo of sa" height="260" width="300" />
    </figure>
    <h3 class="sa">Saddat</h3>
    <dl>
      <dt>Name:</dt>
      <dd>Saddat Mahmud</dd>
      <dt>Student ID:</dt>
      <dd>10408724</dd>
      <dt>Course:</dt>
      <dd>Bachelor of Computer Science</dd>
      <dt>Email:</dt>
      <dd><a href="mailto:10408724@student.swin.edu.au" class="mail">10408724@student.swin.edu.au</a></dd>
      <dt>Nationality:</dt>
      <dd>Bangladeshi </dd>
      <dt>Hobbies:</dt>
      <dd>Travellingd</dd>
    </dl>
    <!--fff siwn timetable-->
    <section id="Akasha_timetable">
      <h4>This my 1st semester 2022 timeable.</h4>
      <table>
        <thead>
          <tr>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>8:30am - 9:30am<br>COS10026(live online)</td>
            <td></td>
            <td></td>
            <td>3:30PM - 5:30pm<br>COS10026(workshop)</td>
            <td></td>
          </tr>
          <tr>
            <td>12:30am - 2:30am<br>TNE10006(lecutre)</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>4:30pm - 5:30pm<br>COS10026(seminar)</td>
            <td></td>
            <td></td>
            <td>5:30pm - 8:30pm<br>TNE10006(lab)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </section>
  </div><br>

  <?php
  include_once ("includes/footer.inc");
  ?>
</body>

</html>