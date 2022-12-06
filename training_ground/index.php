<?php require 'includes/header.php'?>

<form class="character-form" method="post" action="character.php">
    <div class="form-group">
        <label for="character_name">Character name: </label>
        <input class="form-control" type="text" name="character_name" id="character_name">
    </div>
    <div class="form-group">
        <label for="character_race">Character race: </label>
        <select class="form-control" name="character_race" id="character_race">
            <option value="human">Human</option>
            <option value="elf">Elf</option>
            <option value="orc">Orc</option>
            <option value="dwarf">Dwarf</option>
            <option value="hobbit">Hobbit</option>
        </select>
    </div>
    <div class="form-group">
        <p>Character gender:</p>
        <div class="form-group-checkbox d-flex gap-10">
            <label for="character_male">
                <input class="form-control-checkbox" type="radio" name="character_gender" id="character_male" value="male">
                Male
            </label>
            <label for="character_female">
                <input class="form-control-checkbox" type="radio" name="character_gender" id="character_female" value="female">
            </label>
            Female
        </div>
    </div>
    <button class="btn-group" type="submit">Create Character</button>
</form>

<?php require 'includes/footer.php'?>
