<?php
include("bookedmovietables.php");
?>
<!DOCTYPE html>
<html lang="en">

<!-- LAYOUT WITH HEADER AND LINK TO OTHER PAGES -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Development CA1</title>
    <link rel="stylesheet" href="webdevca1.css">
    <div class = "movie_header">
      <header>
        <div class="logo">
         <img src="images/Logo.png" class="logo">
        </div>
        <div class="header-right">
          <a style="font-size:20px; font-family:verdana;" href="webdevCA1.html">Home</a>
          <a style="font-size:20px; font-family:verdana;" href="about.html">About us</a>
          <a style="font-size:20px; font-family:verdana;" href="Contactus.html">Contact us</a>
        </div>
      </header>
    </div>
    </head>
    <body>

        <div class="booking_container">
            <table>
            <thead><tr><th>Title</th>
                    <th>Director</th>
                    <th>Genre</th>
                    <th>Length</th>
                    <th>Description</th>
                    <th>Release Date</th>
            </thead>
            <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $data['movietitle']??''; ?></td>
      <td><?php echo $data['moviedirector']??''; ?></td>
      <td><?php echo $data['moviegenre']??''; ?></td>
      <td><?php echo $data['movielength']??''; ?></td>
      <td><?php echo $data['moviedesc']??''; ?></td>
      <td><?php echo $data['release_date']??''; ?></td>
      
      
      <!-- <td>Alien</td><td>Ridley Scott</td><td>Thriller</td></tr>1h 57m</td></tr>The crew of a commercial spacecraft encounters a deadly lifeform after investigating a mysterious transmission of unknown origin.</td></tr> October 12, 1979</td><td><tr><td>Airplane!</td><td>David Zucker</td><td>Comedy</td></tr>1h 45m</td></tr>This spoof comedy takes shots at the slew of disaster movies that were released in the 70s.</td></tr> August 29, 1980</td><td><tr><td>The Thing</td><td>John Carpenter</td><td>Horror</td></tr>1h 49m</td></tr>It tells the story of a group of American researchers in Antarctica who encounter the eponymous "Thing", an extraterrestrial life-form that assimilates, then imitates, other organisms.</td></tr> November 28, 1982</td><td><tr><td>Evil Dead</td><td>Sam Raimi</td><td>Thriller</td></tr>1h 25m</td></tr>Five friends head to a remote cabin, where the discovery of a Book of the Dead leads them to unwittingly summon up demons living in the nearby woods.</td></tr> October 15, 1981</td><td><tr><td>Hot Fuzz</td><td>Edgar Wright</td><td>Action</td></tr>2h 1m</td></tr>An overachieving London police sergeant is transferred to a village where the easygoing officers object to his fervor for regulations, all while a string of grisly murders strikes the town.</td></tr> February 14, 2007</td><td><tr><td>The Shining</td><td>Stanley Kubrick</td><td>Horror</td></tr>2h 26m</td></tr>A family heads to an isolated hotel for the winter where a sinister presence influences the father into violence, while his psychic son sees horrific forebodings from both past and future.</td></tr> May 23, 1980</td><td><tr><td>The Exorcist</td><td>William Friedkin</td><td>Horror</td></tr>2h 2m</td></tr>The story chronicles a single mothers struggle to save her daughter from a mysterious ailment, later revealed to be demonic possession.</td></tr> May 31, 1974</td><td><tr><td>Ghostbusters</td><td>Ivan Reitman</td><td>Comedy</td></tr>1h 45m</td></tr>Three parapsychologists forced out of their university funding set up shop as a unique ghost removal service in New York City, attracting frightened yet skeptical customers.</td></tr> December 7, 1984</td><td><tr><td>Spider-man: Across the Spiderverse</td><td>Kemp Powers</td><td>Action</td></tr>2h 20m</td></tr>After reuniting with Gwen Stacy, Brooklyns full-time, friendly neighborhood Spider-Man is catapulted across the Multiverse, where he encounters a team of Spider-People charged with protecting its very existence.</td></tr> June 2, 2023</td><td><tr><td>Little Shop of Horrors</td><td>Frank Oz</td><td>Musical</td></tr>1h 34m</td></tr>The story follows a hapless florist shop worker who raises a plant that feeds on human blood and flesh.</td></tr> December 19, 1986</td><td></table> -->
     
    
    </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
            </table>

</div>
    </body>
    </html>


    <!-- echo "<tr><td>" . $row["movietitle"] . "</td><td>" . $row["moviedirector"] . "</td><td>" . $row["moviegenre"] . "</td></tr>" . $row["movielength"] . "</td></tr>" . $row["moviedesc"] . "</td></tr> " . $row["release_date"] . "</td><td>"; -->
 