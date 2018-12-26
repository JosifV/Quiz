<?php
session_start();
// error_reporting(0);
?>

<form action="rezultatIYnos.php" method="POST" id="kvizForm">
   <h3>Who invented periodic table:</h3>
   <input type="radio" name="pitanje1" value="Isaac_Newton"> Isaac Newton<br>
   <input type="radio" name="pitanje1" value="Antoine_Lavoisier"> Antoine Lavoisier<br>
   <input type="radio" name="pitanje1" value="Dmitri_Mendeleev"> Dmitri Mendeleev<br>
   <h3>Which is the most abundant gas in the earth's atmosphere?:</h3>
   <input type="radio" name="pitanje2" value="Nitrogen"> Nitrogen<br>
   <input type="radio" name="pitanje2" value="Oxygen"> Oxygen<br>
   <input type="radio" name="pitanje2" value="Hydrogen"> Hydrogen<br>
   <h3>Which type of plastics can be recycled?:</h3>
   <input type="radio" name="pitanje3" value="Polystyrene"> Polystyrene<br>
   <input type="radio" name="pitanje3" value="Thermoplastics"> Thermoplastics<br>
   <input type="radio" name="pitanje3" value="Polyethylene"> Polyethylene<br>
   <h3>Ptolemy was an astronomer, mathematician and geographer born in which country in 100 BC?:</h3>
   <input type="radio" name="pitanje4" value="Greece"> Greece<br>
   <input type="radio" name="pitanje4" value="Egypt"> Egypt<br>
   <input type="radio" name="pitanje4" value="Lybia"> Lybia<br>
   <h3>Solar system has how many planets?:</h3>
   <input type="radio" name="pitanje5" value="10"> 10<br>
   <input type="radio" name="pitanje5" value="9"> 9<br>
   <input type="radio" name="pitanje5" value="8"> 8<br>
   <h3>What is the body's second largest organ after the skin?:</h3>
   <input type="radio" name="pitanje6" value="Heart"> Heart<br>
   <input type="radio" name="pitanje6" value="Brain"> Brain<br>
   <input type="radio" name="pitanje6" value="Liver"> Liver<br>
   <h3>What's the common name for a cubic decimeter?:</h3>
   <input type="radio" name="pitanje7" value="Liter"> Liter<br>
   <input type="radio" name="pitanje7" value="Decilitre"> Decilitre<br>
   <input type="radio" name="pitanje7" value="Hectolitre"> Hectolitre<br>
   <h3>What sea creature can have an eye measuring 16 inches across, the largest in the animal kingdom?:</h3>
   <input type="radio" name="pitanje8" value="Whale"> Whale<br>
   <input type="radio" name="pitanje8" value="White_Shark"> White Shark<br>
   <input type="radio" name="pitanje8" value="Squid"> Squid<br>
   <h3>What is the most common type of star found in the Milky Way?:</h3>
   <input type="radio" name="pitanje9" value="Red_dwarf_stars"> Red dwarf stars<br>
   <input type="radio" name="pitanje9" value="Red_supergiant_stars"> Red supergiant stars<br>
   <input type="radio" name="pitanje9" value="White_dwarf_stars"> White dwarf stars<br>
   <h3>Which metal is used in the making of microchips?:</h3>
   <input type="radio" name="pitanje10" value="Copper"> Copper<br>
   <input type="radio" name="pitanje10" value="Silicon"> Silicon<br>
   <input type="radio" name="pitanje10" value="Silver"> Silver<br>
   <input onclick="<?php $_SESSION['deljenje']++; ?>" class="btn btn-primary btn-block btn-lg" id="posalji" type="submit" name="submit" value="Submit answers"/>
</form>



