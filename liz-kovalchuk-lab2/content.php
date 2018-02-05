<?php
    echo "
        <form action='thankyou.php' name='createUser' onsubmit= 'return button1()'>
            <fieldset>
                <div>
                    <legend>Become a Member of Make Me Mozart</legend>
                    <label for='form__input_user'>Are you a student or teacher?</label>
                    <br>
                    <select id='form__input_user' name='dropdown__input_user'>
                        <option value=''>- Select One -</option>
                        <option value='student'>Student</option>
                        <option value='teacher'>Teacher</option>                        
                    </select>   
                </div>               
                <label for='name'>Name:</label>
                <input id='form__input_name' type='text' name='name'>
                <br>
                <label for='email'>Email:</label>
                <input id='form__input_email' type='text' name='email'>
                <br>
                <input id='form__input_submit' type='submit' value='Submit'>
            </fieldset>
        </form>";
?>