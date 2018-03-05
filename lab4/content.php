<form action='index.php' name='createUser' onsubmit= 'return button1()' method="post">
    <h2>Sign Up with Make Me Mozart</h2>
    <p>
        <?= $error; ?>
    </p>
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

            <?php
            $instrument = array(
                'violin',
                'viola',
                'cello',
                'bass',
                'flute',
                'clarinet',
                'oboe',
                'bassoon',
                'trumpet',
                'trombone',
                'french horn',
                'tuba',
                'percussion',
                'piano',
                'guitar',
                'composition'
            );

            foreach($instrument as $i){
                echo "<input type='checkbox' name='instr[]' value''" . $i . "/>" . $i . "<br />" ;
            }
            ?>

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