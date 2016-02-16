<link rel="stylesheet" type="text/css" href="/code_examples/tutorial.css">
<script type="text/javascript" src="js/general.js"></script>
<div class="tutorialWrapper">
    <form>
        <div class="fieldWrapper">
            <label for="pass1">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        <div class="fieldWrapper">
            <label for="pass2">Confirm Password:</label>
            <input type="password" name="repeat_password" id="repeat_password" onkeyup="checkPass(); return false;">
            <span id="confirmMessage" class="confirmMessage"></span>
        </div>
    </form>
</div>
