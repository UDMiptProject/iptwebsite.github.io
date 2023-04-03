<?php 
	if (empty($_GET['submit']))
	{
		print ("Sorry the Page you requested is not available for the meantime<a href=index.html>Login</a>");
		exit();
	}
?>

<center><img src="wordart.png" alt="wordart" width="50%" style="margin-left: auto; margin-right: auto;"></center>
    <fieldset><LEGEND><h2>Personal Information</h2></LEGEND>
        <table border=1 width="100%">
            <tr><td> First Name <td><?php print $_GET['firstName']; ?>
                <td> Phone Number <td><?php print $_GET['mobileNum']; ?> 
            <tr><td> Last Name <td><?php print $_GET['lastname']; ?>
                <td> Email Address <td><?php print $_GET['email']; ?>
            <tr><td> Middle Name <td><?php print $_GET['midname']; ?>
                <td> Father's Name <td><?php print $_GET['fatherName']; ?>
            <tr><td> Gender <td><?php print $_GET['gender']; ?>
                <td> Father's Occupation <td><?php print $_GET['fatherOccupation']; ?>
            <tr><td> Birthday <td><?php print $_GET['birthday']; ?>
                <td> Father's Birthday <td><?php print $_GET['fatherbday']; ?>
            <tr><td> Place of Birth <td><?php print $_GET['birthplace']; ?>
                <td> Mother's Name <td><?php print $_GET['motherName']; ?>
            <tr><td> Region <td><?php print $_GET['region']; ?>
                <td> Mother's Occupation <td><?php print $_GET['motherOccupation']; ?>
            <tr><td> Year <td><?php print $_GET['year']; ?>
                <td> Mother's BIrthday <td><?php print $_GET['motherbday']; ?>
            <tr><td> Section <td><?php print $_GET['section']; ?>
                <td> Nationality <td><?php print $_GET['nationality']; ?>
            <tr><td> College and Course <td> College: <?php print $_GET['college'];?><br> Course: <?php print $_GET['course'];?>
                <td> Religion <td><?php print $_GET['religion']; ?>    
        </table>
    </fieldset>

    <fieldset><LEGEND><h2>Tell Us About Yourself !</h2></LEGEND>
        <table border=1 width="100%">
            <tr><td> What is your Favorite Color:  <td><?php print $_GET['color']; ?>
            <tr><td> What is your Favorite Movie: <td><?php print $_GET['movie']; ?>
            <tr><td> Who is your Favorite Singer: <td><?php print $_GET['singer']; ?>
            <tr><td> What is your Favorite Song: <td><?php print $_GET['song']; ?>
            <tr><td> What is your Favorite Food: <td><?php print $_GET['food']; ?>
            <tr><td> Where would be your favorite place to live: <td><?php print $_GET['place']; ?>
            <tr><td> What is your favorite thing on your bucket list: <td><?php print $_GET['bucket']; ?>
            <tr><td> What is your favorite thing thing about studying: <td><?php print $_GET['study']; ?>
            <tr><td>What is your Favorite Social Media Website<td><?php print $_GET['socialMedia']; ?>
            <tr><td> Where do you see yourself in 5 years: <td><?php print $_GET['years']; ?>
        </table>
    </fieldset>

    <fieldset><legend><h2>Health Declaration</h2></legend>
                <table border="2" width = "50%">
                <tr><td> Temperature (In Degrees) <td><?php print $_GET['temp']; ?>
                <tr><td colspan="2">Symptoms</td></tr>
                <tr><td>Sore Throat<td><?php print $_GET['soreThroat']; ?>
                <tr><td>Shortness of Breath<td><?php print $_GET['shortness']; ?>
                <tr><td>Body Pains<td><?php print $_GET['bodyPain']; ?>
                <tr><td>Headache<td><?php print $_GET['headache']; ?>
                <tr><td>Fever for the past few Days<td><?php print $_GET['fever']; ?>
                <tr><td>Loss of taste or smell<td><?php print $_GET['lossSmell']; ?>
                <tr><td>Cough and/or Cold<td><?php print $_GET['cough']; ?>
                <tr><td>Diarrhea<td><?php print $_GET['diarrhea']; ?>
                </table>
            </fieldset>