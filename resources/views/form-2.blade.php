<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
     <h2>User Preferences Form</h2>
    <form action="/submit" method="POST">
        @csrf
        <!-- Checkboxes -->
        <fieldset>
            <legend>Select your hobbies:</legend>
            <label><input type="checkbox" name="hobbies[]" value="reading"> Reading</label><br>
            <label><input type="checkbox" name="hobbies[]" value="traveling"> Traveling</label><br>
            <label><input type="checkbox" name="hobbies[]" value="coding"> Coding</label><br>
        </fieldset>

        <!-- Radio buttons -->
        <fieldset>
            <legend>Choose your gender:</legend>
            <label><input type="radio" name="gender" value="male"> Male</label><br>
            <label><input type="radio" name="gender" value="female"> Female</label><br>
            <label><input type="radio" name="gender" value="other"> Other</label><br>
        </fieldset>

        <!-- Range -->
        <label for="age">Select your age: <span id="ageValue">25</span></label><br>
        <input type="range" id="age" name="age" min="10" max="60" value="25" oninput="document.getElementById('ageValue').innerText = this.value"><br><br>

        <!-- Dropdown -->
        <label for="country">Select your country:</label><br>
        <select name="country" id="country">
            <option value="pakistan">Pakistan</option>
            <option value="india">India</option>
            <option value="usa">USA</option>
            <option value="uk">UK</option>
        </select><br><br>

        <button type="submit">Submit</button>
    </form>

</div>
