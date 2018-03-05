<h2>Sign Up with Make Me Mozart</h2>
<form action='index.php' name='createUser' onsubmit= 'return button1()' method="post">
    <fieldset>
        <legend>New User</legend>
        <label for='form__input_user' class="left-labels">Are you a student or teacher?</label>
        <select name='dropdown__input_user' value="<?= $user; ?>" id='form__input_user'>
            <option value=''>- Select One -</option>
            <option value='student'>Student</option>
            <option value='teacher'>Teacher</option>
        </select>
        <br />
        <label for='form__input_name' class="left-labels">Name:</label>
        <input type='text' name='name' value="<?= $name; ?>" id='form__input_name' class="textbox">
        <br />
        <label for="form__input_email" class="left-labels">E-Mail:</label>
        <input type="text" name="email" value="<?= $email; ?>" id='form__input_email' class="textbox"/>
        <br />
        <label for="form__input_username" class="left-labels">Username:</label>
        <input type="text" name="username" value="<?= $username; ?>" id='form__input_username' class="textbox"/>
        <br />
        <label for="form__input_password" class="left-labels">Password:</label>
        <input type="password" name="password" value="<?= $password; ?>" id='form__input_password' class="textbox"/>
        <br />
        <label for="form__input_dob" class="left-labels">Date of Birth:</label>
        <input type="date" name="dob" value="<?= $dob; ?>" id='form__input_dob'/>
        <br />
        <label>Which instruments:</label>
        <div id="instr-wrapper">
            <div class="form__input_instr" id="instr_1">
                Violin: <input type="checkbox" name="instr[]" value="violin" class="instr-cb"/>
                <br>
                Viola: <input type="checkbox" name="instr[]" value="viola" class="instr-cb"/>
                <br>
                Cello: <input type="checkbox" name="instr[]" value="cello" class="instr-cb"/>
                <br>
                Bass: <input type="checkbox" name="instr[]" value="bass" class="instr-cb"/>
            </div>
            <div class="form__input_instr" id="instr_1">
                Flute: <input type="checkbox" name="instr[]" value="flute"/>
                Clarinet: <input type="checkbox" name="instr[]" value="<?= $viola; ?>"/>
                Oboe: <input type="checkbox" name="instr[]" value="<?= $cello; ?>"/>
                Bassoon: <input type="checkbox" name="instr[]" value="<?= $cello; ?>"/>
            </div>
            <div class="form__input_instr" id="instr_1">
                Trumpet: <input type="checkbox" name="instr[]" value="<?= $violin; ?>"/>
                Trombone: <input type="checkbox" name="instr[]" value="<?= $viola; ?>"/>
                French Horn: <input type="checkbox" name="instr[]" value="<?= $cello; ?>"/>
                Tuba: <input type="checkbox" name="instr[]" value="<?= $cello; ?>"/>
            </div>
            <div class="form__input_instr" id="instr_1">
                Percussion: <input type="checkbox" name="instr[]" value="<?= $violin; ?>"/>
                Piano: <input type="checkbox" name="instr[]" value="<?= $viola; ?>"/>
                Guitar: <input type="checkbox" name="instr[]" value="<?= $cello; ?>"/>
                Composition: <input type="checkbox" name="instr[]" value="<?= $cello; ?>"/>
            </div>
        </div>
        <div>
            <label>Would you like to be a premium member?</label>
            <label for="yes">Yes</label>
            <input type="radio" id="yes" name="yesno" value="yes" checked="checked">
            <label for="no">No</label>
            <input type="radio" id="no" name="yesno" value="no">
        </div>
        <br />
        <input id='form__input_submit' type='submit' value='Submit' name="register">
    </fieldset>
</form>