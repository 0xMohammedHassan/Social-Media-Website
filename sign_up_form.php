<form  action="signup_save.php" method="post" autocomplete="on">
    <h4> Sign up </h4>
    <hr>
    <p>
        <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
        <input id="usernamesignup" name="username" required="required" type="text" placeholder="Username" />
    </p>
    <p>
        <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
        <input id="passwordsignup" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
    </p>
    <p>
        <label for="passwordsignup" class="youpasswd" data-icon="u">Email </label>
        <input id="passwordsignup" name="email" required="required" type="text" placeholder="Email"/>

    </p>
    <p>
        <label for="passwordsignup" class="youpasswd" data-icon="u">Your First Name </label>
        <input id="passwordsignup" name="firstname" required="required" type="text" placeholder="First Name"/>
    </p>
    <p>
        <label for="passwordsignup" class="youpasswd" data-icon="u">Your Last Name </label>
        <input id="passwordsignup" name="lastname" required="required" type="text" placeholder="Last Name"/>
    </p>
    <p>
        <label for="passwordsignup" class="youpasswd" data-icon="">Your Gender </label>
        <select id="passwordsignup"  name="gender">
            <option></option>
            <option>Male</option>
            <option>Female</option>
        </select>
    </p>
    <p>
        <label for="passwordsignup" class="youpasswd" data-icon="u">Date Of Birth </label>
        <input id="passwordsignup" name="birthdate" required="required" type="text" placeholder="Date of Birth"/>

    </p>

    <p>
        <label for="passwordsignup" class="youpasswd" data-icon="u">Information </label>
        <input id="passwordsignup" name="information" required="required" type="text" placeholder="Information"/>

    </p>
    <p>
        <label for="passwordsignup" class="youpasswd" data-icon="u">Place Of Birth </label>
        <input id="passwordsignup" name="placeofbirth" required="required" type="text" placeholder="Place of Birth"/>

    </p>

    <p>
        <label for="passwordsignup" class="youpasswd" data-icon="u">Nationality </label>
        <input id="passwordsignup" name="nationality" required="required" type="text" placeholder="Nationality"/>

    </p>


    <p class="signin button">
        <input type="submit" value="Sign up"/>
    </p>
    <p class="change_link">
        Already a member ?
        <a href="#tologin" class="to_register"> Go and log in </a>
    </p>
</form>