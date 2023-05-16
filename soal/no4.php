<?php
$username = '';
    $password = '';

    //measagge error required
    $usernameError = '';
    $passworderror = '';

    if($_SERVER["REQUEST_METHOD"] === "POST") {
        // $namalengkap = dataType($_POST['namalengkap']);
        // $kelas = dataType($_POST['kelas']);
        if(empty($_POST['username'])){
            $usernameError = "username tidak boleh kosong, harus disiikan.";
        }else {
            $username = dataType($_POST['username ']);
        }
        if(empty($_POST['password'])){
            $passworderror = "password tidak boleh kosong, harus disiikan.";
        }else {
            $password = dataType($_POST['password']);
        }
    }
    function dataType($datapengguna)
    {
        $inputData = trim($datapengguna);
        $inputData = stripslashes($datapengguna);
        $inputData = htmlspecialchars($datapengguna);
        return $inputData ;
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"method="POST">
        <div style="margin-bottom: 3px;">
        <label for="username">username</label>
        <input type="text" id="username" name="namalengkap"placeholder="masukan username anda"/>
        <span style="color:red; font-size:10px"><?php echo $usernameError;?></span>
        </div>
        <div style="margin-bottom: 3px;">
        <label for="kelas">password</label>
        <input type="number" id="kelas" name="kelas"placeholder="masukan password anda"/>
        <span style="color:red; font-size:10px"><?php echo $passworderror;?></span>
        </div>
        <button type="submit" >SIMPAN</button>
    </form>
