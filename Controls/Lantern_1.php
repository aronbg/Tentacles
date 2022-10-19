<?php 


session_start(); 
$id = $_SESSION["did"];
?>

<!DOCTYPE HTML>
<HTML> 
    <body>
         <h1>Lantern <?php echo $_SESSION["did"]; ?> Control</h1>
        <div style="align-items: center; justify-content: center;" >
            <form class="formbox" method="POST" action="ChangeValues.php">
                
                <label for="input1">Mode (wave,waverev,pulse,dim)</label><br />
                <input type="text" id="input1" name="input1" placeholder="<?php echo $_SESSION["input_1"]; ?>"><br />
                <label for="input2">Speed (bpm, 0-255)</label><br />
                <input type="text" id="input2" name="input2" placeholder="<?php echo $_SESSION["input_2"]; ?>"><br /><br />
                 <button type="submit">submit</button>
            </form>
    
        </div>
        
    </body>
</HTML>
    